const btnEnviar = document.getElementById('btn-enviar');

telefono.addEventListener('click', (e) => {

})


btnEnviar.addEventListener('click', async (e) => {
    e.preventDefault();

    const nombre = document.getElementsByName('nombre')[0].value;
    const email = document.getElementsByName('email')[0].value;
    const telefono = document.getElementsByName('telefono')[0].value;
    const mensaje = document.getElementsByName('mensaje')[0].value;

    url = 'php/controller/contacto.php';

    const data = await fetch(url, {
        method: 'POST',
        headers: {
            'accept': 'application/json ',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ nombre, email, telefono, mensaje })
    });

    if (data.status == 200) {
        alert('exito al guardar')

        document.getElementById('nombre').value = "";
        document.getElementById('email').value = "";
        document.getElementById('telefono').value = "";
        document.getElementById('mensaje').value = "";

    } else {
        alert(' error al guardar');
    }
});