<?php

class Model_Image extends ORM
{
         protected $_belongs_to = array(
        'pages' => array(
            'model' => 'pages',
            'foreign_key' => 'product_id',
        ),
    );
    
}

