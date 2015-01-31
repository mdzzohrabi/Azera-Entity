<?php
namespace Azera\Entity;

/**
 * Azera Enity Class
 * 
 * @author Masoud Zohrabi <mdzzohrabi@gmail.com
 */
class Entity {
    
    use Entity\Relations,
        Entity\Annotations;
    
    protected $name;
    
    protected $table;
    
    protected $scheme;
    
    public function __construct() {
        
        $this->readAnnotations();
        
    }
    
    public function getName() {
        
    }

    
}
?>