function public_url(path) {
  let url = window.PUBLIC_URL;
  if (typeof path === "string" && path !== "") {
    url += "/" + path;
  }
  return url;
}
