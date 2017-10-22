<?php
return array(
    'grabber' => array(
        '%.*/blog/.*%' => array(
            'test_url' => 'https://www.plex.tv/blog/plexbox-one-x-emplexening/',
            'body' => array(
                '//div[@class="large-12 columns headline"]/span/h1',
		'//article/div[@class="blog-content"]'
            ),
            'strip' => array(
		'//div[@class="mobile-on"]',
		'//div[@class="share-bar"]',
		'//button',
		'//div[@id="disqus_thread"]'
            )
        ),
    ),
);
