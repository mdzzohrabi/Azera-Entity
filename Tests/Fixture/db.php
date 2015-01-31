<?php
require_once __DIR__ . "/../../vendor/autoload.php";

return Azera\Entity\EntityManager::create(array(
        
            'driver' => 'pdo_sqlite',
            'path'   => __DIR__ . '/db.sqlite'
        
            ),
            array(
                
                //'annot' => array( __DIR__ ),
                'yaml'   => array( __DIR__ )
                
            ),
                false
        );
?>