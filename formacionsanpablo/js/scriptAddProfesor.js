$("#addprofesor").submit(function (event) {
    event.preventDefault();
    var file = new FormData();
    file.append("nombre", $("#nombre").val());
    file.append("apellidos", $("#apellidos").val());
    file.append("numero", $("#numero").val());
    file.append("mail", $("#mail").val());
    file.append("tlf", $("#tlf").val());
    file.append("aula", $("#aula").val());
    file.append("curso", $("#curso").val());
    $.ajax({
        type: 'POST',
        url: 'agregarProfesor.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            alert(data);
            $("#addprofesor")[0].reset();
        },
        error: function() {
            alert('Hubo un error al enviar el formulario.');
        }
    });
});