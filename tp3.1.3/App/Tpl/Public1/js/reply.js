
window.onload = function(){
	/*
	点击评论，把用户的evid和用户的userid传到评论表单中
	*/
　　$("#command").click(function(){
	var evid=$("#evid").val();
	var commuserid=$("#commuserid").val();
	$("#evidinput")[0].value=evid;
	$("#useridinput")[0].value=commuserid;
	//alert("评论电影");
	});
	/*
	点击第一级回复，向第一级回复的表单中传值，传去evid ,userid parentid	
	*/
	$("#reply1").click(function(){
		var listevid=$("#listevid").val();
		var listuserid=$("#listuserid").val();
		$("#evidReply")[0].value=listevid;
		$("#useridReply")[0].value=listuserid;
		var a=$("#evidReply").val();
		var b=$("#useridReply").val();
		//alert("第一级"+a+" "+b);
	});
	
	/*点击第二级回复，向第二级回复的表单中船只，传去evid ,userid parentid*/
	$("#reply2").click(function(){
                var childevid=$("#childevid").val();
                var childuserid=$("#childuserid").val();
		var Pevcommlistuserid=$("#Pevcommlistuserid").val();
                $("#evidReply")[0].value=childevid;
                $("#useridReply")[0].value=childuserid;
		$("#evcommparentid")[0].value=Pevcommlistuserid;
		var a= $("#evidReply").val();
		var b=$("#useridReply").val();
		var c=$("#evcommparentid").val();
		//alert("第二级"+a+" "+b+" "+c);

       });
	 /*点击第三级回复，向第三级回复的表单中船只，传去evid ,userid parentid*/
        $("#reply3").click(function(){
                var grandsonevid=$("#grandsonevid").val();
                var grandsonuserid=$("#grandsonuserid").val();
                var Pchilduserid=$("#Pchilduserid").val();
                $("#evidReply")[0].value=grandsonevid;
                $("#useridReply")[0].value=grandsonuserid;
                $("#evcommparentid")[0].value=Pchilduserid;
		var a= $("#evidReply").val();
                var b=$("#useridReply").val();
                var c=$("#evcommparentid").val();
                //alert("第三级"+a+" "+b+" "+c);
        });

} 
