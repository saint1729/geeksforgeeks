(function( $ ) {
	$( document ).ready(function() {
		$( '#recaptcha_widget_div #recaptcha_response_field' ).live( 'input paste change', function() {
			$error = $( this ).parents( '#recaptcha_widget_div' ).next( '#gglcptch_error' );
			if( $error.length ) {
				$error.remove();
			}
		});
		$( 'form' ).submit( function( e ) {
			var $form = $( this ),
				$captcha = $form.find( '#recaptcha_widget_div:visible' ),
				$captcha_v2 = $form.find( '.g-recaptcha:visible' );
			if ( $captcha.length ) {
				$.ajax({
					async   : false,
					cache   : false,
					type    : 'POST',
					url     : ajaxurl,
					headers : {
						'Content-Type' : 'application/x-www-form-urlencoded'
					},
					data    : {
						action: 'gglcptch_captcha_check',
						recaptcha_challenge_field : $( '#recaptcha_challenge_field' ).val(),
						recaptcha_response_field  : $( '#recaptcha_response_field' ).val()
					},
					success : function( data ) {
						if ( data == 'error' ) {
							if ( $captcha.next( '#gglcptch_error' ).length == 0 ) {
								$captcha.after( '<label id="gglcptch_error">' + gglcptch_error_msg + '</label>' );
							}
							$( '#recaptcha_reload' ).trigger( 'click' );
							e.preventDefault ? e.preventDefault() : (e.returnValue = false);
							return false;
						}
					},
					error: function( request, status, error ) {
						if ( $captcha.next( '#gglcptch_error' ).length == 0 ) {
							$captcha.after( '<label id="gglcptch_error">' + request.status + ' ' + error + '</label>' );
						}
						$( '#recaptcha_reload' ).trigger( 'click' );
						e.preventDefault ? e.preventDefault() : (e.returnValue = false);
						return false;
					}
				});
				$( '#recaptcha_reload' ).trigger( 'click' );
			} else if ( $captcha_v2.length ) {
				$.ajax({
					async   : false,
					cache   : false,
					type    : 'POST',
					url     : ajaxurl,
					headers : {
						'Content-Type' : 'application/x-www-form-urlencoded'
					},
					data    : {
						action: 'gglcptch_captcha_check',
						'g-recaptcha-response'  : $form.find( '.g-recaptcha-response' ).val()
					},
					success : function( data ) {
						if ( data == 'error' ) {
							if ( $captcha_v2.next( '#gglcptch_error' ).length == 0 ) {
								$captcha_v2.after( '<label id="gglcptch_error">' + gglcptch_error_msg + '</label>' );
								$( "#gglcptch_error" ).fadeOut( 4000, function() {
									$( "#gglcptch_error" ).remove();
								});
								$( 'html, body' ).animate({ scrollTop: $captcha_v2.offset().top - 50 }, 500);
							}
							e.preventDefault ? e.preventDefault() : (e.returnValue = false);
							return false;
						}
					},
					error: function( request, status, error ) {
						if ( $captcha_v2.next( '#gglcptch_error' ).length == 0 ) {
							$captcha_v2.after( '<label id="gglcptch_error">' + request.status + ' ' + error + '</label>' );
						}
						e.preventDefault ? e.preventDefault() : (e.returnValue = false);
						return false;
					}
				});
			}
		});
	});
})(jQuery);