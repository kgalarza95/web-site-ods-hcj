let idTabla = 0;

const getData = async () => {
    const data = await fetch('../php/controller/petroleoPaises.php?page=1');
    if (data.status === 200) {
        const datos = await data.json();
        console.log(datos);
        llenarTabla("tblDatos", datos)
    }
}


$(document).ready(function () {
    $("#btn-actualializar").hide();
    $("#btn-eliminar").hide();
});

function llenarTabla(tabla, filas) {
    $('#' + tabla + ' tbody').remove();
    $('#' + tabla).dataTable().fnDestroy();
    $('#' + tabla).DataTable({
        language: {
            search: "Buscar",
            info: "Total: _TOTAL_ registros. ",
            emptyTable: "No hay información.",
            infoEmpty: "Total: 0 registros.",
            infoFiltered: "(filtrado de un total de _MAX_ registros)",
            select: { rows: " %d filas seleccionadas." }
        },
        select: true,
        scrollY: 300,
        scrollX: true,
        scrollCollapse: true,
        paging: false,
        fixedColumns: false,
        data: filas,
        columns: [
            { data: 'ID' }, //0
            { data: 'NOMBRE' },
            { data: 'VENTA' },
            { data: 'MES' },
            { data: 'ANIO' }

        ],
        columnDefs: [{
            targets: [0], //OCULTAR COLUMNAS
            visible: false,
            searchable: true
        }]
    });

    //MANEJO DE EVENTO DE LA TABLA
    $('#' + tabla + ' tbody').on('click', 'tr', function () {

        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            let cellData = $('#' + tabla).DataTable().row($(this)).data();

            idTabla = cellData.ID;


        }

    });
}


window.onload = () => { getData(); };