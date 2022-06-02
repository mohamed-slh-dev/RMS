$("#default_meals").click(function(){
    $("#default_meals").addClass("active");
    $("#all_meals").removeClass("active");

    $("#all_meals_div").addClass("d-none");
        $("#default_meals_div").removeClass("d-none");
}); 


$("#all_meals").click(function(){
    $("#all_meals").addClass("active");
    $("#default_meals").removeClass("active");

    $("#all_meals_div").removeClass("d-none");
        $("#default_meals_div").addClass("d-none");
}); 

// ---------------------------------- 1 -------------------------------------


// 1- scroll right in carousal using a button
$('.carousal-scroll-button-right').click(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again to a class name of button
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }


    // scroll right on carousal
    document.getElementById('horizontal-carousal-'+idclone).scrollLeft += 300;




}); 
//end scroll right button action







// 2- scroll left in carousal using a button
$('.carousal-scroll-button-left').click(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again to a class name of button
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }


    // scroll right on carousal
    document.getElementById('horizontal-carousal-'+idclone).scrollLeft -= 300;




}); 
//end scroll left button action













// ---------------------------------- 2 -------------------------------------
// modal for breakfast - launch - dinner - snack - post workout - pre workout


// 1-breakfast checkboxes action
$('.meal-breakfast').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }


    



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-breakfast-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-breakfast-label-'+idclone).removeClass('active');

    }





    // check if there's at least one card active
    let status = 0; // if 1 then there's active

    $('.meal-breakfast-labels').each(function() {

        // if one is active
        if ($(this).hasClass('active')) {
            
            $('.meal-breakfast-default').attr('required', true);
            $('.meal-breakfast-default-label').removeClass('active');
            $('.meal-breakfast-default').prop('checked', false);
            
            status = 1;
        }
    });


    // remove default card props
    if (status == 0) {
        $('.meal-breakfast-default').prop('checked', false);
        $('.meal-breakfast-default').attr('required', false);
        $('.meal-breakfast-default-label').removeClass('active');
    }




});
// end breakfast checboxes action











// 2- launch checkboxes action
$('.meal-launch').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-launch-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-launch-label-'+idclone).removeClass('active');

    }






    // check if there's at least one card active
    let status = 0; // if 1 then there's active

    $('.meal-launch-labels').each(function() {

        // if one is active
        if ($(this).hasClass('active')) {
            
            $('.meal-launch-default').attr('required', true);
            $('.meal-launch-default-label').removeClass('active');
            $('.meal-launch-default').prop('checked', false);
            
            status = 1;
        }
    });


    // remove default card props
    if (status == 0) {
        $('.meal-launch-default').prop('checked', false);
        $('.meal-launch-default').attr('required', false);
        $('.meal-launch-default-label').removeClass('active');
    }




});
// end launch checboxes action










// 3- dinner checkboxes action
$('.meal-dinner').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-dinner-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-dinner-label-'+idclone).removeClass('active');

    }




    // check if there's at least one card active
    let status = 0; // if 1 then there's active

    $('.meal-dinner-labels').each(function() {

        // if one is active
        if ($(this).hasClass('active')) {
            
            $('.meal-dinner-default').attr('required', true);
            $('.meal-dinner-default-label').removeClass('active');
            $('.meal-dinner-default').prop('checked', false);
            
            status = 1;
        }
    });


    // remove default card props
    if (status == 0) {
        $('.meal-dinner-default').prop('checked', false);
        $('.meal-dinner-default').attr('required', false);
        $('.meal-dinner-default-label').removeClass('active');
    }



});
// end dinner checboxes action








// 4- snack checkboxes action
$('.meal-snack').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-snack-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-snack-label-'+idclone).removeClass('active');

    }





    // check if there's at least one card active
    let status = 0; // if 1 then there's active

    $('.meal-snack-labels').each(function() {

        // if one is active
        if ($(this).hasClass('active')) {
            
            $('.meal-snack-default').attr('required', true);
            $('.meal-snack-default-label').removeClass('active');
            $('.meal-snack-default').prop('checked', false);
            
            status = 1;
        }
    });


    // remove default card props
    if (status == 0) {
        $('.meal-snack-default').prop('checked', false);
        $('.meal-snack-default').attr('required', false);
        $('.meal-snack-default-label').removeClass('active');
    }



});
// end snack checboxes action










