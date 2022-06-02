

var i = 0;


// ---------------------------------- breakfast meal -------------------------------------
var breakfastCount = 0;


// 1- customer breakfast meals checkbox action
$('#customer-breakfast-checkbox').change(function() {
    

    // if is checked
    if ($(this).is(':checked')) {

        // show add button + breakfast wrapper
        $('#customer-breakfast-button').removeClass('d-none');
        $('#customer-breakfast-wrapper').removeClass('d-none');
        
    }

    // not checked
    else {

        // hide add button + breakfast wrapper
        $('#customer-breakfast-button').addClass('d-none');
        $('#customer-breakfast-wrapper').addClass('d-none');


    }


});
// end toggle component
        







// 2- Add New breakfast meal using button
$('#customer-breakfast-button').click(function() {

    // increase breakfast counter
    breakfastCount++;

    // new Item html code
    let newItem = "<!-- item (repeat) --><div id='customer-breakfast-"+breakfastCount+"' class='row align-items-end customer-breakfast-meal'><!-- repeat only in once --><div class='col-12'><hr style='border-color: #00bcc2; width: 50%;'></div><!-- component --><div class='col-md-5  mt-1'><label class='form-label' for=''>Component</label><select id='' class='custom-select form-control'><option selected=''>Egg</option><option>Meat</option><option>Bread</option></select></div><!-- grams --><div class='offset-2 col-md-3 offset-lg-3 float-right mt-1'><label class='form-label' for='select01'>Gram</label><input type='number' value='100' name='input-1' class='form-control' placeholder='Gram'></div><!-- delete button --><div class='col-md-2 col-lg-1'><a id='customer-breakfast-delete-button-"+breakfastCount+"' href='#' class='customer-breakfast-delete-button delete btn btn-danger' style='margin-bottom: 1px; width: 100%;'><i class='mt-1 fa fa-trash'></i></a></div><div class='col-md-3'></div><div class='form-group col-sm-12 mt-3'><div class='form-row text-center'><div class='col'><label class='form-label text-muted'>Kcals</label><p class='text-muted'>130</p> </div><div class='col'><label class='form-label text-muted'>Protein</label><p class='text-muted'>23</p></div><div class='col'><label class='form-label text-muted'>Carbohydrates</label><p class='text-muted'>2.1</p></div><div class='col'><label class='form-label text-muted'>Fats</label><p class='text-muted'>0.4</p></div></div></div></div><!-- end item (repeat) -->";


    // append component html line
    $('#customer-breakfast-row').append(newItem);

}); 
// end add new component








// 3- Remove Last breakfast meal Using delete button 
// (done this way because click only attach itself to pre existing items like wrapper div)
$('div').on("click", "a.customer-breakfast-delete-button", function(){


    // remove breakfast meal count
    breakfastCount--;

    

    // get id of delete button
    let id = $(this).attr('id');


    // get number of meal from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // use clone to remove the component
    $('#customer-breakfast-'+idclone).remove();


    
    // resort the id number meal and delete buttons

    // 1- components
    i = 1;
    $(".customer-breakfast-meal").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-breakfast-'+i);

        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".customer-breakfast-delete-button").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-breakfast-delete-button-'+i);
        
        i++;

    });


}); 
// end remove meal





















// ---------------------------------- 2- launch meal -------------------------------------
var launchCount = 0;


// 1- customer launch meals checkbox action
$('#customer-launch-checkbox').change(function() {
    

    // if is checked
    if ($(this).is(':checked')) {

        // show add button + launch wrapper
        $('#customer-launch-button').removeClass('d-none');
        $('#customer-launch-wrapper').removeClass('d-none');
        
    }

    // not checked
    else {

        // hide add button + launch wrapper
        $('#customer-launch-button').addClass('d-none');
        $('#customer-launch-wrapper').addClass('d-none');


    }


});
// end toggle component
        







// 2- Add New launch meal using button
$('#customer-launch-button').click(function() {

    // increase launch counter
    launchCount++;

    // new Item html code
    let newItem = "<!-- item (repeat) --><div id='customer-launch-"+launchCount+"' class='row align-items-end customer-launch-meal'><!-- repeat only in once --><div class='col-12'><hr style='border-color: #00bcc2; width: 50%;'></div><!-- component --><div class='col-md-5  mt-1'><label class='form-label' for=''>Component</label><select id='' class='custom-select form-control'><option selected=''>Egg</option><option>Meat</option><option>Bread</option></select></div><!-- grams --><div class='offset-2 col-md-3 offset-lg-3 float-right mt-1'><label class='form-label' for='select01'>Gram</label><input type='number' value='100' name='input-1' class='form-control' placeholder='Gram'></div><!-- delete button --><div class='col-md-2 col-lg-1'><a id='customer-launch-delete-button-"+launchCount+"' href='#' class='customer-launch-delete-button delete btn btn-danger' style='margin-bottom: 1px; width: 100%;'><i class='mt-1 fa fa-trash'></i></a></div><div class='col-md-3'></div><div class='form-group col-sm-12 mt-3'><div class='form-row text-center'><div class='col'><label class='form-label text-muted'>Kcals</label><p class='text-muted'>130</p> </div><div class='col'><label class='form-label text-muted'>Protein</label><p class='text-muted'>23</p></div><div class='col'><label class='form-label text-muted'>Carbohydrates</label><p class='text-muted'>2.1</p></div><div class='col'><label class='form-label text-muted'>Fats</label><p class='text-muted'>0.4</p></div></div></div></div><!-- end item (repeat) -->";


    // append component html line
    $('#customer-launch-row').append(newItem);

}); 
// end add new component








