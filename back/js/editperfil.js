function init() {
    mostrar(false);
    $("#editar").on('submit', function(e) {
        editar(e);
    })

}

function editar(e) {
    e.preventDefault();
    var formData = new FormData($("#editar")[0]);
    $.post("../ajax/editperfil.php?op=editar", $("#editar").serialize(), function(data) {
        alert(data);
    })
}

function mostrar(flag) {
    if (flag) {
        $("#cambiar").show();
        $("#actual").hide();
    } else {
        $("#actual").show();
        $("#cambiar").hide();
    }
}

function verificar() {
    clavei = $("#clavei").val();
    $.post("../ajax/editperfil.php?op=comparar", { "clavei": clavei }, function(data) {
        if (data != "null") {
            mostrar(true);
        } else {
            alert("La contraseña es Incorrecta");
            $("#clavei").val('');
        }
    });
}

function cambiar() {
    clave1 = $("#clavec1").val();
    clave2 = $("#clavec2").val();
    if (comprobar(clave1, clave2)) {
        $.post("../ajax/editperfil.php?op=cambiar", { "clave1": clave1 }, function(data) {
            if (data != "null") {
                alert(data);
                mostrarform(false);
                $("#clavec1").val("");
                $("#clavec2").val("");

            } else {
                alert(data);
            }
        });
    } else {
        alert("Las contraseñas no coinciden");
    }
}

function comprobar(clave1, clave2) {
    if (clave1 == clave2) {

        return 1;
    } else {

        return 0;
    }
}
init();