$(document).ready(function () {
	var signInBtn = $(".signInBtn");
	var signUpBtn = $(".signUnBtn");
	var signInPg = $(".signIn");

	signInBtn.on('click', function () {
		$(this).hide(300);
		signInPg.show(800);
	});
});