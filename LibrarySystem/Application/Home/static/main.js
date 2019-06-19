$(document).ready(function(){
    // jQuery ajax教程: http://www.w3school.com.cn/jquery/ajax_ajax.asp

    $('#query').click(function(){       
    // query是按钮的id, '#id_name' 可以通过id获取页面元素,'.classname'用来通过类名来获取页面元素,
    //一般推荐通过id获取,因为class有可能会重名而id不会
        $.ajax({
            type: "POST",           // 一般不可能是get方式, 明文传数据不敢相信会有这样的后端工程师...
            url: "../Home/Controller/BookController.class.php",  //获取数据的后端PHP文件的路径,但是不知道路径对不对你自己调试的时候检查下
            /*
            url:"../Home/Controller/BookController.class.php?action=getBookInfo",     //为了调用函数写成了这样
            
            jQuery ajax 只能调用特定的php文件而不能调用其中的函数
            ajax的功能仅限于传递数据
            你可以在ajax请求里带上参数,url那个'?'后面的就是参数，这样让后端取识别参数然后调用特定的函数,只能这样写
            这样写对应的php后端应该按照这样写:

            <?php
            $action=$_POST['action'];
            if($action == 'getBookInfo'){
            getBookInfobyName();
            }
            function getBookInfobyName(){
                ....
            }
            ?>

            另一种写法参考: http://www.imooc.com/wenda/detail/564805

            其实按道理应该前后端一起开发,或者先写前端再写后端
            不然根本没法写
            因为你这样写完了后端还是要改
            后面可能像这样要改的还有很多....说不定有的后端要完全重写,如果那样也没什么补救措施
            不过现在也没办法了
            只能编写边改了

            */
            data:  {"example":"example_data"}   ,     //要传输的数据,一般要做成键值对形式
            dataType: 'json',           // 与上面data的类型有关
            success: function(data){        //如果前端收到后端传来的正确的数据则会进入此函数, 此处的参数data就是后端传来的数据
                // 这里写要进行的处理
                var testdata = JSON.parse(data)  //识别后端传过来的Json字符串(具体是什么格式要看后端,这里以json格式举例), 使用data['keyname']这样的形式来获取对应键的值
                // 有两种方法可以读取后端的json数据: JSON.parse()或者eval()方法,
                //前者需要检查字符串格式后者可以解析任何格式字符串,但是后者不安全,恶意的木马链接也会被解析
                alert('success!' + data) // 弹框提示
                /*
                JSON.parse()将json字符串转换成json对象
                语法：JSON. parse(text[,reviver]).
		        参数：text  必须是一个有效的json字符串。
			    reviver  可选。
                返回值：一个对象或数组。

                JSON.stringify()将json对象转换成json字符串      ***** 一般用于向后端传递数据 *****
                语法：JSON.stringify(value [, replacer] [, space]) 
                参数：value  必须；通常为对象或数组。
                replacer 可选，用于转换结果的函数或者数组。
                space 可选。向返回值 JSON 文本添加缩进、空格和换行符以使其更易于读取。 
                返回值：一个包含JSON文本的字符串。

                详见: https://www.cnblogs.com/vanl/p/5466670.html

                json字符串:内容为json格式的string,就是字符串类型
                */
            },
            error: function(err){      //如果收到后端的错误信息则进入此函数, err是自己随便取的参数名,代表了错误对象
                alert('error! '+ err + ' \nPlease try again!')
            }

        })
    })

    /*
    如果要使用js动态修改页面元素,使用xxx = getElementById()函数来获取页面标签然后进行操作 
    
    举一些例子吧

    document.getElementById("my_canvas").style.display = "block"
    其中'my_canvas'就是一个标签的id,`.style`后面的就是对应的CSS属性,可以有很多种可以改
    
    js的语法和C++,java几乎一样,但是句子结尾的 `;`可以省略
    
    匿名函数的写法就是 function(){...}
    比如$('id_name').click(function(){...})
    就是在id为'id_name'的按钮被点击的时候调用匿名函数

    变量声明不需要类型,但是要用var开头表示为一个新变量
    var value
    var value1 = document.getElementById('...')
    value1.style.fontsize='...'
    value1.style.display='...'
    ...

    也可以直接通过js添加页面标签并且按照类似于上面的方式修改样式
    
    样例: https://jingyan.baidu.com/article/a948d65139fd290a2dcd2ea7.html

    还可能用到的是innerHTML功能

    innerHTML在JS是双向功能：获取对象的内容 或 向对象插入内容；
    如：<div id="aa">这是内容</div> ，
    我们可以通过 document.getElementById('aa').innerHTML 来获取id为aa的对象的内嵌内容；
    也可以对某对象插入内容，如 document.getElementById('abc').innerHTML='这是被插入的内容';
    这样就能向id为abc的对象插入内容

    innerHTML和innerTEXT的区别: https://zhidao.baidu.com/question/1957135221297859020.html

    */
})