



// ----------------------------------- 1 -------------------------------

$('.supplier-select-1').change(function() {


    
    // get the val
    let id = $(this).val();

    // hide city district inside district-select-1
    $('.supplier-component-select-1').val('');
    $('.supplier-component-select-1 option.supplier-component').addClass('d-none');

    // only
    $('.supplier-component-select-1 option.supplier-component-'+id).removeClass('d-none');




}); //end supplier select 1







// ----------------------------------- 2 -------------------------------
$('.supplier-select-2').change(function() {


    
    // get the val
    let id = $(this).val();

    // hide comonents inside supplier-select-2
    $('.supplier-component-select-2').val('');
    $('.supplier-component-select-2 option.supplier-component').addClass('d-none');

    // only 
    $('.supplier-component-select-2 option.supplier-component-'+id).removeClass('d-none');




}); //end supplier select 2