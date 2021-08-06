<?php

use Benjacho\BelongsToManyField\Http\Controllers\ResourceController;

Route::get('/{resource}/options/{relationship}/{optionsLabel}/{dependsOnValue?}/{dependsOnKey?}', [ResourceController::class, 'index']);
Route::get('/{resource}/combined-options/{relationship}/{optionsLabel}/{dependsOnValue?}/{dependsOnKey?}/{dependsOnGroupRelationship?}', [ResourceController::class, 'combined']);
