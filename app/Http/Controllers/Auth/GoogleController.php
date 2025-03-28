<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // تحقق مما إذا كان المستخدم موجودًا بالفعل
        $user = User::where('email', $googleUser->getEmail())->first();

        if ($user) {
            // إذا كان موجودًا، قم بتسجيل دخوله
            Auth::login($user, true);
        } else {
            // إذا لم يكن موجودًا، قم بإنشاء مستخدم جديد
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'password' => bcrypt(uniqid()), // أو استخدم أي كلمة مرور عشوائية
            ]);

            Auth::login($user, true);
        }

        return redirect('/');
    }
}
