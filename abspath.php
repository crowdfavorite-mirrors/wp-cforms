<?php 

if ($_SERVER['SERVER_NAME'] == 'wallstreetdaily.com') {
	// Staging
	$abspath = '/var/www/vhosts/wallstreetdaily.com/httpdocs/';
}
else {
	// Production
	$abspath = '/var/www/vhosts/wallstreetdaily.com/httpdocs/';

	// Local
	//$abspath = '/local/server/root/path/';
}