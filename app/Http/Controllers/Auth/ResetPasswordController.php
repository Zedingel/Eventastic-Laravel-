<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    // Show the form for resetting the password
    public function showResetForm(Request $request, $token = null)
{
// Check if the token and email are present
    if (is_null($token) || is_null($request->email)) {
        return redirect()->route('password.request')->withErrors(['email' => 'Invalid token or email.']);
    }

    return view('auth.passwords.reset')->with(
        ['token' => $token, 'email' => $request->email]
    );
}


    // Handle a reset password request
    public function reset(Request $request)
{
    // Validate the request data
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|confirmed|min:8',
        'token' => 'required',
    ]);

    // Find the user by email
    $user = \App\Models\User::where('email', $request->email)->first();

    // Check if user exists
    if (!$user) {
        return back()->withErrors(['email' => 'No user found with that email address.']);
    }

    // Update the user's password
    $user->password = Hash::make($request->password);
    $user->save();

    // Fire the password reset event
    event(new PasswordReset($user));

    // Redirect to the intended location or a default route
    return redirect()->route('login')->with('status', 'Your password has been reset!');
}

}
