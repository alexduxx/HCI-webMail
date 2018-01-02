
$('#speechBtn').on('click', function(){
  $( this ).css({
      "border": "#68dff0 2px solid"
    });
  annyang.start();
});




if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'show tps report': function() {
      $('#tpsreport').animate({bottom: '-100px'});
    },
    'hello': function(){
      $('#myModal').modal('show');
      alert("Hello! I am an alert box!!");
      console.log('cacat');
    }

  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.

}



// --------------------------------------------------------------------------
// ----------------------CHAT FUNCTIONALITY START ---------------------------
// --------------------------------------------------------------------------



var me = {};
me.avatar = "assets/img/friends/fr-02.jpg";

var you = {};
you.avatar = "assets/img/ui-divya.jpg";

function formatAMPM(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}

//-- No use time. It is a javaScript effect.
function insertChat(who, text, time = 0){
    var control = "";
    var date = formatAMPM(new Date());

    if (who == "me"){

        control = '<li style="width:100%">' +
                        '<div class="msj macro">' +
                        '<div class="avatar"><img class="img-circle" style="width:100%;" src="'+ me.avatar +'" /></div>' +
                            '<div class="text text-l">' +
                                '<p>'+ text +'</p>' +
                                '<p><small>'+date+'</small></p>' +
                            '</div>' +
                        '</div>' +
                    '</li>';
    }else{
        control = '<li style="width:100%;">' +
                        '<div class="msj-rta macro">' +
                            '<div class="text text-r">' +
                                '<p>'+text+'</p>' +
                                '<p><small>'+date+'</small></p>' +
                            '</div>' +
                        '<div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="'+you.avatar+'" /></div>' +
                  '</li>';
    }
    setTimeout(
        function(){
            $(".frame ul").append(control);

        }, time);

}

function resetChat(){
    $(".frame ul").empty();
}

$(".mytext").on("keyup", function(e){
    if (e.which == 13){
        var text = $(this).val();
        if (text !== ""){
            insertChat("me", text);
            $(this).val('');
        }
    }
});



//-- Clear Chat
resetChat();

//-- Print Messages
insertChat("me", "Hello Tom...", 0);
insertChat("you", "Hi, Pablo", 1500);
insertChat("me", "What would you like to talk about today?", 3500);
insertChat("you", "Tell me a joke",7000);
insertChat("me", "Spaceman: Computer! Computer! Do we bring battery?!", 9500);
insertChat("you", "LOL", 12000);
