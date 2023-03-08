<?php
$events = ($ctx['cfg']['dev'] === true) ? api('service/events') : $ctx['service']->events;

if(is_array($events) && !empty($events)) {
?>
<div class='events no-scroll'>
  <div class="items-wrapper">
    <ul id="event-list">
      <?php
        foreach (array_reverse($events) as $current) {
          if (!is_object($current)) {
            continue;
          }

      ?>
      <li>
        <div class="section avatar">
          <img src="<?php echo $current->src;?>" />
        </div>
        <div class="section data">
          <div class="title"><?php echo $current->by ;?></div>
          <div class="content"><?php echo $current->message;?></div>
        </div>
      </li>
      <?php }?>
    </ul>
  </div>
</div>
<?php  }?>
