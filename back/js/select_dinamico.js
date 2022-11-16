$(document).ready(function(){

    $.post("../ajax/select_dinamico.php?op=select_dimaticoDepartamento",
        function (data) {
            let html = '<option value="">Seleccionar departamento</option>' + data;
            $("#departamento").html(html);   
        }
    );
  
    $('#departamento').on('change', function(){
        var departamentoID = $(this).val();
        if(departamentoID){
            $.ajax({
                type:'POST',
                url:'../ajax/select_dinamico.php',
                data:'iddepartamento='+departamentoID,
                success:function(html){
                    $('#municipio').html(html);
                    $('#barrio').html('<option value="">Selecione municipio primero</option>');
                }
            });
        }else{
            $('#municipio').html('<option value="">Selecione departamento primero</option>');
            $('#barrio').html('<option value="">Selecione municipio primero</option>');
        }
    });

    $('#municipio').on('change', function(){
        var municipioID = $(this).val();
        if(municipioID){
            $.ajax({
                type:'POST',
                url:'../ajax/select_dinamico.php',
                data:'idmunicipio='+municipioID,
                success:function(html){
                    $('#barrio').html(html);
                }
            });
        }else{
            $('#barrio').html('<option value="">Selecione municipio primero</option>');
        }
    });
});
