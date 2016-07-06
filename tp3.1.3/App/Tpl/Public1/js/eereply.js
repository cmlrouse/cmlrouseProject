
window.onload = function(){
	/*
	点击评论，把用户的evid和用户的userid传到评论表单中
	*/
　　$("#command").click(function(){
	var eeid=$("#eeid").val();
	var commuserid=$("#commuserid").val();
	$("#eeidinput")[0].value=eeid;
	$("#useridinput")[0].value=commuserid;
	//var a=$("#eeidinput").val();
	//alert("评论每日英语"+a);
	});
	/*
	点击第一级回复，向第一级回复的表单中传值，传去evid ,userid parentid	
	*/
	$("#reply1").click(function(){
		var listeeid=$("#listeeid").val();
		var listuserid=$("#listuserid").val();
		$("#eeidReply")[0].value=listeeid;
		$("#useridReply")[0].value=listuserid;
		///var a=$("#eeidReply").val();
		//var b=$("#useridReply").val();
		alert("第一级别"+a+" "+b+"helo");
	});
	/*点击第二级回复，向第二级回复的表单中船只，传去evid ,userid parentid*/
	$("#reply2").click(function(){
                var childeeid=$("#childeeid").val();
                var childuserid=$("#childuserid").val();
		var Pcommlistuserid=$("#Pcommlistuserid").val();
                $("#eeidReply")[0].value=childeeid;
                $("#useridReply")[0].value=childuserid;
		$("#commparentid")[0].value=Pcommlistuserid;
		//var a= $("#eeidReply").val();
		//var b=$("#useridReply").val();
		//var c=$("#commparentid").val();
		//alert("第二级别"+a+" "+b+" "+c);

       });
/**	$("#reply2").click(function(){
		alert("1111");	
	});
**/
	/*点击第三级回复，向第三级回复的表单中船只，传去evid ,userid parentid*/
        $("#reply3").click(function(){
                var grandsoneeid=$("#grandsoneeid").val();
                var grandsonuserid=$("#grandsonuserid").val();
                var Pchilduserid=$("#Pchilduserid").val();
                $("#eeidReply")[0].value=grandsoneeid;
                $("#useridReply")[0].value=grandsonuserid;
                $("#commparentid")[0].value=Pchilduserid;
		//var a=$("#eeidReply").val();
                //var b=$("#useridReply").val();
               // var c= $("#commparentid").val();
                //alert("第三级别"+"a="+a+"b"+b+"c="+c);
               // alert("11");

        });

} 
