
// -------------------------------- 1 ---------------------------------


// forward button
$('.customer-tab-next-button').click(function() {

    // get id of delete button
    let id = $(this).attr('id');


    // get number of meal from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // remove active class from all tabs
    $('.customer-tab').removeClass('active');

    // add to next one with idclone+1 except 5
    if (idclone != "5") {

        $('#customer-tab-'+(parseInt(idclone) + 1)).addClass('active');

    }



    // summary page so calculation here (next is 4)
    if (idclone == "3") {


        // 1- package name + price
        let packageid = 0;
        $('.summary-packageid').each(function() {

            if ($(this).is(':checked')) {
                packageid = $(this).val();
            }
        });

        // package name
        let packageName = packageNameArray[packageid];
        let packagePrice = packagePriceArray[packageid];



        // 2- meal types
        let mealtype = "";
        $('.summary-mealtype').each(function() {

            if ($(this).is(':checked')) {
                mealtype += " | "+typeArray[$(this).val()];
            }
        });



        // 2.5- delivery days
        let deliverydays = "";
        $('.summary-deliverydays').each(function() {

            if ($(this).is(':checked')) {
                deliverydays += " | "+ $(this).val();
            }
        });

 

        // 3- plan days
        let plandays = 0;
        $('.summary-plandays').each(function() {

            if ($(this).is(':checked')) {
                plandays = $(this).val();
            }
        });





        // 4- delivery timing
        let deliverytime = timingArray[$('.summary-deliverytime').val()];
    



        // 4- delivery charge
        let deliveryCharge = cityChargeArray[$('.city-select-1').val()] * plandays;
        let deliveryCity = cityNameArray[$('.city-select-1').val()];
        


        // 5- margin calc
        let margin = (marginArray[0] * packagePrice) / 100;

        // 5- operation calc
        let operation = (marginArray[1] * packagePrice) / 100;

     


        // copy the values to summary fields
        $('#summary-packageid').text(packageName+" Package");
        $('#summary-mealtype').text(mealtype);
        $('#summary-plandays').text(plandays+" days");
        $('#summary-deliverytime').text(deliverytime);
        $('#summary-deliverycharge').text(deliveryCity);
        $('#summary-deliverydays').text(deliverydays);
        
        operation = parseFloat(operation);
        margin = parseFloat(margin);
        deliveryCharge = parseFloat(deliveryCharge);
        packagePrice = parseFloat(packagePrice);
        
        temptotal = Math.round((operation + margin + deliveryCharge + packagePrice) * 100) / 100;
    

        $('#summary-totalamount').text(temptotal);


    } //end calc the summary


});






// backward button
$('.customer-tab-back-button').click(function() {

    // get id of delete button
    let id = $(this).attr('id');


    // get number of meal from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    // remove active class from all tabs
    $('.customer-tab').removeClass('active');

    // add to next one with idclone-1 except 5
    $('#customer-tab-'+(parseInt(idclone) - 1)).addClass('active');



});







// ---------------------------------- 2 ----------------------------------------


// check if the fields of each tab is filled
// use same class for each tab then each
$('.tab-field-1').change(function() {


    // check if one value is empty
    let emptyCheck = 0;
    $('.tab-field-1').each(function() {


        if (!($(this).val())) {

            emptyCheck = 1;

        }

    });


    // disable button if 1
    if (emptyCheck == 1) {

        $('#customer-tab-next-button-1').attr('disabled', true);

    } else {

        $('#customer-tab-next-button-1').attr('disabled', false);

    }


});






// ----------


// check if the fields of each tab is filled
// use same class for each tab then each
$('.tab-field-2').change(function() {

   
    // check if one value is empty
    let emptyCheck = 0;
    $('.tab-field-2').each(function() {


        if (!($(this).val())) {

            emptyCheck = 1;

        }

    });



    // check if week of deliveries checkbox if there's one has been checked at least
    let emptyCheckboxesCheck = 0;
    $('.tab-field-2-1').each(function() {


        if ($(this).is(':checked')) {

            emptyCheckboxesCheck++;

        }

    });


    // disable button if 1
    if (emptyCheck == 1 || emptyCheckboxesCheck == 0) {

        $('#customer-tab-next-button-2').attr('disabled', true);

    } else {

        $('#customer-tab-next-button-2').attr('disabled', false);

    }


});








// ----------


// check if the fields of each tab is filled
// use same class for each tab then each
$('.tab-field-3').change(function() {


    // check if one value is empty
    let emptyCheck = 0;
    $('.tab-field-3').each(function() {


        if (!($(this).val())) {

            emptyCheck = 1;

        }

    });




    // check if week of deliveries checkbox if there's one has been checked at least
    let emptyCheckboxesCheck = 0;
    $('.tab-field-3-1').each(function() {


        if ($(this).is(':checked')) {

            emptyCheckboxesCheck++;

        }

    });


    // disable button if 1 or no checkboxes chosen
    if (emptyCheck == 1 || emptyCheckboxesCheck <= 4) {

        $('#customer-tab-next-button-3').attr('disabled', true);

    } else {

        $('#customer-tab-next-button-3').attr('disabled', false);

    }


});









// ----------


// check if the fields of each tab is filled
// use same class for each tab then each
$('.tab-field-4').change(function() {


    // check if one value is empty
    let emptyCheck = 0;
    $('.tab-field-4').each(function() {


        if (!($(this).val())) {

            emptyCheck = 1;

        }

    });


    // disable button if 1
    if (emptyCheck == 1) {

        $('#customer-tab-next-button-4').attr('disabled', true);

    } else {

        $('#customer-tab-next-button-4').attr('disabled', false);

    }


});








// ----------


// check if the fields of each tab is filled
// use same class for each tab then each
$('.tab-field-5').change(function() {


    // check if one value is empty
    let emptyCheck = 0;


   
    // four payment tabs
    if ($('.tab-radio-5-1').is(':checked')) {

        $('.tab-field-5-1').each(function() {


            if (!($(this).val())) {

                emptyCheck = 1;

            }

        });

    } //end 5-1 radio





    // four payment tabs
    if ($('.tab-radio-5-2').is(':checked')) {

        $('.tab-field-5-2').each(function() {


            if (!($(this).val())) {

                emptyCheck = 1;

            }

        });

    } //end 5-1 radio
    




    // disable button if 1
    if (emptyCheck == 1) {

        $('#customer-tab-next-button-5').attr('disabled', true);

    } else {

        $('#customer-tab-next-button-5').attr('disabled', false);

    }


});