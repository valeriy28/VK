<?php
$permissions = [
	'notify',
	'friends',
	'photos',
	'audio',
	'video',
	'docs',
	'notes',
	'pages',
	'status',
	'wall',
	'groups',
	'messages',
	'email',
	'notifications',
	'stats',
	'ads',
	'market',
	'offline'
];

$request_params = [
 'client_id' => '5781930',
 'redirect_uri' => 'https://oauth.vk.com/blank.html',
 'display' => 'page',
 'response_type' => 'token',
 'scope' => implode(',', $permissions),
];

/*$url = 'https://api.vk.com/method/groups.getMembers?' . http_build_query($data);
$result = json_decode(file_get_contents($url));

echo $result;*/

$url = 'https://oauth.vk.com/authorize?' . http_build_query($request_params);
echo $url;