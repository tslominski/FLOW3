<?php
declare(ENCODING="utf-8");

/*                                                                        *
 * Settings                                                               *
 *                                                                        *
 * This file contains settings for various parts of the application.      *
 * Just add your own modifications as necessary.                          *
 *                                                                        *
 * Please refer to the default settings file(s) or the manuals for        *
 * possible configuration options.                                        *
 *                                                                        */

/**
 * Options which are passed to the storage backend used by TYPO3CR
 *
 * @var array
 */
$c->TYPO3CR->storage->backendOptions = array(
	'dataSourceName' => 'sqlite:' . FLOW3_PATH_DATA . 'Persistent/typo3cr.db',
	'username' => NULL,
	'password' => NULL
);

/**
 * Options which are passed to the indexing/search backend used by TYPO3CR
 *
 * @var array
 */
$c->TYPO3CR->search->backendOptions = array(
	'indexLocation' => FLOW3_PATH_DATA . 'Persistent/Index'
);
?>
