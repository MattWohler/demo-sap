<?php

use Illuminate\Support\Facades\View;

if ( ! function_exists('component') ) {
    function component($view, $data = [])
    {
        return View::component($view, $data);
    }
}
