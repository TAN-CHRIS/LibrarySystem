<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
 
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
        <div class="container">
                <div class="row clearfix">
                    <div class="col-md-2 column">
                            <a href="login.html" class="btn btn-primary" role="button">返回</a>
                    </div>
                    <div class="col-md-6 column">
                            <h3 class="text-center">
                                歡迎註冊!
                            </h3>
                    </div>
                    <div class="col-md-4 column">
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-2 column">
                    </div>
                    <div class="col-md-6 column">
                        <form role="form" method="POST" action="http://localhost/LibrarySystem/index.php/Home/Register/postNewRegister"  >
                            <div class="form-group">
                                 <label for="user-id">帳號</label>
                                 <input type="text" class="form-control" name="user_id" id="InputID" />
                            </div>
                            <div class="form-group">
                                 <label for="name">姓名</label>
                                 <input type="text" class="form-control" name="name" id="InputName" />
                            </div>
                            <div class="form-group">
                                    <label for="institution">所在單位</label>
                                    <input type="text" class="form-control" name="institution" id="InputInstitution" />
                            </div>
                            <div>
                                <label for="gender">性別</label>
                                <div class="radio">
                                        <label>
                                                <input type="radio" name="gender" id="optionsRadios1" value="male" checked> 男
                                        </label>
                                </div>
                                <div class="radio">
                                        <label>
                                                <input type="radio" name="gender" id="optionsRadios2" value="female" checked> 女
                                        </label>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="phone">聯繫方式</label>
                                    <input type="tel" class="form-control" name="phone" id="InputPhone" />
                            </div>
                            <div class="form-group">
                                    <label for="email">郵箱</label>
                                    <input type="email" class="form-control" name="email" id="InputEmail1" />
                            </div>
                            <div class="form-group">
                                    <label for="password">密碼</label>
                                    <input type="password" class="form-control" name="password" id="InputPassword" />
                            </div>
                            <div class="form-group">
                                <label for="name">註冊類型</label>
                                <select class="form-control" name="type">
                                <option>student</option>
                                <option>teacher</option>
                                <option>employee</option>
                                </select>        
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-4 column">
                    </div>
                </div>
            </div>
</body>
</html>