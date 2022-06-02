

// ---------------------------------------- 1 -----------------------------------------

// package filter for cards
$('#package-select').change(function() {


    
    // 1- show all
    if ($(this).val() == "all") {

        // only
        $('.package-meal').attr('style', 'display:inline-block !important');


        // reset the other to all
        $('.package-meal-second').attr('style', 'display:inline-block !important');
        $('#package-select-2').val('all');

    }


    // show specific
    else {

        // get value
        packageid = $(this).val();


        // show meal with the pacakge id and hide others
        $('.package-meal').attr('style', 'display:none !important');

        // only
        $('.package-meal-'+packageid).attr('style', 'display:inline-block !important');


        // reset the other to all
        $('.package-meal-second').attr('style', 'display:inline-block !important');
        $('#package-select-2').val('all');

     
        
    }
});












// ---------------------------------------- 2 -----------------------------------------

// package filter for cards
$('#package-select-2').change(function() {


    
    // 1- show all
    if ($(this).val() == "all") {

        // only
        $('.package-meal-second').attr('style', 'display:inline-block !important');

    }


    // show specific
    else {

        // get value
        packageid = $(this).val();


        // show meal with the pacakge id and hide others
        $('.package-meal-second').attr('style', 'display:none !important');

        // only
        $('.package-meal-second-'+packageid).attr('style', 'display:inline-block !important');

     
        
    }
});