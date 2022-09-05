const btnEnviar = document.getElementById('btn-enviar');
let colaboradoresx = document.getElementById('colaboradores');

telefono.addEventListener('click', (e) => {

})


btnEnviar.addEventListener('click', async (e) => {
    e.preventDefault();

    const nombre = document.getElementsByName('nombre')[0].value;
    const email = document.getElementsByName('email')[0].value;
    const telefono = document.getElementsByName('telefono')[0].value;

    url = 'http://localhost/web-site-ods-hcj/php/controller/clientes.php';

    console.log(JSON.stringify({ nombre, email, telefono }));

    const data = await fetch(url, {
        method: 'POST',
        headers: {
            'accept': 'application/json ',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ nombre, email, telefono })
    });

    if (data.status == 200) {
        alert('exito al guardar')
        location.reload();
        document.getElementById('nombre').value = "";
        document.getElementById('email').value = "";
        document.getElementById('telefono').value = "";

    } else {
        alert(' error al guardar');
    }
});

const getData = async () => {
    const data = await fetch('http://localhost/web-site-ods-hcj/php/controller/clientes.php?page=1');
    if (data.status === 200) {
        const datos = await data.json();
        renderData(datos);
    }
}

const renderData = (datos) => {
    for (let data of datos) {
        colaboradoresx.innerHTML += `<div class="list-group" id="listaColasborador">                                    
                                        <a href="#" class="list-group-item list-group-item-action">${data.nombre}</a>
                                    </div>
        `;
    }

}

window.onload = () => { getData(); };