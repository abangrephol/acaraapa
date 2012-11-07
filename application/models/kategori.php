<?php namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Kategori extends ORM {

        public $primary_key = 'IDKATEGORI';

        function _init()
        {

                self::$relationships = array (
                      'kategoriacara'                   =>     ORM::has_many('\\Model\\Kategoriacara')
                );

                self::$fields = array(
                        'IDKATEGORI'                    =>              ORM::field('auto[19]'),
                        'NAMAKATEGORI'                  =>              ORM::field('varchar[50]'),
                        'DESKRIPSIKATEGORI'             =>              ORM::field('text'),
                );

                //$this->ts_fields = array('modified_at','[created_at]');
        }
}