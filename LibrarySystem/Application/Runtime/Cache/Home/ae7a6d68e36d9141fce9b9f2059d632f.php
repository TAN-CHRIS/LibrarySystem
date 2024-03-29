<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.css">
   
    <title>管理員主頁</title>
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
                            <a href="employee.html" class="btn btn-default" >
                                <em class="glyphicon glyphicon-user"></em> 個人信息</a> 
                            <a href="deploy.html" class="btn btn-default" >
                                <em class="glyphicon glyphicon-pencil"></em> 調派書籍</a> 
                            <a href="addBook.html" class="btn btn-default">
                                <em class="glyphicon glyphicon-plus"></em> 添加书籍</a> 
                            <a href="deleteBook.html" class="btn btn-default">
                                    <em class="glyphicon glyphicon-trash"></em> 刪除書籍 </a>
                            <a href="login.html" class="btn btn-default">
                                    <em class="glyphicon glyphicon-log-out"></em> 登出 </a>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-6 column">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputbook" class="col-sm-2 control-label">書名</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputbook" name="book_name" placeholder="待查詢書名" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" id="searchBook" class="btn btn-primary">查詢</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 column">
                    </div>
                </div>
                <div class="row clearfix">
                        <div class="col-md-12 column">
                                <table id="booklist" class="table">
                                        <th>book_id</th>
                                        <th>書名</th>
                                        <th>作者</th>
                                        <th>出版社</th>
                                        <th>價格</th>
                                        <th>索引號</th>
                                        <th>狀態</th>
                                        <th>所在圖書館</th>
                                        <th>圖書館地址</th>
                                    <tbody id="book_body">
                                    </tbody>
                                </table>
                        </div>
                </div>
            </div>

  
</body>

<footer>
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>  
        <!-- popper.min.js 用于弹窗、提示、下拉菜单 -->
        <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script> 
        <!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.js"></script>
        <!-- 引入自己的js,使用相对路径 -->
        <script src="/LibrarySystem/Public/JS/searchbook.js"></script>
    
    </footer>
    </html>
</html>