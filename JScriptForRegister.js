
function validateForm() {

  var parent = document.forms["form"]["Parent"].value;
  var email=document.forms["form"]["email"].value;
  var email = document.getElementById('email');
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var children=document.forms["form"]["children"].value;
  var name=document.forms["form"]["name"].value;
  var surname=document.forms["form"]["surname"].value;
  var address = document.getElementById('address');
  var re =/^[a-zA-Z0-9\s,.'-]{3,}$/;
  var password = document.getElementById('password');
  var p=/^[A-Za-z]\w{7,15}$/;

  if (parent == "") {
    alert("Please enter your name");

    return false;
  }
  if (!filter.test(email.value)) {
    alert('Please provide a valid email address');

    return false;
 }
if(children== ""){
  window.alert('Please provide a  number');
  return false;
}
if (name == "") {
  window.alert("Please enter your child's name");

  return false;
}
if (surname == "") {
  window.alert("Please enter your child's surname");

  return false;
}
if (!re.test(address.value)) {
  alert('Please provide a valid address');

  return false;
}

var gender = document.getElementsByName('financial aid');
var genValue = false;

for(var i=0; i<gender.length;i++){
    if(gender[i].checked == true){
        genValue = true;
    }
}
if(!genValue){
    window.alert("Please choose if you wnat financial aid or not");
    return false;
}
if (!p.test(password.value)) {
  alert('Please provide a valid password(only letters allowed)');

  return false;
}
}

function allowDrop(ev){
                      ev.preventDefault();
                      }

function drag(ev){
                  ev.dataTransfer.setData("Text",ev.target.id);
                }

function drop(ev){
                 ev.preventDefault();
                var data=ev.dataTransfer.getData("Text");
                ev.target.appendChild(document.getElementById(data));
                  }
