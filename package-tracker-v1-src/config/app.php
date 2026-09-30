<?php
return [
 'name'=>env('APP_NAME','Package Tracker'),
 'env'=>env('APP_ENV','production'),
 'debug'=>(bool) env('APP_DEBUG',false),
 'url'=>env('APP_URL','http://localhost'),
 'timezone'=>env('APP_TIMEZONE','UTC'),
 'locale'=>'en',
 'fallback_locale'=>'en',
 'display_timezone'=>env('APP_DISPLAY_TIMEZONE','UTC'),
 'support_email'=>env('SUPPORT_EMAIL'),
 'key'=>env('APP_KEY'),
 'cipher'=>'AES-256-CBC',
 'providers'=>[],
];
