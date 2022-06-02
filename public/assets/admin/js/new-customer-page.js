$("#daily").click(function() {
        // this function will get executed every time the #home element is clicked (or tab-spacebar changed)
        if($("#daily").is(":checked")) // "this" refers to the element that fired the event
        {
             $("#divide-manual").addClass("d-none");
              $("#divide-auto").removeClass("d-none");
    
        } else{
         
                  $("#divide-auto").addClass("d-none");
           $("#divide-manual").removeClass("d-none");
        }
    
                
    });
    
            
    
             $(document).ready(function() {
             var max_fields      = 6;
             var wrapper         = $(".container1");
             var add_button      = $(".add_form_field");
             
             var x = 1;
             $(add_button).click(function(e){
                 e.preventDefault();
                 if(x < max_fields){
                     x++;
                     $(wrapper).append('<div class="row"><div class="col-md-7 mt-1"> <label class="form-label"for="select01">Component</label><select id="select01"data-toggle="select"class="form-control col-md-7"><option selected="">Egg</option><option>Meat</option><option>Bread</option></select></div><div class="col-md-2 float-right mt-1"><label class="form-label"for="select01">Gram</label><input type="number" value="100" name="input-1" class="form-control" placeholder="Gram"> </div><div class="col-md-2"><a href="#" class="delete "><i class="mt-1 material-icons icon--right" style="color:red; padding-top:35px;" >delete</i></a></div><div class="col-md-3"></div>  <div class="form-group col-sm-12 mt-3"><div class="form-row text-center"><div class="col"><label class="form-label text-muted">Kcals</label><p class="text-muted">130</p></div><div class="col"><label class="form-label text-muted">Protein</label><p class="text-muted">23</p></div><div class="col"><label class="form-label text-muted">Carbohydrates</label><p class="text-muted">2.1</p></div><div class="col"><label class="form-label text-muted">Fats</label><p class="text-muted">0.4</p></div></div></div></div>'); //add input box
                 }
             else
             {
             alert('You Reached the limits dishs')
             }
             });
             
             $(wrapper).on("click",".delete", function(e){
                 e.preventDefault(); $(this).parent('.all').remove(); x--;
             })
             });
             $(document).ready(function() {
             var max_fields      = 6;
             var wrapper         = $(".container2");
             var add_button      = $(".add_form_field2");
             
             var x = 1;
             $(add_button).click(function(e){
                 e.preventDefault();
                 if(x < max_fields){
                     x++;
                   $(wrapper).append('<div class="row"><div class="col-md-7 mt-1"> <label class="form-label"for="select01">Component</label><select id="select01"data-toggle="select"class="form-control col-md-7"><option selected="">Egg</option><option>Meat</option><option>Bread</option></select></div><div class="col-md-2 float-right mt-1"><label class="form-label"for="select01">Gram</label><input type="number" value="100" name="input-1" class="form-control" placeholder="Gram"> </div><div class="col-md-2"><a href="#" class="delete "><i class="mt-1 material-icons icon--right" style="color:red; padding-top:35px;" >delete</i></a></div><div class="col-md-3"></div>  <div class="form-group col-sm-12 mt-3"><div class="form-row text-center"><div class="col"><label class="form-label text-muted">Kcals</label><p class="text-muted">130</p></div><div class="col"><label class="form-label text-muted">Protein</label><p class="text-muted">23</p></div><div class="col"><label class="form-label text-muted">Carbohydrates</label><p class="text-muted">2.1</p></div><div class="col"><label class="form-label text-muted">Fats</label><p class="text-muted">0.4</p></div></div></div></div>');//add input box
                 }
             else
             {
             alert('You Reached the limits dishs')
             }
             });
             
             $(wrapper).on("click",".delete", function(e){
                 e.preventDefault(); $(this).parent('div').remove(); x--;
             })
             });
             $(document).ready(function() {
             var max_fields      = 6;
             var wrapper         = $(".container3");
             var add_button      = $(".add_form_field3");
             
             var x = 1;
             $(add_button).click(function(e){
                 e.preventDefault();
                 if(x < max_fields){
                     x++;
                    $(wrapper).append('<div class="row"><div class="col-md-7 mt-1"> <label class="form-label"for="select01">Component</label><select id="select01"data-toggle="select"class="form-control col-md-7"><option selected="">Egg</option><option>Meat</option><option>Bread</option></select></div><div class="col-md-2 float-right mt-1"><label class="form-label"for="select01">Gram</label><input type="number" value="100" name="input-1" class="form-control" placeholder="Gram"> </div><div class="col-md-2"><a href="#" class="delete "><i class="mt-1 material-icons icon--right" style="color:red; padding-top:35px;" >delete</i></a></div><div class="col-md-3"></div>  <div class="form-group col-sm-12 mt-3"><div class="form-row text-center"><div class="col"><label class="form-label text-muted">Kcals</label><p class="text-muted">130</p></div><div class="col"><label class="form-label text-muted">Protein</label><p class="text-muted">23</p></div><div class="col"><label class="form-label text-muted">Carbohydrates</label><p class="text-muted">2.1</p></div><div class="col"><label class="form-label text-muted">Fats</label><p class="text-muted">0.4</p></div></div></div></div>'); //add input box
                 }
             else
             {
             alert('You Reached the limits dishs')
             }
             });
             
             $(wrapper).on("click",".delete", function(e){
                 e.preventDefault(); $(this).parent('div').remove(); x--;
             })
             });
             $(document).ready(function() {
             var max_fields      = 6;
             var wrapper         = $(".container4");
             var add_button      = $(".add_form_field4");
             
             var x = 1;
             $(add_button).click(function(e){
                 e.preventDefault();
                 if(x < max_fields){
                     x++;
                    $(wrapper).append('<div class="row"><div class="col-md-7 mt-1"> <label class="form-label"for="select01">Component</label><select id="select01"data-toggle="select"class="form-control col-md-7"><option selected="">Egg</option><option>Meat</option><option>Bread</option></select></div><div class="col-md-2 float-right mt-1"><label class="form-label"for="select01">Gram</label><input type="number" value="100" name="input-1" class="form-control" placeholder="Gram"> </div><div class="col-md-2"><a href="#" class="delete "><i class="mt-1 material-icons icon--right" style="color:red; padding-top:35px;" >delete</i></a></div><div class="col-md-3"></div>  <div class="form-group col-sm-12 mt-3"><div class="form-row text-center"><div class="col"><label class="form-label text-muted">Kcals</label><p class="text-muted">130</p></div><div class="col"><label class="form-label text-muted">Protein</label><p class="text-muted">23</p></div><div class="col"><label class="form-label text-muted">Carbohydrates</label><p class="text-muted">2.1</p></div><div class="col"><label class="form-label text-muted">Fats</label><p class="text-muted">0.4</p></div></div></div></div>');//add input box
                 }
             else
             {
             alert('You Reached the limits dishs')
             }
             });
             
             $(wrapper).on("click",".delete", function(e){
                 e.preventDefault(); $(this).parent('div').remove(); x--;
             })
             });
             $(document).ready(function() {
             var max_fields      = 6;
             var wrapper         = $(".container5");
             var add_button      = $(".add_form_field5");
             
             var x = 1;
             $(add_button).click(function(e){
                 e.preventDefault();
                 if(x < max_fields){
                     x++;
                    $(wrapper).append('<div class="row"><div class="col-md-7 mt-1"> <label class="form-label"for="select01">Component</label><select id="select01"data-toggle="select"class="form-control col-md-7"><option selected="">Egg</option><option>Meat</option><option>Bread</option></select></div><div class="col-md-2 float-right mt-1"><label class="form-label"for="select01">Gram</label><input type="number" value="100" name="input-1" class="form-control" placeholder="Gram"> </div><div class="col-md-2"><a href="#" class="delete "><i class="mt-1 material-icons icon--right" style="color:red; padding-top:35px;" >delete</i></a></div><div class="col-md-3"></div>  <div class="form-group col-sm-12 mt-3"><div class="form-row text-center"><div class="col"><label class="form-label text-muted">Kcals</label><p class="text-muted">130</p></div><div class="col"><label class="form-label text-muted">Protein</label><p class="text-muted">23</p></div><div class="col"><label class="form-label text-muted">Carbohydrates</label><p class="text-muted">2.1</p></div><div class="col"><label class="form-label text-muted">Fats</label><p class="text-muted">0.4</p></div></div></div></div>'); //add input box
                 }
             else
             {
             alert('You Reached the limits dishs')
             }
             });
             
             $(wrapper).on("click",".delete", function(e){
                 e.preventDefault(); $(this).parent('div').remove(); x--;
             })
             });
             
             $(document).ready(function() {
             var max_fields      = 6;
             var wrapper         = $(".container6");
             var add_button      = $(".add_form_field6");
             
             var x = 1;
             $(add_button).click(function(e){
                 e.preventDefault();
                 if(x < max_fields){
                     x++;
                     $(wrapper).append('<div class="row"><div class="col-md-7 mt-1"> <label class="form-label"for="select01">Component</label><select id="select01"data-toggle="select"class="form-control col-md-7"><option selected="">Egg</option><option>Meat</option><option>Bread</option></select></div><div class="col-md-2 float-right mt-1"><label class="form-label"for="select01">Gram</label><input type="number" value="100" name="input-1" class="form-control" placeholder="Gram"> </div><div class="col-md-2"><a href="#" class="delete "><i class="mt-1 material-icons icon--right" style="color:red; padding-top:35px;" >delete</i></a></div><div class="col-md-3"></div>  <div class="form-group col-sm-12 mt-3"><div class="form-row text-center"><div class="col"><label class="form-label text-muted">Kcals</label><p class="text-muted">130</p></div><div class="col"><label class="form-label text-muted">Protein</label><p class="text-muted">23</p></div><div class="col"><label class="form-label text-muted">Carbohydrates</label><p class="text-muted">2.1</p></div><div class="col"><label class="form-label text-muted">Fats</label><p class="text-muted">0.4</p></div></div></div></div>'); //add input box
                 }
             else
             {
             alert('You Reached the limits dishs')
             }
             });
             
             $(wrapper).on("click",".delete", function(e){
                 e.preventDefault(); $(this).parent('div').remove(); x--;
             })
             });
             
             
             $(".custom01").hide();
             $(".custom1").click(function() {
             if($(this).is(":checked")) {
                 $(".custom01").show();
             } else {
                 $(".custom01").hide();
             }
             });
             $(".custom02").hide();
             $(".custom2").click(function() {
             if($(this).is(":checked")) {
                 $(".custom02").show();
             } else {
                 $(".custom02").hide();
             }
             });
             $(".custom03").hide();
             $(".custom3").click(function() {
             if($(this).is(":checked")) {
                 $(".custom03").show();
             } else {
                 $(".custom03").hide();
             }
             });
             $(".custom04").hide();
             $(".custom4").click(function() {
             if($(this).is(":checked")) {
                 $(".custom04").show();
             } else {
                 $(".custom04").hide();
             }
             });
             $(".custom05").hide();
             $(".custom5").click(function() {
             if($(this).is(":checked")) {
                 $(".custom05").show();
             } else {
                 $(".custom05").hide();
             }
             });
             $(".custom06").hide();
             $(".custom6").click(function() {
             if($(this).is(":checked")) {
                 $(".custom06").show();
             } else {
                 $(".custom06").hide();
             }
             });
             
             
             
                     function toggleEnable(id) {
             var textbox = document.getElementById(id);
             
             if (textbox.disabled) {
               // If disabled, do this 
                document.getElementById(id).disabled = false;
             } else {
                // Enter code here
                 document.getElementById(id).disabled = true;
              }
             }
             
             
              
                     
        $(document).ready(function() {
                 $('#mycheckbox').change(function() {
                     $('#mycheckboxdiv').toggle();
                 });
             });
             
             $(document).ready(function() {
                 $('#customCheck01').change(function() {
                     $('#div1').toggle();
                 });
             });
             
             
             $('.tab-toggle').on('click', function() {
               //get index of li which is clicked
               var indexs = $(this).closest('li').index()
               //remove class from others
               $("ul li").not($(this).closest('li')).removeClass("active")
               //add class where indexs same
               $("ul").find("li:eq(" + indexs + ")").not($(this).closest('li')).addClass("active")
             });
             
             $(document).ready(function(){
             
             var current_fs, next_fs, previous_fs; //fieldsets
             var opacity;
             
             $(".next").click(function(){
             
             current_fs = $(this).parent();
             next_fs = $(this).parent().next();
             
             //Add Class Active
             $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
             
             //show the next fieldset
             next_fs.show();
             //hide the current fieldset with style
             current_fs.animate({opacity: 0}, {
             step: function(now) {
             // for making fielset appear animation
             opacity = 1 - now;
             
             current_fs.css({
             'display': 'none',
             'position': 'relative'
             });
             next_fs.css({'opacity': opacity});
             },
             duration: 600
             });
             });
             
             $(".previous").click(function(){
             
             current_fs = $(this).parent();
             previous_fs = $(this).parent().prev();
             
             //Remove class active
             $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
             
             //show the previous fieldset
             previous_fs.show();
             
             //hide the current fieldset with style
             current_fs.animate({opacity: 0}, {
             step: function(now) {
             // for making fielset appear animation
             opacity = 1 - now;
             
             current_fs.css({
             'display': 'none',
             'position': 'relative'
             });
             previous_fs.css({'opacity': opacity});
             },
             duration: 600
             });
             });
             
             $('.radio-group .radio').click(function(){
             $(this).parent().find('.radio').removeClass('selected');
             $(this).addClass('selected');
             });
             
             $(".submit").click(function(){
             return false;
             })
             
             });
             
             
             
             
             
             function openp(pName) {
               var i;
               var x = document.getElementsByClassName("payment");
               for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";  
               }
               document.getElementById(pName).style.display = "block";  
             }
             
             
             
             
             
             
             
             function ShowAndHide() {
                 var x = document.getElementById('meal');
                 if (x.style.display == 'none') {
                     x.style.display = 'block';
                 } else {
                     x.style.display = 'none';
                 }
             }
    
    
             $('select').on('change', function(){
      if($(this).val()=='Other'){
        $('#other').show().focus();
      }else{
        $('#other').val('').hide();
      }
    });