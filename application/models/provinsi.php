<?php namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Provinsi extends ORM {

        public $primary_key = 'IDPROVINSI';

        function _init()
        {

                self::$relationships = array (
                        'acara'                  =>     ORM::has_many('\\Model\\Acara'),
                        'kota'                   =>     ORM::has_many('\\Model\\Kota'),
                        'user'                   =>     ORM::has_many('\\Model\\User')
                );

                self::$fields = array(
                        'IDPROVINSI'                   =>              ORM::field('auto[19]'),
                        'NAMAPROVINSI'                 =>              ORM::field('varchar[50]'),
                        
                );

                //$this->ts_fields = array('modified_at','[created_at]');
        }
}