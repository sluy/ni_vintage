const api = axios;
api.defaults.baseUrl = window.API_URL;

async function initialize() {
  try {
    const res = await api.get("service?homenaje_id=" + SERVICE_ID);
    console.log(res.data, res.data.image_posts, API_URL);
  } catch (error) {
    console.log("ERROR EN EL SERVER", error);
  }
}
initialize();
