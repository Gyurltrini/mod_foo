<?php
/**
 * @package    mod_foo
 *
 * @author     Kathryn Anderson <kathryn.ma@gmail.com>
 * @copyright  2023
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://www.gokatan.com
 */

// No direct access to this file
defined('_JEXEC') or die;

//echo 'Mod Foo' . $test;
$domain = $params->get('domain', 'https://www.joomla.org');
?>

<a href="<?php echo $domain; ?>">
	<?php echo '[PROJECT_NAME]' . $test; ?>
</a>