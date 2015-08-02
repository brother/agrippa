<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Secret;
use Carbon\Carbon;
use Rhumsaa\Uuid\Uuid;

class SecretController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $secret = Secret::create(array(
            'secret'        => $request->input('secret'),
            'uuid4'         => Uuid::uuid4(),
            'expires_at'    => Carbon::now()->addMinutes(5),
            'expires_views' => 1
        ));

        return view('store', compact('secret'));
    }

    /**
     * Display the specified resource.
     *
     * @param  text  $uuid4
     * @return Response
     */
    public function show($uuid4)
    {
        $secret = Secret::where('uuid4', $uuid4)->first();
        return view('show', compact('secret'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
