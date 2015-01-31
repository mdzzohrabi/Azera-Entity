<?php
namespace Azera\Entity;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager as EM;
use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Doctrine\ORM\Mapping\Driver\YamlDriver;

class EntityManager {

    const VERSION = '1.0.0';
    
    /**
     * EntityManager instance
     * 
     * @var Doctrine\ORM\EntityManager
     */
    private static $entityManager;
    
    /**
     * Setup EntityManager
     * 
     * @param array   $connection Connection details
     * @param array   $paths      Entity and Repository directories
     * @param boolean $isDev      Developer mode  
     *                            
     */
    static function &create( array $connection , array $paths , $isDev = false ) {

        $config = Setup::createConfiguration( $isDev );

        if ( isset( $paths['annot'] ) )
        $config
            ->setMetadataDriverImpl( $config->newDefaultAnnotationDriver( $paths['annot'] , true ) );

        if ( isset( $paths['yaml'] ) )
        $config
            ->setMetadataDriverImpl( new YamlDriver( $paths['yaml'] ) );
        
        if ( isset( $paths['xml'] ) )
        $config
            ->setMetadataDriverImpl( new XmlDriver( $paths['xml'] ) );
                                    
        self::$entityManager = EM::create( $connection , $config );
                                    
        return self::$entityManager;
                                    
    }
                               
    /**
     * Retreive EntityManager
     * 
     * @return Doctrine\ORM\EntityManager
     */
    public static function &get() {
        return self::$entityManager;
    }

}
?>
