<?php
namespace Azera\Entity;

require __DIR__ . '/Fixture/Book.php';

class EntityManagerTest extends \PHPUnit_Framework_TestCase {
    
    public function testConnection() {
        
        $db = require __DIR__ . '/Fixture/db.php';
        
        $book = new Tests\Fixture\Book();
        
        $book->setName('Alice');
        
        $db->persist( $book );
        $db->flush();
        
        $this->assertInternalType('integer', $book->getId() );
        
        $book = $db->find('Azera\Entity\Tests\Fixture\Book', $book->getId() );
        
        $this->assertEquals( 'Alice' , $book->getName() );
        
        $query = $db->createQuery('SELECT COUNT(book.id) as Total FROM Azera\Entity\Tests\Fixture\Book book')->getScalarResult();
        
        print( current($query)['Total'] );
        
    }
    
}
?>