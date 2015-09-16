<?php

class Model_Page extends ORM
{
     protected $_has_many = array(
        'images' => array(
            'model' => 'image',
            'foreign_key' => 'page_id',
        ),
    );
     
}
