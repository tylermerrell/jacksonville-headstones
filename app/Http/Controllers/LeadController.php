<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name'  => ['required', 'string', 'max:100'],
            'contact'    => ['required', 'string', 'max:255'],
            'cemetery'   => ['nullable', 'string', 'max:255'],
            'type'       => ['nullable', 'string', 'max:100'],
            'message'    => ['nullable', 'string', 'max:2000'],
        ]);

        $validated['source_page'] = $request->headers->get('referer');

        Lead::create($validated);

        return back()->with('success', 'Thank you! We\'ll be in touch within one business day.');
    }
}
