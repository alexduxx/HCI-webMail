<?php
include 'includes/header.php';

?>

<div class="col-lg-10">
    <div class="row" id="content-left">   <!--  id="content-left"  -->
      <div class="col-lg-4" id="left">



        <form action="" method="GET">
          <div class="row">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" id="txtSearch"/>
              <div class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                <span class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
          </div>
        </form>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Sort: Newest First <span class="glyphicon glyphicon-chevron-down"></span></label>
        </div>
        <!-- MAIL EXAMPLE  ACTIVE -->
        <div class="well well-large" id="active-mail">
          <div class="container">
            <div class="row">
              <div class="col">
                <h4><span class="glyphicon glyphicon-user"></span>  Hans Hansen</h4>
                <h6>Invitation to event</h6>
                <p class="mail-time">13:33 PM</p><br>
                <h8>Etiam a sem malesuada, mattis sem vel,<br>
                  tristique ligula. Praesent ornare dolor<br>
                  non ex lobortis, eget ullamcorper lobortis.</h8>
              </div>
            </div>
          </div>
        </div>
        <!-- MAIL EXAMPLE  -->
        <div class="well well-large">
          <div class="container">
            <div class="row">
              <div class="col">
                <h4><span class="glyphicon glyphicon-user"></span>  Lone Janson</h4>
                <h6>Important message</h6>
                <p class="mail-time">11:54 PM</p><br>
                <h8>Etiam a sem malesuada, mattis sem vel,<br>
                  tristique ligula. Praesent ornare dolor<br>
                  non ex lobortis, eget ullamcorper lobortis.</h8>
              </div>
            </div>
          </div>
        </div>
        <!-- MAIL EXAMPLE  -->
        <div class="well well-large">
          <div class="container">
            <div class="row">
              <div class="col">
                <h4><span class="glyphicon glyphicon-user"></span>  William Waits</h4>
                <h6>Scedule for tomorrow</h6>
                <p class="mail-time">11:05 PM</p><br>
                <h8>Etiam a sem malesuada, mattis sem vel,<br>
                  tristique ligula. Praesent ornare dolor<br>
                  non ex lobortis, eget ullamcorper lobortis.</h8>
              </div>
            </div>
          </div>
        </div>
        <!-- MAIL EXAMPLE  -->
        <div class="well well-large">
          <div class="container">
            <div class="row">
              <div class="col">
                <h4><span class="glyphicon glyphicon-user"></span>  Mona Lisa</h4>
                <h6>Paintings</h6>
                <p class="mail-time">10:31 PM</p><br>
                <h8>Etiam a sem malesuada, mattis sem vel,<br>
                  tristique ligula. Praesent ornare dolor<br>
                  non ex lobortis, eget ullamcorper lobortis.</h8>
              </div>
            </div>
          </div>
        </div>

        <!-- MAIL EXAMPLE  -->
        <div class="well well-large">
          <div class="container">
            <div class="row">
              <div class="col">
                <h4><span class="glyphicon glyphicon-user"></span>  Jack Sparrow</h4>
                <h6>So many pirates</h6>
                <p class="mail-time">08:45 PM</p><br>
                <h8>Etiam a sem malesuada, mattis sem vel,<br>
                  tristique ligula. Praesent ornare dolor<br>
                  non ex lobortis, eget ullamcorper lobortis.</h8>
              </div>
            </div>
          </div>
        </div>

      </div>

    <!-- id="content-right" -->
<<<<<<< HEAD
      <div  class="col-lg-8">
=======
      <div  class="col-md-8" id="right">
>>>>>>> e3a9c8dc1ba281fb85388b2f75fab181d0290b2a
        <div class="container">
          <span class="glyphicon glyphicon-menu-left"></span>
          <h1>GROUP 1</h1>
        </div>
      </div>


  </div> <!-- <div class="row" id="content-left"> -->
</div>  <!--col lg 10 end-->















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
