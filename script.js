$(document).ready(function () {
	var signInBtn = $("#signInBtn");
	var signUpBtn = $("#signUnBtn");
	// Pages
	var homePg = $("#homePg");
	var signUpPg = $("#signUp");
	var signInPg = $("#signIn");
	var signInPg = $("#signIn");

	signInBtn.on('click', function () {
		homePg.hide(300);
		signInPg.show(800);
	});
});