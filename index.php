<?php
/**
 * @name   入口文件
 * @author Rohn(liuzhao08@baidu.com)
 * @date   17/1/25
 */
?>
<html>
<head>
    <title>Web Console</title>
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no"/>
    <style type="text/css">
        body {
            background-color: #00d5ff;
        }

        #response {
            background-color: #0a001f;
            color: white;
            margin: 0 auto;
            padding: 20px;
            width: 960px;
        }
    </style>
    <script type="text/javascript" src="client/jquery.min.js"></script>
    <?php
    $file   = isset($_GET['file'])?$_GET['file']:'data.txt';
    $action = isset($_GET['action'])?$_GET['action']:'developing';
    echo '<script type="application/javascript">
        var action = "' . $action . '";
        var file = "' . $file . '";
    </script>';
    ?>
    <script type="text/javascript" src="client/main.js"></script>

</head>
<body>
<H1 align="center">Welcome to Web console</H1>
<div id="response"></div>
</body>
</html>