// 5- preworkout checkboxes action
$('.meal-preworkout').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-preworkout-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-preworkout-label-'+idclone).removeClass('active');

    }




    // check if there's at least one card active
    let status = 0; // if 1 then there's active

    $('.meal-preworkout-labels').each(function() {

        // if one is active
        if ($(this).hasClass('active')) {
            
            $('.meal-preworkout-default').attr('required', true);
            $('.meal-preworkout-default-label').removeClass('active');
            $('.meal-preworkout-default').prop('checked', false);
            
            status = 1;
        }
    });


    // remove default card props
    if (status == 0) {
        $('.meal-preworkout-default').prop('checked', false);
        $('.meal-preworkout-default').attr('required', false);
        $('.meal-preworkout-default-label').removeClass('active');
    }



});
// end preworkout checboxes action









// 6- postworkout checkboxes action
$('.meal-postworkout').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-postworkout-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-postworkout-label-'+idclone).removeClass('active');

    }



    // check if there's at least one card active
    let status = 0; // if 1 then there's active

    $('.meal-postworkout-labels').each(function() {

        // if one is active
        if ($(this).hasClass('active')) {
            
            $('.meal-postworkout-default').attr('required', true);
            $('.meal-postworkout-default-label').removeClass('active');
            $('.meal-postworkout-default').prop('checked', false);
            
            status = 1;
        }
    });


    // remove default card props
    if (status == 0) {
        $('.meal-postworkout-default').prop('checked', false);
        $('.meal-postworkout-default').attr('required', false);
        $('.meal-postworkout-default-label').removeClass('active');
    }




});
// end postworkout checboxes action

























// ------------------------ other carousals (if second carousal exists)

// 1-breakfast checkboxes action
$('.meal-breakfast-second').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-breakfast-second-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-breakfast-second-label-'+idclone).removeClass('active');

    }




});
// end breakfast checboxes action











// 2- launch checkboxes action
$('.meal-launch-second').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-launch-second-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-launch-second-label-'+idclone).removeClass('active');

    }




});
// end launch checboxes action










// 3- dinner checkboxes action
$('.meal-dinner-second').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-dinner-second-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-dinner-second-label-'+idclone).removeClass('active');

    }




});
// end dinner checboxes action








// 4- snack checkboxes action
$('.meal-snack-second').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-snack-second-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-snack-second-label-'+idclone).removeClass('active');

    }




});
// end snack checboxes action










// 5- preworkout checkboxes action
$('.meal-preworkout-second').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-preworkout-second-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-preworkout-second-label-'+idclone).removeClass('active');

    }




});
// end preworkout checboxes action









// 6- postworkout checkboxes action
$('.meal-postworkout-second').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {


        // add class active to label
        $('#meal-postworkout-second-label-'+idclone).addClass('active');


    }


    // if not checked
    else {

        // remove active class
        $('#meal-postworkout-second-label-'+idclone).removeClass('active');

    }




});
// end postworkout checboxes action

























// ------------------------  carousal for default (choose only one meal)

// 1-breakfast checkboxes action
$('.meal-breakfast-default').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // remove all checks from other labels + checkboxes + attr required
    $('.meal-breakfast-default').prop('checked', false);
    $('.meal-breakfast-default').attr('required', false);

    $('.meal-breakfast-default-label').removeClass('active');




    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {

        // add class active to label
        $('#meal-breakfast-default-'+idclone).prop('checked', true);
        $('#meal-breakfast-default-label-'+idclone).addClass('active');


    } else {

        // make checkbox checked too if its checked + label
        $('#meal-breakfast-default-'+idclone).prop('checked', true);
        $('#meal-breakfast-default-label-'+idclone).addClass('active');

    }






});
// end breakfast checboxes action











