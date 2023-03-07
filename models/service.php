<?php
/**
 * @property integer $id
 * @property integer $cliente_id
 * @property integer $id_online
 * @property integer $sala_id
 * @property string  $nombres
 * @property string  $apellidos
 * @property string  $fecha_nac
 * @property string  $fecha_fac
 * @property string  $salida
 * @property string  $domicilio_id
 * @property integer $destino_id
 * @property string  $servicio_cementerio
 * @property integer $religion_id
 * @property integer $epitafio_id
 * @property string  $foto
 * @property string $foto_redonda
 * @property integer $status
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $fecha_update
 * @property integer $empresa_id
 * @property string $logo_empresa
 * @property string $domicilio
 * @property mixed  $confirmar
 * @property string $responso
 * @property integer $responso_id
 * @property integer $tipo_responso
 * @property string $qrcode1
 * @property string $qrcode2
 * @property string $url1
 * @property string $url2
 * @property integer $cotejo_act
 * @property string  $cotejo_link
 * @property string  $id_unique
 * @property string $observacion
 * @property integer $vista
 * @property integer $papelera
 * @property integer $hv_act
 * @property string $creacion
 * @property string $envio_wp
 * @property int|null $sector_id
 * @property int|null $manzana_id
 * @property int|null $parcela_id
 * @property string|null $direccion_web
 * @property string      $clave_vo
 * @property int         $publicar
 * @property integer $link_video_id
 * @property integer $video_mode
 * @property string  $homenajes_images
 * @property string $wsapp_contratante
 * @property string $correo_contratante
 * @property integer $es_evento
 * @property integer $es_publico
 * @property integer $aniversario_f
 * @property string $invitado_wsapp_1
 * @property string $invitado_wsapp_2
 * @property integer $id_encuesta
 * @property string $periodo_contratantes
 * @property string $periodo_participantes
 * @property string $numero_presupuesto
 * @property integer $envio_encuestas
 * @property integer $envio_encuestas_part
 * @property string $url_encuestas_process
 * @property integer $visitas
 * @property integer $ad
 * @property integer $sin_publicidad
 * @property string $servicio_id_externo
 * @property integer $hv
 * @property integer $gf_id
 * @property integer $encuesta_pausada
 * @property integer $heredado
 * @property integer $btn_vo
 * @property integer $btn_seguir_servicio
 * @property integer $btn_personalizado
 * @property string $link_donacion
 * @property string $data_lat_lon
 * @property string $ubicacion
 * @property string $cartelera_destino
 *
 * @property string|\Destination $destino
 */
class Service extends Model {
    public static function find($id) {
        if (!is_string($id) && !is_int($id)) {
            return null;
        }
        $id = trim(strval($id));
        $hashed = true;
        if (strval(intval($id)) === $id) {
            $hashed = false;
        }
        if (empty($id)) {
            return null;
        }
        $table = T_SERVICES;
        $sql = "SELECT * FROM `{$table}` WHERE ";
        if ($hashed) {
            $id = strval($id);
            $sql .= "md5(id) = ?";
        } else {
            $id = intval($id);
            $sql .= "id = ?";
        }
        $sql .= ' LIMIT 1';
        $stmt = self::db()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if (is_array($data) && isset($data['id'])) {
            return new Service($data);
        }
        return null;
    }

    public function get_id_str_value() {
        $id = $this->get('id');
        if (is_string($id) || is_int($id)) {
            $id = intval($id);
            if ($id > 0) {
                return md5($id);
            }
        }
        return null;
    }

    public function get_cliente_id_value($value) {
        if (is_string($value)) {
            $value = intval($value);
        }
        return is_int($value) && $value > 0 ? $value : 0;
    }

    public function get_id_value($value) {
        if (is_string($value)) {
            $value = intval($value);
        }
        return is_int($value) && $value > 0 ? $value : 0;
    }

