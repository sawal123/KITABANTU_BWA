<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Fundraiser;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function apply_fundraiser(){
        $user = Auth::user();

        DB::transaction(function () use ($user){
            $validated['user_id'] = $user->id;
            $validated['is_active'] = false;

            Fundraiser::create($validated);
        });
        return redirect()->route('admin.fundraiser.index');
    }
    public function my_withdrawals(){

    }
    public function my_withdrawals_details(){

    }
}
