<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(): JsonResponse
    {
        return response()->json(Auth::user());
    }
}
