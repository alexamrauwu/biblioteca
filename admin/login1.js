$(document).ready(function() {

    $('#acceder1').click(function() {

        var nombre = document.getElementById("nombre").value;
        var pass = document.getElementById("passw").value;
        var Id_libro = document.getElementById("Id_libro").value;
        var url = 'verlibro.php?Id_libro='+Id_libro;   

            $.ajax({
                type: "POST",
                url: "log1.php",
                data: {
                    usuario: nombre,
                    pass: pass
                },
                success: function(response) {

                    if(response == true){
 
                        Swal.fire({
                            icon: 'success',
                            title: 'Acceso correcto',
                            showConfirmButton: false,
                            timer: 1400
                          }).then((value) => {
                            window.location.href=url;
                        });

                    }else if(response == false){
        
                        Swal.fire({
                            icon: 'error',
                            title: 'A ocurrido un error, intenta mas tarde',
                            showConfirmButton: false,
                            timer: 1400
                          }).then((value) => {
                            location.reload();
                        });
        
                    }
                   
                    
                }
            });
        

    });

});