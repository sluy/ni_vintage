if (["false", "0"].includes(query.show_info)) {
  $(".site").css("display", "none");
}
const $tributeSlider = $("#slider");

$tributeSlider.on("slideTimelineDidComplete", function (event, slider) {
  if (
    typeof TRIBUTE_PAGINATION_DATA === "object" &&
    TRIBUTE_PAGINATION_DATA !== null &&
    typeof parent.reloadTributeSlider === "function"
  ) {
    parent.reloadTributeSlider(TRIBUTE_PAGINATION_DATA.next_page);
  } else {
    console.log("algo falló al terminar el slide...!");
  }
});

const tributeSlider = $tributeSlider.layerSlider({
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
