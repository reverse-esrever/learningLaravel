<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessTransactionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        return 'transaction' . $id . 'is process';
    }
}
