$(document).ready(function() {
	$('.sign-up-form').on('submit', submit);
	
});

function submit(e) {
	$('.sign-up-container').addClass('submitted');
	//e.preventDefault();
}
$( '#btn-validate' ).click(function(){
  var $captcha = $( '#recaptcha' ),
      response = grecaptcha.getResponse();
  
  if (response.length === 0) {
    $( '.msg-error').text( "reCAPTCHA is mandatory" );
    if( !$captcha.hasClass( "error" ) ){
      $captcha.addClass( "error" );
    }
  } else {
    $( '.msg-error' ).text('');
    $captcha.removeClass( "error" );
    
  }
})