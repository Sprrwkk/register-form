<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    //
    public function register() {
        return view('register');
    }

    public function createNewUser(Request $request) {

        $this->validate(request(), [
           'name' => 'required',
           'surname' => 'required',
           'password' => 'required|min:6',
           'email' => 'required|email'
        ]);

        $email = request(['email']);

        $data = $request->all();

        $user = User::create(request(['name', 'surname', 'description', 'email', 'password']));

        $details = [
            'title' => 'Mail from laraveltestmailsender@gmail.com',
            'body' => '',
        ];

        foreach($data as $row=>$value) {
            $details['body'] .= $row . " => " . $value . " | ";
        }


        try {
            Mail::to($email)->send(new \App\Mail\TestMail($details));
        } catch (\Exception $e) {
            return response($e->getMessage());
        }

        echo "Email has been sent!";

        auth()->login($user);

    }
}
