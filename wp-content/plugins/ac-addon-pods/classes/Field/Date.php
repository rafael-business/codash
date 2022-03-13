<?php

namespace ACA\Pods\Field;

use ACA\Pods\Editing;
use ACA\Pods\Field;
use ACA\Pods\Setting;
use ACP\Editing\View;
use ACP\Filtering;
use ACP\Search;
use ACP\Sorting;
use ACP\Sorting\Type\DataType;

class Date extends Field {

	public function editing() {
		return new Editing\Service\FieldStorage(
			( new Editing\StorageFactory() )->create_by_field( $this ),
			( new View\Date() )->set_clear_button( '1' === $this->get_option( 'date_allow_empty' ) )
		);
	}

	public function sorting() {
		return ( new Sorting\Model\MetaFactory() )->create( $this->get_meta_type(), $this->get_meta_key(), new DataType( DataType::DATE ) );
	}

	public function filtering() {
		return new Filtering\Model\MetaDate( $this->column );
	}

	public function search() {
		return new Search\Comparison\Meta\DateTime\ISO( $this->column->get_meta_key(), $this->column->get_meta_type() );
	}

	public function get_dependent_settings() {
		return [
			new Setting\Date( $this->column ),
		];
	}

}