// 2- launch checkboxes action
$('.meal-launch-default').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // remove all checks from other labels + checkboxes
    $('.meal-launch-default').prop('checked', false);
    $('.meal-launch-default').attr('required', false);


    $('.meal-launch-default-label').removeClass('active');


    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {

        // add class active to label
        $('#meal-launch-default-'+idclone).prop('checked', true);
        $('#meal-launch-default-label-'+idclone).addClass('active');


    } else {

        // make checkbox checked too if its checked + label
        $('#meal-launch-default-'+idclone).prop('checked', true);
        $('#meal-launch-default-label-'+idclone).addClass('active');

    }
    



});
// end launch checboxes action










// 3- dinner checkboxes action
$('.meal-dinner-default').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // remove all checks from other labels + checkboxes
    $('.meal-dinner-default').prop('checked', false);
    $('.meal-dinner-default').attr('required', false);

    $('.meal-dinner-default-label').removeClass('active');


    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {

        // add class active to label
        $('#meal-dinner-default-'+idclone).prop('checked', true);
        $('#meal-dinner-default-label-'+idclone).addClass('active');


    } else {

        // make checkbox checked too if its checked + label
        $('#meal-dinner-default-'+idclone).prop('checked', true);
        $('#meal-dinner-default-label-'+idclone).addClass('active');

    }




});
// end dinner checboxes action








// 4- snack checkboxes action
$('.meal-snack-default').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // remove all checks from other labels + checkboxes
    $('.meal-snack-default').prop('checked', false);
    $('.meal-snack-default').attr('required', false);


    $('.meal-snack-default-label').removeClass('active');


    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {

        // add class active to label
        $('#meal-snack-default-'+idclone).prop('checked', true);
        $('#meal-snack-default-label-'+idclone).addClass('active');


    } else {

        // make checkbox checked too if its checked + label
        $('#meal-snack-default-'+idclone).prop('checked', true);
        $('#meal-snack-default-label-'+idclone).addClass('active');

    }




});
// end snack checboxes action










// 5- preworkout checkboxes action
$('.meal-preworkout-default').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



     // remove all checks from other labels + checkboxes
    $('.meal-preworkout-default').prop('checked', false);
    $('.meal-preworkout-default').attr('required', false);


    $('.meal-preworkout-default-label').removeClass('active');


    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {

        // add class active to label
        $('#meal-preworkout-default-'+idclone).prop('checked', true);
        $('#meal-preworkout-default-label-'+idclone).addClass('active');


    } else {

        // make checkbox checked too if its checked + label
        $('#meal-preworkout-default-'+idclone).prop('checked', true);
        $('#meal-preworkout-default-label-'+idclone).addClass('active');

    }




});
// end preworkout checboxes action









// 6- postworkout checkboxes action
$('.meal-postworkout-default').change(function() {

    // 1- get id
    let id = $(this).attr('id');

    // 2- remove the last number from id then add number again with 'label'
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // remove all checks from other labels + checkboxes
    $('.meal-postworkout-default').prop('checked', false);
    $('.meal-postworkout-default').attr('required', false);


    $('.meal-postworkout-default-label').removeClass('active');


    // -------------------
    // check if its checked
    if ($('#'+id).is(':checked')) {

        // add class active to label
        $('#meal-postworkout-default-'+idclone).prop('checked', true);
        $('#meal-postworkout-default-label-'+idclone).addClass('active');


    } else {

        // make checkbox checked too if its checked + label
        $('#meal-postworkout-default-'+idclone).prop('checked', true);
        $('#meal-postworkout-default-label-'+idclone).addClass('active');

    }





});
// end postworkout checboxes action











// ------------------------------------ cusine select ------------------------


$('.cuisine-select-1').change(function() {


    // get the val
    let id = $(this).val();

    // alert(id);

    // show meal with the cuisine id and hide others
    // $('.cuisine-meal').attr('style', 'display:none !important');

    // only
    // $('.cuisine-meal-'+id).attr('style', 'display:inline-block !important');



}); //end cuisine select 1
