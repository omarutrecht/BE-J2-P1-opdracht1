<?php

class Homepage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome'
        ];
    
        $this->view('Homepage/index', $data);
    }
}