<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

    public function index () {
        $this->display();
//         var_dump(get_defined_constants(true));
    }

    //user login in
    public function Contents() {
        // echo "login in";
        // echo '<br>';
        // echo U('User/login');

        //调用视图display()
        $this->assign('blog',M('blog')->select())->display();
    }

    //user sign up
    public function register () {
        $this->display();
    }
    public function other () {
        $this->display();
    }

    //错误页面信息
    // public function _empty() {
    //     echo "<img src='".IMG_URL.'404_error.jpg'."' alt='' />";

    // }
}