<div class="site">
  <div class="container-fluid h-100">
    <div class="row h-100">
      <div class="col-2 h-100">
        <div class="left-column h-100">
          <ul class="events">
            <li>
              <div class="section avatar">
                <img src="<?php echo public_url('assets/images/demo/vela.png');?>" />
              </div>
              <div class="section data">
                <div class="title">Lorem Ipsum</div>
                <div class="content">Dolor sit amet</div>
              </div>
            </li>
            <li>
              <div class="section avatar">
                <img src="<?php echo public_url('assets/images/demo/abrazo.png');?>" />
              </div>
              <div class="section data">
                <div class="title">Lorem Ipsum</div>
                <div class="content">Dolor sit amet</div>
              </div>
            </li>
          </ul>
          <div class="brand-logo">
            <img src="<?php echo public_url('assets/images/demo/logo.png');?>" />
          </div>
        </div>
      </div>
      <div class="col-2 offset-8 h-100">
        <div class="right-column h-100">
          <div class="info">
            <div class="data">
              <div class="avatar">
                <div class="image"
                  style="background-image:url('https://ni.neo.fo/<?php echo !empty($ctx['tribute']['foto']) ? $ctx['tribute']['foto'] : $ctx['tribute']['foto_redonda'];?>');">
                </div>
              </div>
              <div class="title">
                <?php echo $ctx['tribute']['nombres'] ;?> <br>
                <?php echo $ctx['tribute']['apellidos'];?> <br>
                <small class="text-muted">Q.E.P.D</small>
                <br>
                <br>
              </div>
            </div>
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
                Cementerio
              </div>
              <div class="content">
                Cemex<br>
                Día 31 a las 13:00 hs.
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
