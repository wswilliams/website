jQuery(document).ready(function(){
	$("#btn_login").click(function(e){
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
		localStorage.removeItem('token');
		localStorage.removeItem('login');
        window.location=localStorage.getItem('url')+'app';
	});
});
