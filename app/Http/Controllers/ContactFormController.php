<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormSubmitted;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ebook-form-name' => 'required|string|max:255',
            'ebook-email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->input('ebook-form-name');
        $email = $request->input('ebook-email');

        DB::table('contact_forms_details')->insert([
            'name' => $name,
            'email' => $email,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Send email notification with error handling
        try {
            Mail::to('triggerwritersclub@gmail.com')->send(new ContactFormSubmitted($name, $email));
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
            return redirect('/')->with('error', 'There was an issue sending the email. Please try again later.');
        }

        return redirect('/')->with('success', 'Thank you for joining us!');
    }
}
