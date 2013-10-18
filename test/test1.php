<?php
	require_once("../facebook-php-sdk-master/src/facebook.php");
	$config = array();
	//$config['appId'] = '555215614551506';
	//$config['secret'] = '16443d1960c2f08d0fd3f7a01885c088';


	$facebook = new Facebook($config);
	$facebook->setAccessToken("CAAH49zV6pdIBAElgwQvqRpkmYKoK4FWHSy8NBXtbZCdjpu219LpoKKZCawF4mNt3GwCHbeX8nhQ8UZAj94MhUpTCn4YZBdaarR1I2TMi03JrGQA9srExICuC4otZByWN6Ww6ip1aMVIjZAq1776TsNBBcrV8ZAGJ9sYCriJYPSLY5ZALzgTgIYwiAdtlNE0tqFxi5uZB3jvLQ1AZDZD ");

	$ret = $facebook->api('/541420929267621', 'POST', array());

	var_dump($ret);
?>