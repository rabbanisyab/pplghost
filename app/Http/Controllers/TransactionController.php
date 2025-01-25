<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
   // Show all transactions
   public function index()
   {
       $transactions = Transaction::all();
       return response()->json($transactions);
   }

   // Show a specific transaction
   public function show($id)
   {
       $transaction = Transaction::find($id);
       
       if (!$transaction) {
           return response()->json(['message' => 'Transaction not found'], 404);
       }
       
       return response()->json($transaction);
   }

   // Store a new transaction
   public function store(Request $request)
   {
       $validated = $request->validate([
           'user_id' => 'required|exists:users,id',
           'hosting_id' => 'required|exists:hostings,id',
           'amount' => 'required|numeric|min:0',
           'type' => 'required|in:payment,refund',
           'status' => 'required|in:pending,completed,failed',
       ]);

       $transaction = Transaction::create($validated);
       
       return response()->json($transaction, 201);
   }

   // Update an existing transaction
   public function update(Request $request, $id)
   {
       $transaction = Transaction::find($id);
       
       if (!$transaction) {
           return response()->json(['message' => 'Transaction not found'], 404);
       }

       $validated = $request->validate([
           'user_id' => 'required|exists:users,id',
           'hosting_id' => 'required|exists:hostings,id',
           'amount' => 'required|numeric|min:0',
           'type' => 'required|in:payment,refund',
           'status' => 'required|in:pending,completed,failed',
       ]);

       $transaction->update($validated);
       
       return response()->json($transaction);
   }

   // Delete a transaction
   public function destroy($id)
   {
       $transaction = Transaction::find($id);
       
       if (!$transaction) {
           return response()->json(['message' => 'Transaction not found'], 404);
       }

       $transaction->delete();
       
       return response()->json(['message' => 'Transaction deleted successfully']);
   }
}
