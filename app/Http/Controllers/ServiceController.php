<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\PersonalServices;
use App\Models\SolicitedServices;
use App\Models\StatusServices;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::paginate(3);

        return view('servicio.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal = PersonalServices::all();
        $solicited =SolicitedServices::all();
        $status= StatusServices::all();
        return view('servicio.crear', compact('personal','solicited','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        request()->validate([
            'name_client'=>'required',
            'mobile_number_client'=>'required',
            'solicited_service_id'=>'required',
            'comment_client'=>'required',
        ]);

        $service = Services::create($request->all());

        return redirect()->route('service.index')->with('success','Record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $service)
    {
        $personal = PersonalServices::all();
        $solicited =SolicitedServices::all();
        $status= StatusServices::all();
        return view('servicio.editar', compact('service','personal','solicited','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $service)
    {
        request()->validate([
            'name_client'=>'required',
            'mobile_number_client'=>'required',
            'solicited_service_id'=>'required',
            'comment_client'=>'required',
        ]);

        $service->update($request->all());

        return redirect()->route('service.index')->with('success','Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $service)
    {
        $service->delete();
        return redirect()->route('service.index')->with('destroy','Record deleted successfully');
    }
}
