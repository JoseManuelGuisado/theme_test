<?php

namespace Drupal\theme_test\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for devel module routes.
 */
class ThemeTestController extends ControllerBase {

	public function guia () {
		return [
			'#theme' => 'theme_test_guia',
		];
	}

}