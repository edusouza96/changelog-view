<?php

use Illuminate\Support\Facades\Route;

Route::get('/{key?}', 'ChangelogViewController@index')->name('changelog-view.index');
