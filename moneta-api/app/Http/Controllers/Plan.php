<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class Plan extends Controller
{
    public function store(Request $request): Response
    {
        \App\Models\Plan::create([
            'name' => $request->name,
            'costs' => $request->costs,
            'income' => $request->income,
            'budget' => $request->budget,
        ]);

        return response()->json(['status' => 'OK 200']);
    }

    public function update(Request $request): Response
    {
        $plan = DB::table('plans')->where('name', $request->name)->select();

        $plan->update(['costs' => $request->costs, 'income' => $request->income, 'budget' => $request->budget]);

        return response()->json(['status' => 'OK 200']);
    }

    public function delete(Request $request): Response
    {
        DB::table('plans')->where('name', $request->name)->delete();

        return response()->json(['status' => 'OK 200']);
    }
}
