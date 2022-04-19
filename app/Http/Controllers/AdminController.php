<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public  function  activation(Request $request)
    {

        $active = [
            'status' => true,
        ];

        $inactive = [
            'status' => false,
        ];

        if ($request->type == 'social') {
            $social = SocialMedia::findOrFail($request->id);
            if ($social->status == true) {
                $social->update($inactive);
            } else {
                $social->update($active);
            }
        }
        return back();
    }
    public function profile()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('admin.profile', compact('user'));
    }
    public function data(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        User::findOrFail(Auth::user()->id)->update($data);
        return back()->with('message', 'User data change');
    }
    public function password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required||min:8||confirmed',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'validation',
                'error' => $validator->messages(),
            ]);
        } else {
            $user = User::findOrFail(Auth::user()->id);
            if (Hash::check($request['old_password'], $user->password)) {
                $password = Hash::make($request['password']);
                User::findOrFail(Auth::user()->id)->update(['password' => $password]);
                return response()->json([
                    'status' => 'done',
                    'message' => 'Parol muvaffaqiyatli o\'zgartirildi'
                ]);
            } else {
                return response()->json([
                    'status' => 'check',
                    'error' => 'Eski parol noto\'g\'ri!',
                ]);
            }
        }
    }
}
