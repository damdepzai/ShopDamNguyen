<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Cart;

class FontendController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();
    View::share('categories',$categories);
    }
}
