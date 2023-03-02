const api = axios;
api.defaults.baseUrl = API_URL;

async function initialize() {
  try {
    const res = await api.get("service?homenaje_id=" + SERVICE_ID);
    const $sliderContent = document.getElementById("slider-content");
    console.log(res.data, res.data.image_posts, API_URL);
    for (const i in res.data.image_posts) {
      const current = res.data.image_posts[i];
      const img = document.createElement("img");
      img.src = API_URL + "/compress?src=" + current.src;
      img.height = current.height;
      img.width = current.width;
      img.style.border = "20px solid #eee";
      img.style.boxShadow = "0px 4px 30px rgba(0,0,0,.3)";
      img.style.top = "80%";
      img.style.textAlign = "initial";
      img.style.fontWeight = "400";
      img.style.fontStyle = "normal";
      img.style.textDecoration = "none";
      img.style.filter = "grayscale(100%) sepia(30%)";
      img.dataset.ls = get_slider_ls_data(i);
      $sliderContent.appendChild(img);
    }
    setTimeout(() => {
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
    }, 200);
  } catch (error) {
    console.log("ERROR EN EL SERVER", error);
  }
}

initialize();
