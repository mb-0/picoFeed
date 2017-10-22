<?php
return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'https://www.howtoforge.com/tutorial/rsyslog-centralized-log-server-in-debian-9/',
            'body' => array(
		'//div[@id="htfContentPage"]',
            ),
            'strip' => array(
		'//div[@class="bsa-apiads"]',
		'//div[@class="contribute-edit"]',
		'//div[@id="htfContentPagePaging"]',
		'//div[@id="htfContentPageComment"]',
		'//div[@id="breadBoxBottom"]',
		'//div[@style="height:30px; margin-top:20px;"]'
            )
        ),
    ),
);