// 3- Remove Last launch meal Using delete button 
// (done this way because click only attach itself to pre existing items like wrapper div)
$('div').on("click", "a.customer-launch-delete-button", function(){


    // remove launch meal count
    launchCount--;

    

    // get id of delete button
    let id = $(this).attr('id');


    // get number of meal from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // use clone to remove the component
    $('#customer-launch-'+idclone).remove();


    
    // resort the id number meal and delete buttons

    // 1- components
    i = 1;
    $(".customer-launch-meal").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-launch-'+i);

        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".customer-launch-delete-button").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-launch-delete-button-'+i);
        
        i++;

    });


}); 
// end remove meal




















// ---------------------------------- 3- dinner meal -------------------------------------
var dinnerCount = 0;


// 1- customer dinner meals checkbox action
$('#customer-dinner-checkbox').change(function() {
    

    // if is checked
    if ($(this).is(':checked')) {

        // show add button + dinner wrapper
        $('#customer-dinner-button').removeClass('d-none');
        $('#customer-dinner-wrapper').removeClass('d-none');
        
    }

    // not checked
    else {

        // hide add button + dinner wrapper
        $('#customer-dinner-button').addClass('d-none');
        $('#customer-dinner-wrapper').addClass('d-none');


    }


});
// end toggle component
        







// 2- Add New dinner meal using button
$('#customer-dinner-button').click(function() {

    // increase dinner counter
    dinnerCount++;

    // new Item html code
    let newItem = "<!-- item (repeat) --><div id='customer-dinner-"+dinnerCount+"' class='row align-items-end customer-dinner-meal'><!-- repeat only in once --><div class='col-12'><hr style='border-color: #00bcc2; width: 50%;'></div><!-- component --><div class='col-md-5  mt-1'><label class='form-label' for=''>Component</label><select id='' class='custom-select form-control'><option selected=''>Egg</option><option>Meat</option><option>Bread</option></select></div><!-- grams --><div class='offset-2 col-md-3 offset-lg-3 float-right mt-1'><label class='form-label' for='select01'>Gram</label><input type='number' value='100' name='input-1' class='form-control' placeholder='Gram'></div><!-- delete button --><div class='col-md-2 col-lg-1'><a id='customer-dinner-delete-button-"+dinnerCount+"' href='#' class='customer-dinner-delete-button delete btn btn-danger' style='margin-bottom: 1px; width: 100%;'><i class='mt-1 fa fa-trash'></i></a></div><div class='col-md-3'></div><div class='form-group col-sm-12 mt-3'><div class='form-row text-center'><div class='col'><label class='form-label text-muted'>Kcals</label><p class='text-muted'>130</p> </div><div class='col'><label class='form-label text-muted'>Protein</label><p class='text-muted'>23</p></div><div class='col'><label class='form-label text-muted'>Carbohydrates</label><p class='text-muted'>2.1</p></div><div class='col'><label class='form-label text-muted'>Fats</label><p class='text-muted'>0.4</p></div></div></div></div><!-- end item (repeat) -->";


    // append component html line
    $('#customer-dinner-row').append(newItem);

}); 
// end add new component








// 3- Remove Last dinner meal Using delete button 
// (done this way because click only attach itself to pre existing items like wrapper div)
$('div').on("click", "a.customer-dinner-delete-button", function(){


    // remove dinner meal count
    dinnerCount--;

    

    // get id of delete button
    let id = $(this).attr('id');


    // get number of meal from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // use clone to remove the component
    $('#customer-dinner-'+idclone).remove();


    
    // resort the id number meal and delete buttons

    // 1- components
    i = 1;
    $(".customer-dinner-meal").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-dinner-'+i);

        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".customer-dinner-delete-button").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-dinner-delete-button-'+i);
        
        i++;

    });


}); 
// end remove meal



















// ---------------------------------- 4- snack meal -------------------------------------
var snackCount = 0;


