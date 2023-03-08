<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return response()->json(['message' => "Record Saved"]);
    }
}
