function getLogin(valLogin){
	console.log("get valog " + valLogin);
	$.getJSON( 'login/' + valLogin +'.json',function(user){
		return user.login;
	});
}

function getPassord(valLogin){
	$.getJSON( 'login/' + valLogin +'.json',function(user){
		/*return user.passord;*/
		return "test";
	});	
}