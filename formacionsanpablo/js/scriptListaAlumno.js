$("#listatabla").on("click",".btnEliminar",function(){
    let identificador = $(this).parents("tr").find("td").eq(2).text();
    let nombre = $(this).parents("tr").find("td").eq(0).text();
    Swal.fire({
        icon: 'question',
        title: 'CONFIRMAR',
        html: 'Confirmar la eliminación del Alumno <b>' + nombre + "</b>",
        showCancelButton: true,
        confirmButtonText: "SI BORRAR",
        cancelButtonText: "NO CANCELAR"
    }).then((response)=>{
        if (response.isConfirmed) {
            $.ajax({
                type: 'POST',
                url:   'eliminar.php',
                data: {'identificador': identificador},
                success: function(data){
                    location.href = "listaAlumnos.php";
                }
            });
        }
    })
});
$("#editAlumno").submit(function(event){
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
        url: 'actualizaralumno.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            if (data == 0) {
                location.href = "listaAlumnos.php";
            } else {
                console.log("Error en la actualización: " + data);
                alert("Error en la actualización: " + data);
            }
        },
        error: function(xhr, status, error) {
            console.log("Error: " + error);
            alert("Error: " + error);
        }
    });
});