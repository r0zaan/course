<?php

namespace App\Http\Controllers\Company;

use App\Company;
use App\Http\Controllers\Controller;
use App\User;
use Dotenv\Validator;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('name','ASC')->get();
        return view('backend.company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('name','ASC')->get()->pluck('name','id');
        return view('backend.company.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $rules = [
            'name'=>'required',
            'address'=>'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return [
                'status'=>'fail',
                'errors'=>$validator->getMessageBag()->toArray()
            ];
        }
        Company::create($input);
        session()->flash('success', 'Company Created.');
        return [
            'status'=>'success',
            'message'=>' Company Created.',
            'return_url' => route('companies.index')
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $users = User::orderBy('name','ASC')->get()->pluck('name','id');
        return view('backend.company.edit', compact('company','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return array|\Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $input = $request->all();
        $rules = [
            'name'=>'required',
            'address'=>'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return [
                'status'=>'fail',
                'errors'=>$validator->getMessageBag()->toArray()
            ];
        }
        $company->update($input);
        session()->flash('success', 'Company Created.');
        return [
            'status'=>'success',
            'message'=>' Company Created.',
            'return_url' => route('companies.index')
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return array|\Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        session()->flash('success', 'Company Deleted.');
        return [
            'status'=>'success',
            'message'=>'Deleted.',
            'return_url' => route('subjects.index')
        ];
    }
}
