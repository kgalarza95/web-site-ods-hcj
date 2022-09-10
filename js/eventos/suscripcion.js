
let idTabla = 0;

//document.getElementById("tabla").addEventListener("click", function(e) {});

const getData = async () => {
    const data = await fetch('../php/controller/suscripcion.php?page=1');
    if (data.status === 200) {
        const datos = await data.json();
        console.log(datos);
        //llenarTabla("tblDatos", datos)
        datos.forEach(function (datos) {
            document.getElementById("datos").innerHTML = `
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">${datos.NOMBRES} ${datos.APELLIDOS} </h6>                
              </div>
             
            </li>`;


        });
    }
}
