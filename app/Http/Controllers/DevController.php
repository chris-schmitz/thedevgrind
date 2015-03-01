<?php namespace Grinder\Http\Controllers;

use Grinder\Http\Requests;
use Grinder\Http\Controllers\Controller;

use \Michelf\Markdown;

use Illuminate\Http\Request;

class DevController extends Controller {


    public function test(Markdown $mark){

        $text = <<<MD
# Testing the markdown conversion package

Test markdown conversion
------------------------
- This should be a list item
- So should this

[check out this link](http://www.google.com)
MD;

        $html = $mark->defaultTransform($text);

        return $html;
    }
}
