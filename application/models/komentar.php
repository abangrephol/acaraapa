<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Komentar extends ORM {

        public $primary_key = 'IDKOMENTAR';

        function _init()
        {

                self::$relationships = array (
                        'acara'                         =>     ORM::belongs_to('\\Model\\Acara'),
                        'user'                          =>     ORM::belongs_to('\\Model\\User')
                );

                self::$fields = array(
                        'IDKOMENTAR'                            =>              ORM::field('auto[19]'),
                        'KOMENTAR'                              =>              ORM::field('text'),
                        'DATETIMEKOMENTAR'                      =>              ORM::field('datetime'),
                        
                );
        }
}