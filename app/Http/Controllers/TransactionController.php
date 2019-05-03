<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function showAgainstEmployee($id){
        $transactions = \App\Employee::find($id)->transactions;
        // dd($tansactions);
        return view('one-to-many/indexTransactionAgainstEmployee',compact('transactions'));
        // return view('one-to-many/indexTransaction',compact('transactions'));

    }

    public function index() {
        $transactions = Transaction::all();
        return view('one-to-many/indexTransaction',compact('$transactions'));
    }

    public function create() {
        return view('one-to-many/createTransaction');
    }

    public function store(Request $request) {
        // dd($request->input());
        $rules = [
            // 'Transaction_name' => 'required|min:6|max:50',
            'transaction_amount' => 'required'
        ];

        // $messages = [
        //     'Transaction_name.min' => 'Cant afford to have a long name ?',
        //     'Transaction_name.max' => 'What is up with this huge ass name ?'
        //     // 'Transaction_salary.digits_between' => 'Just type what you get paid, no more, no less BITCH !'
        // ];
        Validator::make($request->input(),$rules)->validate();
        $transaction = Transaction::create($request->input());

        flash('Transaction created bitces !')->success();
        return redirect()->route('transaction.index')->with('transaction', $transaction);
    }

    public function edit($id) {
        $transaction = Transaction::findOrFail($id);
        return view('one-to-many/editTransaction',compact('transaction'));
    }

    public function update(Request $request, $id){
        // dd($request->input());
        $rules = [
            // 'Transaction_name' => 'required|min:6|max:50',
            'transaction_amount' => 'required'
        ];


        Validator::make($request->input(),$rules)->validate();
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->input());
        flash('Transaction stored bitces !')->success();

        return redirect()
        ->route('transaction.show',$Transaction)
        ->with('message','Transaction updated Bitch!');
    }

    public function destroy($id) {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()
        ->route('transaction.index')
        ->with('message', 'The Transaction has been deleted! bitch');
    }   
}
