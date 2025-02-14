<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BorrowingsController extends Controller
{
    public function index()
    {
        $users = User::with('books')->get();
        return view('borrowings.index', compact('users'));
    }
}
