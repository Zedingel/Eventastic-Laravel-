<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Logic to send email
        Mail::to('zedingelbeniyam@gmail.com')->send(new ContactMail($validatedData));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message successfully sent!');
    }
}
?>
