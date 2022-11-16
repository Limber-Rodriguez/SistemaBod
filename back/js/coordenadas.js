function getAdress() {

    iddepartamento = $("#departamento").val();
    idmunicipio = $("#municipio").val();
    idbarrio = $("#barrio").val();

    $.post("../ajax/ajproveedor.php?op=selectDEP", {
        "iddepartamento": iddepartamento
    }, function (data) {
        data = JSON.parse(data);
        $("#dep").val(data.nombre);

        $.post("../ajax/ajproveedor.php?op=selectMUN", {
            "idmunicipio": idmunicipio
        }, function (data) {
            data = JSON.parse(data);
            $("#mun").val(data.nombre);

            $.post("../ajax/ajproveedor.php?op=selectBAR", {
                "idbarrio": idbarrio
            }, function (data) {
                data = JSON.parse(data);
                $("#barr").val(data.nombre);
                getCoords();
            });
        });
    });
    getCoords();

}

function getCoords() {

    var geocoder = new google.maps.Geocoder();

    calle = document.getElementById('calle').value;
    municipio = document.getElementById('mun').value;
    barrio = document.getElementById('barr').value;
    departamento = document.getElementById('dep').value;
    
    //direccion = calle + " " + barrio + " " + municipio + " " + departamento;
    direccion = calle + " " + municipio + " " + departamento;
    
    if (direccion != '') {
        geocoder.geocode({
            'address': direccion
        }, function (results, status) {
            if (status == 'OK') {
                var lat = results[0].geometry.location.lat();
                var lon = results[0].geometry.location.lng();
                $("#latitud").html(lat);
                $("#longitud").html(lon);
                $("#latitud").val(lat);
                $("#longitud").val(lon);
            }
        });
    }
}
