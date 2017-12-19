
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/webflow.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script>

	$( "input[name='beneficiario'][value='No']" ).prop('checked',true);
	$(".input-text").addClass("form-input");
	$(".checkout_coupon").css('display', 'block !important')


	$("input[name='beneficiario'][value='Si']").click(function() {
        $('#nombre_regalo_field').css('display','block' );
		$('#mensaje_regalo_field').css('display','block' );
	});

	$("input[name='beneficiario'][value='No']").click(function() {
        $('#nombre_regalo_field').css('display','none' );
		$('#mensaje_regalo_field').css('display','none' );
		$('#nombre_regalo_field input').val("");
		$('#mensaje_regalo_field input').val("");


		
	});




	// $( "input[name='beneficiario'][value='Si']" ).prop('checked',true).each(
    // 	function() {

	// 		$('#nombre_regalo_field').css('visibility','visible' );
	// 		$('#mensaje_regalo_field').css('visibility','visible' );

	// 	}
		
	// );

</script>
<?php wp_footer(); ?>
</body>
</html>