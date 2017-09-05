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