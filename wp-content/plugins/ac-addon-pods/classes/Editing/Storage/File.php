<?php

namespace ACA\Pods\Editing\Storage;

class File extends Field {

	public function __construct( $pod, $field_name, $meta_type ) {
		parent::__construct( $pod, $field_name, new Read\DbRaw( $this->field_name, $meta_type ) );
	}

	public function update( $id, $value ) {
		$data = [];

		if ( ! empty( $value ) ) {
			foreach ( (array) $value as $attachment_id ) {
				$data[ $attachment_id ] = [
					'id'    => $attachment_id,
					'title' => get_the_title( $attachment_id ),
				];
			}
		}

		return parent::update( $id, $data );
	}

}