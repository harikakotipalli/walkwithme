$(document).ready(function () {
	var signInBtn = $("#signInBtn");
	var signInBtn2 = $("#signInBtn2");
	var signUpBtn = $("#signUnBtn");
	// Pages
	var homePg = $("#homePg");
	var signUpPg = $("#signUp");
	var signInPg = $("#signIn");
	var app= $("#app");

	signInBtn.on('click', function () {
		homePg.hide(300);
		signInPg.show(800);
	});
	signInBtn2.on('click', function () {
		signInPg.hide(300);
		app.show(800);
	});
});