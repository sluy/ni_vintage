<div class="data">
  <div class="avatar">
    <div class="image"
      style="background-image:url('https://ni.neo.fo/<?php echo !empty($ctx['service']->foto) ? $ctx['service']->foto : $ctx['service']->foto_redonda;?>');">
    </div>
  </div>
  <div class="title">
    <?php echo $ctx['service']->nombres ;?> <br>
    <?php echo $ctx['service']->apellidos;?> <br>
    <?php if ((is_string($ctx['service']->fecha_nac) && $ctx['service']->fecha_nac !== '') || (is_string($ctx['service']->fecha_dec) && $ctx['service']->fecha_dec !== '')) {?>
    <small class="text-muted">
      <?php echo date('d/m/Y', strtotime($ctx['service']->fecha_nac)); ?>
      -
      <?php echo date('d/m/Y', strtotime($ctx['service']->fecha_dec)); ?>
      <br>
    </small>
    <?php } ?>
    <?php if($ctx['service']->epitafio && is_string($ctx['service']->epitafio->epitafio) &&  $ctx['service']->epitafio->epitafio !== '') {?>
    <small class="text-muted">
      <?php echo $ctx['service']->epitafio->epitafio;?>
      <br>
    </small>
    <?php } ?>
    <br>
    <br>
  </div>
</div>
