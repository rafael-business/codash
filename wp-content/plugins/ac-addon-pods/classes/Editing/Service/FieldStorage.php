<?php

namespace ACA\Pods\Editing\Service;

use ACP\Editing;
use ACP\Editing\Service\BasicStorage;
use ACP\Editing\View;

class FieldStorage extends BasicStorage {

	/**
	 * @var View
	 */
	private $view;

	public function __construct( Editing\Storage $storage, View $view = null ) {
		parent::__construct( $storage );

		$this->view = $view;
	}

	public function get_view( $context ) {
		return $this->view !== null
			? $this->view
			: ( new View\Text() )->set_clear_button( true );
	}

}