<?php

namespace App\Http\Controllers;

use App\Http\Company;
use App\models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all companies
        $employees = Employee::orderby('firstName', 'asc')->paginate(3);

        // load the view and parse the data
        return view('employees.index')
            ->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // fetch all company names
        $companies = Company::all(['id', 'name']);

        // load the view with the array
        return view('employees/create', compact('companies', $companies));
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
            'firstName' => 'required',
            'lastName' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);


        // Insert into the DB
        $employee = new Employee();

        // store the values in the object
        $employee->firstName = $request->input('firstName');
        $employee->lastName = $request->input('lastName');
        $employee->company = $request->input('company');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');

        // TODO: Run an extra check if the company exists ??

        // Save
        $employee->save();


        // redirect
        return redirect('/employees')->with('success', 'Employee added');
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
        $employee = Employee::find($id);

        // return the view
        return view('employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // fetch the ID
        $employee = Employee::find($id);

        // fetch all company names
        $companies = Company::all(['id', 'name']);

        // return the view
        return view('employees.edit', compact('companies', $companies))->with('employee', $employee);
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
            'firstName' => 'required',
            'lastName' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);


        // Find via the id
        $employee = Employee::Find($id);

        // store the values in the object
        $employee->firstName = $request->input('firstName');
        $employee->lastName = $request->input('lastName');
        $employee->company = $request->input('company');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');

        // TODO: Run an extra check if the company exists ??

        // Save
        $employee->save();


        // redirect
        return redirect('/employees')->with('success', 'Employee details changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find the employee
        $employee = Employee::find($id);

        // delete
        $employee->delete();

        // redirect
        return redirect('/employees')->with('success', 'Employee deleted');
    }
}
