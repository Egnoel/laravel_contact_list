<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $contacts = Contact::query()
            ->where('name', 'like', '%'.$request->input('contact').'%')
            ->get();
        return view('index', ['contacts' => $contacts]);
    }
}
