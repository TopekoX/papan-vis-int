$(document).ready(function(){

	$("#btn-view").hide();

	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('add_form_kendaraan.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});

	$("#btn-view").click(function(){

		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="index.php";
		});
	});

	$("#link-kendaraan").click(function(){

		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="index.php";
		});
	});

	$("#link-transaksi").click(function(){

		$("body").fadeOut('slow', function()
		{
			$("body").load('transaksi.php');
			$("body").fadeIn('slow');
			window.location.href="transaksi.php";
		});
	});

	$("#link-instansi").click(function(){

		$("body").fadeOut('slow', function()
		{
			$("body").load('instansi.php');
			$("body").fadeIn('slow');
			window.location.href="instansi.php";
		});
	});

});
