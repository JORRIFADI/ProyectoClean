
// Validacion de datos y elerta de enviado
$(document).ready(function () {
    $(".formulario-contacto").bind("submit",function(){
       
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),

            success: function(){
                
                Swal.fire({
                    title: 'Su mensaje a sido enviado',
                    text: 'Gracias por comunicarse con nosotros le responderemos en la brevedad',
                    icon: 'success',
                    confirmButtonText: 'Aceptar',
                    timer: '5000',
                    timerProgressBar: true,
                    showConfirmButton: true,
                    confirmButtonColor: '#FF8000',
                    buttonsStyling: true,
                    showCloseButton: true, 
                    closeButtonAriaLabel: 'Cerrar ventana',     
                       }
                       
                    )

                    setTimeout("location.reload()", 3500); },
            error: function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Error Mensaje no enviado',
                    text: 'Hubo un problema, al momento de enviar su correo por favor verifique los datos o intentelo mas tarde',
                    confirmButtonText: 'Aceptar',
                    showConfirmButton: true,
                      confirmButtonColor: '#FF8000',
                      timer: '5000',
                      timerProgressBar: true
                  })
            },

        });

        return false ;
        
    });
});
