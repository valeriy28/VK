<?php

    $fields = [
    'connections',
    'site',
    'education',
    'contacs',
    'photo_max',
    'status',
    'city',
    'sex'
    ];

    $data = [
    'group_id'=>'5781930',
    'sort' =>'id_asc',
    'offset' =>0,
    'count' =>30,
    'fields' => implode(',', $fields),
    'access_token' => '7e7c997a8a7c1ca95d7ff7eb5a052fb5617db88d0f664d27c14cfef631c4791ca29942535a606e7467dcd'
    ];

    $url = 'https://api.vk.com/method/users.get?' . http_build_query($data);
    $result = file_get_contents($url);
	echo $result;


