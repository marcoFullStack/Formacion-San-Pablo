$("#contacto").submit(function (event) {
    event.preventDefault();
    var file = new FormData();
    file.append("nombre", $("#nombre").val());
    file.append("apellidos", $("#apellidos").val());
    file.append("mail", $("#mail").val());
    file.append("tlf", $("#tlf").val());
    file.append("mensaje", $("#mensaje").val());
    $.ajax({
        type: 'POST',
        url: 'contactarTrue.php',
        cache: false,
        processData: false,
        contentType: false,
        data: file,
        success: function(data){
            alert(data);
            $("#contacto")[0].reset();
        },
        error: function() {
            alert('Hubo un error al enviar el formulario.');
        }
    });
});

$("#listaConsultas").on("click",".btnEliminar",function(){
    let identificador = $(this).parents("tr").find("td").eq(0).text();
    let apellidos = $(this).parents("tr").find("td").eq(2).text();
    Swal.fire({
        icon: 'question',
        title: 'CONFIRMAR',
        html: 'Confirmar la eliminación de la consulta de <b>' + apellidos + "</b>",
        showCancelButton: true,
        confirmButtonText: "SI BORRAR",
        cancelButtonText: "NO CANCELAR"
    }).then((response)=>{
        if (response.isConfirmed) {
            $.ajax({
                type: 'POST',
                url:   'eliminarContacto.php',
                data: {'identificador': identificador},
                success: function(data){
                    location.href = "informacion.php";
                }
            });
        }
    })
});

$(".btnEstado").click(function(){
    $(this).closest('tr').addClass("bg-success");
});