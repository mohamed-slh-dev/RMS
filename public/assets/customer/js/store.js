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
     let newItem = "<div id='component-"+componentCount+"' class='col-12 components'><div class='row align-items-center'> <div class='col-sm-4'><label class='form-label mt-4'>Component</label><select class='custom-select form-control' name='component'><option selected=''>Chicken</option><option>Green apple</option><option>Celery </option><option>Ginger </option><option>Spinach</option><option>Vegan</option> </select> </div> <div class='col-sm-3'><label class='form-label mt-4'>Unit</label><select class='custom-select form-control' name='component'><option selected=''>KG</option><option>Piece</option> </select></div> <div class='col-sm-3'><label class='form-label mt-4'>Qunatity</label><input type='text' name='' class='form-control'></div> <div class='col-sm-2 px-0'> <button role='button' id='component-delete-button-"+componentCount+"' class='component-delete-button btn btn-danger border-0 px-2' style='margin-top:50px'><i class='fa fa-trash'></i></button></div></div></div><!-- end item -->";


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