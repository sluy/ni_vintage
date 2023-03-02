<!-- External libraries: jQuery & GreenSock -->
<script src="<?php echo public_url('vendor/layerslider/js/jquery.js');?>"></script>
<script src="<?php echo public_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

<script src="<?php echo public_url('vendor/layerslider/js/layerslider.utils.js');?>"></script>

<!-- LayerSlider script files -->
<script src="<?php echo public_url('vendor/layerslider/js/layerslider.transitions.js');?>"></script>
<script src="<?php echo public_url('vendor/layerslider/js/layerslider.kreaturamedia.jquery.js');?>"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!--Globals-->
<script type="text/javascript">
PUBLIC_URL = '<?php echo public_url('');?>';
API_URL = '<?php echo $ctx['cfg']['api']['url'];?>';
SERVICE_ID = '<?php echo $ctx['service']->id_str;?>';
</script>
<script src="<?php echo public_url('assets/js/helpers.js');?>"></script>
<script src="<?php echo public_url('assets/js/api.js');?>"></script>
<script src="<?php echo public_url('assets/js/slider.js');?>"></script>
