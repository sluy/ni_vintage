<?php
echo '<!DOCTYPE html><html lang="es">';
include_partial('main/index/head');
echo '<body style="background:url(\''.public_url("assets/images/vintage-desk-bg.jpg").'\')">';
include_partial('main/index/slider');
include_partial('main/index/info');
include_partial('main/index/footer');
echo '</body></html>';
