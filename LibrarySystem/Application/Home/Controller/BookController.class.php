<?php
/**
 * Created by PhpStorm.
 * User: 蕴yun
 * Date: 2019/6/10
 * Time: 22:53
 */

namespace Home\Controller;

    use Think\Controller\RestController;
    use Home\Model\BookModel;
    use Home\Model\LibraryModel;

    class BookController extends RestController {
        public function getBookInfobyName(){
            $name=$_GET['book_name'];
            $b_sql = new BookModel();
            $books = $b_sql->field('*')->where("book_name='$name'")->select();
            $datas=array();
    
            if(!$books[0]){
                $this->redirect('Index/homeUser', '', 2,
                    '這本書不存在!...页面跳转中...');
            }
            else{
                foreach ($books as $book){
                    $data=$book;
                    $l_sql=new LibraryModel();
                    $lib_id=$book['lib_id'];
                    $lib=$l_sql->field('lib_name,lib_address')->where("lib_id='$lib_id'")->select();
                    $data['lib_name']=$lib[0]['lib_name'];
                    $data['lib_address']=$lib[0]['lib_address'];
                    array_push($datas,$data);
                }
            }
            $this->response($datas,'json');
        }
    }