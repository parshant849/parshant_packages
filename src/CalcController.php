<?php

namespace Parshant\Calc;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalcController extends Controller {
    public function add($a, $b) {
    	$result = $a + $b;
		return view('calc::add', compact('result'));
    }

    public function subtract($a, $b) {
    	echo $a - $b;
    }
}
