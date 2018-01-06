# ISS_CodeIgniter

ISS_CodeIgniter is a project developed with [CodeIgniter 3.1.6](https://codeigniter.com/) and JSON, using the [Open Notify](http://open-notify.org/), integrating  the framework [Bootstrap 3.37](https://getbootstrap.com/docs/3.3/) for HTML, CSS, JS.

## Added files,folders

```
-www
 |-ISS_CodeIgniter
	|-application
		|-config
			\-config.php
		|-controllers
			\-IssController.php
			\-SiteController.php
		|-views
			|-iss
				\-headers.php
				\-index.php
			|-site
				\-headers.php
				\-index.php
	|-assets
		|-brand
		|-css
		|-flash
		|-fonts
		|-img
		|-js
```
## application/config/config.php
In the file config.php the directive was changed "***$config['base_url'] = '';***"   by  "***$config['base_url'] ='http://localhost/ISS_CodeIgniter';***"

```php
$config['base_url'] = 'http://localhost/ISS_CodeIgniter';
```

## assets
This folder contains the Bootstrap framework (brand, css, flash, fonts, img, js), just unzip the package from the official Bootstrap site inside the folder assets













