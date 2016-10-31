<?php

class Homepage {
  function index(){
    $f3=\Base::instance();
    $data = array();
    $data['name'] = 'avenirer';
    $data['url'] = $f3->alias('the_contact_page','who=avenirer');
    echo \Template::instance()->render('HomepageView.php','text/html',$data);
  }
}