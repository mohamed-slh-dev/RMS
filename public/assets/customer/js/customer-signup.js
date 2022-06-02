

// --------------------------------------- 1 -----------------------------------------
// gender radiobuttons
$('.gender-radiobuttons').click(function() {


    // get id
    let id = $(this).attr('id');

    // check which radiobutton is active
    if (id == "male-radio-label") {

        // make male label active + remove class from female
        $('#female-radio-label').removeClass('active');
        $('#male-radio-label').addClass('active');
    }

    else {

        // make female label active + remove class from male
        $('#male-radio-label').removeClass('active');
        $('#female-radio-label').addClass('active');

    }

});
// end gender radiobutton action














// --------------------------------------- 2 -----------------------------------------
// goal options radiobuttons
$('.goal-options-labels').click(function() {


    // remove active from all labels
    $('.goal-options-labels').removeClass('active');
    $(this).addClass('active');

});








// --------------------------------------- 3 -----------------------------------------
// active options radiobuttons
$('.active-option-col').click(function() {


    // remove active from all labels
    $('.active-option-col').removeClass('active');
    $(this).addClass('active');

});




// --------------------------------------- 4 -----------------------------------------
// active dietary rows radiobuttons
$('.dietary-labels').click(function() {


    // remove active from all labels
    $('.dietary-labels').removeClass('active');
    $(this).addClass('active');


    // make dietary buttons active + parag also
    let id = $(this).attr('id');

    if ($('#'+id+' .dietary-buttons').hasClass('active')) {

    }


    else {

        // on buttons
        $('.dietary-buttons').removeClass('active');
        $('#'+id+' .dietary-buttons').addClass('active');

        // on paragraph
        $('.dietary-parags').height(0);
        $('#'+id+' .dietary-parags').height(126);
    }
    



});






// --------------------------------------- 5 -----------------------------------------
// show dietry info when button pressed
$('.dietary-buttons').click(function() {

    
    // get id
    let id = $(this).attr('id');

    // show the targeted parag

    // 1- close
    if ($(this).hasClass('active')) {
    
        
    }

    // 2- open
    else {


        // make paragraphs height = 0 + fix your target paragraph
        $('.dietary-parags').height(0);
        $('#'+id+'-parag').height(126);
        
        // add active class
        $('.dietary-buttons').removeClass('active');
        $(this).addClass('active');

    }

});










// --------------------------------------- 6 -----------------------------------------
// active package cards checkboxes
$('.package-labels').click(function() {


    // remove active from all labels
    $('.package-labels').removeClass('active');
    $(this).addClass('active');


});







// --------------------------------------- 7 -----------------------------------------
// active meals checkboxes
$('.meals-label').click(function(e) {


    let id = $(this).attr('for');

    // remove active
    if ($('#'+id).is(':checked')) {

        $(this).addClass('active');

    } else {

        $(this).removeClass('active');

    }


});







// --------------------------------------- 8 -----------------------------------------
// active days checkboxes
$('.days-label').click(function(e) {


    let id = $(this).attr('for');

    // remove active
    if ($('#'+id).is(':checked')) {

        $(this).addClass('active');

    } else {

        $(this).removeClass('active');

    }


});