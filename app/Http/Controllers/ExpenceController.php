<?php

namespace App\Http\Controllers;

use App\Models\expence;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ExpenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = $this->getdata()['cat'];
        $paymths = $this->getdata()['paymth'];
        return view('addexpense', ['cats'=>$cats,'paymths'=>$paymths]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = $this->getdata()['cat'];
        $paymth = $this->getdata()['paymth'];
        $check = $this->validate($request,[
            "description" => ["required, min:5"],
            "amount" => ['required, min:1'],
            "category" => ['required', Rule::in($cat)],
            "payment_method" => ['required', Rule::in($paymth)]
        ]);
        $add = new expence();
        $add->description = $request->description;
        $add->date = date("d-M-Y");
        $add->description = $request->amount;
        $add->description = $request->category;
        $add->description = auth()->user()->id;
        $add->description = $request->payment_method;
        $add->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function show(expence $expence)
    {
        return view('dashboard', ['data'=>$expence->paginate(5)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function edit(expence $expence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, expence $expence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\expence  $expence
     * @return \Illuminate\Http\Response
     */
    public function destroy(expence $expence)
    {
        //
    }
    public function getdata()
    {
        return [
        "cat" => ['food','travel','lend','home','thing'],
        "paymth" => ['cash', 'phonepay', 'gpay']
        ];
    }
}
