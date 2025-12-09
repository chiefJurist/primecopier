<?php

namespace App\Http\Controllers;

use App\Models\Token;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{
    //create action
    public function create(Request $request){
        $user = Auth::user();

        $blockchain = strtoupper($request->get('blockchain'));
        $token = $request->get('token');
        $cost = $request->get('cost');
        
        $addresses = [
            'BITCOIN' => 'bc1qhnrkek9qpwd8k6zgyrq5p0ukqnxyryz0a9fpen',
            'ETHEREUM' => '0xB82Ac258130b97AF15FDf512769a193Cbd502C97',
            'SOLANA' => 'EFySckjHjETQLpaLSA1oGhmkNxKexDmMM8PgjGa29RnY',
            'USDT(BEP20)' => '0xB82Ac258130b97AF15FDf512769a193Cbd502C97',
            'USDT(TRX10)' => 'TVhCk4WQs6ooABzgSwASRtvKKisaHwNtMg',
            'USDC(BEP20)' => '0xB82Ac258130b97AF15FDf512769a193Cbd502C97',
            'BNB(BEP20)' => '0xB82Ac258130b97AF15FDf512769a193Cbd502C97',
            'TRON(TRX)' => 'TVhCk4WQs6ooABzgSwASRtvKKisaHwNtMg',
        ];

        $depositAddress = $addresses[$blockchain] ?? null;

        return view('tokens.create', compact('blockchain','token','cost','depositAddress'));
    }

    //store action
    public function store(Request $request){
        $user = Auth::user();

        $validated = $request->validate([
            'blockchain'=> 'required|string|max:255',
            'token'=> 'required|numeric|min:0.1',
            'cost'=> 'required|numeric|min:5',
            'address'=>'required|string|max:255',
            'hash'=> 'required|string|max:255',
        ]);

        Token::create([
            'user_id' => $user->id,
            'blockchain'=> $validated['blockchain'],
            'token'=> $validated['token'],
            'cost'=> $validated['cost'],
            'address'=> $validated['address'],
            'hash'=> $validated['hash'],
        ]);

        Transaction::create([
            'user_id'=> $user->id,
            'type'=> 'Token Purchase',
            'blockchain'=> $validated['blockchain'],
            'amount' => $validated['cost'],
            'from'=> 'External Deposit',
            'to'=> $validated['address'],
            'hash'=> $validated['hash'],
        ]);

        return redirect()->route('trader.overview')->with('success', 'Deposit submitted successfully.');
    }

    //show action
    public function show($id) {
        $token = Token::findOrFail($id);
        return view('tokens.show', compact('token'));
    }
}
