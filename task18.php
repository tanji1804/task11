<?php


use App\Http\Controllers\XXX\AAAController;
Route::controller(AAAController::class)->group(function(){
    Route::get('XXX','bbb');
});