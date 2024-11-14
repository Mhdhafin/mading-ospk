<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\User;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Notifications\ContactSend;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index()
    {
        return view('emails.contact');
    }

    public function store(StoreContactRequest $request)
    {
        $data = $request->validated();


        // $user = User::find(1);
        // $user->notify(new ContactSend($data));
        Notification::route('mail', [
            'dhafinharon40@gmail.com' => 'Dhafin Haron',
        ])->notify(new ContactSend($data));

        return redirect()->back()->with('success', 'Send message successfully');
    }
}
