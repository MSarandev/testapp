<?php

namespace App\Http\Controllers;

use App\Http\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all companies
        $companies = Company::orderby('name', 'asc')->paginate(5);

        // load the view and parse the data
        return view('companies.index')
            ->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Load the create form
        return view('companies/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Called by the form

        // Validate
        $this->validate($request,[
                'name' => 'required',
                'email' => 'required',
                'website' => 'required',
                'image' => 'required|image|mimes:png|dimensions:min_width=100,min_height=100',
            ]);

        // Insert into the DB
        $company = new Company();

        // store the values in the object
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $company->logo = $request->file('image');


        // Save
        $company->save();

        // fetch the id
        $c_id = DB::table('companies')->where('name',
                            $company->name)->value('id');

        $imageName = $c_id . '.' .
            $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(
            base_path() . '/storage/app/public/', $imageName
        );

        // redirect
        return redirect('/companies')->with('success', 'Company added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // fetch the ID
        $company = Company::find($id);

        // return the view
        return view('companies.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // fetch by id
        $company = Company::find($id);

        // return the view
        return view('companies.edit')->with('company', $company);
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
        // Called by the form

        // Validate
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Insert into the DB
        $company = Company::Find($id);

        // store the values in the object
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $company->logo = $request->file('image');

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/storage/app/public');

        $image->move($destinationPath, $input['imagename']);

        // Save
        $company->save();

        // redirect
        return redirect('/companies')->with('success', 'Company details updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find the company
        $company = Company::find($id);

        // delete
        $company->delete();

        // redirect
        return redirect('/companies')->with('success', 'Company deleted');
    }
}
