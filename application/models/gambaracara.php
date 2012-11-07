<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Gambaracara extends ORM {

        public $primary_key = 'IDGAMBAR';

        function _init()
        {

                self::$relationships = array (
                        'acara'                           =>     ORM::belongs_to('\\Model\\Acara'),
                        'report'                          =>     ORM::belongs_to('\\Model\\Report')
                );

                self::$fields = array(
                        'IDGAMBAR'                          =>              ORM::field('auto[19]'),
                        'NAMAGAMBAR'                        =>              ORM::field('varchar[50]'),
                        'DESKRIPSIGAMBAR'                   =>              ORM::field('text'),
                        'DATETIMEGAMBAR'                    =>              ORM::field('datetime'),
                        'FILEGAMBAR'                        =>              ORM::field('varchar[100]'),
                        'TIPE'                              =>              ORM::field('smallint[2]'),
                        
                );
        }
}