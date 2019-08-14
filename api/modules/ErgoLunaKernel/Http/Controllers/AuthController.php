<?php

namespace Module\ErgoLunaKernel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Module\ErgoLunaKernel\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email, 'password' => $request->password
        ])) {
            $token = Auth()->user()->createToken(config('app.name'))->accessToken;
            return response()->json(['token' => $token], Response::HTTP_OK);
        } else {
            return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse|Module\ErgoLunaKernel\Models\User
     */
    public function getAuthUser()
    {
        return Auth::user();
    }
}
