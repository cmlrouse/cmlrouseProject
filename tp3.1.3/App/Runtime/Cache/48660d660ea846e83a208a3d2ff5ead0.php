<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-cn">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
	<DOCTYPE html>
<html>
<head>
        <title></title>
</head>
<body>
欢迎使用 <b>TPM</b>! this the rediscomm.html of Index
        <h1>this is the recomm.html of Ebbsview directory</h1>

        <?php if(is_array($rediscommlist)): foreach($rediscommlist as $key=>$v): ?><p><?php echo ($v["rediscommid"]); ?></p>
                <p><?php echo ($v["discommcont"]); ?></p>
                <p><?php echo ($v["username"]); ?></p>
                <p><?php echo ($v["rediscommcont"]); ?></p>
                <p><?php echo ($v["rediscommtime"]); ?></p><?php endforeach; endif; ?>
</body>
</html>



</body>
</html>