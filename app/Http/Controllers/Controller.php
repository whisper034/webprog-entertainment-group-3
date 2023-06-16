<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function home()
    {
        return view('/main/home', [
            'active' => 'home',
        ]);
    }

    public function getUser($userEmail) {
        return DB::table('users')
            ->select([
                'user_id',
                'user_photo_url',
                'name',
                'email',
                'password',
                'gender',
                'phone_number'
            ])
            ->where('users.email', '=', $userEmail)
            ->whereNull('deleted_at');
    }

    public function loginPage($validateUserInput = null, $oldValues = null)
    {
        return view('/auth/login', [
            'active' => 'login',
            'validateUserInput' => $validateUserInput,
            'oldValues' => $oldValues
        ]);
    }

    public function loginUser(Request $request) {
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return $this->loginPage('wrong_email_format', $request->all());
        }

        $getUser = $this->getUser($request->email)->get()->first();

        if (empty($getUser)) {
            return $this->loginPage('login_failed', $request->all());
        }
        else {
            $checkPassword = Hash::check($request->password, $getUser->password);

            if (!$checkPassword) {
                return $this->loginPage('login_failed', $request->all());
            }
            else {
                // passing parameter buat session
                $request->session()->put(
                    'loginUser', $getUser
                );
                $request->session()->regenerate();
                return redirect('/home');
            }
        }
    }

    public function logout(Request $request) {
        if ($request->session()->has('loginUser')) {
            $request->session()->pull('loginUser');
            return redirect('/home');
        }

        return redirect('/home');
    }

    public function signUpPage($validateUserInput = null, $oldValues = null) {
        return view('auth.signup',[
            'active' => 'signup',
            'validateUserInput' => $validateUserInput,
            'oldValues' => $oldValues
        ]);
    }

    public function signUpUser(Request $request) {
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return $this->signUpPage('wrong_email_format', $request->all());
        }

        if ($request->password !== $request->confirm_password) {
            return $this->signUpPage('password_not_match', $request->all());
        }

        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

        User::insert([
            'name' => $request->name,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => $nowDate
        ]);

        return redirect('/success');
    }

    public function signUpSuccess() {
        return view('auth.signup-success',[

        ]);
    }

    public function viewProfile($user_id) {
        $transactions = (new TransactionController)->transactions($user_id);

        return view('/main/home', [
            'active' => 'user_profile',
            'transaction_history' => $transactions
        ]);
    }
}
