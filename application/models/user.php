<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class User extends ORM {

        public $primary_key = 'IDUSER';

        function _init()
        {

                self::$relationships = array (
                        'kota'                      =>     ORM::belongs_to('\\Model\\Kota'),
                        'provinsi'                  =>     ORM::belongs_to('\\Model\\Provinsi'),
                        'report'                    =>     ORM::has_many('\\Model\\Report'),
                        'komentar'                  =>     ORM::has_many('\\Model\\Komentar')
                );

                self::$fields = array(
                        'IDUSER'                    =>              ORM::field('auto[19]'),
                        'USERNAME'              =>              ORM::field('varchar[20]'),
                        'PASSWORD'              =>              ORM::field('varchar[50]'),
                        'EMAIL'                 =>              ORM::field('varchar[50]'),
                        'FULLNAME'                 =>              ORM::field('varchar[50]'),
                        'ACTIVATION'                 =>              ORM::field('varchar[32]'),
                        'GENDER'                 =>              ORM::field('varchar[20]'),
                );
        }
}