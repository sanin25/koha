<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Main
{
    public $template = 'admin/a_main';
    public function before() {
        parent::before();
        $this->template->styles = array('/media/css/admin.css');
        $this->template->scripts = array('/media/js/jquery.js','/media/js/MultiFile.pack.js','/media/js/upload.js');
        
    }
} 

