
<?php
use Illuminate\Support\Facades\Route;

function set_active($route)
{
    if (Route::is($route)) {
        return 'active';
    }
}
