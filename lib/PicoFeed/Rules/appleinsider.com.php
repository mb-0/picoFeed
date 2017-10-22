<?php
return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://appleinsider.com/articles/17/10/22/logitechs-circle-2-wired-is-the-best-camera-with-apples-homekit---for-now',
            'body' => array(
		'//div[@class="article"]/h1',
		'//div[@class="article"]/span'
            ),
            'strip' => array(
            )
        ),
    ),
);
