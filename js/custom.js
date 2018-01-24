function fetchSection(url){
	$("#fillable").load("cms.php #"+url+"wrapper");
}

$(document).ready(function(){
});

$("#home").click(function(){
     fetchSection('home');
});

$("#aims").click(function(){
     fetchSection('aims');
});

$("#meettheteam").click(function(){
     fetchSection('meettheteam');
});

$("#messagefromdean").click(function(){
     fetchSection('messagefromdean');
});

$("#searchalumni").click(function(){
     fetchSection('searchalumni');
});

$("#alumniregs").click(function(){
     fetchSection('alumniregs');
});

$("#beyondthewall").click(function(){
      fetchSection('beyondthewall');
});

$("#photogallery").click(function(){
      fetchSection('photo');
});

$("#alumnistudentmentorship").click(function(){
      fetchSection('alumnistudentmentorship');
});

$("#iiiprogramme").click(function(){
      fetchSection('iiiprogramme');
});

$("#studentvolunteers").click(function(){
      fetchSection('studentvolunteers');
});

$("#alumnistats").click(function(){
      fetchSection('alumnistats');
});

$("#popularlectures").click(function(){
      fetchSection('popularlectures');
});

$("#studentalumnimeet").click(function(){
      fetchSection('studentalumnimeet');
});

$("#alumniawards").click(function(){
      fetchSection('alumniawards');
});

$("#alumniservices").click(function(){
      fetchSection('alumniservices');
});

$("#regionalcoordinator").click(function(){
      fetchSection('regionalcoordinator');
});

$("#newsletter").click(function(){
      fetchSection('newsletter');
});

var scrollpos = window.scrollY;
var header = document.getElementById("navbar");
var headerheight = document.getElementById("header").offsetHeight;
var scrollheight = headerheight - 50;

function add_class_on_scroll() {
  header.classList.add("affix");
}

function remove_class_on_scroll() {
  header.classList.remove("affix");
}

window.addEventListener('scroll', function() {
  scrollpos = window.scrollY;
  if (scrollpos > scrollheight)  {
    add_class_on_scroll();
  } else {
    remove_class_on_scroll();
  }
});

$(document).on('click','#registerButton',function(){
$.ajax({
     type: "POST",
     url: 'src/register.php',
     data: $("#registerForm").serialize(),
     success: function(server_message) {
         alert(server_message);
     }
});
});

$(document).on('click','#loginButton',function(){
$.ajax({
     type: "POST",
     url: 'src/login.php',
     data: $("#loginForm").serialize(),
     success: function(server_message) {
         alert(server_message);
         window.location.href="index.php";
     }
});
});