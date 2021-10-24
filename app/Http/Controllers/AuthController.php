<?php

namespace App\Http\Controllers;
use JWTAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
Use DB;

class AuthController extends Controller
{
    //
/**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
         $validateData = $request->validate([
         'ic' => 'required',
         'password' => 'required',
         
         ]);

        $credentials = request(['ic','password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Invalid credential!'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    public function myRoles()
    {
        return response()->json(['roles' => auth()->user()->roles]);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }
    
    public function register(Request $request){
           $request->validate([
                'email'=>'required|unique:users|max:255',
                'name'=>'required',
                'ic'=>'required|unique:users|max:16',
                'password'=>'required|min:6|confirmed',
                'roles'=>'required',
            

            ]);
            $data = array();
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['ic'] = $request->ic;
            $data['password'] = Hash::make($request->password);
            $data['roles'] = $request->roles;
            DB::table('users')->insert($data);

            return response()->json(['message' => 'Successfully registered']); 
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {        
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'name' => auth()->user()->name,
    
   
   
        ]);
    }
    
    public function getAuthenticatedUser()
    {
      try {
        if (! $user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
        }
    } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
        return response()->json(['token_expired'], $e->getStatusCode());
    } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
        return response()->json(['token_invalid'], $e->getStatusCode());
    } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
        return response()->json(['token_absent'], $e->getStatusCode());
    }

    $userRole = $user ->roles;
    return response()->json($userRole);
    }

}