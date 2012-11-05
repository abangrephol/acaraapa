<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Acara extends ORM {

        public $primary_key = 'IDACARA';

        function _init()
        {

                self::$relationships = array (
                      'kota'                        =>     ORM::belongs_to('\\Model\\Kota'),
                      'provinsi'                    =>     ORM::belongs_to('\\Model\\Provinsi'),
                      'user'                        =>     ORM::belongs_to('\\Model\\User'),
                      'report'                      =>     ORM::has_many('\\Model\\Report'),
                      'komentar'                    =>     ORM::has_many('\\Model\\Komentar'),
                      'gambaracara'                 =>     ORM::has_many('\\Model\\Gambaracara')
                );

                self::$fields = array(
                        'IDACARA'                    =>              ORM::field('auto[19]'),
                        'NAMAACARA'                  =>              ORM::field('text'),
                        'DESKRIPSIACARA'             =>              ORM::field('text'),
                        'TANGGAL'                    =>              ORM::field('date'),
                        'JAM'                        =>              ORM::field('time'),
                        'AKTIF'                      =>              ORM::field('smallint[2]'),
                        'REMOTE'                     =>              ORM::field('smallint[2]'),
                        'PROMOTE'                    =>              ORM::field('smallint[2]'),
                        'APPROVED'                   =>              ORM::field('smallint[2]'),
                        
                );
        }
}