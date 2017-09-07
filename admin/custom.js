function fetchTable(attr){
	$("#table").load("admincms.php #"+attr);
}

$("#general").click(function(){
    fetchTable('generaltable');
});

$("#notable").click(function(){
    fetchTable('notabletable');
});

$("#events").click(function(){
    fetchTable('eventstable');
});

$("#btw").click(function(){
    fetchTable('btwtable');
});

$("#gallery").click(function(){
    fetchTable('gallerytable');
});

$(document).on('click','.updategen',function(){
	id = $(this).data("id");
	content = $(this).data("content");
    $("#table").load("admincms.php #updategeneral","id="+id+"&content="+content);
});

$(document).on('click','.updatenot',function(){
	id = $(this).data("id");
	name = $(this).data("name");
	desc = $(this).data("desc");
    $("#table").load("admincms.php #updatenotable","id="+id+"&name="+name+"&desc="+desc);
});

$(document).on('click','.updateevents',function(){
	dd = $(this).data("dd");
	mm = $(this).data("mm");
	yy = $(this).data("yy");
	text = $(this).data("text");
    $("#table").load("admincms.php #updateevents",{"dd":dd,"mm":mm,"yy":yy,"text":text});
});