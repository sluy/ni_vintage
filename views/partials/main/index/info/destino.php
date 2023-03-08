<?php if($ctx['service']->destino) {;?>
<div class="data">
  <div class="title">
    <?php echo $ctx['service']->destino->tipo_str; ?>
  </div>
  <div class="content">
    <div>
      <?php
          $faux = explode('-', $ctx['service']->servicio_cementerio);
          $_time = date('H:i', strtotime($ctx['service']->servicio_cementerio));
          #echo json_encode($_time);
          ?>
      <?php if($faux[0] != '0000') { ?>
      <?php
            $hoy = strtotime(date("d-m-Y H:i:00",time()));
            $to_compare = strtotime($ctx['service']->servicio_cementerio);
            ?>
      <?php if($hoy <= $to_compare) { ?>
      <?php echo date('d/m', strtotime($ctx['service']->servicio_cementerio));?>
      <?php if($_time != '00:00') { ?>
      a las <?php echo date('H:i', strtotime($ctx['service']->servicio_cementerio));?> hs.
      <?php } ?>
      <?php } else { ?>
      <?php echo date('d/m', strtotime($ctx['service']->servicio_cementerio));?>
      <?php if($_time != '00:00') { ?>
      a las <?php echo date('H:i', strtotime($ctx['service']->servicio_cementerio));?> hs.
      <?php } ?>
      <?php } ?>
      <?php } else { ?>
      --
      <?php } ?>
    </div>
    <?php if(is_string($ctx['service']->destino->nombre) && $ctx['service']->destino->nombre !== '') {?>
    <div>
      <?php echo $ctx['service']->destino->nombre ;?>
    </div>
    <?php } ;?>
    <?php if(is_string($ctx['service']->destino->dirección) && $ctx['service']->destino->dirección !== '') { ?>
    <div class="neo-cien">
      <h3 class="titulos-homenajes-servicio">DIRECCIÓN</h3>
      <p class="neo-cabecera-homenajes-info neo-cien"><?php echo $ctx['service']->destino->dirección;?></p>
    </div>
    <?php } ?>
  </div>
</div>
<?php }?>
