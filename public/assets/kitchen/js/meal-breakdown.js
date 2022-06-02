


// ---------------------------------- 1 -------------------------------------
var componentCount = 0;
var i = 0;


// 1- Toggle the component inputs and the add button
$('#component-checkbox').change(function() {
    

    // if is checked
    if ($(this).is(':checked')) {

        // show add button + component row
        $('#add-component-button').removeClass('d-none');
        $('#meal-component-row').removeClass('d-none');

        
    }

    // not checked
    else {

        // hide add button + components row
        $('#add-component-button').addClass('d-none');
        $('#meal-component-row').addClass('d-none');


    }


});
// end toggle component
        













// 2- Add New Component using button
$('#add-component-button').click(function() {

    // add component new
    componentCount++;

    // new Item html code
     let newItem = "<div id='component-"+componentCount+"' class='col-12 components mt-3'><div class='row align-items-center'> <div class='col-6'>  <label class='form-label'>Component</label><select class='custom-select form-control' name='component'><option selected=''>Egg</option><option>Meat</option><option>Bread</option> </select> </div>  <div class='col-2'>  <label class='form-label'>Unit</label> <select class='custom-select form-control' name='unit'><option selected=''>Gram</option><option>Piece</option> </select> </div> <div class='col-2'>  <label class='form-label'>Quantity</label> <input type='text' class='form-control'> </div> <div class='col-2 px-0'> <button style='margin-top: 25px;' role='button' id='component-delete-button-"+componentCount+"' class='component-delete-button btn btn-danger border-0 px-2'><i class='fa fa-trash'></i></button></div></div></div><!-- end item -->";


    // // append component html line
     $('#meal-component-row').append(newItem);

}); 
// end add new component








// 3- Remove Last Component Using delete button 
// (done this way because click only attach itself to pre existing items like wrapper div)
$('div').on("click", "button.component-delete-button", function(){


    // remove component count
    componentCount--;

    

    // get id of delete button
    let id = $(this).attr('id');


    // get number of component from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // use clone to remove the component
    $('#component-'+idclone).remove();


    
    // resort the id number component and delete buttons

    // 1- components
    i = 1;
    $(".components").each(function(){

       
        // set new id of components
        $(this).attr('id', 'component-'+i);
        
        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".component-delete-button").each(function(){

       
        // set new id of components
        $(this).attr('id', 'component-delete-button-'+i);
        
        i++;

    });


}); 
// end add new component