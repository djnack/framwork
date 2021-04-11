<?php

require_once 'CORE/url/url.php';
$url=new Url;
// ['/' or '' , 'index'], Home page
// ['test' , 'test'],     test page
// ['test/*' , 'test'],   test/1     test/2
// ['test/?' , 'test'],   test?id=1  test?id=2     default = False <- تکمیل نشده
// [404, 'test'],                                  default = True  <- تکمیل نشده

$url->error(
    [[404,'page erroe 404']]
);

$url->new(
    [['', 'index'],
    ['about', 'about'],
    ['info', 'info'],
    ['page/*', 'page'],
    ['page', 'index']]
);
