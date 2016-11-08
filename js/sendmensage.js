/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function(){
		jQuery('#formMensagem').submit(function(){
				var dados = jQuery( this ).serialize();
	            var url="http://localhost:8000/";
				localStorage.setItem('url',url);
	             

				jQuery.ajax({
					type: "POST",
					url: url+"api/mensagem",
					data: dados,
					success: function(data)
					{
					 try{
						
						var obj = JSON.parse(data);

						      $("#sucessoMensage").fadeIn("fast", function(e){ // Exibir o bloco de mensagem de sucesso
									$("#sucessoMensage").delay(1500).fadeOut("fast"); // Depois de exibido, eu dou um tempo de 1,5 segundos
								});
	                    limparCampos();
	                   }catch(e){
					         //error in the above string(in this case,yes)!
							$("#falhaMensage").fadeIn("fast", function(e){ // Exibir o bloco de mensagem de erro
								$("#falhaMensage").delay(1500).fadeOut("fast"); // Depois de exibido, eu dou um tempo de 1,5 segundos e escondo.
							});
							limparCampos();
					    }                 
					}
				});
			
			return false;

			function limparCampos(){
				$('#name').val('');
	            $('#email').val('');
	            $('#subject').val('');
	            $('#message').val('');
			}
		});

});