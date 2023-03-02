const api = axios;
api.defaults.baseUrl = API_URL;

async function initialize() {
  try {
    const res = await api.get("service?homenaje_id=" + SERVICE_ID);
    console.log("RESPUESTA DEL SERVER", res);
  } catch (error) {
    console.log("ERROR EN EL SERVER", error);
  }
}

initialize();
