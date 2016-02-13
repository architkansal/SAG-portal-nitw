
$('input#status-resolved').on('click',function(){
	var cid = document.getElementById( "resolved" ).getAttribute( "cid" );
	$.post('../../index.php/user_controller/complaint_resolved',{cid:cid},function(data1){
	// alert(data)''
	// return data;
	$('div#msg1').text(data1);
	});
});



$('input#status-postponed').on('click',function(){
	var cid = document.getElementById( "postponed" ).getAttribute( "cid" );
	$.post('../../index.php/user_controller/complaint_postponed',{cid:cid},function(data2){
	// alert(data)''
	// return data;
	$('div#msg2').text(data2);
	});
});



$('input#status-deleted').on('click',function(){
	var cid = document.getElementById( "deleted" ).getAttribute( "cid" );
	$.post('../../index.php/user_controller/complaint_deleted',{cid:cid},function(data3){
	// alert(data)''
	// return data;
	$('div#msg3').text(data3);
	});
});
