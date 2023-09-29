//get elements from html

// Name input;
var uName = document.getElementById("uName");
var uNameErr = document.getElementById("uNameErr");

// phone input;
var utel = document.getElementById("utel");
var utelErr = document.getElementById("utelErr");

// email input; 
var uEmail = document.getElementById("uEmail");
var uEmailErr = document.getElementById("uEmailErr");

// textarea input;
var mess = document.getElementById("mess");
var messErr = document.getElementById("messErr");


$(document).ready(function(){
    'use strict';

    // banner slider
    $('.banner-slider').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3500,
    });

    // animation css when scroll
    new WOW().init();

});


// a function for submit button;

function subm()
{

      // name field;
      if(uName.value == "")
      {
          uName.style.borderColor = "#008080";
          uNameErr.innerHTML = "Enter Your Username";
          uName.focus();
          return false;
      }
  
      // email field;
      if(uEmail.value == "")
      {
        uEmail.style.borderColor = "#008080";
        uEmailErr.innerHTML = "Enter Your User Email";
          uEmail.focus();
          return false;
      }

       // phone field;
       if(utel.value == "")
       {
         utel.style.borderColor = "#008080";
         utelErr.innerHTML = "Enter Your Phone Number";
           utel.focus();
           return false;
       }
  
      // password field;
      if(mess.value == "")
      {
          mess.style.borderColor = "#008080";
          messErr.innerHTML = "Enter Your Message";
          mess.focus();
          return false;
      }

}


// a function to remove error after fill up input feild;
function errValid()
{   
    // name error valid;
    if(uName.value != "")
    {
        uName.style.borderColor = "#000000";
        uNameErr.innerHTML = "";
    }

    // email error valid;
    if(uEmail.value != "")
    {
        uEmail.style.borderColor = "#5F7A61";
        uEmailErr.innerHTML = "";
    }

     // phone error valid;
     if(uEmail.value != "")
     {
         utel.style.borderColor = "#5F7A61";
         utel.innerHTML = "";
     }

    // password error valid;
    if(mess.value != "")
    {
        mess.style.borderColor = "#5F7A61";
        messErr.innerHTML = "";
    }

}


uName.addEventListener("blur", errValid);
uEmail.addEventListener("blur", errValid);
utel.addEventListener("blur", errValid);
mess.addEventListener("blur", errValid);