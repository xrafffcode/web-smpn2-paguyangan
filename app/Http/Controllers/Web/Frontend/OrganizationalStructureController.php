<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganizationalStructureController extends Controller
{
    public function index()
    {
        return view('pages.frontend.about.organizational-structure.index');
    }
}
