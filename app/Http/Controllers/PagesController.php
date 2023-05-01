<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PagesController extends Controller
{
    public function app()
    {

        return view('layouts.app', [
            'title' => 'Dashboard',
        ]);
    }

}