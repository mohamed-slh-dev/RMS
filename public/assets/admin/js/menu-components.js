  $(document).ready(function() {
                    $("#add_recipe").click(function(){
                        $("#general-meal-info").addClass("d-none");
                         $("#recipe-meal-info").removeClass("d-none");
                    }); 
                });
          

              $(document).ready(function() {
                    $("#back_general").click(function(){
                        $("#general-meal-info").removeClass("d-none");
                         $("#recipe-meal-info").addClass("d-none");
                    }); 
                });

              $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });


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
     let newItem = "<div id='component-"+componentCount+"' class='col-6 components'> <label class='form-label mt-4'>Component</label> <div class='row align-items-center'> <div class='col-10'><select class='custom-select form-control' name='component'><option selected=''>Egg</option><option>Meat</option><option>Bread</option> </select> </div> <div class='col-2 px-0'> <button role='button' id='component-delete-button-"+componentCount+"' class='component-delete-button btn btn-danger border-0 px-2'><i class='fa fa-trash'></i></button></div></div></div><!-- end item -->";


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











// ----------------------- 2 (same but if 2 component in same page) ---------------

var componentTwoCount = 0;
var y = 0;


// 1- Toggle the component inputs and the add button
$('#component-checkbox-2').change(function() {
    

    // if is checked
    if ($(this).is(':checked')) {

        // show add button + component row
        $('#add-component-button-2').removeClass('d-none');
        $('#meal-component-row-2').removeClass('d-none');

        
    }

    // not checked
    else {

        // hide add button + components row
        $('#add-component-button-2').addClass('d-none');
        $('#meal-component-row-2').addClass('d-none');


    }


});
// end toggle component
        













// 2- Add New Component using button
$('#add-component-button-2').click(function() {

    // add component new
    componentTwoCount++;

    // new Item html code
     let newItem =  "\
     <div id='component-"+componentCount+"' class='col-12 components'>\
        <div class='row align-items-center'>\
            <div class='col-sm-4'>\
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
            \
            <div class='col-sm-2'>\
                <label class='form-label mt-4'>Qunatity</label>\
                <input type='text' name='quantity[]' required='' class='form-control'>\
            </div>\
            \
            <div class='col-sm-1 px-0'style='padding-top: 50px;'>\
                <button role='button' id='component-delete-button-"+componentCount+"' class='component-delete-button btn btn-danger border-0 px-2'><i class='fa fa-trash'></i></button>\
            </div>\
        </div>\
        <!-- end item -->";


    // // append component html line
     $('#meal-component-row-2').append(newItem);

}); 
// end add new component








// 3- Remove Last Component Using delete button 
// (done this way because click only attach itself to pre existing items like wrapper div)
$('div').on("click", "button.component-delete-button-2", function(){


    // remove component count
    componentTwoCount--;

    

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
    $('#component-2-'+idclone).remove();


    
    // resort the id number component and delete buttons

    // 1- components
    y = 1;
    $(".components-2").each(function(){

       
        // set new id of components
        $(this).attr('id', 'component-2-'+y);
        
        y++;

    });



    // 2- delete buttons
    y = 1;
    $(".component-delete-button-2").each(function(){

       
        // set new id of components
        $(this).attr('id', 'component-delete-button-2-'+y);
        
        y++;

    });


}); 
// end add new component
















// ---------------------------------- 3 -------------------------------------
var packageMealCount = 0;
var packageMealComponentCount = 0;

var k = 0;


// 1- Toggle the package-meal inputs and the add button
$('#package-meal-checkbox').change(function() {
    

    // if is checked
    if ($(this).is(':checked')) {

        // show add button + component row
        $('#add-package-meal-button').removeClass('d-none');
        $('#package-meal-row').removeClass('d-none');

        
    }

    // not checked
    else {

        // hide add button + components row
        $('#add-package-meal-button').addClass('d-none');
        $('#package-meal-row').addClass('d-none');


    }


});
// end toggle component
        













