<?php

namespace App\Http\Controllers;

use App\Models\PlanStats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class PlanStatsController extends Controller
{
    public function store(Request $request): Response
    {
        PlanStats::create([
            'plan_id' => $request->plan_id,
            'type' => $request->type,
            'costs' => $request->costs,
            'income' => $request->income
        ]);

        return response()->json(['status' => 'OK 200']);
    }

    public function update(Request $request): Response
    {
        $transaction = DB::table('transactions')->where('name', $request->name)->select();

        $transaction->update(['plan_id' => $request->plan_id, 'type' => $request->type, 'costs' => $request->costs, 'income' => $request->income]);

        return response()->json(['status' => 'OK 200']);
    }

    public function delete(Request $request): Response
    {
        DB::table('transactions')->where('name', $request->name)->delete();

        return response()->json(['status' => 'OK 200']);
    }
}
