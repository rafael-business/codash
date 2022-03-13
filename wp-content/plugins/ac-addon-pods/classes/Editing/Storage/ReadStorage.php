<?php

namespace ACA\Pods\Editing\Storage;

interface ReadStorage {

	/**
	 * @param $id
	 *
	 * @return mixed
	 */
	public function get( $id );
}