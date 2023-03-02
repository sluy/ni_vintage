if (["false", "0"].includes(query.show_info)) {
  $(".site").css("display", "none");
}

$("#slider").on("slideTimelineDidComplete", function (event, slider) {
  slider.api("replay");
});

$("#slider").layerSlider({
  sliderVersion: "6.6.4",
  type: "fullsize",
  fullSizeMode: "hero",
  skin: "v6",
  //  globalBGImage: public_url("assets/images/vintage-desk-bg.jpg"),
  //  globalBGSize: "cover",
  showCircleTimer: false,
  allowRestartOnResize: true,
  skinsPath: public_url("vendor/layerslider/skins/"),
  height: 1000,
});
