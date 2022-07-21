<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'image' => ['required', 'image'], 
            'platform_id' => 'required', 
            'tags' => 'regex:/(\s*\,\s*)*$/',
        ]);

        $imagePath = request('image')->store('trades', 'public');

        Trade::create(array_merge($data, [
            'image' => $imagePath,
            'user_id' => auth()->user()->id,
        ]));

        return redirect('trade/create')->with('message', 'Trade created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function show(Trade $trade)
    {
        // $trades = DB::table('trades')
        // ->join('platforms', 'trades.platform_id', '=', 'platforms.id')
        // ->orderBy('trades.created_at', 'desc')
        // ->select(['trades.*', 'platforms.name'])
        // ->get();
        $trades = Trade::join('platforms', 'trades.platform_id', '=', 'platforms.id')
        ->select(['trades.*', 'platforms.name'])
        ->where('trades.user_id' , '=' , auth()->user()->id)
        ->get();

        return view('trades.show', compact('trade', 'trades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function edit(Trade $trade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trade $trade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trade $trade)
    {
        //
    }
}
