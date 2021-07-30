
// Mensaje de confirmacion de enviado

function btnEnviar(){
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

		});
	}

  
  // Mensaje de error de enviado de correo
  function Error(){
  Swal.fire({
	icon: 'error',
	title: 'Error Mensaje no enviado',
	text: 'Hubo un problema, al momento de enviar su correo por favor intentelo mas tarde',
	confirmButtonText: 'Aceptar',
	showConfirmButton: true,
	  confirmButtonColor: '#FF8000',
	  timer: '5000',
	  timerProgressBar: true
  });
}