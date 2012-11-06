<?php namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Kategoriacara extends ORM {

        public $primary_key = 'IDKATACARA';

        function _init()
        {

                self::$relationships = array (
                      'kategori'                   =>     ORM::belongs_to('\\Model\\Kategori'),
                      'acara'                      =>     ORM::belongs_to('\\Model\\Acara')
                      
                );

                self::$fields = array(
                        'IDKATACARA'                    =>              ORM::field('bigint[20]'),
                        
                );

                //$this->ts_fields = array('modified_at','[created_at]');
        }
}