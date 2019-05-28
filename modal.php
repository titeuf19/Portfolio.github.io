<?php 
include "connexion.php";
if(isset($_GET['id']))
  
// echo $name;
// $var="SELECT TOP 1 Name FROM form1 order by DESC";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <title>Submit</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Pacifico" rel="stylesheet">

</head>

<body>

  <div class="header">
    <p>Hey <?= $_GET['id'];?></h3>
  </div>
  <div class="container">
    <div class="email_sec">
      <div>
        
        <button id="check-id">Successful Register</button>
        <a href="index.php"><button id="check-id"><i class="fas fa-chevron-right"></i></button></a>
      </div>
      <div class="error">
        <span></span>
      </div>
    </div>
    <div class="pass_sec hidden">
      <div>
        <input type="password" name="pass" id="pass" placeholder="**********" autocomplete="off">
        <button id="check-pass"><i class="fas fa-lock"></i></button>
      </div>
      <div class="error">
        <span></span>
      </div>
    </div>
    <div class="success hidden">
      <div>
        <p class="success-text">Login successful <i class="fas fa-check-circle" style="color:rgba(83, 221, 108, 1);"></i></p>
      </div>
    </div>
  </div>

</body>

</html>

css
<style>
body,
html {
  margin: 0 !important;
  position: relative;
}

.header {
  position: relative;
  padding: 0;
  margin: 0;
  top: 0;
  width: 100%;
  height: 20vh;
}

.header p {
  margin: 0;
  font-family: "Pacifico", cursive;
  font-size: 2em;
  height: auto;
  width: auto;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  color: #4c5b5c;
}

.container {
  background: #1a1b41;
  font-family: "Montserrat", sans-serif;
  margin: 0;
  position: relative;
  bottom: 0;
}

.container div {
  height: 80vh;
  width: calc(100vw - 18px);
  position: relative;
}

.container div div:nth-child(1) {
  height: auto;
  width: auto;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-animation: shadow-pulse 1s infinite;
  animation: shadow-pulse 1s infinite;
  border-radius: 10px;
}

@-webkit-keyframes shadow-pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0px rgba(255, 255, 255, 0.2);
    box-shadow: 0 0 0 0px rgba(255, 255, 255, 0.2);
  }
  100% {
    -webkit-box-shadow: 0 0 0 35px rgba(255, 255, 255, 0);
    box-shadow: 0 0 0 35px rgba(255, 255, 255, 0);
  }
}

@keyframes shadow-pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0px rgba(255, 255, 255, 0.2);
    box-shadow: 0 0 0 0px rgba(255, 255, 255, 0.2);
  }
  100% {
    -webkit-box-shadow: 0 0 0 35px rgba(255, 255, 255, 0);
    box-shadow: 0 0 0 35px rgba(255, 255, 255, 0);
  }
}

.container div div:nth-child(1) input {
  background: #fff;
  color: #4c5b5c;
  border-color: transparent;
  border-radius: 10px 0 0 10px;
  padding: 15px;
  font-family: "Montserrat", sans-serif;
  margin: 0;
}

.container div div:nth-child(1) button {
  background: #4c5b5c;
  color: #fff;
  border-color: transparent;
  border-radius: 0 10px 10px 0;
  padding: 40px;
  cursor: pointer;
  margin: 0;
  font-size: 30px;
}

.container div div:nth-child(1) p {
  background: #fff;
  color: #4c5b5c;
  border-color: transparent;
  border-radius: 10px;
  padding: 15px;
  font-family: "Montserrat", sans-serif;
  margin: 0;
  font-size: 1.5em;
  cursor: pointer;
}

.container div div:nth-child(1) p i {
  color: #53dd6c !important;
}

.container div div:nth-child(2) {
  display: none;
  height: auto;
  width: auto;
  position: absolute;
  top: 60%;
  left: 50%;
  -webkit-transform: translate(-50%, -60%);
  transform: translate(-50%, -60%);
}

.container div div:nth-child(2) span {
  color: #fff;
}

.btn-success {
  background: #53dd6c !important;
}

.btn-error {
  background: #ab2b35 !important;
}

.hidden {
  display: none;
}
/*# sourceMappingURL=style.css.map */

</style>


<!-- js -->
<script>


/**
Project: Cool Stuff | By Smit Patel
Author : Smit Patel
Version: v1.0
Contact: service@netdevv.com

Feel free to checkout my website:: www.netdevv.com
**/


$( document ).ready( function() {
    $('#email_id').focus();
    var varw = (function (context) {
        return function (varName, varValue) {
          var value = varValue;
        
          Object.defineProperty(context, varName, {
            get: function () { return value; },
            set: function (v) {
              value = v;
            }
          });
        };
    })(window);

    varw('isEmailValid', false);
    varw('isPassValid', false);
    
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $('#email').on({
      'input': function(){
        var btn = $('#check-id');
        btn.removeAttr('class');
        var element = $('#email');
        var val = element.val();
        
        var errorEl = $('.email_sec > .error > span');

        if(isEmail(val)){
            errorEl.parent().slideUp('slow');

            btn.addClass('btn-success');
            btn.attr('disable', false);
            isEmailValid = true;
        } else {
            
            isEmailValid = false;
            errorEl.parent().slideDown('slow');
            btn.attr('disable', true);
            btn.addClass('btn-error');
            errorMsg = "";
            errorMsg = " Invalid email. You entered: "+ val;
            errorEl.empty();
            errorEl.append('<i class="fas fa-exclamation-circle" style="color:rgba(171, 43, 53, 1);"></i>' + errorMsg);
        }
    },
    'keypress': function(e){
      if(e.which == 13) {
        $('#check-id').click();
      }  
    }
    });

    $('#pass').on({ 
      'input': function(){
        var btn = $('#check-pass');
        btn.removeAttr('class');
        var element = $('#pass');
        var val = element.val();
        
        var errorEl = $('.pass_sec > .error > span');

        if(val.length >= 5){
            errorEl.parent().slideUp('slow');

            btn.addClass('btn-success');
            btn.attr('disable', false);
            isPassValid = true;
        } else {
            
            isPassValid = false;
            errorEl.parent().slideDown('slow');
            btn.attr('disable', true);
            btn.addClass('btn-error');
            errorMsg = "";
            errorMsg = " Invalid password. Password must be more than 5 CHAR";
            errorEl.empty();
            errorEl.append('<i class="fas fa-exclamation-circle" style="color:rgba(171, 43, 53, 1);"></i>' + errorMsg);
        }
      },
      'keypress': function(e){
        if(e.which == 13) {
          $('#check-pass').click();
        }  
      }
    });

    $('#check-id').on('click', function(){
        if(isEmailValid){
            $('.email_sec').slideUp('fast');
            $('.pass_sec').fadeIn('slow');
            $('#pass').focus();
        }
    });

    $('#check-pass').on('click', function(){
        if(isEmailValid && isPassValid){
            $('.pass_sec').slideUp('fast');
            $('.success').fadeIn('slow');
        }
    });

    $('.success > div').on('click', function(){
        $('.success > div > p').text("Check how I create event listner for variable!");
    });
    
});
</script>