<?php

namespace ACA\Pods\Editing\Service;

use AC;
use ACP;
use ACP\Editing\PaginatedOptions;
use ACP\Editing\Storage;
use ACP\Helper\Select\Entities;

class PickComments extends ACP\Editing\Service\BasicStorage implements PaginatedOptions {

	/**
	 * @var boolean
	 */
	private $multiple;

	public function __construct( Storage $storage, $multiple ) {
		parent::__construct( $storage );

		$this->multiple = (bool) $multiple;
	}

	public function get_view( $context ) {
		return ( new ACP\Editing\View\AjaxSelect() )
			->set_multiple( $this->multiple )
			->set_clear_button( true );
	}

	public function get_value( $id ) {
		$comment_ids = parent::get_value( $id );

		if ( empty( $comment_ids ) ) {
			return false;
		}

		$value = [];
		foreach ( $comment_ids as $comment_id ) {
			$comment = get_comment( $comment_id );
			$value[ $comment_id ] = $comment ? $comment->comment_date : $comment_id;
		}

		return $value;
	}

	public function get_paginated_options( $search, $paged, $id = null ) {
		$entities = new Entities\Comment( compact( 'search', 'paged' ) );

		return new AC\Helper\Select\Options\Paginated(
			$entities,
			new ACP\Helper\Select\Formatter\CommentSummary( $entities )
		);
	}

}