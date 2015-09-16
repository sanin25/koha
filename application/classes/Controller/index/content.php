<?php

class Controller_Index_content extends Controller_Index
{
    function action_index() 
    {
        $vot =  'Украааа!!!';
        $this->template->center =array($vot);
    }
}
