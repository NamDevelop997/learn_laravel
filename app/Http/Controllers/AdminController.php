<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function add()
    {
        return "This is admin post add";
    }

    function show()
    {
        return "This is show page admin post";
    }
    function edit($id)
    {
        return "This is edit post id = {$id}";
    }
    function delete($id)
    {
        return "This is delete post id = {$id}";
    }
}
