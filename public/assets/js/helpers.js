function public_url(path) {
  let url = window.PUBLIC_URL;
  if (typeof path === "string" && path !== "") {
    url += "/" + path;
  }
  return url;
}

function get_slider_ls_data(index) {
  index = parseInt(index);
  let n = 0;
  let current = 0;
  while (true) {
    if (current === index) {
      let delay = 400 * current;
      if (n === 0) {
        return "showinfo:1; offsetxin:left;   offsetyin:bottom; durationin:5500; easingin:easeOutQuad; fadein:false; rotatein:10; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:970;     loopoffsety:-310;   loopduration:4000;      loopstartat:transitioninstart + 73000;  loopeasing:easeInOutQuart; looprotate:20;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-20; scaleX:.5; scaleY:.5;";
      } else if (n === 1) {
        return (
          "showinfo:1; offsetxin:right;  offsetyin:top;      durationin:5500; delayin:" +
          delay +
          "; easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-450;    loopoffsety:950;    loopduration:4000;      loopstartat:transitioninstart + 69000;  loopeasing:easeInOutQuart; looprotate:-10;              loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:10; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 2) {
        return (
          "showinfo:1; offsetxin:right;  offsetyin:bottom;   durationin:5500; delayin:" +
          delay +
          "; easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-550;    loopoffsety:-650;   loopduration:4000;      loopstartat:transitioninstart + 65000;  loopeasing:easeInOutQuart; looprotate:5;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-5; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 3) {
        return (
          "showinfo:1; offsetxin:left;   offsetyin:top;      durationin:5500; delayin:" +
          delay +
          ";       easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:400;     loopoffsety:750;    loopduration:4000;      loopstartat:transitioninstart + 61000;  loopeasing:easeInOutQuart; looprotate:8;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-8; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 4) {
        return (
          "showinfo:1; offsetxin:right;                      durationin:5500; delayin:" +
          delay +
          ";       easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-900;    loopoffsety:170;    loopduration:4000;      loopstartat:transitioninstart + 57000;  loopeasing:easeInOutQuart; looprotate:2;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-2; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 5) {
        return (
          "showinfo:1; offsetyin:bottom;                     durationin:5500; delayin:" +
          delay +
          ";       easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-50;     loopoffsety:-750;   loopduration:4000;      loopstartat:transitioninstart + 53000;  loopeasing:easeInOutQuart; looprotate:-2;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:2; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 6) {
        return (
          "showinfo:1; offsetxin:left;                       durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:600;                         loopduration:4000;      loopstartat:transitioninstart + 49000;  loopeasing:easeInOutQuart; looprotate:-7;              loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:7; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 7) {
        return (
          "showinfo:1; offsetyin:top;                        durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-80;     loopoffsety:800;    loopduration:4000;      loopstartat:transitioninstart + 45000;  loopeasing:easeInOutQuart; looprotate:-10;             loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:10; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 8) {
        return (
          "showinfo:1; offsetyin:bottom;                     durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-170;    loopoffsety:-340;   loopduration:4000;      loopstartat:transitioninstart + 41000;  loopeasing:easeInOutQuart; looprotate:4;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-4; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 9) {
        return (
          "showinfo:1; offsetxin:right;                      durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-90;     loopoffsety:50;     loopduration:4000;      loopstartat:transitioninstart + 37000;  loopeasing:easeInOutQuart; looprotate:-3;              loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:3; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 10) {
        return (
          "showinfo:1; offsetxin:left;   offsetyin:bottom;   durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:10; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:970;     loopoffsety:-310;   loopduration:4000;      loopstartat:transitioninstart + 33000;  loopeasing:easeInOutQuart; looprotate:20;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-20; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 11) {
        return (
          "showinfo:1; offsetxin:right;  offsetyin:top;      durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-450;    loopoffsety:950;    loopduration:4000;      loopstartat:transitioninstart + 29000;  loopeasing:easeInOutQuart; looprotate:-10;              loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:10; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 12) {
        return (
          "showinfo:1; offsetxin:right;  offsetyin:bottom;   durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-550;    loopoffsety:-650;   loopduration:4000;      loopstartat:transitioninstart + 25000;  loopeasing:easeInOutQuart; looprotate:5;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-5; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 13) {
        return (
          "showinfo:1; offsetxin:left;   offsetyin:top;      durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:400;     loopoffsety:750;    loopduration:4000;      loopstartat:transitioninstart + 21000;  loopeasing:easeInOutQuart; looprotate:8;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-8; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 14) {
        return (
          "showinfo:1; offsetxin:right;                      durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-900;    loopoffsety:170;    loopduration:4000;      loopstartat:transitioninstart + 17000;  loopeasing:easeInOutQuart; looprotate:2;                loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-2; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 15) {
        return (
          "showinfo:1; offsetyin:bottom;                     durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-50;     loopoffsety:-750;   loopduration:4000;      loopstartat:transitioninstart + 13000;  loopeasing:easeInOutQuart; looprotate:-2;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:2; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 16) {
        return (
          "showinfo:1; offsetxin:left;                       durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:600;                         loopduration:4000;      loopstartat:transitioninstart + 9000;  loopeasing:easeInOutQuart; looprotate:-7;              loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:7; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 17) {
        return (
          "showinfo:1; offsetyin:top;                        durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-80;     loopoffsety:800;    loopduration:4000;      loopstartat:transitioninstart + 5000;  loopeasing:easeInOutQuart; looprotate:-10;             loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:10; scaleX:.5; scaleY:.5;"
        );
      } else if (n === 18) {
        return (
          "showinfo:1; offsetyin:bottom;                     durationin:5500; delayin:" +
          delay +
          ";      easingin:easeOutQuad; fadein:false; rotatein:30; scalexin:.5; scaleyin:.5; durationout:4000; startatout:allinandloopend + 0; easingout:easeInQuint; loop:true; loopoffsetx:-170;    loopoffsety:-340;   loopduration:4000;      loopstartat:transitioninstart + 1000;  loopeasing:easeInOutQuart; looprotate:4;               loopscalex:1.7; loopscaley:1.7; loopcount:1; loopfilter:grayscale(0%) sepia(0%) contrast(150%); rotation:-4; scaleX:.5; scaleY:.5;"
        );
      }
      break;
    }
    if (n > 18) {
      n = 0;
    } else {
      n++;
    }
    current++;
  }
}
