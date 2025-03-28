<?php

namespace App\Http\Controllers;

use id;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function facebookpage()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function redirect()
    {
        try {
            // الحصول على بيانات المستخدم من فيسبوك
            $user = Socialite::driver('facebook')->user();

            // التحقق مما إذا كان المستخدم موجودًا بالفعل
            $findUser = User::where('facebook_id', $user->id)->first();

            if ($findUser) {
                // إذا كان المستخدم موجودًا، تسجيل دخوله
                Auth::login($findUser);

                // توجيه المستخدم إلى الصفحة الرئيسية
                return redirect()->intended('/');
            } else {
                // إذا لم يكن موجودًا، إنشاء مستخدم جديد
                $newUser = User::updateOrCreate([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'password' => encrypt('123456dummy') // يمكنك تعيين كلمة مرور مشفرة
                ]);

                Auth::login($newUser);

                // توجيه المستخدم إلى الصفحة الرئيسية بعد التسجيل
                return redirect()->intended('/');
            }
        } catch (Exception $e) {
            return redirect('/login')->withErrors(['error' => $e->getMessage()]);
        }
    }
}
