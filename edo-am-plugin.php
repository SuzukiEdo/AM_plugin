<?php
/**
 * Edo's AM plugin
 * Plugin to add remote data as table on the block editor.
 * php version 7.2.0
 * 
 * @category  Plugin
 * @package   EdoAM
 * @author    SuzukiEdo <edo.suzuki@hotmail.com>
 * @copyright 2023 EDS Desenvolvimento digital ltd
 * @license   https://opensource.org/license/mit/ MIT
 * @link      https://github.com/SuzukiEdo/AM_plugin
 * 
 * @wordpress-plugin
 * Plugin Name:       Edo's AM Table plugin
 * Description:       Plugin to add remote data as an table on the block editor.
 * Version:           0.1
 * Requires at least: 5.1
 * Requires PHP:      5.4
 * Author:            SuzukiEdo
 * License:           MIT
 * License URI:       https://www.mit.edu/~amini/LICENSE.md
 * Text Domain:       edo-am-table
 */

namespace Edo\AMTable;

// Block direct access.
if (! defined('ABSPATH') ) {
    exit;
}

require __DIR__ . '/inc/namespace.php';

add_action(
    'after_setup_theme',
    function () {
        \Edo\AMTable\inc\Namespace\Bootstrap();
    }
);
