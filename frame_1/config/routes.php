<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/26
 * Time: 16:46
 */
use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck', function() {
    echo "success!";
});

Macaw::get('(:all)', function($fu) {
    echo 'o no !<br>'.$fu;
});
Macaw::get('/', 'HomeController@home');
Macaw::dispatch();