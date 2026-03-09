<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:5000'],
            'cf-turnstile-response' => ['required', 'string'],
        ]);

        $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret' => config('services.turnstile.secret_key'),
            'response' => $validated['cf-turnstile-response'],
            'remoteip' => $request->ip(),
        ]);

        if (!($response->json('success') ?? false)) {
            return back()
                ->withErrors(['turnstile' => 'Potwierdź, że nie jesteś botem.'])
                ->withInput();
        }

        $toAddress = env('CONTACT_MAIL_ADDRESS');

        if ($toAddress) {
            Mail::to($toAddress)->send(
                new ContactMessage(
                    $validated['name'],
                    $validated['email'],
                    $validated['phone'] ?? null,
                    $validated['message'],
                )
            );
        }

        return back()->with('status', 'Dziękujemy za wiadomość. Skontaktujemy się z Tobą tak szybko, jak to możliwe.');
    }
}