// 1- customer snack meals checkbox action
$('#customer-snack-checkbox').change(function() {
    

    // if is checked
    if ($(this).is(':checked')) {

        // show add button + snack wrapper
        $('#customer-snack-button').removeClass('d-none');
        $('#customer-snack-wrapper').removeClass('d-none');
        
    }

    // not checked
    else {

        // hide add button + snack wrapper
        $('#customer-snack-button').addClass('d-none');
        $('#customer-snack-wrapper').addClass('d-none');


    }


});
// end toggle component
        







// 2- Add New snack meal using button
$('#customer-snack-button').click(function() {

    // increase snack counter
    snackCount++;

    // new Item html code
    let newItem = "<!-- item (repeat) --><div id='customer-snack-"+snackCount+"' class='row align-items-end customer-snack-meal'><!-- repeat only in once --><div class='col-12'><hr style='border-color: #00bcc2; width: 50%;'></div><!-- component --><div class='col-md-5  mt-1'><label class='form-label' for=''>Component</label><select id='' class='custom-select form-control'><option selected=''>Egg</option><option>Meat</option><option>Bread</option></select></div><!-- grams --><div class='offset-2 col-md-3 offset-lg-3 float-right mt-1'><label class='form-label' for='select01'>Gram</label><input type='number' value='100' name='input-1' class='form-control' placeholder='Gram'></div><!-- delete button --><div class='col-md-2 col-lg-1'><a id='customer-snack-delete-button-"+snackCount+"' href='#' class='customer-snack-delete-button delete btn btn-danger' style='margin-bottom: 1px; width: 100%;'><i class='mt-1 fa fa-trash'></i></a></div><div class='col-md-3'></div><div class='form-group col-sm-12 mt-3'><div class='form-row text-center'><div class='col'><label class='form-label text-muted'>Kcals</label><p class='text-muted'>130</p> </div><div class='col'><label class='form-label text-muted'>Protein</label><p class='text-muted'>23</p></div><div class='col'><label class='form-label text-muted'>Carbohydrates</label><p class='text-muted'>2.1</p></div><div class='col'><label class='form-label text-muted'>Fats</label><p class='text-muted'>0.4</p></div></div></div></div><!-- end item (repeat) -->";


    // append component html line
    $('#customer-snack-row').append(newItem);

}); 
// end add new component








// 3- Remove Last snack meal Using delete button 
// (done this way because click only attach itself to pre existing items like wrapper div)
$('div').on("click", "a.customer-snack-delete-button", function(){


    // remove snack meal count
    snackCount--;

    

    // get id of delete button
    let id = $(this).attr('id');


    // get number of meal from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // use clone to remove the component
    $('#customer-snack-'+idclone).remove();


    
    // resort the id number meal and delete buttons

    // 1- components
    i = 1;
    $(".customer-snack-meal").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-snack-'+i);

        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".customer-snack-delete-button").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-snack-delete-button-'+i);
        
        i++;

    });


}); 
// end remove meal


















// ---------------------------------- 5- preworkout meal -------------------------------------
var preworkoutCount = 0;


// 1- customer preworkout meals checkbox action
$('#customer-preworkout-checkbox').change(function() {
    

    // if is checked
    if ($(this).is(':checked')) {

        // show add button + preworkout wrapper
        $('#customer-preworkout-button').removeClass('d-none');
        $('#customer-preworkout-wrapper').removeClass('d-none');
        
    }

    // not checked
    else {

        // hide add button + preworkout wrapper
        $('#customer-preworkout-button').addClass('d-none');
        $('#customer-preworkout-wrapper').addClass('d-none');


    }


});
// end toggle component
        







// 2- Add New preworkout meal using button
$('#customer-preworkout-button').click(function() {

    // increase preworkout counter
    preworkoutCount++;

    // new Item html code
    let newItem = "<!-- item (repeat) --><div id='customer-preworkout-"+preworkoutCount+"' class='row align-items-end customer-preworkout-meal'><!-- repeat only in once --><div class='col-12'><hr style='border-color: #00bcc2; width: 50%;'></div><!-- component --><div class='col-md-5  mt-1'><label class='form-label' for=''>Component</label><select id='' class='custom-select form-control'><option selected=''>Egg</option><option>Meat</option><option>Bread</option></select></div><!-- grams --><div class='offset-2 col-md-3 offset-lg-3 float-right mt-1'><label class='form-label' for='select01'>Gram</label><input type='number' value='100' name='input-1' class='form-control' placeholder='Gram'></div><!-- delete button --><div class='col-md-2 col-lg-1'><a id='customer-preworkout-delete-button-"+preworkoutCount+"' href='#' class='customer-preworkout-delete-button delete btn btn-danger' style='margin-bottom: 1px; width: 100%;'><i class='mt-1 fa fa-trash'></i></a></div><div class='col-md-3'></div><div class='form-group col-sm-12 mt-3'><div class='form-row text-center'><div class='col'><label class='form-label text-muted'>Kcals</label><p class='text-muted'>130</p> </div><div class='col'><label class='form-label text-muted'>Protein</label><p class='text-muted'>23</p></div><div class='col'><label class='form-label text-muted'>Carbohydrates</label><p class='text-muted'>2.1</p></div><div class='col'><label class='form-label text-muted'>Fats</label><p class='text-muted'>0.4</p></div></div></div></div><!-- end item (repeat) -->";


    // append component html line
    $('#customer-preworkout-row').append(newItem);

}); 
// end add new component








