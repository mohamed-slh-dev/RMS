
// ---------------------------------- 1 ------------------------------

// hide and show purchased and regular sauce tab
// by default the regular appears
$('.sauce-switch-button').click(function() {

    // check if checked has active class
    let id = $(this).attr('id');


    // remove active and give outline-accent
    $('.sauce-switch-button').removeClass('active');
    $('.sauce-switch-button').removeClass('btn-accent');
    $('.sauce-switch-button').addClass('btn-outline-accent');


    // active the id class
    $('#'+id).addClass('btn-accent');
    $('#'+id).addClass('active');


    // hide both tabs
    $('#regular-sauce-tab').addClass('d-none');
    $('#purchased-sauce-tab').addClass('d-none');

    // take the id and add tab
    $('#'+id+'-tab').removeClass('d-none');


});