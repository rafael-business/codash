<?php

namespace ACA\Pods\Editing\Storage;

class Date extends Field {

	/**
	 * @var string
	 */
	private $date_format;

	public function __construct( $pod, $field_name, ReadStorage $read, $date_format ) {
		parent::__construct( $pod, $field_name, $read );

		$this->date_format = $date_format;
	}

	public function get( $id ) {
		$value = parent::get( $id );

		return in_array( $value, [ '0000-00-00', '0000-00-00 00:00:00' ] )
			? false
			: $value;
	}

	public function update( $id, $value ) {
		// There seems to be an exception on how the date is stored
		if ( 'y' === $this->date_format && $value ) {
			$value = $value . ' 00:00:00';
		}

		return parent::update( $id, $value );
	}

}