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

    <title>English论坛管理</title>
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
                    <a class="navbar-brand" href="<?php echo U('Admin/arrangeIndex');?>">English论坛管理</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li role="presentation" class="">
                            <a  href="<?php echo U('Admin/arrangeIndex');?>" role="button" aria-haspopup="true" aria-expanded="false">
                                发布
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">管理帖子<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo U('Admin/arrangenotice');?>">通知公告</a></li>
                                <li><a href="<?php echo U('Admin/arrangemovie');?>">影视交流</a></li>
                                <li><a href="<?php echo U('Admin/arrangeeveryday');?>">每日英语</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <p class="navbar-text">欢迎您：<?php echo ($userline["username"]); ?></p>
                        <li class="">
                            <a href="<?php echo U('Index/login.html');?>">退出</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>

    <div class="passage">
        <div class="row">
            <div class="col-md-9 comment">
                <div>
                   <!-- <a href="<?php echo U('Index/evcommReply',array('userid'=>$userline['userid'],'evid'=>$movieline['evid']));?>"  class="btn btn-success" role="button">评论</a> -->
              <a id="command" class="btn btn-success" role="button" data-toggle="modal" data-target="#myModal1">评论</a>
		<a  href="<?php echo U('Admin/arrangemovie',array('userid'=>$userline['userid'])) ;?>" class="btn btn-success pull-right" role="button">返回列表</a>
                </div>
                <br>
                <h3><?php echo ($movieline["evtitle"]); ?></h3>
                <h6>发表时间：<?php echo ($movieline["evtime"]); ?></h6>
                <p>
            		<?php echo ($movieline["evcont"]); ?>
		 </p>
            </div>
        </div>


    </div>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$evcommlist): $mod = ($i % 2 );++$i;?><div class="passage">
        <div class="row">
            <div class="col-md-9 comment">
		
                <h6>(1)发表时间：<?php echo ($evcommlist["evcommtime"]); ?></h6>
		 <span><?php echo ($evcommlist["username"]); ?>回复&nbsp;<?php echo ($movieline["username"]); ?></span>
                <p>
			<?php echo ($evcommlist["evcommcont"]); ?>
                </p>

            </div>
        </div>


    </div>
<?php if(is_array($evcommlist["children"])): $i = 0; $__LIST__ = $evcommlist["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><div class="passage">
        <div class="row">
            <div class="col-md-9 comment">
                <h6>(2)发表时间：<?php echo ($child["evcommtime"]); ?></h6>
                <p>
                    <span><?php echo ($child["username"]); ?>回复&nbsp;<?php echo ($evcommlist["username"]); ?></span>
                	<?php echo ($child["evcommcont"]); ?>
		</p>
            </div>
        </div>
    </div>
<?php if(is_array($child["children"])): $i = 0; $__LIST__ = $child["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$grandson): $mod = ($i % 2 );++$i;?><div class="passage">
        <div class="row">
            <div class="col-md-9 comment">
                <h6>(3)发表时间：<?php echo ($grandson["evcommtime"]); ?></h6>
                <p>
                    <span><?php echo ($grandson["username"]); ?>回复&nbsp;<?php echo ($child["username"]); ?></span>
                        <?php echo ($grandson["evcommcont"]); ?>
                </p>
            </div>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
   
</body>
</html>

</body>
</html>