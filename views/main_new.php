<?php
echo '<!DOCTYPE html><html lang="es">';
include_partial('head');
echo '<body style="background:url(\''.public_url("assets/images/vintage-desk-bg.jpg").'\')">';
?>
<div class="floating-center">
  <div class="brand-logo">
    <div class="wrapper">
      <img src="<?php echo public_url('assets/images/demo/logo.png');?>" />
    </div>
  </div>
</div>
<?php
include_partial('slider_new');
include_partial('info');
include_partial('footer');
echo '</body></html>';
