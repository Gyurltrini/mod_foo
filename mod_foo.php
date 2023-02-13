<?php
/**
 * @package    MOD FOO
 *
 * @author     Kathryn Anderson <kathryn.ma@gmail.com>
 * @copyright  2023
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://www.gokatan.com
 */

// No direct access to this file
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\Foo\Site\Helper\FooHelper;

$test  = FooHelper::getText();

require ModuleHelper::getLayoutPath('mod_foo', $params->get('layout', 'default'));