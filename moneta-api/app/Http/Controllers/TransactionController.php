<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class TransactionController extends Controller
{
    public function store(Request $request): Response
    {
        Transaction::create([
            'plan_id' => $request->plan_id,
            'name' => $request->name,
            'type' => $request->type,
            'amount' => $request->amount,
            'category' => $request->category,
        ]);

        return response()->json(['status' => 'OK 200']);
    }

    public function update(Request $request): Response
    {
        $transaction = DB::table('transactions')->where('name', $request->name)->select();

        $transaction->update(['plan_id' => $request->plan_id, 'name' => $request->name, 'type' => $request->type, 'amount' => $request->amount, 'category' => $request->category]);

        return response()->json(['status' => 'OK 200']);
    }

    public function delete(Request $request): Response
    {
        DB::table('transactions')->where('name', $request->name)->delete();

        return response()->json(['status' => 'OK 200']);
    }
}
