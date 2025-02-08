<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        //Получение URIс помощью route()
        echo route('transaction.index') . "</br>";
        return 'transactions';
    }
    public function create(){ 
        return 'transactions create';
    }
    public function show($id){
        return 'transaction number' . $id;
    }
    public function store(Request $request){
        return 'transaction is created';
    }
}
