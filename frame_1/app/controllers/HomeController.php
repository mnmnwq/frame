<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/26
 * Time: 17:27
 */
class HomeController extends BaseController {
    public function __construct(){
        parent::__construct();
    }

    public function home(){
        echo '控制器充公!';
    }
}