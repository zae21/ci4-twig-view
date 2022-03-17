<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
        // $db = db_connect();
        // $data = $db->query("SELECT * FROM users")->getResult();
        // traces($data);
        // return view('welcome_message');
        return $this->display('index');
    }
}
