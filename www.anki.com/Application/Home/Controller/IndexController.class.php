<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index() {
        echo 11111;
        echo 22222;
        echo '\'';
        echo '\'\'';
        echo '<hr>';
        echo 22222;
        echo '<hr>';

        echo 22222;

        echo '<hr>';
        echo 22222;
        echo 22222;
        echo '<hr>';
        echo 22222;
    }

    private function aaa() {
        echo 1111;
    }

    static function bbb() {
        echo 1111;
        echo 1111;
    }

}
