jQuery(document).ready(function(){

    console.log('loaded');

    var submitButton = $('#form_save');

    submitButton.on('click', function(){
        if (!('#form_showFlash:checked')) {
            alert('fuck');
        }
    });

});