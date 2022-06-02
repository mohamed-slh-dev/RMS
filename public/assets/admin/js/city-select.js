



// ----------------------------------- 1 -------------------------------

$('.city-select-1').change(function() {


    
    // get the val
    let id = $(this).val();

    // hide city district inside district-select-1
    $('.district-select-1 option.city-district').addClass('d-none');
    $('.district-select-1').val('');

    // only 
    $('.district-select-1 option.city-district-'+id).removeClass('d-none');




}); //end city







// ----------------------------------- 2 -------------------------------

$('.city-select-2').change(function() {


    
    // get the val
    let id = $(this).val();

    // hide city district inside district-select-1
    $('.district-select-2 option.city-district').addClass('d-none');
    $('.district-select-2').val('');

    // only 
    $('.district-select-2 option.city-district-'+id).removeClass('d-none');




}); //end city