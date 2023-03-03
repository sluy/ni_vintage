<!-- Slider HTML markup -->
<div id="slider" style="width: 1000px; height:100vh;margin:0 auto;margin-bottom: 0px;">
  <!-- Slide 1-->
  <div class="ls-slide" data-ls="kenburnsscale:1.2;">
    <?php
      $imagePostCounter = 0;
      foreach ($ctx['service']->image_posts as $current) {
        $imagePostCounter++;
        if ($imagePostCounter > 19) {
          $imagePostCounter = 1;
        }
    ?>
    <?php if($imagePostCounter === 1) { ?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:80%; left:10%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:left;   offsetyin:bottom;   durationin:5500;                    easingin:easeOutQuad; fadein:false; rotatein:10; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:970;     loopoffsety:-310;   loopduration:4000;      loopstartat:transitioninstart + 73000;  loopeasing:easeInOutQuart; looprotate:20;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-20; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 2) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:8%;  left:80%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:right;  offsetyin:top;      durationin:5500; delayin:100;       easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-450;    loopoffsety:950;    loopduration:4000;      loopstartat:transitioninstart + 69000;  loopeasing:easeInOutQuart; looprotate:-10;              loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:10; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 3) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:80%; left:80%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:right;  offsetyin:bottom;   durationin:5500; delayin:500;       easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-550;    loopoffsety:-650;   loopduration:4000;      loopstartat:transitioninstart + 65000;  loopeasing:easeInOutQuart; looprotate:5;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-5; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 4) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:20%; left:25%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:left;   offsetyin:top;      durationin:5500; delayin:900;       easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:400;     loopoffsety:750;    loopduration:4000;      loopstartat:transitioninstart + 61000;  loopeasing:easeInOutQuart; looprotate:8;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-8; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 5) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:40%; left:94%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:right;                      durationin:5500; delayin:1300;       easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-900;    loopoffsety:170;    loopduration:4000;      loopstartat:transitioninstart + 57000;  loopeasing:easeInOutQuart; looprotate:2;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-2; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 6) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:90%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetyin:bottom;                     durationin:5500; delayin:1700;       easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-50;     loopoffsety:-750;   loopduration:4000;      loopstartat:transitioninstart + 53000;  loopeasing:easeInOutQuart; looprotate:-2;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:2; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 7) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:50%; left:20%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:left;                       durationin:5500; delayin:2100;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:600;                         loopduration:4000;      loopstartat:transitioninstart + 49000;  loopeasing:easeInOutQuart; looprotate:-7;              loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:7; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 8) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:15%; left:60%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetyin:top;                        durationin:5500; delayin:2500;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-80;     loopoffsety:800;    loopduration:4000;      loopstartat:transitioninstart + 45000;  loopeasing:easeInOutQuart; looprotate:-10;             loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:10; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 9) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:70%; left:60%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetyin:bottom;                     durationin:5500; delayin:2900;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-170;    loopoffsety:-340;   loopduration:4000;      loopstartat:transitioninstart + 41000;  loopeasing:easeInOutQuart; looprotate:4;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-4; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 10) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:47%; left:55%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:right;                      durationin:5500; delayin:3300;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-90;     loopoffsety:50;     loopduration:4000;      loopstartat:transitioninstart + 37000;  loopeasing:easeInOutQuart; looprotate:-3;              loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:3; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 11) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:80%; left:10%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:left;   offsetyin:bottom;   durationin:5500; delayin:3700;      easingin:easeOutQuad; fadein:false; rotatein:10; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:970;     loopoffsety:-310;   loopduration:4000;      loopstartat:transitioninstart + 33000;  loopeasing:easeInOutQuart; looprotate:20;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-20; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 12) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:8%;  left:80%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:right;  offsetyin:top;      durationin:5500; delayin:4100;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-450;    loopoffsety:950;    loopduration:4000;      loopstartat:transitioninstart + 29000;  loopeasing:easeInOutQuart; looprotate:-10;              loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:10; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 13) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:80%; left:80%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:right;  offsetyin:bottom;   durationin:5500; delayin:4500;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-550;    loopoffsety:-650;   loopduration:4000;      loopstartat:transitioninstart + 25000;  loopeasing:easeInOutQuart; looprotate:5;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-5; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 14) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:20%; left:25%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:left;   offsetyin:top;      durationin:5500; delayin:4900;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:400;     loopoffsety:750;    loopduration:4000;      loopstartat:transitioninstart + 21000;  loopeasing:easeInOutQuart; looprotate:8;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-8; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 15) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:40%; left:94%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:right;                      durationin:5500; delayin:5300;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-900;    loopoffsety:170;    loopduration:4000;      loopstartat:transitioninstart + 17000;  loopeasing:easeInOutQuart; looprotate:2;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-2; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 16) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:90%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetyin:bottom;                     durationin:5500; delayin:5700;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-50;     loopoffsety:-750;   loopduration:4000;      loopstartat:transitioninstart + 13000;  loopeasing:easeInOutQuart; looprotate:-2;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:2; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 17) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:50%; left:20%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetxin:left;                       durationin:5500; delayin:6100;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:600;                         loopduration:4000;      loopstartat:transitioninstart + 9000;  loopeasing:easeInOutQuart; looprotate:-7;              loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:7; scaleX:.5; scaleY:.5;">
    <?php } elseif($imagePostCounter === 18) {?>
    <img width="<?php echo $current->width;?>" height="<?php echo $current->height;?>" src="<?php echo $current->src;?>"
      class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:15%; left:60%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetyin:top;                        durationin:5500; delayin:6500;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-80;     loopoffsety:800;    loopduration:4000;      loopstartat:transitioninstart + 5000;  loopeasing:easeInOutQuart; looprotate:-10;             loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:10; scaleX:.5; scaleY:.5;">
    <?php } elseif ($imagePostCounter === 19) { ?>
    <img width="<?php echo $current->width; ?>" height="<?php echo $current->height; ?>"
      src="<?php echo $current->src; ?>" class="ls-l" alt="" class="ls-l" alt=""
      style="border: 20px solid #eee; box-shadow: 0px 4px 30px rgba(0,0,0,.3);top:70%; left:60%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; filter:grayscale(100%) sepia(30%);"
      data-ls="showinfo:1; offsetyin:bottom;                     durationin:5500; delayin:6900;      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-170;    loopoffsety:-340;   loopduration:4000;      loopstartat:transitioninstart + 1000;  loopeasing:easeInOutQuart; looprotate:4;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-4; scaleX:.5; scaleY:.5;">
    <?php } } ?>
  </div>
</div>