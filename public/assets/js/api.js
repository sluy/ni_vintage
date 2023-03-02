const api = axios;
api.defaults.baseUrl = API_URL;

async function initialize() {
  try {
    const res = await api.get("service?homenaje_id=" + SERVICE_ID);

    for (const current of res.data.image_posts) {
    }

    console.log("RESPUESTA DEL SERVER", res);

    $("#slider").on("slideTimelineDidComplete", function (event, slider) {
      slider.api("replay");
    });

    $("#slider").layerSlider({
      sliderVersion: "6.6.4",
      type: "fullsize",
      fullSizeMode: "hero",
      skin: "v6",
      //globalBGImage: public_url("assets/images/vintage-desk-bg.jpg"),
      //globalBGSize: "cover",
      showCircleTimer: false,
      allowRestartOnResize: true,
      skinsPath: public_url("vendor/layerslider/skins/"),
      height: 1000,
    });
  } catch (error) {
    console.log("ERROR EN EL SERVER", error);
  }
}

initialize();
