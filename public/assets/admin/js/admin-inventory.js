


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
    let newItem = "<div id='component-"+componentCount+"' class='col-12 components'>\
    <div class='row align-items-center'>\
        <div class='col-sm-2'>\
            <label class='form-label mt-4'>Component</label>\
            <select class='custom-select form-control' required='' name='component[]'>";


    
    //select options
    numOfRows = Object.keys(componentsArray).length;
    
    for(i = 0; i < numOfRows; i++) {

        newItem += '<option value='+componentsArray[i]['id']+'>'+componentsArray[i]['name']+'</option>';
    } // end for loop




    //continue            
    newItem += "\
            </select>\
        </div>\
        \
        <div class='col-sm-2'>\
            <label class='form-label mt-4'>Unit</label>\
            <select class='custom-select form-control' name='unit[]'>\
                <option selected='' value='KG'>KG</option>\
                <option value='Liter'>Liter</option>\
                <option value='Piece'>Piece</option>\
            </select>\
        </div>\
        \
        <div class='col-sm-2'>\
            <label class='form-label mt-4'>Qunatity</label>\
            <input type='text' name='quantity[]' value='1' readonly class='form-control'>\
        </div>\
        \
        <div class='col-sm-2'>\
            <label class='form-label mt-4'>Price-(AED)</label>\
            <input type='text' name='price[]' required='' class='form-control'>\
        </div>\
        \
        <div class='col-sm-1 px-0'style='padding-top: 50px;'>\
            <button role='button' id='component-delete-button-"+componentCount+"' class='component-delete-button btn btn-danger border-0 px-2'><i class='fa fa-trash'></i></button>\
        </div>\
    </div><!-- end item -->";


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































// ---------------------------------- 2 -------------------------------------
var purchaseCount = 0;
var y = 0;


// 1- Toggle the purchase inputs and the add button
$('#purchase-checkbox').change(function() {
    

    // if is checked
    if ($(this).is(':checked')) {

        // show add button + purchase row
        $('#add-purchase-button').removeClass('d-none');
        $('#meal-purchase-row').removeClass('d-none');

        
    }

    // not checked
    else {

        // hide add button + purchases row
        $('#add-purchase-button').addClass('d-none');
        $('#meal-purchase-row').addClass('d-none');


    }


});
// end toggle purchase
        













// 2- Add New Component using button
$('#add-purchase-button').click(function() {

    // add purchase new
    purchaseCount++;

    // new Item html code
    let newItem = "<div id='purchase-"+purchaseCount+"' class='col-12 purchases'>\
    <div class='row align-items-center'>\
        \
        <div class='col-sm-2'>\
            <label class='form-label mt-4'>Component</label>\
            <select id='purchase-component-id-"+purchaseCount+"' class='custom-select form-control supplier-component-select-1 purchase-component-calc' name='component[]' required=''>\
            <option value='' selected=''></option>";


    
    //select options
    numOfRows = Object.keys(supplierComponentsArray).length;
    
    for(i = 0; i < numOfRows; i++) {

        newItem += '<option class="d-none supplier-component supplier-component-'+supplierComponentsArray[i]['supplier_id']+'" value='+supplierComponentsArray[i]['component_id']+'>'+supplierComponentNamesArray[i]+'</option>';

    } // end for loop




    //continue            
    newItem += "\
            </select>\
        </div>\
        \
        <div class='col-sm-2'>\
            <label class='form-label mt-4'>Unit</label>\
            <select class='custom-select form-control' required='' name='unit[]'>\
                <option selected='' value='KG'>KG</option>\
                <option value='Liter'>Liter</option>\
                <option value='Piece'>Piece</option>\
            </select>\
        </div>\
        \
        <div class='col-sm-2'>\
            <label class='form-label mt-4'>Qunatity</label>\
            <input id='purchase-component-quantity-"+purchaseCount+"' type='text' name='quantity[]' required='' class='form-control purchase-component-calc'>\
        </div>\
        \
        <div class='col-sm-2 offset-1'>\
            <label class='form-label mt-4'>Boxes</label>\
            <input id='purchase-component-boxes-"+purchaseCount+"' readonly type='text' name='boxes[]' value='0' class='form-control'>\
        </div>\
        \
        <div class='col-sm-2'>\
            <label class='form-label mt-4'>Price</label>\
            <input id='purchase-component-result-"+purchaseCount+"' readonly type='text' name='sum[]' value='0' class='form-control'>\
        </div>\
        \
        <div class='col-sm-1 px-0'style='padding-top: 50px;'>\
            <button role='button' id='purchase-delete-button-"+purchaseCount+"' class='purchase-delete-button btn btn-danger border-0 px-2'><i class='fa fa-trash'></i></button>\
        </div>\
    </div>\
    <!-- end item -->";

    


    // // append purchase html line
     $('#meal-purchase-row').append(newItem);




    //  trigger the onchange action on supplier-select-1
    supplierVal = $('.supplier-select-1').val();
    $('.supplier-select-1').val(supplierVal).trigger('change');

}); 
// end add new purchase








// 3- Remove Last Component Using delete button 
// (done this way because click only attach itself to pre existing items like wrapper div)
$('div').on("click", "button.purchase-delete-button", function(){


    // remove purchase count
    purchaseCount--;

    

    // get id of delete button
    let id = $(this).attr('id');


    // get number of purchase from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // use clone to remove the purchase
    $('#purchase-'+idclone).remove();


    
    // resort the id number purchase and delete buttons

    // 1- purchases
    i = 1;
    $(".purchases").each(function(){

       
        // set new id of purchases
        $(this).attr('id', 'purchase-'+i);
        
        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".purchase-delete-button").each(function(){

       
        // set new id of purchases
        $(this).attr('id', 'purchase-delete-button-'+i);
        
        i++;

    });


});
// end add new purchase











// ----------------------------------
// calculate the component price * quantity for each in purchase
$('div').on("change", ".purchase-component-calc", function(){



    // get id of delete button
    let id = $(this).attr('id');


    // get number of purchase from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // get the component name from array (quantity + id then) find price
    componentId = $('#purchase-component-id-'+idclone).val();
    componentQuantity = $('#purchase-component-quantity-'+idclone).val();
    componentPrice = 0;
    componentQuantityPerBox = 0;
    supplierComponentId = 0;


    //select options
    numOfRows = Object.keys(supplierComponentsArray).length;
    
    for(i = 0; i < numOfRows; i++) {

        if (supplierComponentsArray[i]['component_id'] == componentId) {
                componentPrice = supplierComponentsArray[i]['price'];
                supplierComponentId = supplierComponentsArray[i]['component_id'];

        }
        

    } // end for loop
    


    // multiple by quantity then put it on input
    componentFullPrice = componentPrice * componentQuantity;

    $('#purchase-component-result-'+idclone).val(componentFullPrice);

    


    //select options
    numOfRows = Object.keys(componentsArray).length;
    
    for(i = 0; i < numOfRows; i++) {

        if (componentsArray[i]['id'] == supplierComponentId) {

                componentQuantityPerBox = componentsArray[i]['box_quantity'];

        }
        

    } // end for loop


    
    // aviod infinity
    if (componentQuantityPerBox == 0) {
    
        $('#purchase-component-boxes-'+idclone).val(0);

    } else {
        
        componentBoxes = componentQuantity / componentQuantityPerBox;

        $('#purchase-component-boxes-'+idclone).val(componentBoxes);

    }


}); //end calc component price for purchase