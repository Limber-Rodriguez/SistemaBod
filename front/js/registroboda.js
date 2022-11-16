function init() {
    $("#regboda").on('submit', function(e) {
        registro(e);
    });
    $.post('../ajax/registroboda.php?op=mostrar');
}

function registro(e) {
    e.preventDefault();
    var formData = new FormData($("#regboda")[0]);
    $.post("../ajax/registroboda.php?op=registro", $("#regboda").serialize(), function(data) {
        alert(data);
        $("#regboda")[0].reset();
        location.reload();
        $(location).attr("href", "../vistas/registroBoda.php");
    });
}
init();