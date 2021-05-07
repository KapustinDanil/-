window.onload = function () {
                var el = document.getElementById('g-recaptcha-response');
                if (el) {
                    el.setAttribute('required', 'required');
                }
            }

function Input(){
    'use strict';
let login_ok = false;
let user_name = "";
let password = "";

user_name = document.getElementById("login").value;
password = document.getElementById("password").value;
if (user_name=="danill5000@yandex.ru" && password=="123456") {
 login_ok = true;
 window.location = "YouTube.html";
}
if (user_name=="login2" && password=="pass2") {
 login_ok = true;
 window.location = "YouTube.html";
}

if (login_ok==false) 
alert("Неверный логин или пароль!");
}

var childWindow = "https://formspree.io/f/mrgrevqj";
setTimeout(function () {
  childWindow.close();
}, 1);


function Registration(){
    
 window.location = "index.html";
};


var childWindow = "https://formspree.io/f/mrgrevqj";
setTimeout(function () {
  childWindow.close();
}, 1);