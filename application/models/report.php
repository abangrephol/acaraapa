<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Report extends ORM {

        public $primary_key = 'IDREPORT';

        function _init()
        {

                self::$relationships = array (
                        'acara'                         =>     ORM::belongs_to('\\Model\\Acara'),
                        'user'                          =>     ORM::belongs_to('\\Model\\User'),
                        'gambaracara'                   =>     ORM::has_many('\\Model\\Gambaracara')
                );

                self::$fields = array(
                        'IDREPORT'                      =>              ORM::field('auto[19]'),
                        'REPORTDESC'                    =>              ORM::field('text'),
                        'REPORTTIME'                    =>              ORM::field('datetime'),
                        
                );
        }
}