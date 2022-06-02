
//bmi

  $('#bmi-calculate').click(function() {
  
  // get weight and hight 
 var weight = $('#weight-bmi').val();
  
 var  height = $('#height-bmi').val() / 100;

 var bmi = weight / (height * height);

  $('#bmi-value').html(bmi) ;

  });

  
  $('#bmr-calculate').click(function() {
  
    // get weight and hight 
   var weight = $('#weight-bmr').val();
    
   var  height = $('#height-bmr').val();

   var age = $('#age-bmr').val();

   var gender =  $('#bmr-male').is(':checked');


   if ($('#male-bmr').is(':checked')) {
    
    var bmr = 66 + (13.7 * weight) + (5 * height) - (6.8 * age);
  
    $('#bmr-value').html(bmr) ;

   }else{
  
    var bmr = 655 + (9.6 * weight) + (1.8 * height) - (4.7 * age);
  
    $('#bmr-value').html(bmr) ;

   }
  
    });

    $('#bodyfat-calculate').click(function() {
  
      // get weight and hight 
     var bmi = $('#bmi-bodyfat').val();
      
     var  age = $('#age-bodyfat').val();
    

     var bodyfat = (1.2 * bmi) + (0.23 * age) - 16.2;
    
      $('#bodyfat-value').html(bodyfat) ;
    
      });

      $('#waistratio-calculate').click(function() {
  
      
        // get weight and hight 
       var waist = $('#waist-waistratio').val();
        
       var height = $('#height-waistratio').val();

       var waistratio = waist / height;

        $('#waistratio-value').html(waistratio);
      
        });
  

        $('#weightloss-calculate').click(function() {
  
      
          // get weight and hight 
         var start_weight = $('#start-weight-weightloss').val();
          
         var current_weight = $('#current-weight-weightloss').val();
  
         var weightloss = (current_weight - start_weight) * 2;
  
          $('#weightloss-value').html(weightloss);
        
          });
    