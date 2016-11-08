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
		
	$("#eventos_add").click(function(e){ 	
		var url = localStorage.getItem('url');
		var vToken = localStorage.getItem('token');

		$.get(url+"api/eventos/adicionar/"+vToken )
			.done(function( data ) {
			$("#containerHtml").empty();
			$("#containerHtml").append(data);
			
			document.getElementById('token1').innerHTML =vToken;
			$("#token").val(vToken);
			closePainel();		  	
		});

	});
	function closePainel(){
				$('.clickable').click(function(e){
		          var effect = $(this).data('effect');
		              $(this).closest('.panel')[effect]();
		        })
			}
});