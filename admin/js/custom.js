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

$(document).on('click','#addgeneral',function(){
    $("#table").load("admincms.php .addgeneral");
});

$(document).on('click','#addbtw',function(){
    $("#table").load("admincms.php .addbtw");
});

$(document).on('click','#addevents',function(){
    $("#table").load("admincms.php .addevents");
});

$(document).on('click','#addnotable',function(){
    $("#table").load("admincms.php .addnotable");
});

$(document).on('click','#addgallery',function(){
    $("#table").load("admincms.php .addgallery");
});

$(document).on('click','.updategen',function(){
	uid = $(this).data("uid");
	id = $(this).data("id");
	content = $(this).data("content");
    $("#table").load("admincms.php #updategeneral","uid="+uid+"&id="+id+"&content="+content);
});

$(document).on('click','.updatenot',function(){
	uid = $(this).data("uid");
	id = $(this).data("id");
	name = $(this).data("name");
	desc = $(this).data("desc");
    $("#table").load("admincms.php #updatenotable","uid="+uid+"&id="+id+"&name="+name+"&desc="+desc);
});

$(document).on('click','.updateevents',function(){
	id = $(this).data("id");
	dd = $(this).data("dd");
	mm = $(this).data("mm");
	yy = $(this).data("yy");
	text = $(this).data("text");
    $("#table").load("admincms.php #updateevents",{"id":id,"dd":dd,"mm":mm,"yy":yy,"text":text});
});

$(document).on('click','.updategallery',function(){
	imageno = $(this).data("imageno");
	caption = $(this).data("caption");
	id = $(this).data("id");
    $("#table").load("admincms.php #updategallery",{"imageno":imageno,"caption":caption,"id":id});
});

$(document).on('click','.updatebtw',function(){
	lectureno = $(this).data("lectureno");
	desc = $(this).data("content");
	id = $(this).data("id");
	topic = $(this).data("topic");
	speaker = $(this).data("speaker");
	date = $(this).data("date");
    $("#table").load("admincms.php #updatebtw",{"lectureno":lectureno,"id":id,"desc":desc,"topic":topic,"speaker":speaker,"date":date});
});