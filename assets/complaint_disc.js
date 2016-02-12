var data;

$('input#status-resolved').on('click',function(){
	var cid = document.getElementById( "resolved" ).getAttribute( "cid" );
	$.post('../../index.php/user_controller/complaint_resolved',{cid:cid},function(data){
	alert(data);
	// return data;
	});
});

function fn()
{
	return data;
}