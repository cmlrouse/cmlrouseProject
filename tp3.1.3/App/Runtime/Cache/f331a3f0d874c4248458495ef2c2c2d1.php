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
    <title>English论坛</title>
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


    <div class="banner">
        <div class="row">
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="__PUBLIC__/img/4.jpg" alt="...">
                            <div class="carousel-caption">
                                first
                            </div>
                        </div>
                        <div class="item">
                            <img src="__PUBLIC__/img/5.jpg" alt="...">
                            <div class="carousel-caption">
                                second
                            </div>
                        </div>
                        <div class="item">
                            <img src="__PUBLIC__/img/6.jpg" alt="...">
                            <div class="carousel-caption">
                                third
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-success">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        通知公告<a href="<?php echo U('Index/notice',array('userid'=>$userline['userid']));?>" style="color: #fff;"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span></a>
                    </div>

                    <!-- List group -->
                    <!--<ul class="list-group">
                        <?php if(is_array($ntlist)): foreach($ntlist as $key=>$nt): ?><a  href="<?php echo U('Index/noticeContent',array('userid'=>$userline['userid']));?>" class="list-group-item" data-toggle="modal" data-target="#myModal"><?php echo ($nt["notitle"]); ?><span class="pull-right"><?php echo ($nt["notime"]); ?></span></a><?php endforeach; endif; ?>
                    </ul>-->
		 <ul class="list-group">
				<?php if(is_array($ntlist)): foreach($ntlist as $key=>$nt): ?><a href="<?php echo U('Index/noticeContent',array('noid'=>$nt['noid'],'userid'=>$userline['userid']));?>" class="list-group-item"><?php echo ($nt["notitle"]); ?><span class="pull-right"><?php echo ($nt["notime"]); ?></span></a><?php endforeach; endif; ?>
		</ul>
                </div>
            </div>
        </div>
    </div>

    <div class="everyday">
        <div class="panel panel-success">
            <!-- Default panel contents -->
            <div class="panel-heading">
                影视交流<a href="<?php echo U('Index/movie',array('userid'=>$userline['userid']));?>" style="color: #fff;"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span></a>
            </div>

            <!-- List group -->
            <ul class="list-group">
                <?php if(is_array($evlist)): foreach($evlist as $key=>$mv): ?><a href="<?php echo U('Index/movieContent',array('userid'=>$userline['userid'],'evid'=>$mv['evid']));?>" class="list-group-item"><?php echo ($mv["evtitle"]); ?><span class="pull-right"><?php echo ($mv["evtime"]); ?></span></a><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>

    <div class="movie">
        <div class="panel panel-success">
            <!-- Default panel contents -->
            <div class="panel-heading">
                每日英语<a href="<?php echo U('Index/everyday',array('userid'=>$userline['userid']));?>" style="color: #fff;"><span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span></a>
            </div>

            <!-- List group -->
            <ul class="list-group">
                <?php if(is_array($eelist)): foreach($eelist as $key=>$ee): ?><a href="<?php echo U('Index/everydayContent',array('eeid'=>$ee['eeid'],'userid'=>$userline['userid']));?>" class="list-group-item"><?php echo ($ee["eetitle"]); ?><span class="pull-right"><?php echo ($ee["eetime"]); ?></span></a><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>


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



<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

</body>
</html>