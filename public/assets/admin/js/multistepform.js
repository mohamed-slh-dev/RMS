var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");

  
  // check if one value is empty
  let emptyCheck = 0;
  let emptyCheckboxesCheck = 0;

  // check tab 1 items
  if (n == 1) {

    
    $('.tab-field-1').each(function() {

        if (!($(this).val())) {

          emptyCheck = 1;

        }

    });
    
  } //end tab 1 items







  // check tab 2 items
  if (n == 2) {

    
    $('.tab-field-2').each(function() {

        if (!($(this).val())) {

          emptyCheck = 1;

        }

    });
    
  } //end tab 2 items







  // check tab 7 items
  if (n == 7) {



    $('.tab-field-7').each(function() {

        if (!($(this).val())) {

          emptyCheck = 1;

        }

    });






    // check days of week (5 or 6 pass)
    $('.tab-field-7-1').each(function() {


        if ($(this).is(':checked')) {

            emptyCheckboxesCheck++;

        }

    });


    // check if its below 5 days a week
    if (emptyCheckboxesCheck < 5) {

          emptyCheck = 1;

    }






    // check meal types of week (more than 1)
    emptyCheckboxesCheck = 0;
    $('.tab-field-7-2').each(function() {


        if ($(this).is(':checked')) {

            emptyCheckboxesCheck++;

        }

    });


    // check if its none 
    // if (emptyCheckboxesCheck == 0) {

    //       emptyCheck = 1;

    // }

  } //end tab 7

  












  // check tab 10 items
  if (n == 10) {

    
    $('.tab-field-10').each(function() {

        if (!($(this).val())) {

          emptyCheck = 1;

        }

    });
    
  } //end tab 10 items







  
  // tab 7 calculation
  if (n == 7 && emptyCheck == 0) {

    
    // 1- package macros
    let packageid = 0;
    $('.summary-packageid').each(function() {

        if ($(this).is(':checked')) {
            packageid = $(this).val();
        }
    });

    // package macros
    let packageCals = packageCalsArray[packageid];
    let packageProteins = packageProteinsArray[packageid];
    let packageCarbs = packageCarbsArray[packageid];
    let packageFats = packageFatsArray[packageid];
    




    // 2- get number of meal types chosen
    let mealtype = 0;
    $('.summary-mealtype').each(function() {

        if ($(this).is(':checked')) {
            mealtype += 1;
        }
    });


    // reflect in html
    $('#summary-cals').text(packageCals * mealtype);
    $('#summary-proteins').text(packageProteins * mealtype);
    $('#summary-carbs').text(packageCarbs * mealtype);
    $('#summary-fats').text(packageFats * mealtype);



  } //end tab 7 calc








  // if its summary tab next then
  // summary page so calculation here (next is 4)
    if (n == 10 && emptyCheck == 0) {


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



  // continue
  if (n == 11) {
    
      $("#nextBtn").attr('type', 'submit');

  }

  // first tab
  if (n == 0) {


    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = n;


    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";


    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
      $("#nextBtn").attr('type', 'button');

    }


     // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)

  } //end first tab




  // other tabs
  else if (emptyCheck == 0 && n < 11) {

    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = n;


    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
      // $("#nextBtn").attr('type', 'submit');
      

    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
      $("#nextBtn").attr('type', 'button');

    }


     // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)


  } //end else

 

  
}

function nextPrev(n) {

  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");

  // Exit the function if any field in the current tab is invalid:
  // if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  // x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  // alert(n);

  // currentTab = currentTab + n;
  // if you have reached the end of the form... :
 
  // if (currentTab == (x.length - 1) && n == 1) {
  //   //...the form gets submitted:
  //   document.getElementById("regForm").submit();
  //   // return false;
  // }
  // Otherwise, display the correct tab:

        
  showTab(currentTab + n);


}

function validateForm() {

  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  // x = document.getElementsByClassName("tab");
  // y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
//   for (i = 0; i < y.length; i++) {
//     // If a field is empty...
//     if (y[i].value == "") {
//       // add an "invalid" class to the field:
//       y[i].className += " invalid";
//       // and set the current valid status to false:
//       valid = false;
//     }
//   }
  // If the valid status is true, mark the step as finished and valid:
  // if (valid) {
  //   document.getElementsByClassName("step")[currentTab].className += " finish";
  // }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}