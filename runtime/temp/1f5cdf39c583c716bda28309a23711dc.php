<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"/www/wwwroot/maig/public/../application/index/view/index/login.html";i:1585842086;}*/ ?>
<!--<div><img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>'" /></div>-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>库存管理系统</title>
    <meta name="viewport" content="width=device-width">
    <link href="/static/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="login">
    <form action="" method="post" id="form">
        <div class="logo"><h1>库存管理系统</h1></div>
        <div style="padding-left: 160px;">
            <div class="user-login">
                <input style="height: 40px;width: 300px;" class="text_value" value="" name="account" type="text" id="account" placeholder="账号" required="">
            </div>
            <div class="user-login" style="margin-top: 10px;">
                <input style="height: 40px;width: 300px;" class="text_value" value="" name="pwd" type="password" id="pwd" placeholder="密码" required="">
            </div>
            <div class="user-login" style="position: relative;">
                <input style="height: 40px;width: 195px;" type="text" name="captcha" placeholder="请输入验证码" required="">
                <img src="<?php echo captcha_src(); ?>" style="position: relative;top: 17px;" width="95" height="43" onclick="this.src='<?php echo captcha_src(); ?>'">
            </div>
            
          
            <div class="user-login" style="margin-top: 10px;">
                <button style="height: 40px;width: 300px;" class="button" id="submit" type="submit">登录</button>
            </div>
             <div>
          <a href="http://www.miibeian.gov.cn/">粤ICP备15051608号-2 </a>
             </div>
        </div>
        
        <div id="tip"></div>
        <div class="foot">
        </div>
    </form>
</div>
</body>
</html>
