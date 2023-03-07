<?php

class CompressController extends Controller {


    protected function encodeUrl($raw) {
      if(!is_string($raw)) {
      	return '';
      }
      $sections = explode('/', $raw);
      $filename = array_pop($sections);
      $filename = str_replace(' ', '%20', $filename);
      $sections[] = $filename;
      return implode('/', $sections);
    }

    protected function parseCompressFactor($raw) {
    	$raw = intval($raw);
        //Setting default;
        if ($raw < 1) {
            $raw = 5;
        }
        if ($raw > 9) {
            $raw = 9;
        }
        return $raw;
    }

    public function index() {
        $url = $this->encodeUrl($this->query('src'));
        $test = $this->query('test') === 'true';
        $compressFactor = $this->parseCompressFactor($this->query('percent'));
        if (empty($url)) {
            return $this->json(['message' => 'unknown image.'], 404);
        }

        $filename = @array_pop(explode('/', $url));
        $id = md5($url) . '-' . $compressFactor . '.jpg';
        $uncompressedPath = TMP_PATH . '/uncompressed/' . $id;
        $thumbPath = TMP_PATH . '/thumb/' . $id;
        $compressedPath = TMP_PATH . '/compressed/'.  $id;
        if (!file_exists($compressedPath)) {
            try {
                $content = file_get_contents($url);
                if ($content === false) {
                	return $this->json(['message' => 'cannot read original file', 'url' => $url], 500);
                }
                if (!tmp_file('uncompressed/' . $id, $content)) {
                    return $this->json(['message' => 'cannot store uncompressed file (write perms?)'], 500);
                }
                $info = getimagesize($uncompressedPath);
                if (!$info) {
                    return $this->json(['message' => 'cannot read uncompressed file.'], 500);
                }
                if ($info['mime'] == 'image/jpeg')
                    $image = imagecreatefromjpeg($uncompressedPath);
                elseif ($info['mime'] == 'image/gif')
                    $image = imagecreatefromgif($uncompressedPath);
                elseif ($info['mime'] == 'image/png')
                    $image = imagecreatefrompng($uncompressedPath);
                else
                    return $this->json(['message' => ' wrong image format'], 422);
                if (!tmp_dir('compressed')) {
                    return $this->json(['message' => 'cannot create compressed folder (write perms?)'], 500);
                }
                imagejpeg($image, $compressedPath, $compressFactor * 10);
                @unlink($uncompressedPath);
                if (!tmp_dir('thumb')) {
                    return $this->json(['message' => 'cannot create thumb file (write perms?)'], 500);
                }
                make_thumb($compressedPath, 1000, 700, $thumbPath, 'jpg');
                if (file_exists($thumbPath)) {
                    @unlink($compressedPath);
                    rename($thumbPath, $compressedPath);
                }
            } catch (\Throwable $th) {
                return $this->json(['message' => $th->getMessage()], 500);
            }
        }
        if (!is_readable($compressedPath)) {
            return $this->json(['message' => 'Cannot load compressed file (read perms?).'], 500);
        }
        $filename = basename($compressedPath);
        $file_extension = strtolower(substr(strrchr($filename,"."), 1));
        switch( $file_extension ) {
            case "gif": $ctype="image/gif"; break;
            case "png": $ctype="image/png"; break;
            case "jpeg":
            case "jpg": $ctype="image/jpeg"; break;
            case "svg": $ctype="image/svg+xml"; break;
            default:
        }
        header('Content-type: ' . $ctype);
        readfile($compressedPath);
        die();
    }
}
