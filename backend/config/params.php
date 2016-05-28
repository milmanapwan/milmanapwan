<?php
$_path = realpath(dirname(__FILE__).'/../..').'/frontend/web/public';
return [
    'adminEmail' => 'admin@example.com',
    'appname'   =>  'M ILman Apwan',
    'pathUpload'   =>  $_path,
    'pathImageUser' =>  '/images/user/',
    'pathImageCv' =>  '/images/cv/',
    'urlGeneral'    =>  'http://localhost/yii-application/frontend/web/public',
    'urlImageSlider'    =>  '/images/slider/', // tidak di pakai
    'urlNoImage'    =>  '/noimages/no-preview.jpg',
    'pageSizeGrid'  =>  10,
    'pageSizeListview'  =>  10
];
