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
                        <a href="<?php echo U('Index/info',array('userid'=>$userline['userid']));?>">欢迎您：<?php echo ($userline["username"]); ?></a>
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
            <div class="col-md-9 comment">
                <div>

                    <a class="btn btn-success pull-right" href="<?php echo U('Index/notice',array('userid'=>$userline['userid']));?>" role="button">返回列表</a>
                </div>
                <br>
                <h3><?php echo ($ntline["notitle"]); ?></h3>
                <h6>发表时间：<?php echo ($ntline["notime"]); ?></h6>
                <p>
                	<?php echo ($ntline["nocont"]); ?>
		</p>
            </div>
        </div>


    </div>


    <br>

    <div class="foot">
        <div class="well well-sm">
            <div class="container">
                <div class="text-center">
                    <h5>Copyright &copy; <span>2016&nbsp;English论坛</span></h5>
                </div>
            </div>
        </div>
    </div>

</div>




</body>
</html>

</body>
</html>