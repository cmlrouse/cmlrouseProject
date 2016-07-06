/**
 * Created by ShiShi on 2016/6/21.
 */

$(document).ready(function(){
    $("#clear").click(function(){
        $("#inputTitle").val("");
        $("#inputContent").val("");
        $("#inputPassword1").val("");
        $("#inputPassword2").val("");
        $("#inputPassword3").val("");
    });


    $("#inputPassword3").blur(function(){
        var Psw2 = $("#inputPassword2").val();
        var Psw3 = $("#inputPassword3").val();
        if( Psw2 != Psw3){
            alert('密码不一致！');
        }
    });

    $("#clear").click(function(){
        $("#inputTitle").val("");
        $("#inputContent").val("");
        $("#inputPassword1").val("");
        $("#inputPassword2").val("");
        $("#inputPassword3").val("");
    });

    $("a:contains('回复')").click(function(){
        $("a:contains('回复')").attr("data-toggle","modal");
        $("a:contains('回复')").attr("data-target","#myModal");
    });
        

})