<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function store(Request $request)
    {
        $preferences = $request->validate([
            'analytics' => 'required|boolean',
            'personalization' => 'required|boolean',
            'advertising' => 'required|boolean'
        ]);

        // Store preferences in a cookie that lasts for 365 days
        return response()->json(['status' => 'ok'])
            ->cookie('cookie_preferences', json_encode($preferences), 60 * 24 * 365);
    }
}
