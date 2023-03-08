<!-- External libraries: jQuery & GreenSock -->
<script src="<?php echo public_url('vendor/layerslider/js/jquery.js');?>"></script>
<script src="<?php echo public_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- LayerSlider script files -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!--Globals-->
<script type="text/javascript">
window.PUBLIC_URL = '<?php echo public_url('');?>';
window.URL = '<?php echo url('');?>';
window.API_URL = '<?php echo $ctx['cfg']['api']['url'];?>';
window.SERVICE_ID = '<?php echo $ctx['service']->id_str;?>';
const query = new Proxy(new URLSearchParams(window.location.search), {
  get: (searchParams, prop) => searchParams.get(prop),
});
</script>
<script src="<?php echo public_url('assets/js/helpers.js?r='. md5(rand(100000, 999999)));?>"></script>
<script src="<?php echo public_url('assets/js/events.js?r='. md5(rand(100000, 999999)));?>"></script>
<script src="<?php echo public_url('assets/js/slider-iframe.js?r='. md5(rand(100000, 999999)));?>"></script>
<script type="text/javascript">
reloadTributeSlider(1, 5);
</script>
