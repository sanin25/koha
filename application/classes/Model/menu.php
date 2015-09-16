<?php

class Model_Menu extends ORM{
    protected $_belongs_to = array(
        'cateroty' =>array(
            'model'=> 'category',
            'foreign_key' => 'category_id',
        ),
    );

    
}

