var bs = jQuery.noConflict();
bs( document ).ready(function() {

    bs( ".et_pb_tabs_controls li" ).click(function( event ) {
        event.preventDefault();

        bs('.et_pb_tabs_controls li').each(function(i, obj) {
            bs(this).removeClass( 'remove-bottom-border' );
        });

        bs(this).addClass( 'remove-bottom-border' );
    });
});
