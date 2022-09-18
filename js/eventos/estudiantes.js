let idTabla = 0;

const btnEnviar = document.getElementById("btn-enviar");
const btnActualizar = document.getElementById("btn-actualializar");
const btnEliminar = document.getElementById("btn-eliminar");

btnEnviar.addEventListener("click", async (e) => {
  e.preventDefault();

  const codigo = document.getElementsByName("codigo")[0].value;
  const dni = document.getElementsByName("dni")[0].value;
  const nombres = document.getElementsByName("nombres")[0].value;
  const apellidos = document.getElementsByName("apellidos")[0].value;

  url = "../php/controller/estudiantes.php";

  const data = await fetch(url, {
    method: "POST",
    headers: {
      accept: "application/json ",
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ codigo, dni, nombres, apellidos }),
  });

  if (data.status == 200) {
    alert("exito al guardar");
    location.reload();
    document.getElementById("codigo").value = "";
    document.getElementById("dni").value = "";
    document.getElementById("nombres").value = "";
    document.getElementById("apellidos").value = "";
  } else {
    alert(" error al guardar");
  }
});

const getData = async () => {
  const data = await fetch("../php/controller/estudiantes.php?page=1");
  if (data.status === 200) {
    const datos = await data.json();
    console.log(datos);
    llenarTabla("tblDatos", datos);
  }
};

$(document).ready(function () {
  $("#btn-actualializar").hide();
  $("#btn-eliminar").hide();
});

function llenarTabla(tabla, filas) {
  $("#" + tabla + " tbody").remove();
  $("#" + tabla)
    .dataTable()
    .fnDestroy();
  $("#" + tabla).DataTable({
    language: {
      search: "Buscar",
      info: "Total: _TOTAL_ registros. ",
      emptyTable: "No hay información.",
      infoEmpty: "Total: 0 registros.",
      infoFiltered: "(filtrado de un total de _MAX_ registros)",
      select: { rows: " %d filas seleccionadas." },
    },
    select: true,
    scrollY: 300,
    scrollX: true,
    scrollCollapse: true,
    paging: false,
    fixedColumns: false,
    data: filas,
    columns: [
      { data: "ID" }, //0
      { data: "CODIGO" },
      { data: "CEDULA" },
      { data: "NOMBRES" },
      { data: "APELLIDOS" },
    ],
    columnDefs: [
      {
        targets: [0], //OCULTAR COLUMNAS
        visible: false,
        searchable: true,
      },
    ],
  });

  //MANEJO DE EVENTO DE LA TABLA
  $("#" + tabla + " tbody").on("click", "tr", function () {
    if ($(this).hasClass("selected")) {
      $(this).removeClass("selected");
      $("#btn-enviar").show();
      $("#btn-actualializar").hide();
      $("#btn-eliminar").hide();
      console.log("ocultar");
      document.getElementById("codigo").value = "";
      document.getElementById("dni").value = "";
      document.getElementById("nombres").value = "";
      document.getElementById("apellidos").value = "";
    } else {
      $(this).addClass("selected");
      console.log("mostrar");
      let cellData = $("#" + tabla)
        .DataTable()
        .row($(this))
        .data();

      idTabla = cellData.ID;

      $("#btn-enviar").hide();
      $("#btn-actualializar").show();
      $("#btn-eliminar").show();

      document.getElementById("codigo").value = cellData.CODIGO;
      document.getElementById("dni").value = cellData.CEDULA;
      document.getElementById("nombres").value = cellData.NOMBRES;
      document.getElementById("apellidos").value = cellData.APELLIDOS;
    }
  });
}

btnActualizar.addEventListener("click", async (e) => {
  e.preventDefault();

  const codigo = document.getElementsByName("codigo")[0].value;
  const dni = document.getElementsByName("dni")[0].value;
  const nombres = document.getElementsByName("nombres")[0].value;
  const apellidos = document.getElementsByName("apellidos")[0].value;

  url = "../php/controller/estudiantes.php";

  const data = await fetch(url, {
    method: "PUT",
    headers: {
      accept: "application/json ",
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ idTabla, codigo, dni, nombres, apellidos }),
  });

  if (data.status == 200) {
    alert("exito al actualizar");
    $("#btn-enviar").show();
    $("#btn-actualializar").hide();
    $("#btn-eliminar").hide();
    location.reload();
    document.getElementById("codigo").value = "";
    document.getElementById("dni").value = "";
    document.getElementById("nombres").value = "";
    document.getElementById("apellidos").value = "";
  } else {
    alert(" error al actualizar");
  }
});

btnEliminar.addEventListener("click", async (e) => {
  e.preventDefault();

  url = "../php/controller/estudiantes.php";

  const data = await fetch(url, {
    method: "DELETE",
    headers: {
      accept: "application/json ",
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ idTabla }),
  });

  if (data.status == 200) {
    alert("exito al eliminar");
    $("#btn-enviar").show();
    $("#btn-actualializar").hide();
    $("#btn-eliminar").hide();
    location.reload();
    document.getElementById("codigo").value = "";
    document.getElementById("dni").value = "";
    document.getElementById("nombres").value = "";
    document.getElementById("apellidos").value = "";
  } else {
    alert(" error al eliminar");
  }
});

window.onload = () => {
  getData();
};