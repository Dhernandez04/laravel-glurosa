<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['login','registro']]);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);
        $user=null;
        if (! $token = Auth::attempt($credentials)) {
            return response()->json(['error' => 'Usuario o contraseña incorrectos','code'=>401]);
        }
        $user = auth()->user();

        return response()->json( [
            "user"=>$user,
            "token"=>$this->respondWithToken($token)]);
    }

    public function registro(Request $request){
        $user = new User($request->all());
        $user->password =bcrypt($user->password);
        $user->save();
        return response()->json(['data'=>$user],200);
    }
    public function logout()
    {
        Auth::logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60
        ]);
    }
}
