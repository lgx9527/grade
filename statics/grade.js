$(function(){
var txt0=["(垃圾)","(太烂了)","(太菜了)","(不够好)","(一般)","(还可以)","(还好)","(很不错)","(超赞)","(极品)"];
var txt1=["(垃圾)","(太烂了)","(太菜了)","(不够好)","(一般)","(还可以)","(还好)","(很不错)","(超赞)","(极品)"];
var txt2=["(垃圾)","(太烂了)","(太菜了)","(不够好)","(一般)","(还可以)","(还好)","(很不错)","(超赞)","(极品)"];
var txt3=["(垃圾)","(太烂了)","(太菜了)","(不够好)","(一般)","(还可以)","(还好)","(很不错)","(超赞)","(极品)"];
var txt4=["(垃圾)","(太烂了)","(太菜了)","(不够好)","(一般)","(还可以)","(还好)","(很不错)","(超赞)","(极品)"];
var txt5=["(垃圾)","(太烂了)","(太菜了)","(不够好)","(一般)","(还可以)","(还好)","(很不错)","(超赞)","(极品)"];
var data={zh:null,cw:null,zl:null,js:null,yy:null};
$("#doPoint table tr td span small").each(function(index){
  $(this).mouseover(function(){
    id=index+1;
	var obj=$(this).parent().parent().next().children("em");
	if(id<=10){
		obj.html(txt1[id-1]);
	}else if(id>10 && id<=20){
	  id=id-10;
	  obj.html(txt2[id-1]);
	}else if(id>20 && id<=30){
	  id=id-20;
	  obj.html(txt3[id-1]);
	}else if(id>30 && id<=40){
	  id=id-30;
	  obj.html(txt4[id-1]);
	}else if(id>40 && id<=50){
	  id=id-40;
	  obj.html(txt5[id-1]);
	}
    $(this).parent().removeClass();
    $(this).parent().addClass("star"+id);
	$(this).parent().parent().next().children("strong").html(id);
  });
  var Point1=5;
  var Point2=5;
	var Point3=5;
	var Point4=5;
  var Point5=5;
  $(this).click(function(){
    id=index+1;
	if(id<=10){
		$("#pointV1").val(id);
		data.zh=id
		//$.post('',data,function(data){})
	}else if(id>10 && id<=20){
	  id=id-10;
		$("#pointV2").val(id);
		data.cw=id
	}else if(id>20 && id<=30){
	  id=id-20;
		$("#pointV3").val(id);
		data.zl=id
	}else if(id>30 && id<=40){
	  id=id-30;
		$("#pointV4").val(id);
		data.js=id
	}else if(id>40 && id<=50){
	  id=id-40;
		$("#pointV5").val(id);
		data.yy=id;
	}
	$(this).parent().attr("v",id);
	
	var v1=parseInt($("#item1").attr("v"));
	var v2=parseInt($("#item2").attr("v"));
	var v3=parseInt($("#item3").attr("v"));
	var v4=parseInt($("#item4").attr("v"));
	var v5=parseInt($("#item5").attr("v"));
	var temp_v=(v1+v2+v3+v4+v5)/5;
	var temp_v=Math.round(temp_v*Math.pow(10,1))/Math.pow(10,1);

	var num=temp_v;
	var integer=parseInt(num);
	var flt=num-integer;
	var fltln=(num.toString()).length-(integer.toString()).length-1;
	var fltint=(flt.toString()).substring(2,(fltln+2));
	var fltint=fltint > 0 ? fltint : 0;   
	
	$("#myPoint img").attr("src","statics/star"+integer+".gif");
	$("#myPoint big").html(integer);
	$("#myPoint small").html("."+fltint);
	$("#myPoint em").html(txt0[integer-1]);
  });
  $(this).parent().mouseout(function(){
    var ids=$(this).attr("v");
	id=index+1;
	var obj=$(this).parent().next().children("em");
	if(id<=10){
		obj.html(txt1[ids-1]);
	}else if(id>10 && id<=20){
	  id=id-10;
	  obj.html(txt2[ids-1]);
	}else if(id>20 && id<=30){
	  id=id-20;
	  obj.html(txt3[ids-1]);
	}else if(id>30 && id<=40){
	  id=id-30;
	  obj.html(txt4[ids-1]);
	}else if(id>40 && id<=50){
	  id=id-40;
	  obj.html(txt5[ids-1]);
	}
	$(this).parent().next().children("strong").html(ids);
    $(this).removeClass();
    $(this).addClass("star"+ids);
  });
});

$("#submit").click(function(e){
	e.preventDefault();
	$.post("http://localhost:8080/post",data,function(data,status){
		alert(status)
	})
})

});