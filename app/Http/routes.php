<?php

use Laravel\Lumen\Application;


$app->get('/', 'MainController@showPlaceholder');

//$app->get('/about', function () use ($app) {
//  $data = [
//      'location'   => 'Nashville, TN',
//      'name'       => 'Christopher Wilson',
//      'profession' => 'Web Developer',
//      'skills'     => [
//        'backend'  => [
//          'php' => [
//            'codeception', 'composer', 'oop', 'phpunit', 'lumen', 'silex',
//            'wordpress'
//          ],
//        ],
//        'databases'=> [ 'mysql', 'SQLite' ],
//        'front-end'=> [
//          'CSS'        => [ 'Emmet', 'SASS/SCSS', 'Zurb Foundation' ],
//          'JavaScript' => [ 'npm' ]
//        ],
//        'other'    => [ 'CompTIA A+ Certified' ],
//        'servers'  => [ 'Apache' ],
//        'software' => [ 'Microsoft Office', 'JetBrains PHPStorm' ]
//      ]
//  ];
//
//  return json_encode($data);
//});

$app->get('/about', 'MainController@showAboutPage');

$app->get('contact', 'MainController@showContactPage');

$app->post('contact', 'MainController@submitContactForm');

$app->get('resume', [
    'as' => 'resume', 'uses' => 'MainController@showResume'
]);

$app->get('/links', function () use ($app) {
  $data = [
    'bitbucket' => [
      'icon' => '',
      'link' => 'www.bitbucket.com'
    ],
    'github'    => [
      'icon' => '',
      'link' => 'www.github.com'
    ],
    'linkedin'  => [
      'icon' => '',
      'link' => 'www.linkedin.com'
    ],
    'portfolio' => [
      'icon' => '',
      'link' => 'https://www.christopherwilson.biz/portfolio' ],
  ];

  return json_encode($data);
});

$app->get('/placeholder', [
    'as' => 'placeholder', 'uses' => 'MainController@showPlaceholderPage'
]);

$app->group(['prefix' => 'files'], function (Application $app) {

    $app->get('/resume', ['as' => 'resume', function () use ($app) {
        $file = 'files/developer-christopherwilson.docx';

        return response()->download($file);
    }]);

});
