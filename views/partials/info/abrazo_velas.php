<?php if(is_array($ctx['service']->abrazo_velas)) { ?>
<div class='events<?php echo (count($ctx['service']->abrazo_velas) < 5) ? ' no-scroll' : '';?>'>
  <div class='scroll up'>
    &#x2191;
  </div>
  <div class="items-wrapper">
    <ul id="event-list">
      <?php foreach ($ctx['service']->abrazo_velas as $current) { ?>

      <li>
        <div class="section avatar">
          <img src="<?php echo $current->imagen;?>" />
        </div>
        <div class="section data">
          <div class="title"><?php echo $current->nombre ;?></div>
          <div class="content">
            <?php if ($current->tipo === 2) { ?>
            Envió un abrazo
            <?php } else { ?>
            Encendió una vela
            <?php } ?>
          </div>
        </div>
      </li>
      <?php }?>
    </ul>
  </div>
  <div class='scroll down'>
    &#8595;
  </div>
</div>
<?php  }?>
