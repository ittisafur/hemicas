<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Session;
use Alert;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class AuthenticationController extends Controller
{

    public function show(Request $request)
    {
        $users = User::all();
        return view('admin.user', compact('users'))->withNav('user');
    }


    public function registration()
    {
        if (Session::get('user')) {
            return redirect()->route('dashboard');
        }
        return view('frontend.registration');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider, Request $request)
    {
        if ($request->has('error_code')) {
            return redirect()->route('landing');
        }

        $userSocial  =   Socialite::driver($provider)->stateless()->user();
        $users       =   User::where(['email' => $userSocial->getEmail()])->first();
        if ($users && $users->provider === "admin") {
            return redirect('/');
        }
        if ($users) {

            session(['user' => $users, 'isLoggedIn' => true]);
            $request->session()->flash('message', ['text' => 'You have successfully logged in!', 'type' => 'success']);
            if (Session::has('isCart') === true) {
                return redirect()->route('cart');
            }

            return redirect('/');
        } else {
            $users = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);

            $recipient_email = $userSocial->getEmail();
            $recipient_name = $userSocial->getName();
            $subject = "Registration";
            $data['name'] = $userSocial->getName();
            $data['sign'] =  asset('assets/images/sign-abanti-1.png');
            $data['logo'] = asset('assets/images/logo-long-1.png');

            Mail::send('emails.registration', $data, function ($m) use ($recipient_email, $recipient_name, $subject) {
                $m->subject($subject);
                $m->to($recipient_email, $recipient_name);
            });
            session(['user' => $users, 'isLoggedIn' => true]);
            // if(Session::has('isCart') === true){
            //     return redirect()->route('cart');
            // }
            $request->session()->flash('message', ['text' => 'You have successfully registered!', 'type' => 'success']);
            return redirect()->route('index');
        }
    }

    public function signup($provider, Request $request)
    {

        $users  =  User::where(['email' => $request->userEmail, 'password' => md5($request->userPassword)])->first();

        if ($users && $users->provider === "admin") {
            return redirect('/');
        }
        if ($users) {
            session(['user' => $users, 'isLoggedIn' => true]);

            // if(Session::has('isCart') === true){
            //     return redirect()->route('cart');
            // }
            //$request->session()->flash('status', 'You have successfully logged in!!');
            $request->session()->flash('message', ['text' => 'You have successfully logged in!', 'type' => 'success']);

            return redirect('/');
        } else {
            $request->validate([
                'email' => 'required|unique:users,email',
                'password' => 'required',
                'confirm_password' => 'required|same:password'
            ]);

            $users = User::create([
                'name'              => $request->fName . " " . $request->lName,
                'email'             => $request->email,
                'image'             => "",
                'provider_id'       => rand(),
                'provider'          => $provider,
                'postalCode'        => $request->postalCode,
                'billingAddress'    => $request->billingAddress,
                'password'          =>   md5($request->password)

            ]);
            $recipient_email = $request->email;
            $recipient_name = $request->fName . " " . $request->lName;
            $subject = "Registration";
            $data['name'] = $request->fName . " " . $request->lName;
            $data['sign'] =  asset('assets/images/sign-abanti-1.png');
            $data['logo'] = asset('assets/images/logo-long-1.png');

            $sent = Mail::send('emails.registration', $data, function ($m) use ($recipient_email, $recipient_name, $subject) {
                $m->subject($subject);
                $m->to($recipient_email, $recipient_name);
            });

            session(['user' => $users, 'isLoggedIn' => true]);
            // if(Session::has('isCart') === true){
            //     return redirect()->route('cart');
            // }
            $request->session()->flash('message', ['text' => 'You have successfully registered!', 'type' => 'success']);
            return redirect()->route('index');
        }
        $request->session()->flash('message', ['text' => 'Invalid Credentials!', 'type' => 'warning']);
        return redirect()->route('index');
    }
    public function logout()
    {
        session(['isLoggedIn' => false, 'isCart' => false]);
        Session::forget('user');
        return redirect('/');
    }
}
