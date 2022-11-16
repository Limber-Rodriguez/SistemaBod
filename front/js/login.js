function init() {
    $("#registro").on('submit', function(e) {
        registro(e);
    })
    $("#recuperar").on('submit', function(e) {
        recuperar(e);
    })

}

function registro(e) {
    e.preventDefault();
    var formData = new FormData($("#registro")[0]);
    $.post("../ajax/usuario.php?op=registrar", $("#registro").serialize(), function(data) {
        alert(data);
        $("#registro")[0].reset();
        $(location).attr("href", "../vistas/principal.php");
    });

}

function verificar() {
    logina = $("#logina").val();
    clavea = $("#clavea").val();
    $.post("../ajax/usuario.php?op=verificar", { "logina": logina, "clavea": clavea },
        function(data) {
            if (data != "null") {
                $(location).attr("href", "principal.php");
            } else {
                alert("Usuario y/o Password incorrectos");
            }
        });
}

function recuperar_pass(flag) {
    if (flag) {
        $("#recuperar_pass").show();
    } else {
        $("#recuperar_pass").hide();
    }
}

function modal_cambiar_password(flag) {
    if (flag) {
        $("#cambiar_password").show();
    } else {
        $("#cambiar_password").hide();
    }
}

function recuperar(e) {
    e.preventDefault();
    emailr = $("#emailr").val();
    $.post("../ajax/usuario.php?op=enviaremail", { "emailr": emailr }, function(data) {

        if (data != "null") {
            alert(data);
            recuperar_pass(false);
            $("#emailr").val("");
        } else {
            alert(data);

        }
    });
}

function restablecer_password(e) {
    e.preventDefault();
    clave1 = $("#clavec1").val();
    clave2 = $("#clavec2").val();
    if (verificar_password(clave1, clave2)) {
        $.post("../ajax/usuario.php?op=restablecerpassword", { "id": id, "token": token, "claver": clave1 }, function(data) {

            if (data != "null") {
                bootbox.alert(data);
                modal_cambiar_password(false);
                $("#clavec1").val("");
                $("#clavec2").val("");

            } else {
                alert(data);

            }
        });
    } else {
        bootbox.alert("Las contraseñas no coinciden");

    }
}

function verificar_password(clave1, clave2) {
    if (clave1 == clave2) {
        return 1;
    } else {
        return 0;
    }

}

function recuperar_password() {
    id = $("#idrecuperar").val();
    token = $("#tokenrecuperar").val();
    if (id.length > 0 && token.length > 0) {
        $.post("../ajax/usuario.php?op=validartoken", { "idv": id, "tokenv": token },
            function(data) {
                if (data != "null") {
                    modal_cambiar_password(true)
                } else {
                    alert("Tiempo exedido");
                }
            });
    } else {

    }
}
recuperar_password();
init();