<?php

namespace ACA\Pods;

use ACA\Pods\Editing\StorageFactory;
use ACA\Pods\Editing\ViewFactory;

/**
 * @deprecated 1.6
 */
class Editing extends Editing\Service\FieldStorage {

	public function __construct( Column $column ) {
		parent::__construct(
			( new StorageFactory() )->create_by_field( $column->get_field() ),
			( new ViewFactory() )->create_by_field( $column->get_field() )
		);
	}

}