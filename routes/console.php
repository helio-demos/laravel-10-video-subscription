<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\CaptureScreens;
//use JonnyW\PhantomJs\Client;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('capture-screens', function () {
  $this->info("Starting screen capture process ...");
  // Define Host Address
  $host = 'http://127.0.0.1:8000/';
  // Define Path Addresses
  $parts = [
    'component-pages/component-typo',
    'component-pages/component-button',
    'component-pages/component-call-to-action',
  ];
  // Screenshot Config
  $config =  [
    'format'  => 'jpeg',
    'quality' => 80,
    'optimizeForSpeed' => true
  ];
  // Create Browser
  $browserFactory = new HeadlessChromium\BrowserFactory();
  $browser = $browserFactory->createBrowser();
  //
  $this->info("Browser created.");
  // Create a Page in Browser
  $page = $browser->createPage();
  $this->info("Page created.");
  // $this->newLine();
  // $navigation = $page->navigate("{$host}component-pages/dash-page-get-started");
  // $navigation->waitForNavigation();
  // $screenshot = $page->screenshot($config);
  // // save the screenshot
  // $screenCaptureFilePath = base_path('/').'/screen-capture-test.jpg';
  // $screenshot->saveToFile($screenCaptureFilePath);
  // End Prepare Screen Capture Cliend
  // Screen Capture Start
  $screenCaptures = $this->withProgressBar($parts, function ($part) use($host,$page,$config) {
      // Nervigate and prepare to screencapture
      $url = "{$host}{$part}";
      $navigation = $page->navigate($url);
      $navigation->waitForNavigation();
      // Screen Capture and Save to Storage
      $screenshot = $page->screenshot($config);
      $md5 = md5($part);
      $fileName = substr($md5, 0, 8);
      $savePath  = storage_path('/').'/app/screen-shot/'.$fileName.'.jpg';
      $screenshot->saveToFile($savePath);
  });
  // Screen Capture End
  $this->newLine();
  $this->info("Screen capture finished,");
});
