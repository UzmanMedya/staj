$(function()
{//açılır menu
	$("#bildirim").click(function()
		{
			$("#bildirim-icerik").slideToggle();
		});
});

var oku =function(id,nesne)
{
	//location.load(false);
	$.ajax({
		type:"POST", 
		url:"process.php?islem=bildirim_oku",
		data:{id:id},
		datatype:"html", 
		beforeSend : function(){ },
		success :function(cevap){  
			console.log(cevap);
			//location.load($(nesne).attr("href"));
		},
		error: function(){  }
	});
}