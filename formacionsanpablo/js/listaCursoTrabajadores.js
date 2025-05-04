$("#listatabla").on("click",".btnEliminar",function(){
    let identificador = $(this).parents("tr").find("td").eq(0).text();
    let curso = $(this).parents("tr").find("td").eq(0).text();
    Swal.fire({
        icon: 'question',
        title: 'CONFIRMAR',
        html: 'Confirmar la eliminación del Curso <b>' + curso + "</b>",
        showCancelButton: true,
        confirmButtonText: "SI BORRAR",
        cancelButtonText: "NO CANCELAR"
    }).then((response)=>{
        if (response.isConfirmed) {
            $.ajax({
                type: 'POST',
                url:   'eliminarCursoTrabajadores.php',
                data: {'identificador': identificador},
                success: function(data){
                    location.href = "listaCursoTrabajadores.php";
                }
            });
        }
    })
});
