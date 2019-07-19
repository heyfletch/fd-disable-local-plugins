<?php
/*
Plugin Name: FD Disable Local Plugins
Plugin URI: https://github.com/heyfletch/fd-disable-local-plugins
Description:  Disables plugins based on local config.
Author: Joe Fletcher
Author URI: https://fletcherdigital.com
Credit: Kamil Grzegorczyk for v0.1
Version: 0.2
*/

if (defined('LOCAL_DISABLED_PLUGINS')) {
  $plugins_to_disable = unserialize(LOCAL_DISABLED_PLUGINS);

  if (!empty($plugins_to_disable) && is_array($plugins_to_disable)) {

    // Use Mark Jaquith code
    require_once(dirname(__FILE__) . '/fd-disable-local-plugins/DisablePlugins.php');

    $utility = new DisablePlugins($plugins_to_disable);

  }
}
