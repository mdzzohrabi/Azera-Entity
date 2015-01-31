<?php
namespace Azera\Entity\Tests\Fixture;

/**
 * @Entity @Table( name = "books" )
 */
class Book {
   
    /** @Id @Column( type = "integer" ) @GeneratedValue **/
    protected $id;
    
    /** @Column( type = "string" ) */ 
    protected $name;
    
    public function setName( $name ) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getId() {
        return $this->id;
    }
    
    /**
     * @var \Azera\Entity\Tests\Fixture\Author
     */
    private $author;


    /**
     * Set author
     *
     * @param \Azera\Entity\Tests\Fixture\Author $author
     * @return Book
     */
    public function setAuthor(\Azera\Entity\Tests\Fixture\Author $author = null)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return \Azera\Entity\Tests\Fixture\Author 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
