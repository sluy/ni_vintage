function reloadTributeSlider(page, limit) {
  page = parseInt(page);
  if (isNaN(page) || page < 1) {
    page = 1;
  }
  limit = parseInt(limit);
  if (isNaN(limit) || limit < 1) {
    limit = 15;
  }
  if (limit > 18) {
    limit = 18;
  }
  const $iframe = $("#tribute-slider-iframe");
  if ($iframe.length < 1) {
    return;
  }
  const u =
    window.URL +
    "/main/slider?homenaje_id=" +
    window.SERVICE_ID +
    "&page=" +
    page +
    "&limit=" +
    limit;
  console.log("cambiando la url del iframe a", u);
  $iframe.attr("src", u);
}
