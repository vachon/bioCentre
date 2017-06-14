function include(fileName){
	var url = "login/" + fileName + ".js";
	jQuery.loadScript = function (url, callback) {
	    jQuery.ajax({
	        url: url,
	        dataType: 'json',
	        success: callback,
	        async: true
	    });
	}
}

var userLogin = {"login":"nicolas-vachon","password":"vachon"};

$(document).ready(function(){ 
	$('#btnLogin').on("click", function(){

		var valLogin = $('#login').val();
		var password = $('#password').val();

		var userLogin = include(valLogin);

		var login = userLogin.login;

		var passwd = userLogin.password;

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

