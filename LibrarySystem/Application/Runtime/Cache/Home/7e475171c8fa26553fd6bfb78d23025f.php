<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.css">
    <script src="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.js"></script>

    <title>Document</title>
</head>
<body>
        <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="page-header">
                            <h1>
                                圖書查詢
                            </h1>
                        </div>
                        <div class="btn-group pull-right">
                            <a href="user.html"  class="btn btn-default">
                                <em class="glyphicon glyphicon-user"></em> 個人信息 </a> 
                            <a href="borrow.html" class="btn btn-default" >
                                <em class="glyphicon glyphicon-signal"></em> 借書紀錄</a> 
                            <a href="order.html" class="btn btn-default">
                                <em class="glyphicon glyphicon-plus"></em> 預約书籍</a> 
                            <a href="login.html" class="btn btn-default">
                                    <em class="glyphicon glyphicon-log-out"></em> 登出 </a>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-6 column">
                        <form class="form-horizontal" role="form" method="GET" action="http://localhost/LibrarySystem/index.php/Home/Book/getBookInfobyName">
                            <div class="form-group">
                                <label for="inputbook" class="col-sm-2 control-label">書名</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputbook" name="book_name" placeholder="待查詢書名" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">查詢</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 column">
                    </div>
                </div>
                <div class="row clearfix">
                        <div class="col-md-12 column">
                                <table id="booklist"></table>
                        </div>
                </div>
            </div>

  
</body>
</html>