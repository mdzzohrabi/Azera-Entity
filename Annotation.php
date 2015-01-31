<?php
namespace Azera\Entity;

use Doctrine\Common\Annotations\AnnotationReader,
	Doctrine\Common\Annotations\AnnotationRegistry;
use ReflectionClass,
	ReflectionMethod,
	ReflectionProperty,
	ReflectionFunction;

/**
 * Annotation Reader Utility
 * 
 * @author 	Masoud Zohrabi <mdzzohabi@gmail.com>
 * @uses   	Doctrine Annotations
 * @package Azera\Entity
 * 
 */
class Annotation {
	
	private static $reader;

	/**
	 * Retreive reader object
	 * 
	 * @return Doctrine\Common\Annotations\AnnotationReader
	 * 
	 */
	protected static function reader() {

		return static::$reader ?: static::$reader = new AnnotationReader();

	}


	/**
	 * Retreive class annotations
	 * @param string $class Class
	 * @param string $annotation Specified annotation name
	 * @return mixed
	 */
	public static function readClass( $class , $annotation = null ) {

		$ref = new ReflectionClass( $class );

		return $annotation ? static::reader()->getClassAnnotation( $ref , $annotation ) : static::reader()->getClassAnnotations( $ref );

	}

	/**
	 * Retreive method annotations
	 * @param string $method Method
	 * @param string $annotation Specified annotation name
	 * @return mixed
	 */
	public static function readMethod( $method , $annotation = null ) {

		$ref = new ReflectionMethod( $method );

		return $annotation ? static::reader()->getMethodAnnotation( $ref , $annotation ) : static::reader()->getMethodAnnotations( $ref );

	}

	/**
	 * Retreive method annotations
	 * @param string $method Method
	 * @param string $annotation Specified annotation name
	 * @return mixed
	 */
	public static function readProperty( $property , $annotation = null ) {

		$ref = new ReflectionProperty( $property );

		return $annotation ? static::reader()->getPropertyAnnotation( $ref , $annotation ) : static::reader()->getPropertyAnnotations( $ref );

	}

}
?>