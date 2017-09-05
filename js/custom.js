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