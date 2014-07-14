jQuery(document).ready(function(){

    console.log('loaded');

    var showFlashMessageCheckbox = $('#form_showFlash');
    var submitButton = $('#form_save');
    var hiddenMessage = $('#hiddenMessage');

    hiddenMessage.hide();

    submitButton.on('click', function(){
        if ( showFlashMessageCheckbox.prop('checked') === false ) {
            hiddenMessage.show();
        }
    });

});