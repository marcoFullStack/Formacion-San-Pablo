$("#addCursoTrabajador").submit(function (event) {
    event.preventDefault();
    var file = new FormData();
    file.append("curso", $("#curso").val());
    file.append("horas", $("#horas").val());
    file.append("disponible", $("#disponible").val());
    file.append("activo", $("#activo").val());
    file.append("ver", $("#ver").val());
    $.ajax({
        type: 'POST',
        url: 'agregarCursoTrabajador.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            alert(data);
            $("#addCursoTrabajador")[0].reset();
        },
        error: function() {
            alert('Hubo un error al enviar el formulario.');
        }
    });
});

document.getElementById("listaCurso").onclick = function () {
    window.location.href = "listaCursoTrabajadores.php";
};