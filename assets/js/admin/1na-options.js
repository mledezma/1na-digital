jQuery(function($) {

    $(document).ready(function(){

        $('#insert-1na-logo-image').click(function(e){
            e.preventDefault();
            var frame = wp.media.frames.file_frame = wp.media({
                title: 'Select or Upload Media',
                multiple: false,
                button: {text: 'Use selected media'},
                frame: 'post'
            });

            frame.on('insert', function(){
                var selection = frame.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    $( '#1na-logo-preview' ).attr( 'src', attachment.url );
                    $( '#1na_logo_image' ).val( attachment.url );
                });
            });

            frame.open();
        });

        $('#insert-1na-logowhite-image').click(function(e){
            e.preventDefault();
            var frame = wp.media.frames.file_frame = wp.media({
                title: 'Select or Upload Media',
                multiple: false,
                button: {text: 'Use selected media'},
                frame: 'post'
            });

            frame.on('insert', function(){
                var selection = frame.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    $( '#1na-logowhite-preview' ).attr( 'src', attachment.url );
                    $( '#1na_logowhite_image' ).val( attachment.url );
                });
            });

            frame.open();
        });

        $('#insert-1na-logobig-image').click(function(e){
            e.preventDefault();
            var frame = wp.media.frames.file_frame = wp.media({
                title: 'Select or Upload Media',
                multiple: false,
                button: {text: 'Use selected media'},
                frame: 'post'
            });

            frame.on('insert', function(){
                var selection = frame.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    $( '#1na-logobig-preview' ).attr( 'src', attachment.url );
                    $( '#1na_logo_big' ).val( attachment.url );
                });
            });

            frame.open();
        });

        $('#insert-1na-projects-image').click(function(e){
            e.preventDefault();
            var frame = wp.media.frames.file_frame = wp.media({
                title: 'Select or Upload Media',
                multiple: false,
                button: {text: 'Use selected media'},
                frame: 'post'
            });

            frame.on('insert', function(){
                var selection = frame.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    $( '#1na-project-img-preview' ).attr( 'src', attachment.url );
                    $( '#1na_seccion3_img' ).val( attachment.url );
                });
            });

            frame.open();
        });


        $('#insert-1na-projects-bgimage').click(function(e){
            e.preventDefault();
            var frame = wp.media.frames.file_frame = wp.media({
                title: 'Select or Upload Media',
                multiple: false,
                button: {text: 'Use selected media'},
                frame: 'post'
            });

            frame.on('insert', function(){
                var selection = frame.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    $( '#1na-project-bgimg-preview' ).attr( 'src', attachment.url );
                    $( '#1na_seccion3_bgimg' ).val( attachment.url );
                });
            });

            frame.open();
        });


        $('#insert-1na-contact-bgimage').click(function(e){
            e.preventDefault();
            var frame = wp.media.frames.file_frame = wp.media({
                title: 'Select or Upload Media',
                multiple: false,
                button: {text: 'Use selected media'},
                frame: 'post'
            });

            frame.on('insert', function(){
                var selection = frame.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    $( '#1na-contact-bgimg-preview' ).attr( 'src', attachment.url );
                    $( '#1na_seccion4_bgimg' ).val( attachment.url );
                });
            });

            frame.open();
        });

        $('#insert-1na-footer-logo').click(function(e){
            e.preventDefault();
            var frame = wp.media.frames.file_frame = wp.media({
                title: 'Select or Upload Media',
                multiple: false,
                button: {text: 'Use selected media'},
                frame: 'post'
            });

            frame.on('insert', function(){
                var selection = frame.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    $( '#1na-footer-logo-preview' ).attr( 'src', attachment.url );
                    $( '#1na_footer_logo' ).val( attachment.url );
                });
            });

            frame.open();
        });

        $('#insert-1na-footer-bgimage').click(function(e){
            e.preventDefault();
            var frame = wp.media.frames.file_frame = wp.media({
                title: 'Select or Upload Media',
                multiple: false,
                button: {text: 'Use selected media'},
                frame: 'post'
            });

            frame.on('insert', function(){
                var selection = frame.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    $( '#1na-footer-bgimg-preview' ).attr( 'src', attachment.url );
                    $( '#1na_footer_bgimg' ).val( attachment.url );
                });
            });

            frame.open();
        });

        $('#insert-1na-footer-bgwimage').click(function(e){
            e.preventDefault();
            var frame = wp.media.frames.file_frame = wp.media({
                title: 'Select or Upload Media',
                multiple: false,
                button: {text: 'Use selected media'},
                frame: 'post'
            });

            frame.on('insert', function(){
                var selection = frame.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    $( '#1na-footer-bgwimg-preview' ).attr( 'src', attachment.url );
                    $( '#1na_footer_bgwimg' ).val( attachment.url );
                });
            });

            frame.open();
        });
    });
});