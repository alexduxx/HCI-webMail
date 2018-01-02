<?php
include 'includes/header.php';

?>

















<?php

include_once 'includes/footer.php';

 ?>
 <script type="text/javascript">
         $(document).ready(function () {
         var index_chat = $.gritter.add({
             // (string | mandatory) the heading of the notification
             title: 'Chat with your contacts',
             // (string | mandatory) the text inside the notification
             text: 'Here you can chat with your friends that are using SomeMail as well. Click on one of the images to start a chat.',
             // (string | optional) the image to display on the left
             image: 'http://icons.iconarchive.com/icons/webalys/kameleon.pics/512/Chat-2-icon.png',
             // (bool | optional) if you want it to fade out on its own or just sit there
             sticky: false,
             // (int | optional) the time you want it to be alive for before fading out
             time: '',
             // (string | optional) the class name you want to apply to that specific message
             class_name: 'gritter-chat'
         });


         var index_welcome = $.gritter.add({
             // (string | mandatory) the heading of the notification
             title: 'Welcome to <b style="color:#68dff0">SomeMail</b>',
             // (string | mandatory) the text inside the notification
             text: 'Welcome to our web client app. We hope you are gonna enjoy this platform. Find out more by reading the rest of the Greeters. Hover me to enable the Close Button. ',
             // (string | optional) the image to display on the left
             // image: 'assets/img/ui-sam.jpg',
             // (bool | optional) if you want it to fade out on its own or just sit there
             sticky: false,
             // (int | optional) the time you want it to be alive for before fading out
             time: '',
             // (string | optional) the class name you want to apply to that specific message
             class_name: 'gritter-welcome'
         });

         var index_watson = $.gritter.add({
             // (string | mandatory) the heading of the notification
             title: 'More info',
             // (string | mandatory) the text inside the notification
             text: 'If you want to find out more about what other features this app has, you can ask our chatbot Watson.',
             // (string | optional) the image to display on the left
             image: 'https://www.ibm.com/blogs/bluemix/wp-content/uploads/2016/07/watson_conversations_icon.png',
             // (bool | optional) if you want it to fade out on its own or just sit there
             sticky: false,
             // (int | optional) the time you want it to be alive for before fading out
             time: '',
             // (string | optional) the class name you want to apply to that specific message
             class_name: 'gritter-watson'
         });

         var index_talk = $.gritter.add({
             // (string | mandatory) the heading of the notification
             title: 'Tell the app what to do.',
             // (string | mandatory) the text inside the notification
             text: 'You can interact with your email client now by pressing the microphone on the right. Say things like: "Compose mail","Delete mail" etc., for more info ask Watson.',
             // (string | optional) the image to display on the left
             image: 'http://icons.iconarchive.com/icons/pelfusion/long-shadow-media/512/Microphone-icon.png',
             // (bool | optional) if you want it to fade out on its own or just sit there
             sticky: false,
             // (int | optional) the time you want it to be alive for before fading out
             time: '',
             // (string | optional) the class name you want to apply to that specific message
             class_name: 'gritter-talk'
         });

         return false;
         });
   </script>
