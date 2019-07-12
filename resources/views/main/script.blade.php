
<script src="{{ asset('lib/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('lib/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('lib/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('lib/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('lib/js/main.js') }}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<script>
	$('.cboCat').on('change', function(){
		var cboId = $(this).val();
		if (cboId == 'drawing' || cboId == 'painting') {
			$('.content1').toggle();
			$('.content2').hide();
			$('.content3').hide();

		}
		else if (cboId == 'picture'){
			$('.content2').toggle();
			$('.content1').hide();
			$('.content3').hide();
		}
		else if(cboId == 'sculpture' || cboId == 'carving'){
			$('.content3').toggle();
			$('.content1').hide();
			$('.content2').hide();
		}
	});
</script>
