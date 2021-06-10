<?php

use App\Core\View\View;

function view($view): View
{
    return new View($view);
}
