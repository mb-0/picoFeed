<?php
return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://appshopper.com/games/neo-monsters',
            'body' => array(
                '//div[@class="app-detail-header"]',
		'//div[@class="description section"]',
		'//div[@id="ss_container"]',
		'//div[@class="section description activity-list"]',
            ),
            'strip' => array(
                '//div[@id="mr_appExpand"]',
                '//div[@class="social-links"]',
		'//a[contains(., "Own")]',
                '//a[contains(., "Wish")]',
                '//a[contains(., "Buy")]',
            )
        ),
    ),
);
