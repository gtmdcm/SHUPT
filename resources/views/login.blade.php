<html>
<head>

</head>
<body>
<h2>
    <span>
        <img src="./images/testsierra.png" alt="sierra">
    </span>
    <span>SHUPT</span>
</h2>
<div class="form-group">
    <label for="username" class="control-label">用户名/昵称</label>
    <a href="forgetname.php" class="control-label small pull-right">忘记用户名</a>
    <div>
        <input type="text" class="form-control" id="username" name="username" placeholder="请输入用户名 字母/数字 或 自定义的昵称"></div>
</div>
<div class="form-group">
    <label for="password" class="control-label">密码</label>
    <a href="recover.php" class="control-label small pull-right">忘记密码</a>
    <div>
        <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
    </div>
</div>
<div class="form-group">
    <div class="btn-group">
        <button type="submit" class="btn btn-primary" id="loginbtn">
            <span class="glyphicon glyphicon-ok"></span>
            登录
        </button>
        <a href="confirm_resend.php">重发验证邮件</a>
    </div>
    <span id="reg" class="pull-right">
        <a href="javascript:void(0);" class="btn btn-default btn-sm" id="loginhelp">
            <span class="glyphicon glyphicon-question-sign"></span>
            求助
        </a>
        <a href="signup.php" class="btn btn-danger btn-sm" id="regbtn">
            <span class="glyphicon glyphicon-plus"></span>
            注册
        </a>
    </span>
</div>
</body>
</html>