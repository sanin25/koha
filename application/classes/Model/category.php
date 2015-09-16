<?php

class Model_Category extends ORM{
   
    protected $_has_many = array(
        'page' => array(
          'model' => 'page',
            'foreign_key' => 'category_id',
        ),
    ); 
    
}
