<?php
$ni = ($ctx['cfg']['dev'] === true) ? api('service/ni') : (($ctx['service']->ni) ? $ctx['service']->ni: null);
?>
<div class="brand-logo" id="brand-logo">
  <div class="wrapper">
    <img src="<?php echo ($ni) ? $ni->logo_src : url('public/assets/images/demo/logo.png');?>" />
  </div>
</div>
