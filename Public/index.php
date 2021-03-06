<?php
declare(ENCODING = 'utf-8');

/*                                                                        *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Bootstrap for the FLOW3 Framework
 *
 * @package FLOW3
 * @version $Id$
 * @author Robert Lemke <robert@typo3.org>
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser Public License, version 3 or later
 */

define('FLOW3_PATH_PUBLIC', str_replace('\\', '/', __DIR__) . '/');
require(FLOW3_PATH_PUBLIC . '../Packages/Global/FLOW3/Classes/FLOW3.php');

	// determine context
if (strlen(getenv('FLOW3_CONTEXT'))) {
	$framework = new F3\FLOW3\FLOW3(getenv('FLOW3_CONTEXT'));
} else {
	$framework = new F3\FLOW3\FLOW3();
}

$framework->initialize();
$framework->run();
?>