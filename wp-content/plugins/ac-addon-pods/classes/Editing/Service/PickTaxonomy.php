<?php

namespace ACA\Pods\Editing\Service;

use ACP;
use ACP\Editing\PaginatedOptions;
use ACP\Editing\Storage;

class PickTaxonomy extends ACP\Editing\Service\BasicStorage implements PaginatedOptions {

	/**
	 * @var boolean
	 */
	private $multiple;

	/**
	 * @var string
	 */
	private $taxonomy;

	public function __construct( Storage $storage, $multiple, $taxonomy ) {
		parent::__construct( $storage );

		$this->multiple = (bool) $multiple;
		$this->taxonomy = $taxonomy;
	}

	public function get_view( $context ) {
		return ( new ACP\Editing\View\AjaxSelect() )
			->set_multiple( $this->multiple )
			->set_clear_button( true );
	}

	public function get_value( $id ) {
		$term_ids = parent::get_value( $id );

		if ( empty( $term_ids ) ) {
			return [];
		}

		$value = [];
		foreach ( $term_ids as $term_id ) {
			$term = get_term_by( 'id', $term_id, $this->taxonomy );

			$value[ $term_id ] = $term ? htmlspecialchars_decode( $term->name ) : $term_id;
		}

		return $value;
	}

	public function get_paginated_options( $search, $page, $id = null ) {
		return new ACP\Helper\Select\Paginated\Terms( $search, $page, (array) $this->taxonomy );
	}

}