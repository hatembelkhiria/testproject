<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\user;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class APIController extends Controller
{
  public function register(Request $request)
  {

    $input = $request->only(['email','password','name','last_name','photo_url']);
    $input['password'] = Hash::make($input['password']);
    User::create($input);
    return response()->json(['result'=>true]);
  }
 
  public function login(Request $request)
  {
    $input = $request->only(['email','password']);
    if (!$token = JWTAuth::attempt($input)) {
      return response()->json(['result' => 'wrong email or password.']);
    }
    return response()->json(['result' => $token]);
  }
 
  public function get_user_details(Request $request)
  {
     $input = $request->all();

        $user = auth()->user();
        return response()->json($user);
  }
}