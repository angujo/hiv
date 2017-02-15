<?php

/**
 * Created by PhpStorm.
 * User: Angujo Barrack
 * Date: 15-Feb-17
 * Time: 2:45 AM
 */
class Admin extends MY_Controller
{
    function index()
    {
        $this->view('');
    }
    
    function chat()
    {
        $this->view('chat-moderation');
    }
    function abc()
    {
        $this->view('abcs-hiv');
    }
    function links()
    {
        $this->view('news-links');
    }
}