// 3- Remove Last preworkout meal Using delete button 
// (done this way because click only attach itself to pre existing items like wrapper div)
$('div').on("click", "a.customer-preworkout-delete-button", function(){


    // remove preworkout meal count
    preworkoutCount--;

    

    // get id of delete button
    let id = $(this).attr('id');


    // get number of meal from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // use clone to remove the component
    $('#customer-preworkout-'+idclone).remove();


    
    // resort the id number meal and delete buttons

    // 1- components
    i = 1;
    $(".customer-preworkout-meal").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-preworkout-'+i);

        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".customer-preworkout-delete-button").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-preworkout-delete-button-'+i);
        
        i++;

    });


}); 
// end remove meal
















// ---------------------------------- 6- postworkout meal -------------------------------------
var postworkoutCount = 0;


// 1- customer postworkout meals checkbox action
$('#customer-postworkout-checkbox').change(function() {
    

    // if is checked
    if ($(this).is(':checked')) {

        // show add button + postworkout wrapper
        $('#customer-postworkout-button').removeClass('d-none');
        $('#customer-postworkout-wrapper').removeClass('d-none');
        
    }

    // not checked
    else {

        // hide add button + postworkout wrapper
        $('#customer-postworkout-button').addClass('d-none');
        $('#customer-postworkout-wrapper').addClass('d-none');


    }


});
// end toggle component
        







// 2- Add New postworkout meal using button
$('#customer-postworkout-button').click(function() {

    // increase postworkout counter
    postworkoutCount++;

    // new Item html code
    let newItem = "<!-- item (repeat) --><div id='customer-postworkout-"+postworkoutCount+"' class='row align-items-end customer-postworkout-meal'><!-- repeat only in once --><div class='col-12'><hr style='border-color: #00bcc2; width: 50%;'></div><!-- component --><div class='col-md-5  mt-1'><label class='form-label' for=''>Component</label><select id='' class='custom-select form-control'><option selected=''>Egg</option><option>Meat</option><option>Bread</option></select></div><!-- grams --><div class='offset-2 col-md-3 offset-lg-3 float-right mt-1'><label class='form-label' for='select01'>Gram</label><input type='number' value='100' name='input-1' class='form-control' placeholder='Gram'></div><!-- delete button --><div class='col-md-2 col-lg-1'><a id='customer-postworkout-delete-button-"+postworkoutCount+"' href='#' class='customer-postworkout-delete-button delete btn btn-danger' style='margin-bottom: 1px; width: 100%;'><i class='mt-1 fa fa-trash'></i></a></div><div class='col-md-3'></div><div class='form-group col-sm-12 mt-3'><div class='form-row text-center'><div class='col'><label class='form-label text-muted'>Kcals</label><p class='text-muted'>130</p> </div><div class='col'><label class='form-label text-muted'>Protein</label><p class='text-muted'>23</p></div><div class='col'><label class='form-label text-muted'>Carbohydrates</label><p class='text-muted'>2.1</p></div><div class='col'><label class='form-label text-muted'>Fats</label><p class='text-muted'>0.4</p></div></div></div></div><!-- end item (repeat) -->";


    // append component html line
    $('#customer-postworkout-row').append(newItem);

}); 
// end add new component








// 3- Remove Last postworkout meal Using delete button 
// (done this way because click only attach itself to pre existing items like wrapper div)
$('div').on("click", "a.customer-postworkout-delete-button", function(){


    // remove postworkout meal count
    postworkoutCount--;

    

    // get id of delete button
    let id = $(this).attr('id');


    // get number of meal from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // use clone to remove the component
    $('#customer-postworkout-'+idclone).remove();


    
    // resort the id number meal and delete buttons

    // 1- components
    i = 1;
    $(".customer-postworkout-meal").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-postworkout-'+i);

        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".customer-postworkout-delete-button").each(function(){

       
        // set new id of components
        $(this).attr('id', 'customer-postworkout-delete-button-'+i);
        
        i++;

    });


}); 
// end remove meal