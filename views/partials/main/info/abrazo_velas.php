<?php if(is_array($ctx['service']->events) && !empty($ctx['service']->events)) { ?>
<div class='events no-scroll'>
  <div class='scroll up'>
    &#x2191;
  </div>
  <div class="items-wrapper">
    <ul id="event-list">
      <?php foreach (array_reverse($ctx['service']->events) as $current) {?>
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
  <div class='scroll down'>
    &#8595;
  </div>
</div>
<?php  }?>
