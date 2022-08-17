<?php
namespace Foad\FirstPack\Controllers;

use Illuminate\Http\Request;
use Foad\FirstPack\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}