<!-- External libraries: jQuery & GreenSock -->
<script src="<?php echo public_url('vendor/layerslider/js/jquery.js');?>"></script>
<script src="<?php echo public_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

<script src="<?php echo public_url('vendor/layerslider/js/layerslider.utils.js');?>"></script>

<!-- LayerSlider script files -->
<script src="<?php echo public_url('vendor/layerslider/js/layerslider.transitions.js');?>"></script>
<script src="<?php echo public_url('vendor/layerslider/js/layerslider.kreaturamedia.jquery.js');?>"></script>

<!-- Initializing the slider -->
<script type="text/javascript">
$(document).ready(function() {
  const query = new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
  });

  if (['false', '0'].includes(query.show_info)) {
    $('.site').css('display', 'none');
  }

  $("#slider").on('slideTimelineDidComplete', function(event, slider) {
    slider.api('replay');
  });

  $('#slider').layerSlider({
    sliderVersion: '6.6.4',
    type: 'fullsize',
    fullSizeMode: 'hero',
    skin: 'v6',
    globalBGImage: '<?php echo public_url('assets/images/vintage-desk-bg.jpg');?>',
    globalBGSize: 'cover',
    showCircleTimer: false,
    allowRestartOnResize: true,
    skinsPath: '<?php echo public_url('vendor/layerslider/skins/');?>',
    height: 1000
  });
});
</script>
