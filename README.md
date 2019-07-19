# Disable Local Plugins
Disable local plugins depending on the environment, e.g., local, development, staging, production.

Place this plugin (fd-disable-local-plugins.php & fd-disable-local-plugins subdirectory only) in your [mu-plugins directory](https://wordpress.org/support/article/must-use-plugins/).

In wp-config.php (or local-config.php or config/environments for Bedrock), add:

```php
define('LOCAL_DISABLED_PLUGINS', serialize([
  'autoptimize/autoptimize.php',
  'redis-cache/redis-cache.php',
  'google-site-kit/google-site-kit.php',
  'google-analytics-for-wordpress/googleanalytics.php',
  'limit-login-attempts-reloaded/limit-login-attempts-reloaded.php',
  'cloudflare/cloudflare.php',
  'cloudguard/cloudguard.php',
  'sunny/sunny.php',
  'worker/init.php',
]));
```


## TODO
Don't push active plugin options during WP Migrate DB Pro Push? Or, maybe not needed if this plugin does not change the settings in the options, just overrides them via wp-config.php. TBD.

## Credit
[Kamil Grzegorczyk](https://kamilgrzegorczyk.com/2018/05/02/how-to-disable-plugins-on-certain-environment/) for the blog post and code that this plugin is based on.
