<?php namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Kategori extends ORM {

        public $primary_key = 'IDKATEGORI';

        function _init()
        {

                /*self::$relationships = array (
                        'acara'                  =>     ORM::has_many('\\Model\\Acara'),
                        'kota'                  =>     ORM::has_many('\\Model\\Kota'),
                        'user'                   =>     ORM::has_many('\\Model\\User')
                );*/

                self::$fields = array(
                        'IDKATEGORI'                    =>              ORM::field('bigint[20]'),
                        'NAMAKATEGORI'                  =>              ORM::field('varchar[50]'),
                        'DESKRIPSIKATEGORI'             =>              ORM::field('text'),
                );

                //$this->ts_fields = array('modified_at','[created_at]');
        }
}