
function bntSubmitEventos(){

	jQuery('#formMensagem').submit(function(event){
		var dados = jQuery( this ).serialize();
				    	
				    	jQuery.ajax({
					         type: "POST",
					         url: localStorage.getItem('url')+"api/eventos",
					         data: dados,
					         success: function (data, status, jqXHR) {
					             // do something
					           try{
									var obj=JSON.stringify(data);
									 
									$("#sucessoAdd").fadeIn("fast", function(e){ // Exibir o bloco de mensagem de sucesso
										$("#sucessoAdd").delay(1500).fadeOut("fast");
									});
									bntresetCamposEventos();
					             }catch(e){
					             	$("#falhaFail").fadeIn("fast", function(e){ // Exibir o bloco de mensagem de sucesso
										$("#falhaFail").delay(1500).fadeOut("fast");
									});
					             }
					         },
					     
					         error: function (jqXHR, status) {
					             // error handler
					     
					         }     
					     });
					
		event.preventDefault();
	});

};
function bntresetCamposEventos(){
	
	$('#nome').val('');
	$('#data').val('');
	$("#link").val('');
	$("#descricao").val('');
};