// ---------------------------------- 1 -------------------------------------


// 1- hide and display boxes
$('.move-button').click(function() {

    // check group 1 if has d-none
    $('.m-boxes-1').toggleClass('d-none');
    $('.m-boxes-2').toggleClass('d-none');
    
    
});








// ---------------------------------- 2 -------------------------------------


// 1- store - checkbox
$('#all-deliveries-checkbox').change(function() {


    // if checked
    if ($(this).is(':checked')) {

        // hide custom wrapper
        $('#custom-deliveries-wrapper').addClass('d-none');
        $('#all-deliveries-input').attr('required', false);


    }


    // unchecked
    else {

        // hide custom wrapper
        $('#custom-deliveries-wrapper').removeClass('d-none');
        $('#all-deliveries-input').attr('required', true);

    }

    
});




