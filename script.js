$(document).on("scroll", function () {
	if ($(document).scrollTop() > 100) {
		$("header").addClass("small");
	} else {
		$("header").removeClass("small");
	}
});

// pparte das logos


// ALERTA

function alertaEmail(){

	const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
	const alert = (message, type) => {
		const wrapper = document.createElement('div')
		wrapper.innerHTML = [
		  `<div class="alert alert-${type} alert-dismissible" role="alert">`,
		  `   <div>${message}</div>`,
		  '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
		  '</div>'
		].join('')
	  
		alertPlaceholder.append(wrapper)
	  }
	
	const nome = document.getElementById("name").value;
	const email = document.getElementById("email").value;
	const mensagem = document.getElementById("message").value;
	const alertTrigger = document.getElementById('liveAlertBtn');
	
	if(!nome || !email || !mensagem){
			alert('Um dos campos está vazio, preencha corretamente!', 'danger')
		
	} else{
			alert('Sua mensagem foi enviada com sucesso!', 'success')
	}
}

	



// muda os negocio na tela do tabret
function trocafoto(){
	var image = document.getElementById("image_tablet");


	// TROCA FOTO
	if (image.getAttribute('src') == "imagens/PRATICIDADE CUMPLICIDADE responsabilidade.gif"){
		
		image.src = "imagens/1920.gif";

	} else {

		image.src = "imagens/PRATICIDADE CUMPLICIDADE responsabilidade.gif";
	
	}





}