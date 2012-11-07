<?php namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Kategorifavorit extends ORM {

        public $primary_key = 'IDFAVORIT';

        function _init()
        {

                self::$relationships = array (
                      
                      'user'                      =>     ORM::belongs_to('\\Model\\User')
                      
                );

                self::$fields = array(
                        'IDFAVORIT'                  =>              ORM::field('auto[19]'),
                        'FAVORIT'                    =>              ORM::field('text'),
                        
                );

                //$this->ts_fields = array('modified_at','[created_at]');
        }
}