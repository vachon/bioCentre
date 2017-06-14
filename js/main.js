$(document).ready(function(){ 
	$('#btnLogin').on("click", function(){
		var valLogin = $('#login').val();
		var password = $('#password').val();

		var login = 	$.getJSON( 'login/' + valLogin +'.json',function(user){
		return user.login;
	});
		var passwd = 	$.getJSON( 'login/' + valLogin +'.json',function(user){
		return user.login;
	});
		passwd = JSON.parse(passwd);
		if(passwd == password){
			console.log("ok");
		}
		else{
			console.log('false');
			console.log("login : " + login);
			console.log("valLogin : " + valLogin);
			console.log("passwd : " + passwd);
			console.log("password : " + password);
		}
	});
});

