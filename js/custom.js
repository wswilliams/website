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
		jQuery('#login').submit(function(){
				var dados = jQuery( this ).serialize();
	            var url="http://localhost:8000/";
				localStorage.setItem('url',url);
	                    
				jQuery.ajax({
					type: "POST",
					url: url+"api/authenticate",
					data: dados,
					success: function(data)
					{
					 try{
						// alert(data);
						var obj = JSON.parse(data);
						
			            localStorage.setItem('login',obj[0].name);
			            localStorage.setItem('token',obj[0].password);
			            
				                 $("#sucessoLogin").fadeIn("fast", function(e){ // Exibir o bloco de mensagem de sucesso
									$("#sucessoLogin").delay(1500).fadeOut("fast"); // Depois de exibido, eu dou um tempo de 1,5 segundos
									$("body").delay(1500).fadeOut('fast', function(e){ // Depois oculto toda o body e redireciono (apenas efeitos.)
										
										$.get(url+"api/welcome/"+localStorage.getItem('token'))
											.done(function( data ) {
												
												var token = true;
											if(data){
											  window.location=url+"app-welcome";
											 }
										});

										
									})
								});
	                  
	                   // document.getElementById('log').innerHTML =obj[0].password;
	                   }catch(e){
					        // alert(e); //error in the above string(in this case,yes)!
					        $("#cmpLogin").focus().select(); // defino o foco e seleciono o campo todo
							$("#falhaLogin").fadeIn("fast", function(e){ // Exibir o bloco de mensagem de erro
								$("#falhaLogin").delay(1500).fadeOut("fast"); // Depois de exibido, eu dou um tempo de 1,5 segundos e escondo.
							});
							// Storage.clear();
							localStorage.removeItem('token');
							localStorage.removeItem('login');
					    }                 
					}
				});
			
			return false;
		});

});