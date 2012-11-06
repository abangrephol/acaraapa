<?php namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Kota extends ORM {

        public $primary_key = 'IDKOTA';

        function _init()
        {

                self::$relationships = array (
                        'acara'                  =>     ORM::has_many('\\Model\\Acara'),
                        'user'                   =>     ORM::has_many('\\Model\\User'),
                        'provinsi'               =>     ORM::belongs_to('\\Model\\Provinsi')
                        
                );

                self::$fields = array(
                        'IDKOTA'                    =>              ORM::field('auto[19]'),
                        'NAMAKOTA'                 =>              ORM::field('varchar[50]'),
                        
                );

                //$this->ts_fields = array('modified_at','[created_at]');
        }
}