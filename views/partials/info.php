<div class="site">
  <div class="container-fluid h-100">
    <div class="row h-100">
      <div class="col-2 h-100">
        <div class="left-column h-100">
          <?php echo include_partial('info/abrazo_velas');?>
          <div class="brand-logo">
            <img src="<?php echo public_url('assets/images/demo/logo.png');?>" />
          </div>
        </div>
      </div>
      <div class="col-3 offset-7 h-100">
        <div class="right-column h-100">
          <div class="info">
            <?php include_partial('info/fallecido_info');?>
            <?php include_partial('info/destino');?>
            <!--
            <div class="data">
              <div class="title">
                Velatorios
              </div>
              <div class="content">
                No hay información
              </div>
            </div>

            <div class="data">
              <div class="title">
                Salida
              </div>
              <div class="content">
                Día 30 a las 13:00 hs.
              </div>
            </div>
            <div class="data">
              <div class="title">
                Misa
              </div>
              <div class="content">
                Capilla San Pablo<br>
                Día 17 a las 13:00 hs.
              </div>
            </div>
            -->
          </div>
          <div class="qr-code">
            <img src="<?php echo public_url('assets/images/demo/qr-code.png');?>" />
            <a href="#somethingHere">
              Homenaje Virtual<br>
              neo.fo/14bdbabf
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
