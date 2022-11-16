function init() {
    $("#formularioContacto").on("submit", function(e){
        enviarMensaje(e);
    });
}

function limpiar() {
    formulario = $("#formularioContacto");
	formulario[0].reset();
}

function enviarMensaje(e) {
    e.preventDefault();

    $.post("../ajax/contacto.php?op=enviar", $("#formularioContacto").serialize(), function(data) {
        alert(data);
    })

    limpiar();
}

init();