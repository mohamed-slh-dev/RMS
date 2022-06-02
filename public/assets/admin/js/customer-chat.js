
// ----------------------------------- 1 ----------------------------------------


$('.user-chat').click(function() {


    // get id of delete button
    let id = $(this).attr('id');


    // get number of meal from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // remove the active from all the buttons + hide all chats
    $('.user-chat').removeClass('active');
    $('.user-chat-content').addClass('d-none');
    // $('.user-chat-content').removeClass('d-block');
    
    
    // active the target button + remove class from the target chat
    $('#user-chat-'+idclone).addClass('active');
    $('#user-chat-content-'+idclone).removeClass('d-none');
    // $('#user-chat-content-'+idclone).addClass('d-block');






});