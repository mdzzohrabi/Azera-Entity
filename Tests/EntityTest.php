<?php
namespace Azera\Entity;

class EntityTest extends \PHPUnit_Framework_TestCase {
    
    public function testRelation() {
        
        $mock = $this
                    ->getMockBuilder( Entity::class )
                    ->getMock();
        
        $mock
            ->method('isRelatedTo')
            ->with( $this->anything() )
            ->willReturn( true );
        
        $this->assertTrue( $mock->isRelatedTo( new Entity ) );
        

        
    }
    
}
?>