    public function get_qrcode1_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }

    public function get_qrcode1_src_value() {
        $qr = $this->get('qrcode1');
        $cID = $this->get('cliente_id');
        if ($cID && $qr) {
            return 'https://ni.neo.fo/images/' . $cID . '/servicios/qrcodes/' . $qr;
        }
        return null;
    }

    public function get_qrcode2_src_value() {
        $qr = $this->get('qrcode2');
        $cID = $this->get('cliente_id');
        if ($cID && $qr) {
            return 'https://ni.neo.fo/images/' . $cID . '/servicios/qrcodes/' . $qr;
        }
        return null;
    }

    public function get_qrcode_src_value() {
        for ($n = 1; $n<=2; $n++) {
            $src = $this->get('qrcode' . $n . '_src');
            if ($src) {
                return $src;
            }
        }
        return $src;
    }

    public function get_url_value() {
        for ($n = 1; $n<=2; $n++) {
            $url = $this->get('url' . $n);
            if ($url) {
                return $url;
            }
        }
        return $url;
    }

    public function get_qrcode2_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }

    public function get_url1_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if (filter_var($value, FILTER_VALIDATE_URL)) {
                return $value;
            }
        }
        return null;
    }

    public function get_url2_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if (filter_var($value, FILTER_VALIDATE_URL)) {
                return $value;
            }
        }
        return null;
    }

    public function get_events_value($value, $existsKey) {
        if ($existsKey && is_array($value)) {
            return $value;
        }
        $res = [];
        foreach($this->get('homenajes') as $current) {
            if ($current->oculto_tipo === 'admin' || $current->vela_abrazo === 0) {
                continue;
            }
            $data = new stdClass();
            $data->src = null;
            $data->message = $current->mensaje;
            $data->by = $current->nombre;

            if (is_string($data->message)) {
                if (strpos($data->message, 'vela') !== false) {
                    $data->message = 'Encendi&oacute; una vela.';
                } else if (strpos($data->message, 'abrazo') !== false) {
                    $data->message = 'Envi&oacute; un abrazo.';
                }
            }

            if ($current->predisenada) {
                $data->src = $current->predisenada;
            } else if ($current->foto) {
                $data->src = 'https://ni.neo.fo/' . $current->foto;
            }
            $res[] = $data;
        }
        return $res;
    }

    public function get_ni_value($value, $existsKey) {
        if ($existsKey && is_array($value)) {
            return $value;
        }
        return $this->set('ni', NI::first([
            'cliente_id' => $this->get('cliente_id')
        ]));
    }

    public function get_company_value($value, $existsKey) {
        if ($existsKey && is_array($value)) {
            return $value;
        }
        return $this->set('company', Company::first([
            'id_cliente' => $this->get('cliente_id')
        ]));
    }

    public function get_posts_value($value, $existsKey) {
        if ($existsKey && is_array($value)) {
            return $value;
        }
        $res = [];

        $lettersPerLine = 30;
        foreach ($this->get('homenajes') as $current) {
            if ($current->oculto_tipo === 'admin' || $current->vela_abrazo !== 0) {
                continue;
            }
            $data = new stdClass();
            $data->src = null;
            $data->message_pos = 'right';
            $data->original_height = 0;
            $data->original_width = 0;
            $data->height = 450;
            $data->width = 650;
            $data->message = $current->mensaje;
            $data->type = 'text';
            $data->by = $current->nombre;
            $data->cover = true;
            $data->fontSize = 25;

            if ($data->message) {
                $lines = intval(strlen($data->message) / $lettersPerLine) + 1;
                if ($lines > 6) {
                    $lines = $lines - 6;
                    $data->fontSize = 25 - $lines;
                    if ($data->fontSize < 7) {
                        $data->fontsize = 7;
                    }
                }
            }

            if ($current->link_video) {
                $data->type = 'video';
                $data->src = $current->link_video;
            } else if ($current->predisenada) {
                $data->type = 'picture';
                $data->src = $current->predisenada;
            } else if ($current->foto) {
                $data->type = 'picture';
                $data->src = 'https://ni.neo.fo/' . $current->foto;
            }
            if ($data->type === 'text' && empty($data->message)) {
                continue;
            }
            if ($data->type === 'picture') {
                try {
                    list($width, $height, $type, $attr) = getimagesize($data->src);
                    if ($width > 0 && $height > 0) {
                        $data->original_height = $height;
                        $data->original_width = $width;
                        $data->height = $height;
                        $data->width = $width;

                        if ($width > 1000) {
                            $ratio = (1000 * 100) / $width;
                            $data->height = intval(round(ceil(($data->height * $ratio)/100), 0));
                            $data->width = intval(round(ceil(($data->width * $ratio)/100), 0));
                        }
                        if ($data->height > 1000) {
                            $ratio = (1000 * 100) / $data->height;
                            $data->height = intval(round(ceil(($data->height * $ratio)/100), 0));
                            $data->width = intval(round(ceil(($data->width * $ratio)/100), 0));
                        }
                    }
                } catch (\Throwable $th) {
                //throw $th;
                }
            }
            if (!empty($data->message) && $data->type === 'picture') {
                if ($data->width >= $data->height) {
                    $data->message_pos = 'bottom';
                    //Show down
                    if ($data->height < 750) {
                        $data->height += 340;
                        if ($data->height > 750){
                            $data->height = 750;
                        }
                        $data->cover = false;
                    }
                } else  {
                    //Show right
                    if ($data->width < 990 && !empty($data->message)) {
                        $data->width += 340;
                        if ($data->width > 1000) {
                            $data->width = 1000;
                        }
                        $data->cover = false;
                    }
                }
            }
            $res[] = $data;
        }
        return $res;
    }

    public function get_image_posts_value($value, $existsKey) {
        if ($existsKey && is_array($value)) {
            return $value;
        }
        $res = [];

        foreach ($this->get('homenajes') as $current) {
            if ($current->oculto_tipo === 'admin' || $current->vela_abrazo !== 0 || $current->link_video) {
                continue;
            }
            $src = null;
            if ($current->predisenada) {
                $src = $current->predisenada;
            } else if ($current->foto) {
                $src = 'https://ni.neo.fo/' . $current->foto;
            }
            if (!empty($src)) {

                try {
                    list($width, $height, $type, $attr) = getimagesize($src);
                    if ($width > 0 && $height > 0) {
                        $o = new stdClass();
	                $o->src = $src;
	                $o->original_height = $height;
	                $o->original_width = $width;
	                $o->height = $height;
	                $o->width = $width;

	                if ($width > 1000) {
	                    $ratio = (1000 * 100) / $width;
	                    $o->height = round(ceil(($o->height * $ratio)/100), 0);
	                    $o->width = round(ceil(($o->width * $ratio)/100), 0);
	                }
	                if ($o->height > 1000) {
	                    $ratio = (1000 * 100) / $o->height;
	                    $o->height = round(ceil(($o->height * $ratio)/100), 0);
	                    $o->width = round(ceil(($o->width * $ratio)/100), 0);
	                }

	                $res[] = $o;
                    }
                } catch (\Throwable $th) {
                //throw $th;
                }
            }
        }
        return $res;
    }
    public function get_homenajes_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('homenajes', Tribute::many([
                'servicio_id' => $this->get('id')
            ]));
        }
        return $value;
    }

    public function get_sala_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('sala', Room::find($this->get('sala_id')));
        }
        return $value;
    }

    public function get_epitafio_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('epitafio', Epitaph::find($this->get('epitafio_id')));
        }
        return $value;
    }

    public function get_destino_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('destino', Destination::find($this->get('destino_id')));
        }
        return $value;
    }

    public function get_misa_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('misa', Mass::find($this->get('responso_id')));
        }
        return $value;
    }

    public function get_velatorios_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('velatorios', Wake::many(['servicio_id' => $this->get('id')]));
        }
        return $value;
    }

    public function get_abrazo_velas_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('abrazo_velas', Events::many(['servicio_id' => $this->get('id')]));
        }
        return $value;
    }

    public function get_assets_value($value, $existsKey) {
        if ($existsKey && is_array($value)) {
            return $value;
        }
        $table = T_TRIBUTE_CONFIG;
        $cliente_id = intval($this->get('cliente_id'));
        $sql = "SELECT * FROM `{$table}` WHERE `cliente_id` = ?";
        $stmt = $this->db()->prepare($sql);
        $stmt->execute([$cliente_id]);
        $raw = $stmt->fetch(PDO::FETCH_ASSOC);

        $data = [];
        if (is_array($raw) && !empty($raw)) {
            foreach ($raw as $current) {
                if (is_array($current) && !empty($current)) {
                    ksort($current);
                    $data[] = $current;
                    $subpath = isset($data[0]) && $cliente_id != 0 ? $cliente_id : 'bydefault';
                    $dirs = [
                        'bg' => '/homenajes_online/imagen_por_defecto',
                        'hugs' => '/homenajes_online/abrazos',
                        'candles' => '/homenajes_online/velas',
                        'hp' => '/homenajes_online/homenajes_predisenados',
                    ];
                    foreach ($dirs as $key => $path) {
                        $data[$key] = [];
                        $path = '/home/neofo/ni.neo.fo/images/' . $subpath . $path;
                        if (file_exists($path) && is_dir($path) && is_readable($path)) {
                            $files = @scandir($path);
                            foreach ($files as $file) {
                                $data[$key][] = str_replace('\\', '/', (string)$file);
                            }
                        }
                    }
                }
            }
        }
        return $data;
    }
}
