<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-cn">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
	<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="author" content="luminshi">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" charset="utf-8" />
    <link href="__PUBLIC__/css/css.css" rel="stylesheet" >
    <!--<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">-->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="__PUBLIC__/js/js.js"></script>
	<script src="__PUBLIC__/js/eereply.js"></script>
    <title>细数美剧经典台词</title>
</head>
<body>


<div class="container">
    <div class="mynav">
        <nav class="navbar navbar-inverse ">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo U('Index/index',array('userid'=>$userline['userid']));?>">English论坛</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li role="presentation" class="">
                            <a  href="<?php echo U('Index/notice',array('userid'=>$userline['userid']));?>" role="button" aria-haspopup="true" aria-expanded="false">
                                通知公告
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a  href="<?php echo U('Index/movie',array('userid'=>$userline['userid']));?>" role="button" aria-haspopup="true" aria-expanded="false">
                                影视交流
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a  href="<?php echo U('Index/everyday',array('userid'=>$userline['userid']));?>" role="button" aria-haspopup="true" aria-expanded="false">
                                每日英语
                            </a>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="<?php echo U('Index/info',array('userid'=>$userline['userid'])) ;?>">欢迎您：<?php echo ($userline["username"]); ?></a>
                        </li>
                        <li class="">
                            <a href="<?php echo U('Index/login');?>">退出</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div class="passage">
        <div class="row">
            <div class="col-md-2 userinfo">
                <strong class="username"><?php echo ($userline["username"]); ?></strong>
                <div class="userhead">
                    <img src="__PUBLIC__/img/userhead.jpg" alt="头像">
                </div>

            </div>
            <div class="col-md-9 comment">
                <div>
                    	<a id="command" class="btn btn-success" role="button" data-toggle="modal" data-target="#myModal1">评论</a>
			<a class="btn btn-success pull-right" href="<?php echo U('Index/everyday',array('userid'=>$userline['userid']));?>" role="button">返回列表</a>
                </div>
                <br>
		<input id="eeid" type="hidden" name="eeid" value="<?php echo ($eeline["eeid"]); ?>">
		<input id="commuserid" type="hidden" name="commuserid" value="<?php echo ($userline["userid"]); ?>">
                <h3><?php echo ($eeline["eetitle"]); ?></h3>
                <h6>发表时间：<?php echo ($eeline["eetime"]); ?></h6>
                <p><?php echo ($eeline["eecont"]); ?></p>
            </div>
        </div>
    </div>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$commlist): $mod = ($i % 2 );++$i;?><div class="passage">
        <div class="row">
		<div class="col-md-2 userinfo">
                <strong class="username"><?php echo ($eeline["username"]); ?></strong>
                <div class="userhead">
                    <img src="__PUBLIC__/img/userhead.jpg" alt="头像">
                </div>

            </div>
            <div class="col-md-9 comment">
		
                <h6>(1)发表时间：<?php echo ($commlist["commtime"]); ?></h6>
                <p>
                    <span><?php echo ($commlist["username"]); ?> 回复&nbsp;<?php echo ($eeline["username"]); ?></span>
               		<?php echo ($commlist["commcont"]); ?>
		</p>
		<input id="listeeid" type="hidden" name="listeeid" value="<?php echo ($eeline["eeid"]); ?>">
		<input id="listuserid" type="hidden" name="listuserid" value="<?php echo ($userline["userid"]); ?>">
		<p><a id="reply1" href="#">回复</a></p>
            </div>
        </div>

 <?php if(is_array($commlist["children"])): $i = 0; $__LIST__ = $commlist["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><div class="passage">
        <div class="row">
	<div class="col-md-2 userinfo">
                <strong class="username"><?php echo ($eeline["username"]); ?></strong>
                <div class="userhead">
                    <img src="__PUBLIC__/img/userhead.jpg" alt="头像">
                </div>

            </div>
            <div class="col-md-9 comment">
                <h6>(2)发表时间：<?php echo ($child["commtime"]); ?></h6>
                <p>
                    <span><?php echo ($child["username"]); ?> 回复&nbsp;<?php echo ($commlist["username"]); ?></span>
                        <?php echo ($child["commcont"]); ?>
                </p>
		<input id="childeeid" type="hidden" name="childeeid" value="<?php echo ($eeline["eeid"]); ?>" >

		  <input id="childuserid" type="hidden" name="childuserid" value="<?php echo ($child["userid"]); ?>" >

		<input id="Pcommlistuserid" type="hidden" name="Pcommlistuserid" value="<?php echo ($commlist["userid"]); ?>">
            	<p><a id="reply2" href="#">回复</a></p>
            </div>
        </div>
	</div>
	<?php if(is_array($child["children"])): $i = 0; $__LIST__ = $child["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$grandson): $mod = ($i % 2 );++$i;?><div class="passage">
        <div class="row">
		<div class="col-md-2 userinfo">
                <strong class="username"><?php echo ($eeline["username"]); ?></strong>
                <div class="userhead">
                    <img src="__PUBLIC__/img/userhead.jpg" alt="头像">
                </div>

            </div>
            <div class="col-md-9 comment">
                <h6>(3)发表时间：<?php echo ($grandson["commtime"]); ?></h6>
		<p>          
                	 <span><?php echo ($grandson["username"]); ?> 回复&nbsp;<?php echo ($child["username"]); ?></span>
                        <?php echo ($grandson["commcont"]); ?>
                </p>
		<input id="grandsoneeid" type="hidden" name="grandsoneeid" value="<?php echo ($eeline["eeid"]); ?>" >
                <input id="grandsonuserid" type="hidden" name="grandsonuserid" value="<?php echo ($grandson["userid"]); ?>">
                <input id="Pchilduserid" type="hidden" name="Pchilduserid" value="<?php echo ($child["userid"]); ?>">
                <p><a id="reply3" href="#">回复</a></p>
            </div>
        </div>
        </div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">



        <div class="modal-dialog" role="document">

	<form action="<?php echo U('Index/commCommand');?>" method="post">

            <div class="modal-content">



                <div class="modal-header">



                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>



                    <h4 class="modal-title" id="myModalLabel">评论</h4>



                </div>



                <div class="modal-body">

			<input id="eeidinput" type="hidden" name="eeidinput" value="">

			<input id="useridinput" type="hidden" name="useridinput" value="">

                    <textarea class="form-control" id="inputReply" name="commcont"  placeholder="输入评论内容" rows="3"></textarea>



                </div>



                <div class="modal-footer">

			

		<!--	<button type="submit" class="btn btn-success">评论</button>-->			<input type="submit" class="btn btn-success"  value="提交">

                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>



                </div>



            </div>

	</form>

        </div>



    </div>







    <!-- Modal -->



    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">



        <div class="modal-dialog" role="document">

            

	<form action="<?php echo U('Index/commReply');?>" method="post">	

	<div class="modal-content">



                <div class="modal-header">



                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>



                    <h4 class="modal-title" id="myModalLabel">回复</h4>



                </div>



                <div class="modal-body">

                        <input id="eeidReply" type="hidden" name="eeidReply" value="">

                        <input id="useridReply" type="hidden" name="useridReply" value="">

			<input id="commparentid" type="hidden" name="commparentid" value="">



                    <textarea class="form-control" name="commcontReply" id="inputReply2" placeholder="输入回复内容" rows="3"></textarea>



                </div>



                <div class="modal-footer">



                    	<input type="submit" class="btn btn-success"  value="回复">

			<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>



                </div>



            </div>

	</form>

        </div>



    </div>





    <br>
</body>
</html>

</body>
</html>