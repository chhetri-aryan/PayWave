<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:employees,email',
        //     'phone' => 'required|string|max:15',
        //     'department' => 'required|string|max:255',
        //     'salary' => 'required|numeric',
        //     'hire_date' => 'nullable|date',
        // ]);

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->gender = $request -> gender;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->department = $request->department;
        $employee->salary = $request->salary;
        $employee->hire_date = $request->hire_date;

        $employee->save();  // Save employee data
       


        return redirect()->route('employees.index')->with('success', 'Employee added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id);  // Find the employee by ID
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);  // Find the employee by ID
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->gender = $request -> gender;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->department = $request->department;
        $employee->salary = $request->salary;
        $employee->hire_date = $request->hire_date;

        $employee->save();  // Save the employee data

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();  // Delete the employee

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
    }


    public function getGenderRatio() {
    $employee = new Employee();
    $maleCount = $employee->where('gender','male')->count();
    $femaleCount = $employee->where('gender','female')->count();
    $otherCount = $employee->where('gender','other')->count();


    return view('analytics.gender_ratio', compact('maleCount', 'femaleCount', 'otherCount'));
}


}
