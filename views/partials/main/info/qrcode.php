<div class="qr-code">
  <?php if($ctx['service']->qrcode_src) { ?>
  <img src="<?php echo $ctx['service']->qrcode_src;?>" />
  <?php } ?>
  <?php if($ctx['service']->url) {?>
  <a href="<?php echo $ctx['service']->url;?>" target="_blank">
    Homenaje Virtual<br>
    <?php echo $ctx['service']->url;?>
  </a>
  <?php } ?>
</div>
