# Powered by Zyro.com

<IfModule mod_expires.c>
	ExpiresActive On
	ExpiresDefault A0
	ExpiresByType image/gif A691200
	ExpiresByType image/png A691200
	ExpiresByType image/jpeg A691200
	ExpiresByType text/css A691200
	ExpiresByType text/javascript A691200
	ExpiresByType application/javascript A691200
</IfModule>

ErrorDocument 401 "Unauthorized"
ErrorDocument 403 "Forbidden"
<IfModule mod_negotiation.c>
	#Options -MultiViews
</IfModule>
RewriteEngine On
RewriteBase /
#### PERSISTENT CONTENT ####
DirectoryIndex index.php index.cgi index.html
RewriteCond %{REQUEST_FILENAME} !-f [OR]
RewriteCond %{REQUEST_URI} ^\/(js\/main\.js|css\/(\d+|common|site)\.css)$
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ zyro/$1 [L,QSA]

<?php
// Powered by Zyro.com
if (version_compare(PHP_VERSION, '5.3.0') < 0) {
	echo "Your PHP version is outdated for this website. Please update PHP version to 5.3.6 or higher.";
	exit();
}
include dirname(__FILE__).'/zyro/index.php';
?>
