<?php
namespace Azera\Entity\Entity;

use Azera\Entity\Entity;

/**
 * Azera Entity Relations logic
 * 
 * @author Masoud Zohrabi <mdzzohrabi@gmail.com>
 */
trait Relations {
   
    private $hasMany = array();
    
    private $hasOne = array();
    
    private $belongsTo = array();
    
    private $hasAndBelongsToMany = array();
    
    public function isRelatedTo( Entity $entity ) {
        return true;
    }
    
}
?>