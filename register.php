<?php include_once('database.php');?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bootflat-Admin Template</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="dist/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="dist/js/site.min.js"></script>
    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #303641;
        color: #C1C3C6
      }
    </style>
  </head>
  <body>
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <div class="container">
      <form class="form-signin" role="form"  method="post" action="">
        <h3 class="form-signin-heading">Registeration Form</h3>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-asterisk "></i>
            </div>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="FirstName" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-asterisk "></i>
            </div>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="LastName" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-user "></i>
            </div>
            <input type="text" class="form-control" name="userName" id="userName" placeholder="UserName" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-envelope "></i>
            </div>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-phone "></i>
            </div>
            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="PhoneNumber" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-lock "></i>
            </div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-lock "></i>
            </div>
            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="ConfirmPassword" autocomplete="off" />
          </div>
        </div>



        <label class="checkbox">
          <input type="checkbox" value="remember-me"> &nbsp Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" name="signup" type="submit" id="signup">Sign up</button>
      </form>

    </div>
    <div class="clearfix"></div>
    <br><br>
    <!--footer-->
    <div class="site-footer login-footer">
      <div class="container">
        <div class="copyright clearfix text-center">
          <p><b>Bootflat</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="getting-started.html">Getting Started</a>&nbsp;&bull;&nbsp;<a href="index.html">Documentation</a>&nbsp;&bull;&nbsp;<a href="https://github.com/Bootflat/Bootflat.UI.Kit.PSD/archive/master.zip">Free PSD</a>&nbsp;&bull;&nbsp;<a href="colors.html">Color Picker</a></p>
          <p>Code licensed under <a href="http://opensource.org/licenses/mit-license.html" target="_blank" rel="external nofollow">MIT License</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/" rel="external nofollow">CC BY 3.0</a>.</p>
        </div>
      </div>
    </div>
<!--Jquery validation for every field
-->
<script type="text/javascript">

  var result = $( document ).ready(function(){
var datavalid='true';
    $('#signup').on('click',function(e) {
      var validated=validate();
 if (!validated) {
  e.preventDefault();
 }
});
    
 function validate(){


         var firstName = $('#firstName').val();
        var lastName = $('#lastName').val();
        var userName = $('#userName').val();
        var email = $('#email').val();
        var phoneNumber = $('#phoneNumber').val();
        var password = $('#password').val();
        var confirmPassword = $('#confirmPassword').val();
        

 
    if ( firstName.length < 1 || (! ( firstName.match ( /^[A-Za-z0-9]*$/ ) ) ) ) {
      $('#firstName').after('  First name invalid');
      datavalid=false;
    }
    
    if ( lastName.length < 1 || ( ! ( lastName.match ( /^[A-Za-z0-9]*$/ ) ) ) ) {
      $('#lastName').after('  Last name invalid');
      datavalid=false;
    }

    if ( userName.length < 1 || (! ( userName.match ( /^[A-Za-z0-9]*$/ ) ) ) ) {
      $('#userName').after('  User name invalid');
      datavalid=false;
    }
    if ( email.length < 1 || (! ( email.match (/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/) ))){
      $('#email' ).after('  E-mail invalid');
      datavalid=false;
    } 
///^[a-zA-Z0-9]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/
    if( phoneNumber.length != 10 || (! phoneNumber.match(/^[0-9]{10}$/) ) ){
      $('#phoneNumber').after('  Phone Number invalid ');
      datavalid=false;

    }
   
    if ((password.length < 8 ) || (! password.match(/([a-zA-Z0-9]+[!,@,#,$,%,^,&,*])/) ))  {
      $('#password' ).after('  Password invalid');
      datavalid=false;
    }
    if(confirmPassword !== password || confirmPassword.length<1){
      $('#confirmPassword').after('  Password do not match');
      datavalid=false;
    }

return datavalid;
   

}
</script>
  </body>
</html>
