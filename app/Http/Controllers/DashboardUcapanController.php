<?php

namespace App\Http\Controllers;

use App\Models\Saying;
use Illuminate\Http\Request;

class DashboardUcapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Saying::all();
        return view('dashboard.saying.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saying  $saying
     * @return \Illuminate\Http\Response
     */
    public function show(Saying $saying)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saying  $saying
     * @return \Illuminate\Http\Response
     */
    public function edit(Saying $saying)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saying  $saying
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saying $saying)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saying  $saying
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saying $saying)
    {
        //
    }
}
