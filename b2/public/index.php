<?php

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
define('PUBLIC_PATH', __DIR__ . '/../public/');
define('UPLOAD_PATH', __DIR__ . '/../public/uploads');
define('SITE_URL','http://basic.com');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
