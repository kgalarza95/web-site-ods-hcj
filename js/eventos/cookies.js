const btnAceptar = document.getElementById("btn-aceptar-cookies");
const cookies = document.getElementById("aviso-cookies");
const fondocookies = document.getElementById("fondo-aviso-cookies");

dataLayer = [];
btnAceptar.addEventListener("click", () => {
  cookies.classList.remove("activo");
  fondocookies.classList.remove("activo");

  localStorage.setItem("cookies-success", true);

  dataLayer.push({
    event: "cookies-success",
  });

  const data = fetch("../php/miCookies.php?vl=10");
  if (data.status === 200) {
    const datos = data.json();
    console.log(datos);
  }
});
if (!localStorage.getItem("cookies-success")) {
  cookies.classList.add("activo");
  fondocookies.classList.add("activo");
} else {
  dataLayer.push({
    event: "cookies-success",
  });
}
