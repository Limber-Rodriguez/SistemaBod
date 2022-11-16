function init() {
    $.post("../ajax/ajproveedor.php?op=select_tipos",
        function (data) {
            $("#tipo").html(data);
        }
    );

    $("#formPerfil").on("submit", function(e) {
        guardar(e);
    });

    $("#form_recuperarPass").on("submit", function(e) { e.preventDefault();
        let clave1 = $("#clave1").val(), clave2 = $("#clave2").val();
        let idusuario = $("#idusuario").val();
        let clave_original = $("#clave_actual").val();
        if(compararPass(clave1, clave2)) {
            $.post("../ajax/ajproveedor.php?op=modificar_pass", {clave: clave_original, idusuario: idusuario},
                function (data) {
                    alert(data);
                    limpiar_password();
                }
            );
        }else {
            alert("Las contraseñas no coinciden !!!");
            limpiar_password();
        }
    });

    mostrar_perfil($("#idproveedor").val());

}

function limpiar_password() {
    $("#clave1").val("");
    $("#clave2").val("");
    $("#clave_actual").val("");
}

function guardar(e) {
    e.preventDefault();
    let formData = new FormData($("#formPerfil")[0]);
    $.ajax({
        type: "POST",
        url: "../ajax/ajproveedor.php?op=editar",
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            alert(response);
        }
    });
}

function mostrar_perfil(idproveedor) {
    $.post("../ajax/ajproveedor.php?op=obtener_datosProveedor",
    {idproveedor: idproveedor},
    function(data) {
        data = JSON.parse(data);
        $("#nombre_empresa").val(data.nombre_empresa);
        $("#descripcion").val(data.descripcion);
        $("#rango_minimo").val(data.rango_minimo);
        $("#rango_maximo").val(data.rango_maximo);
        $("#telefono").val(data.telefono);
        $("#calle").val(data.calle);
        $("#latitud").val(data.latitud);
        $("#longitud").val(data.longitud);
        $("#email").val(data.email);
        $("#especialidad").val(data.especialidad);
        $("#descuento").val(data.descuento);
        $("#pagina_web").val(data.pagina_web);
        $("#tipo").val(data.tipo);
        $("#departamento").val(data.departamento);
        $("#municipio").val(data.municipio);
        $("#barrio").val(data.barrio);
        
        if(data.logo == "") {
            console.log("vacio");
            $("#imagenMuestra").attr("src", "../../front/files/images/proveedor/perfil/no-imagen.jpg");
        }else {
            $("#imagenMuestra").attr("src", "../../front/files/images/proveedor/perfil/" + data.logo);
        }
        $("#imagenActual").val(data.logo);
    });
}

function compararPass(clave1, clave2) {
    return clave1 == clave2 ? true : false;
}

init();