// 2- Add New meal using button
$('#add-package-meal-button').click(function() {

    // add meal new
    packageMealCount++;


    

    // new Item html code
     let newItem = '\
    <div class="list-group-item" id="package-meal-'+packageMealCount+'" style="border:0px;">\
        <div class="form-group row align-items-center mb-0">\
            <div class="form-group col-sm-4"><label class="form-label" for="custom-select01">Asigned To Package:</label><select id="menu-package-'+packageMealCount+'" class="form-control custom-select menu-packages" name="menu-package[]">\
            <option selected="" value=""></option>';


    //select options
    numOfRows = Object.keys(packagesArray).length;
    
    for(i = 0; i < numOfRows; i++) {

        newItem += '<option value='+packagesArray[i]['id']+'>'+packagesArray[i]['name']+'</option>';

    } // end for loop

                    
    newItem += '</select></div>\
            <div class="form-group col-sm-4"><label class="form-label" for="custom-select01">Meal Price :</label><input\
                    type="text" id="menu-package-price-'+packageMealCount+'" readonly class="form-control menu-package-price-'+packageMealCount+'" value="0" name="menu-package-price[]">\
            </div>\
            <div class="form-group col-sm-12 mt-3 text-center"><label class="form-label my-3">Meal Macros Target</label>\
                <div class="form-row">\
                    <div class="col  pt-3 card mx-2"><label class="form-label text-muted">Kcals</label>\
                        <p style="font-weight:bold;" class="menu-package-fixed-cals-'+packageMealCount+'">-</p>\
                    </div>\
                    <div class="col pt-3 card mx-2"><label class="form-label text-muted">Protein</label>\
                        <p style="font-weight:bold;" class="menu-package-fixed-proteins-'+packageMealCount+'">-</p>\
                    </div>\
                    <div class="col pt-3 card mx-2"><label class="form-label text-muted">Carbohydrates</label>\
                        <p style="font-weight:bold;" class="menu-package-fixed-carbs-'+packageMealCount+'">-</p>\
                    </div>\
                    <div class="col pt-3 card mx-2"><label class="form-label text-muted">Fats</label>\
                        <p style="font-weight:bold;" class="menu-package-fixed-fats-'+packageMealCount+'">-</p>\
                    </div>\
                </div>\
            </div>\
            \
            \
            <div class="form-group col-sm-12 mt-3">\
                <div class="form-row">\
                    <div class="col"><label class="form-label">Kcals</label><input type="text" class="form-control menu-package-dynamic-cals-'+packageMealCount+'" name="menu-package-cals[]" readonly value="0"\
                            class="form-control" placeholder="calorie"></div>\
                    <div class="col"><label class="form-label">Protein</label><input type="text" class="form-control menu-package-dynamic-proteins-'+packageMealCount+'" name="menu-package-proteins[]" readonly value="0"\
                            class="form-control" placeholder="Protein"></div>\
                    <div class="col"><label class="form-label">Carbohydrates</label><input type="text" class=" form-control menu-package-dynamic-carbs-'+packageMealCount+'" name="menu-package-carbs[]" readonly value="0"\
                            class="form-control" placeholder="Carbs"></div>\
                    <div class="col"><label class="form-label">Fats</label><input type="text" class="form-control menu-package-dynamic-fats-'+packageMealCount+'" name="menu-package-fats[]" readonly value="0"\
                            class="form-control" placeholder="Fat"></div>\
                </div>\
            </div>\
            <div class="col-sm-12">\
                <div class="form-row">\
                    <div class="col-12 mb-16pt mb-sm-0">\
                        <div class="form-group">\
                            <div class="row">\
                                <div class="col-12 my-2 text-center"><button\
                                        id="add-package-meal-component-button-'+packageMealCount+'" type="button"\
                                        class="custom01 btn btn-sm btn-outline-accent border-radius-3 add-package-meal-component-button"\
                                        title="Add your Components"><i class="fa fa-plus-circle mr-2"></i>New\
                                        Component</button></div>\
                            </div>\
                            <div class="row" id="package-meal-component-row-'+packageMealCount+'"></div>\
                        </div>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>\
     ';




    // // append component html line
     $('#package-meal-row').append(newItem);

}); 
// end add new component














