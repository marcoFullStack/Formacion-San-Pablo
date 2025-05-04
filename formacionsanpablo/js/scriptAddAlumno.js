$("#addalumno").submit(function (event) {
    event.preventDefault();
    var file = new FormData();
    file.append("nombre", $("#nombre").val());
    file.append("apellidos", $("#apellidos").val());
    file.append("dni", $("#dni").val());
    file.append("mail", $("#mail").val());
    file.append("tlf", $("#tlf").val());
    file.append("localidad", $("#localidad").val());
    file.append("curso", $("#curso").val());
    $.ajax({
        type: 'POST',
        url: 'agregarAlumno.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            alert(data);
            $("#addalumno")[0].reset();
        },
        error: function() {
            alert('Hubo un error al enviar el formulario.');
        }
    });
});

document.getElementById("listaAlumno").onclick = function () {
    window.location.href = "listaAlumnos.php";
};