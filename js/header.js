$(function(){
    $( window ).scroll( function() {
  	if ( $( this ).scrollTop() > 50 ) {
  		$('#go_top').addClass('on');
  	} else {
  		$('#go_top').removeCalss('on');
  	}
  } );
})
function go_top(){
  $( 'html, body' ).animate( { scrollTop : 0 }, 400 );
  	return false;
}
