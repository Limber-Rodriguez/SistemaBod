function init() {
    $.post("../ajax/ajproveedor.php?op=listar_tipos",
        function (data) {
            $("#tipoServicio").html(data);
        }
    );

    $("#proveedor").on("submit", function(e) {
        guardar(e);
    });

}

function guardar(e) {
    e.preventDefault();
    let formData = new FormData($("#proveedor")[0]);
    $.ajax({
        type: "POST",
        url: "../ajax/ajproveedor.php?op=guardar",
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            alert(response);
            $(location).attr("href", "../vistas/principal.php");
        }
    });
}

init();