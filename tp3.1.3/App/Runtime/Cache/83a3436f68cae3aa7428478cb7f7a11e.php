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
                            <a href="<?php echo U('Index/login');?>">退出</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>

    <div id="write">
        <form action="<?php echo U('Admin/commReply');?>" method="post" class="form-horizontal info" role="form">
            <div class="form-group text-center">
                <div class="radio-inline" >
                    <label>
			<input type="hidden" name="userid"  value="<?php echo ($userline["userid"]); ?>">
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="notice" checked>
                        通知公告
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="movie">
                        影视交流
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="ee">
                        每日英语
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputTitle" class="col-sm-3 control-label">标题</label>
                <div class="col-sm-8">
                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="标题">
                </div>
            </div>
            <div class="form-group">
                <label for="inputContent"  class="col-sm-3 control-label">内容</label>
                <div class="col-sm-8">
                    <textarea name="content" class="form-control" id="inputContent" placeholder="内容" rows="9"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-8">
		<input type="submit" class="btn btn-success"  value="发布">
                    <button type="button" class="btn btn-danger">清空</button>
                </div>
            </div>
        </form>
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