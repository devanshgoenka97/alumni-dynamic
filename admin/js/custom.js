function fetchTable(attr){
	$("#table").load("admincms.php #"+attr);
}

$("#users").click(function(){
    fetchTable('userstable');
});

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

$("#iiip").click(function(){
    fetchTable('iiiptable');
});

$("#newsletter").click(function(){
    fetchTable('newslettertable');
});

$("#region").click(function(){
    fetchTable('regiontable');
});

$("#stats").click(function(){
    fetchTable('statstable');
});

$("#volunteers").click(function(){
    fetchTable('volunteerstable');
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

$(document).on('click','#addvolunteer',function(){
    $("#table").load("admincms.php .addvolunteer");
});

$(document).on('click','#addiiip',function(){
    $("#table").load("admincms.php .addiiip");
});

$(document).on('click','#addnewsletter',function(){
    $("#table").load("admincms.php .addnewsletter");
});

$(document).on('click','#addstats',function(){
    $("#table").load("admincms.php .addstats");
});

$(document).on('click','.updategen',function(){
	uid = $(this).data("uid");
	id = $(this).data("id");
	content = encodeURI($(this).data("content"));
    $("#table").load("admincms.php #updategeneral","uid="+uid+"&id="+id+"&content="+content);
});

$(document).on('click','.updatenot',function(){
	uid = $(this).data("uid");
	id = $(this).data("id");
	name = $(this).data("name");
	desc = encodeURI($(this).data("desc"));
    $("#table").load("admincms.php #updatenotable","uid="+uid+"&id="+id+"&name="+name+"&desc="+desc);
});

$(document).on('click','.updateevents',function(){
	id = $(this).data("id");
	dd = $(this).data("dd");
	mm = $(this).data("mm");
	yy = $(this).data("yy");
	text = encodeURI($(this).data("text"));
    $("#table").load("admincms.php #updateevents",{"id":id,"dd":dd,"mm":mm,"yy":yy,"text":text});
});

$(document).on('click','.updategallery',function(){
	imageno = $(this).data("imageno");
	caption = $(this).data("caption");
	id = $(this).data("id");
    $("#table").load("admincms.php #updategallery",{"imageno":imageno,"caption":caption,"id":id});
});

$(document).on('click','.updatevolunteer',function(){
    imageno = $(this).data("imageno");
    caption = $(this).data("caption");
    id = $(this).data("id");
    $("#table").load("admincms.php #updatevolunteer",{"imageno":imageno,"caption":caption,"id":id});
});

$(document).on('click','.updatebtw',function(){
	lectureno = $(this).data("lectureno");
	desc = encodeURI($(this).data("content"));
	id = $(this).data("id");
	topic = encodeURI($(this).data("topic"));
	speaker = $(this).data("speaker");
	date = $(this).data("date");
    $("#table").load("admincms.php #updatebtw",{"lectureno":lectureno,"id":id,"desc":desc,"topic":topic,"speaker":speaker,"date":date});
});

$(document).on('click','.updatenewsletter',function(){
    lectureno = $(this).data("lectureno");
    desc = encodeURI($(this).data("content"));
    id = $(this).data("id");
    date = $(this).data("date");
    $("#table").load("admincms.php #updatenewsletter",{"lectureno":lectureno,"id":id,"desc":desc,"date":date});
});

$(document).on('click','.updatestats',function(){
    year = $(this).data("year");
    btech = $(this).data("btech");
    mtech = $(this).data("mtech");
    others = $(this).data("others");
    phd = $(this).data("phd");
    id = $(this).data("id");
    $("#table").load("admincms.php #updatestats",{"id":id,"year":year,"btech":btech,"mtech":mtech,"others":others,"phd":phd});
});

$(document).on('click','.updateiiip',function(){
	lectureno = $(this).data("lectureno");
	desc = encodeURI($(this).data("content"));
	id = $(this).data("id");
	topic = encodeURI($(this).data("topic"));
	speaker = $(this).data("speaker");
	date = $(this).data("date");
    $("#table").load("admincms.php #updateiiip",{"lectureno":lectureno,"id":id,"desc":desc,"topic":topic,"speaker":speaker,"date":date});
});

$(document).on('click','.deleteiiip',function(){
    id = $(this).data("id");
    lno = $(this).data("lno");
    $.ajax({
    	type:'POST',
    	url:'src/deleteiiip.php',
    	data:{'id':id,'lno':lno},
    	success: function(result){
    		alert(result);
    	}
    });
});

$(document).on('click','.deletegen',function(){
    id = $(this).data("uid");
    $.ajax({
        type:'POST',
        url:'src/deletegeneral.php',
        data:{'id':id},
        success: function(result){
            alert(result);
        }
    });
});

$(document).on('click','.deleteevents',function(){
    id = $(this).data("id");
    $.ajax({
        type:'POST',
        url:'src/deleteevents.php',
        data:{'id':id},
        success: function(result){
            alert(result);
        }
    });
});

$(document).on('click','.deletestats',function(){
    id = $(this).data("id");
    $.ajax({
        type:'POST',
        url:'src/deletestats.php',
        data:{'id':id},
        success: function(result){
            alert(result);
        }
    });
});


$(document).on('click','.deletebtw',function(){
    id = $(this).data("id");
    lno = $(this).data("lno");
    $.ajax({
    	type:'POST',
    	url:'src/deletebtw.php',
    	data:{'id':id,'lno':lno},
    	success: function(result){
    		alert(result);
    	}
    });
});

$(document).on('click','.deletenot',function(){
    id = $(this).data("id");
    lno = $(this).data("ino");
    $.ajax({
        type:'POST',
        url:'src/deletenot.php',
        data:{'id':id,'ino':lno},
        success: function(result){
            alert(result);
        }
    });
});

$(document).on('click','.deletenewsletter',function(){
    id = $(this).data("id");
    lno = $(this).data("lno");
    $.ajax({
        type:'POST',
        url:'src/deletenewsletter.php',
        data:{'id':id,'lno':lno},
        success: function(result){
            alert(result);
        }
    });
});

$(document).on('click','.deletegallery',function(){
    id = $(this).data("id");
    imageno = $(this).data("imageno");
    $.ajax({
        type:'POST',
        url:'src/deletegallery.php',
        data:{'id':id,'imageno':imageno},
        success: function(result){
            alert(result);
        }
    });
});

$(document).on('click','.deletevolunteer',function(){
    id = $(this).data("id");
    imageno = $(this).data("imageno");
    $.ajax({
        type:'POST',
        url:'src/deletevolunteer.php',
        data:{'id':id,'imageno':imageno},
        success: function(result){
            alert(result);
        }
    });
});

$(document).on('click','.approve',function(){
	$.ajax({
         type: "POST",
         url: 'src/approveuser.php',
         data: {'id':$(this).data("uid")},
         success: function(server_message) {
         alert(server_message);
       }
	});
});