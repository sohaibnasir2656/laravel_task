<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeRequest;
use App\Models\Company;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::orderBy('id','desc')->paginate(10);
        return view('admin.employes.index',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('admin.employes.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeRequest $request)
    {
        $employe = new Employe();
        $employe->company_id = $request->input('company_id');
        $employe->first_name = $request->input('first_name');
        $employe->last_name = $request->input('last_name');
        $employe->email = $request->input('email');
        $employe->phone = $request->input('phone');
        $employe->save();

        return redirect()->route('employes.index')->with('success', 'Employe created successfully.');
     }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        return view('admin.employes.show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe)
    {
        $companies = Company::all();
        return view('admin.employes.edit', compact('employe', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employe)
    {
        $employe = Employe::find($request->employe_id);
        // dd($employe);
        $employe->company_id = $request->input('company_id');
        $employe->first_name = $request->input('first_name');
        $employe->last_name = $request->input('last_name');
        $employe->email = $request->input('email');
        $employe->phone = $request->input('phone');

        $employe->save();

        return redirect()->route('employes.index')->with('success', 'Employe updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employe = Employe::find($id);
        $employe->delete();
        return redirect()->route('employes.index')->with('success', ' deleted successfully.');
    }
}
