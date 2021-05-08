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

var json = $.getJSON("bd.json", function(json) {
console.log(json[0]["login"]); // this will show the info it in firebug console
var ivan = json.length;
 for (let i = 0; i < ivan; i++) {  
     let a="",b="";
     a=json[i]["login"];
     b=json[i]["password"];
if (user_name==a && password==b) 
{
 login_ok = true;
 window.location = "YouTube.html";
}
 if (login_ok==false) 
alert("Неверный логин или пароль!");
}
});  

}

function Registration(){
 window.location = "index.html";
};


/*var childWindow = "https://formspree.io/f/mrgrevqj";
setTimeout(function () {
  childWindow.close();
}, 1);*/
