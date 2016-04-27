$(function(){

var toplam = $(".slimg").length;
$(".slimg").hide();

var gosboy = $(".gosteri").height();
var gosgenis = $(".gosteri").width();
$(".slimg").css({
	"height":gosboy,
	"width":gosgenis
});
$(".slimg:first").show();
var n=$(".slimg:first");
var a=n.index();
a++;

ileriGos = function(){
if(n.parent().next("#bitti").children().index() == 0)
	{
		n.hide();
		$(".slimg:first").show();
		n=$(".slimg:first");
		a=1;
		$(".secici").empty();
		$(".secici").append(a+"/8");
		$(".secici").attr("id",a);
		
	}
	else{
		n.hide();
		n.parent().next("li").children().show();
		$(".secici").empty();
		a++;
		$(".secici").append(a+"/8");
		$(".secici").attr("id",a);
		n=n.parent().next("li").children();
	}
	
};
cagir = function(){
	setTimeout(cagir,3000);
	ileriGos();
};

$("#ileri").click(ileriGos);
cagir();


});







