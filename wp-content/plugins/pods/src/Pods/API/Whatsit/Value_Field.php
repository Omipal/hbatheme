<?php

namespace Pods\API\Whatsit;

use Pods\Whatsit;
use Pods\Whatsit\Field;
use Pods\Whatsit\Object_Field;

/**
 * Value_Field class.
 *
 * @property string $value Value of field.
 *
 * @since 2.8.0
 */
class Value_Field implements \ArrayAccess {

	/**
	 * Value of field.
	 *
	 * @var mixed
	 */
	protected $_value = null;

	/**
	 * The field object.
	 *
	 * @var Field|Object_Field
	 */
	protected $_field;

	/**
	 * Value_Field constructor.
	 *
	 * @param Whatsit $field The field object.
	 */
	public function __construct( Whatsit $field ) {
		$this->_field = $field;
	}

	/**
	 * Easy to reference init static function for array_map() to use.
	 *
	 * @param Whatsit $field The field object.
	 *
	 * @return Value_Field
	 */
	public static function init( Whatsit $field ) {
		return new static( $field );
	}

	/**
	 * On cast to string, return object identifier.
	 *
	 * @return string Object identifier.
	 *
	 * @uses Whatsit::__toString()
	 */
	public function __toString(): string {
		return $this->_field->get_identifier();
	}

	/**
	 * Check if offset exists.
	 *
	 * @param mixed $offset Offset name.
	 *
	 * @return bool Whether the offset exists.
	 */
	public function offsetExists( $offset ): bool {
		return $this->__isset( $offset );
	}

	/**
	 * Get offset value.
	 *
	 * @param mixed $offset Offset name.
	 *
	 * @return mixed|null Offset value, or null if not set.
	 */
	#[\ReturnTypeWillChange]
	public function &offsetGet( $offset ) {
		// We fake the pass by reference to avoid PHP errors for backcompat.
		$value = $this->__get( $offset );

		return $value;
	}

	/**
	 * Set offset value.
	 *
	 * @param mixed $offset Offset name.
	 * @param mixed $value  Offset value.
	 */
	public function offsetSet( $offset, $value ): void {
		if ( null === $offset ) {
			// Do not allow $object[] additions.
			return;
		}

		$this->__set( $offset, $value );
	}

	/**
	 * Unset offset value.
	 *
	 * @param mixed $offset Offset name.
	 */
	public function offsetUnset( $offset ): void {
		$this->__unset( $offset );
	}

	/**
	 * Check if offset exists.
	 *
	 * @param mixed $name Offset name.
	 *
	 * @return bool Whether the offset exists.
	 *
	 * @uses Whatsit::__isset()
	 */
	public function __isset( $name ): bool {
		if ( 'value' === $name ) {
			return isset( $this->_value );
		}

		return $this->_field->__isset( $name );
	}

	/**
	 * Get offset value.
	 *
	 * @param mixed $name Offset name.
	 *
	 * @return mixed|null Offset value, or null if not set.
	 *
	 * @uses Whatsit::__get()
	 */
	#[\ReturnTypeWillChange]
	public function __get( $name ) {
		if ( 'value' === $name ) {
			return $this->_value;
		}

		return $this->_field->__get( $name );
	}

	/**
	 * Set offset value.
	 *
	 * @param mixed $name Offset name.
	 * @param mixed $value  Offset value.
	 *
	 * @uses Whatsit::__set()
	 */
	public function __set( $name, $value ): void {
		if ( 'value' === $name ) {
			$this->_value = $value;

			return;
		}

		$this->_field->__set( $name, $value );
	}

	/**
	 * Unset offset value.
	 *
	 * @param mixed $name Offset name.
	 *
	 * @uses Whatsit::__unset()
	 */
	public function __unset( $name ): void {
		if ( 'value' === $name ) {
			$this->_value = null;

			return;
		}

		$this->_field->__unset( $name );
	}

	/**
	 * Call a method on the field.
	 *
	 * @param string $name      The method name.
	 * @param array  $arguments List of arguments.
	 *
	 * @return mixed The method response.
	 */
	#[\ReturnTypeWillChange]
	public function __call( $name, $arguments ) {
		return call_user_func_array( [ $this->_field, $name ], $arguments );
	}

	/**
	 * Get the field object.
	 *
	 * @return Whatsit|Field|Object_Field The field object.
	 */
	public function get_field_object() {
		return $this->_field;
	}

	/**
	 * Get the field value.
	 *
	 * @return mixed The field value.
	 */
	public function get_field_value() {
		return $this->_value;
	}

	/**
	 * Set the field object.
	 *
	 * @param Whatsit|Field|Object_Field The field object.
	 */
	public function set_field_object( $field ) {
		$this->_field = $field;
	}

	/**
	 * Set the field value.
	 *
	 * @param mixed The field value.
	 */
	public function set_field_value( $value ) {
		$this->_value = $value;
	}

}
