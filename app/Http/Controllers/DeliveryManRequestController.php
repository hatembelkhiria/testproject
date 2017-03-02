<?php

namespace App\Http\Controllers;
use App\User;
use App\DeliveryManRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;

class DeliveryManRequestController extends Controller
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


        $input=$request->only(['meansoftransport','cinPhoto','comment']);
            $user= auth()->user();

        $deliveryManRequest=new DeliveryManRequest();
        $deliveryManRequest->user_id=$user->id;
        $deliveryManRequest->meansoftransport=$input['meansoftransport'];
        $deliveryManRequest->cinPhoto=$input['cinPhoto'];
        $deliveryManRequest->cinPhoto=$input['comment'];
        $deliveryManRequest->validate=0;
        auth()->user()->addDeliveryManRequest($deliveryManRequest);
        return response()->json(['code'=>'200', 'result' => true]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function verifyDeliveryMan($id)
    {
        $verify = DB::table('deliverymanrequests')->where('validate', '=',1)->get()->count()==1;
        return response()->json(['code'=>'200', 'result' => $verify]);
    }
}
