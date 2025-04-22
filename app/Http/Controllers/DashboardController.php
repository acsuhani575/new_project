<?php

namespace App\Http\Controllers;

use App\Models\Category;

class DashboardController
{
    public function dashboard()
    {
        $totalcategories = Category::count(); // adjust if your model name is different

        return view('dashboard', compact('totalcategories'));
    }
}
