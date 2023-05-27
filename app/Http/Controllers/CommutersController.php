<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Commuter;
use App\Http\Requests\CommuterRequest;

class CommutersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $commuters= Commuter::all();
        return view('commuters.index', ['commuters'=>$commuters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('commuters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CommuterRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CommuterRequest $request)
    {
        $commuter = new Commuter;
		$commuter->FirstName = $request->input('FirstName');
		$commuter->LastName = $request->input('LastName');
		$commuter->Address = $request->input('Address');
		$commuter->Age = $request->input('Age');
        $commuter->save();

        return to_route('commuters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $commuter = Commuter::findOrFail($id);
        return view('commuters.show',['commuter'=>$commuter]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $commuter = Commuter::findOrFail($id);
        return view('commuters.edit',['commuter'=>$commuter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CommuterRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CommuterRequest $request, $id)
    {
        $commuter = Commuter::findOrFail($id);
		$commuter->FirstName = $request->input('FirstName');
		$commuter->LastName = $request->input('LastName');
		$commuter->Address = $request->input('Address');
		$commuter->Age = $request->input('Age');
        $commuter->save();

        return to_route('commuters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $commuter = Commuter::findOrFail($id);
        $commuter->delete();

        return to_route('commuters.index');
    }
}
