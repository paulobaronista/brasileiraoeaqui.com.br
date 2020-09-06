$(document).ready(function () {
	$("#close").click(function () {
		$("#aviso").hide();
		window.location.href = "https://www.brasileiraoeaqui.com.br"
	});
});

$(function(){
	$('.nome').clear();
	$('.email').clear();
	$('.phone').clear();
	$('.msg').clear();

	$('.btn_enviar').on('click', function(){
		var n, e, t, m, s;
		var msg = "";
		n = $('.nome').val();
		e = $('.email').val();
		t = $('.phone').val();
		m = $('.msg').val();
		});

});
