$("#edit").on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData($("#edit")[0]);
    $.post("../ajax/editboda.php?op=edit", $("#edit").serialize(), function(data) {
        alert(data);
    });
});