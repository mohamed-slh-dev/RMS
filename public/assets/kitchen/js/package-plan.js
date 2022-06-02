

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