// 3- Add New component using button
$('#package-meal-row').on("click", "button.add-package-meal-component-button", function(){

    // add meal new
    packageMealComponentCount++;

    // get id
    let id = $(this).attr('id');


    // get number of component from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }

    

    // alert(idclone);


    // new Item html code
     let newItem = '<div class="col-12 package-meal-component" id="package-meal-component-'+packageMealComponentCount+'">\
    <div class="row">\
        <div class="col-md-4 mt-1"><label class="form-label" for="select01">Component</label><select id="select01"\
                class="form-control menu-package-component-groups custom-select menu-package-component-'+packageMealComponentCount+' menu-package-component-group-'+idclone+'" name="menu-package-component[]">';


    //select options
    numOfRows = Object.keys(componentsArray).length;
    
    for(i = 0; i < numOfRows; i++) {

        newItem += '<option value='+componentsArray[i]['id']+'>'+componentsArray[i]['name']+' - '+componentsArray[i]['brand']+'</option>';
    } // end for loop


                
    newItem += '</select></div>\
        <div class="col-md-4"></div>\
        <div class="col-md-3 float-right mt-1"><label class="form-label" for="select01">Gram/Piece</label><input type="number"\
                value="0" step="0.01" name="menu-package-component-grams[]" class="form-control menu-package-component-groups menu-package-component-grams-'+packageMealComponentCount+' menu-package-component-grams-group-'+idclone+'" placeholder="Gram">\
                \
                <input type="hidden" name="menu-package-component-group[]" value="'+idclone+'">\
        </div>\
        <div class="col-md-1 mt-1 text-center"><button id="delete-package-meal-component-'+packageMealComponentCount+'"\
                class="btn btn-danger w-100 delete-package-meal-component" style="margin-top: 30px;"><i\
                    class="fas fa-trash"></i></button></div>\
        <div class="form-group col-sm-12 mt-3">\
            <div class="form-row text-center">\
                <div class="col"><label class="form-label text-muted">Kcals</label>\
                    <p class="text-muted menu-package-component-cals-group-'+idclone+' menu-package-component-cals-'+packageMealComponentCount+'">0</p>\
                </div>\
                <div class="col"><label class="form-label text-muted">Protein</label>\
                    <p class="text-muted menu-package-component-proteins-group-'+idclone+' menu-package-component-proteins-'+packageMealComponentCount+'">0</p>\
                </div>\
                <div class="col"><label class="form-label text-muted">Carbohydrates</label>\
                    <p class="text-muted menu-package-component-carbs-group-'+idclone+' menu-package-component-carbs-'+packageMealComponentCount+'">0</p>\
                </div>\
                <div class="col"><label class="form-label text-muted">Fats</label>\
                    <p class="text-muted menu-package-component-fats-group-'+idclone+' menu-package-component-fats-'+packageMealComponentCount+'">0</p>\
                </div>\
            </div>\
        </div>\
    </div><!--   End Components Of Meal   -->\
    <hr>\
</div>';



    // // append component html line
     $('#package-meal-component-row-'+idclone).append(newItem);

}); 
// end add new component






