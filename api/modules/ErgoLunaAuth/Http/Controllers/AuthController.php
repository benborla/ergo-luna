<?php

namespace Module\ErgoLunaAuth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Module\ErgoLunaKernel\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function authenticate(Request $request)
    {
        /** @var \Module\ErgoLunaKernel\Model\User $user */
        $user = User::where('email', $request->email)->first();

        return $user;

    }

}
