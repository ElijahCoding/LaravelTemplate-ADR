<?php

namespace App\Agro\System\Http\Controllers;

use App\Agro\System\Models\User;
use App\Common\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        dd(User::get());
    }
}
