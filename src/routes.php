<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Parshant\Calc\CalcController@add');
Route::get('subtract/{a}/{b}', 'Parshant\Calc\CalcController@subtract');