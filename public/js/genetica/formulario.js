const formulario = document.getElementById('form-general');
const inputs = document.querySelectorAll('#form-general input');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
	folio: /^\d+[/](20[0-3][0-9])[-](G|Q|EXT)$/ // folio 0001/2021-G|Q|EXT
	//folio: /^\d+[/]\d{4}[-](G|Q|EXT)$/ // folio 0001/2021-G|Q|EXT
}

const campos = {
	folio: false
}

//dependiendo del input se realizan las funciones 
const validarFormulario = (e) =>{
	switch (e.target.name){
		case "folio":
			if (expresiones.folio.test(e.target.value)) {
				//getelementById regeresa el id de la clase
				document.getElementById('grupo__folio').classList.remove('input-group-incorrecto');
				document.getElementById('grupo__folio').classList.add('input-group-correcto');
				//querySelector se le pasa el id por eso signo #
				document.querySelector('#grupo__folio i').classList.add('fa-check-circle');
				document.querySelector('#grupo__folio i').classList.remove('fa-times-circle');
				//el . es porque estoy accediendo a una clase
				document.querySelector('#grupo__folio .formulario__input-error').classList.remove('formulario__input-error-activo');
				campos['folio'] = true;
			} else{
				document.getElementById('grupo__folio').classList.add('input-group-incorrecto');
				document.getElementById('grupo__folio').classList.remove('input-group-correcto');
				document.querySelector('#grupo__folio i').classList.add('fa-times-circle');
				document.querySelector('#grupo__folio i').classList.remove('fa-check-circle');
				document.querySelector('#grupo__folio .formulario__input-error').classList.add('formulario__input-error-activo');
				campos['folio'] = false;
			}
		//para trabajar con funciones
		//validarCampo(expresiones.folio, e.target, 'folio');	
		break;
	}
}

//esta funcion es para validar el input que se esta trabajando
// const validarCampo = (expresion, input, campo) =>{
// 	if (expresion.test(input.value)) {
// 		//importante cambiar las comilla simple por comilla de lado ``
// 		document.getElementById(`grupo__${campo}`).classList.remove('input-group-incorrecto');
// 		document.getElementById(`grupo__${campo}`).classList.add('input-group-correcto');
// 		//querySelector se le pasa el id por eso signo #
// 		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
// 		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
// 		//el . es porque estoy accediendo a una clase
// 		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
// 	} else{
// 		document.getElementById(`grupo__${campo}`).classList.add('input-group-incorrecto');
// 		document.getElementById(`grupo__${campo}`).classList.remove('input-group-correcto');
// 		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
// 		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
// 		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
// 	}
// }

//esta funcion recupera el input que se esta trabajando
inputs.forEach((input) => {
	//keyup cuando levante una tecla
	input.addEventListener('keyup', validarFormulario);
	//blur cuando des un click fuera 
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	//parar el envio de formulario
	e.preventDefault();

	if (campos.folio) {
		formulario.reset();

		document.querySelectorAll('.input-group-correcto').forEach((icono) => {
			icono.classList.remove('input-group-correcto');
		});
	}

});