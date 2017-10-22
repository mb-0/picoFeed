<?php
return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://www.androidpolice.com/2017/10/21/moon-seeing-levitating-robotic-eyeball-can-control-home/',
            'body' => array(
		'//header[@class="post-header"]/h2',
                '//div[@class="post-hero post-hero-single"]/img',
		'//div[@class="post-content"]',
            ),
            'strip' => array(
		'//div[@class="post-content"]/script',
		'//div[@class="clear pre-horizontal-boxes',
            )
        ),
    ),
);
