
// ----------------------------------- 1 ------------------------------------

$('.item-checkbox').change(function() {


    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }


    // is checked
    if ($(this).is(':checked')) {

        $('#item-quantity-'+idclone).attr('disabled', false);
        $('#item-quantity-'+idclone).attr('required', true);


    } else {

        $('#item-quantity-'+idclone).attr('disabled', true);
        $('#item-quantity-'+idclone).attr('required', false);

    }


});