<?php

namespace App\Http\Controllers;

use App\Models\Vendors;
use Illuminate\Http\Request;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor/auth/vendorProfile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor/auth/registerVendor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        if($request['password'] == $request['passwordCheck'])
        {

            request()->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'passwordCheck' => 'required'
            ]);


            $vendor = new Vendors();


            $vendor->name = $request['name'];
            $vendor->email = $request['email'];
            $vendor->password = bcrypt($request['password']);

            $vendor->save();

            return redirect('vendor/registered');
        }
        else return redirect('/error/wrong-password');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendors  $vendors
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Vendors $vendors, Request $vendor)
    {
        return view('Vendor.vendorSingle');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendors  $vendors
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendors $vendors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendors  $vendors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendors $vendors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendors  $vendors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendors $vendors)
    {
        //
    }

    public function registered()
    {
        return view('RequestPages/registered');
    }
}
