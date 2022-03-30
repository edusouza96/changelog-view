<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ChangelogViewController@index')->name('changelog-view.index');
