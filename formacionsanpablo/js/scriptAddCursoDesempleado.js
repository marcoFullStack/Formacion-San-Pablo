$("#addCursoDesempleado").submit(function (event) {
    event.preventDefault();
    var file = new FormData();
    file.append("codcertificado", $("#codcertificado").val());
    file.append("certificado", $("#certificado").val());
    file.append("nivel", $("#nivel").val());
    file.append("horas", $("#horas").val());
    file.append("practicas", $("#practicas").val());
    file.append("disponible", $("#disponible").val());
    file.append("activo", $("#activo").val());
    file.append("ver", $("#ver").val());
    $.ajax({
        type: 'POST',
        url: 'agregarCursoDesempleado.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            alert(data);
            $("#addCursoDesempleado")[0].reset();
        },
        error: function() {
            alert('Hubo un error al enviar el formulario.');
        }
    });
});

document.getElementById("listaCurso").onclick = function () {
    window.location.href = "listaCursoDesempleados.php";
};