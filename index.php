<?php

use App\App;
use App\Getters\FilePhraseGetter;
use App\Processors\BrowserShowResultProcessor;
use App\Processors\CsvSearchResultProcessor;
use App\Processors\MultiSearchResultProcessor;
use App\Processors\ZipSearchResultProcessor;
use App\Search\GoogleImageSearch;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/vendor/autoload.php";

