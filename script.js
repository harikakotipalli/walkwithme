$(document).ready(function () {
	var signInBtt = $(".signInBtt");
	var signUpBtt = $(".signUnBtt");
	var signInPg = $(".signIn");

	signInBtt.on('click', function () {
		$(this).hide(300);
		signInPg.show(800);
	});
});