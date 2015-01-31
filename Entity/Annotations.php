<?php
namespace Azera\Entity\Entity;

use Azera\Entity\Annotation;

trait Annotations {
    
    protected $annotations = array();
    
    protected function readAnnotations() {
        $this->annotations = Annotation::readClass( $this );
    }
    
    protected function getAnnotation( $annot ) {
        return $this->annotations[ $annot ];
    }
    
}
?>