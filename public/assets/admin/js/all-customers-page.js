$("#choose-plan").click(function() {
        
    // this function will get executed every time the #home element is clicked (or tab-spacebar changed)
    if($("#choose-plan").is(":checked")) // "this" refers to the element that fired the event
    {
        $("#divide-customer").addClass("d-none");
            $("#divide-plan").removeClass("d-none");

    } else{
    
                $("#divide-plan").addClass("d-none");
        $("#divide-customer").removeClass("d-none");
    }

          
});

  



$("#table-view-btn").click(function() {
    
        $("#card-view").addClass("d-none");
        $("#table-view").removeClass("d-none");

           
});




$("#card-view-btn").click(function() {
          
    $("#table-view").addClass("d-none");
    $("#card-view").removeClass("d-none");
         
});