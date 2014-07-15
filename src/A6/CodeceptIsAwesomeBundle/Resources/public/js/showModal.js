jQuery(document).ready(function(){

    console.log('loaded modal');

    $('#modalButton').click(function() {
        $.ajax({
            url: '/popup.html',
            dataType: 'html',
            type: 'GET',
            success: function(data) {
                if (data) {
                    var $modal = $(data);
                    $('body').append($modal);
                    $modal.filter('.modal').modal();
                } else {
                    alert(data.dialog);
                }
            }
        });

    });
});