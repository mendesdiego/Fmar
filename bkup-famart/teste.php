<?php
$data = get_data("https://graph.facebook.com/InstitutoCotemar/promotable_posts?access_token=CAACEdEose0cBAE9P5uh5WEqLFi8nfhZCLcU3rJWvsenh7xMYKMTB5bZB0eOCQKswGPj0gZB1h13cqI2P8IrqZA4XRo5N9ecSoqjAduIWB1PIPFjXFIxTx86T0SAVhBCcZBNZChDuAjNeFn47t2zSZAAt4AC1N3n2eoNRvKZAU2xmLupfxVyszA5wusd08LsclZBZCq61b0cM57N7yhq18JCXd4");
$result = json_decode($data);


	// define("APP_ID", '160802600963473');
	// define("APP_SECRET",'f04d965059e172a13792987e6aedc5ce');