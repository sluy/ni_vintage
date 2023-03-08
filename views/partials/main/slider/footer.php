<!-- External libraries: jQuery & GreenSock -->
<script src="<?php echo public_url('vendor/layerslider/js/jquery.js');?>"></script>
<script src="<?php echo public_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?php echo public_url('vendor/layerslider/js/layerslider.utils.js');?>"></script>
<!-- LayerSlider script files -->
<script src="<?php echo public_url('vendor/layerslider/js/layerslider.transitions.js');?>"></script>
<script src="<?php echo public_url('vendor/layerslider/js/layerslider.kreaturamedia.jquery.js');?>"></script>
<!--Globals-->
<script type="text/javascript">
const PUBLIC_URL = '<?php echo public_url('');?>';
const API_URL = '<?php echo $ctx['cfg']['api']['url'];?>';
const SERVICE_ID = '<?php echo $ctx['service']->id_str;?>';
const query = new Proxy(new URLSearchParams(window.location.search), {
  get: (searchParams, prop) => searchParams.get(prop),
});
</script>
<script src="<?php echo public_url('assets/js/helpers.js?r='. md5(rand(100000, 999999)));?>"></script>
<script src="<?php echo public_url('assets/js/slider.js');?>"></script>