// 3- Remove Last Component Using delete button 
// (done this way because click only attach itself to pre existing items like wrapper div)
$('#package-meal-row').on("click", "button.delete-package-meal-component", function(){


    // remove component count
    packageMealComponentCount--;

    

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
    $('#package-meal-component-'+idclone).remove();


    
    // resort the id number component and delete buttons

    // 1- components
    i = 1;
    $(".package-meal-component").each(function(){

       
        // set new id of components
        $(this).attr('id', 'package-meal-component-'+i);
        
        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".delete-package-meal-component").each(function(){

       
        // set new id of components
        $(this).attr('id', 'delete-package-meal-component-'+i);
        
        i++;

    });







}); 
// end add new component




// ------------------------- new for javascript operation -------------








// --------------------- menu package changes ------------------------
$('#package-meal-row').on("change", ".menu-packages", function(){


    // get id
    let id = $(this).attr('id');


    // get number of component from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }


    // package id
    packageid = $(this).val();



    // get package name
    numOfRows = Object.keys(packagesArray).length;
    
    for(i = 0; i < numOfRows; i++) {

        if (packageid == packagesArray[i]['id']) {


            $('.menu-package-fixed-cals-'+idclone).text(packagesArray[i]['cals']);
            $('.menu-package-fixed-proteins-'+idclone).text(packagesArray[i]['proteins']);
            $('.menu-package-fixed-carbs-'+idclone).text(packagesArray[i]['carbs']);
            $('.menu-package-fixed-fats-'+idclone).text(packagesArray[i]['fats']);
            break;

        } else {

            $('.menu-package-fixed-cals-'+idclone).text("-");
            $('.menu-package-fixed-proteins-'+idclone).text("-");
            $('.menu-package-fixed-carbs-'+idclone).text("-");
            $('.menu-package-fixed-fats-'+idclone).text("-");
            
        }


    } // end for loop


});











// ------------------------------------ inputs actions to calculate -------------

$('#package-meal-row').on("change", ".menu-package-component-groups", function(){

    // arra contain values
    componentPrice = [];
    componentCals = [];
    componentProteins = [];
    componentCarbs = [];
    componentFats = [];

    // search for it
    for (i = 1; i <= packageMealCount; i++) {


        // counter for number of components inside
        $componentCounter = 1;

        // input firing if
        if ($(this).hasClass('menu-package-component-group-'+i) || $(this).hasClass('menu-package-component-grams-group-'+i)) {
            

        
            // get the value from the select and find the component
            
            // 1- get the component price and marcos
            counter = 0;

            $(".menu-package-component-group-"+i).each(function(){

                
                numOfRows = Object.keys(componentsArray).length;
                
                for(y = 0; y < numOfRows; y++) {


                    if ($(this).val() == componentsArray[y]['id']) {
                        
                        componentPrice[counter] = componentsArray[y]['price'];
                        componentCals[counter] = componentsArray[y]['cals'];
                        componentProteins[counter] = componentsArray[y]['proteins'];
                        componentCarbs[counter] = componentsArray[y]['carbs'];
                        componentFats[counter] = componentsArray[y]['fats'];

                        counter++;

                    } //end if clause

                } // end of component price for

            });

            

            // 2- get component grams then multiple it by price and marcos
            counter = 0;
            $(".menu-package-component-grams-group-"+i).each(function(){
                

                componentPrice[counter] *= $(this).val();
                componentCals[counter] *= $(this).val();
                componentProteins[counter] *= $(this).val();
                componentCarbs[counter] *= $(this).val();
                componentFats[counter] *= $(this).val();
                
                counter++;
                

            
            });
            


            // cals group
            counter = 0;
            $(".menu-package-component-cals-group-"+i).each(function(){

                // reflect the singlecomponent value macros
                $(this).text(componentCals[counter]);
                counter++;

            });


            counter = 0;
            $(".menu-package-component-proteins-group-"+i).each(function(){

                // reflect the singlecomponent value macros
                $(this).text(componentProteins[counter]);
                counter++;

            });


            counter = 0;
            $(".menu-package-component-carbs-group-"+i).each(function(){

                // reflect the singlecomponent value macros
                $(this).text(componentCarbs[counter]);
                counter++;

            });


            counter = 0;
            $(".menu-package-component-fats-group-"+i).each(function(){

                // reflect the singlecomponent value macros
                $(this).text(componentFats[counter]);
                counter++;

            });



            

            // assign values to dynamic macros (get the summation for overall)
            pricesSum = 0;
            calsSum = 0;
            proteinsSum = 0;
            carbsSum = 0;
            fatsSum = 0;
            
            for(y = 0; y < componentCarbs.length; y++) {
            
                pricesSum += parseFloat(componentPrice[y]);
                calsSum += parseFloat(componentCals[y]);
                proteinsSum += parseFloat(componentProteins[y]);
                carbsSum += parseFloat(componentCarbs[y]);
                fatsSum += parseFloat(componentFats[y]);
            }
            
            $(".menu-package-dynamic-cals-"+i).val(calsSum);
            $(".menu-package-dynamic-proteins-"+i).val(proteinsSum);
            $(".menu-package-dynamic-carbs-"+i).val(carbsSum);
            $(".menu-package-dynamic-fats-"+i).val(fatsSum);


            // package price update
            $("#menu-package-price-"+i).val(pricesSum);
            
            
        } //end of input firing if

    
        
        
        // else no action (should not do anything)
        else {

        }




        

        
    } //end for loop


    


}); 
// end add new component


//delete modal scripts
$('.package-assign-id').click(function() {
    
    // get package id
    package_id = $(this).val();
    
    
    $('#modal-assign-package').val(package_id);

});

$('.meal-assign-id').click(function() {
    
    // get package id
    meal_id = $(this).val();
    
    
    $('#modal-assign-meal').val(meal_id);

});

$('.sauce-assign-id').click(function() {
    
    // get package id
    sauce_id = $(this).val();
    
    
    $('#modal-assign-sauce').val(sauce_id);

});

$('.category-assign-id').click(function() {
    
    // get package id
    category_id = $(this).val();
    
    
    $('#modal-assign-category').val(category_id);

});

$('.cuisine-assign-id').click(function() {
    
    // get package id
    cuisine = $(this).val();
    
    
    $('#modal-assign-cuisine').val(cuisine);

});


