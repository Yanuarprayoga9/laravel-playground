<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::with('department')->get();
        // dd($employees[0]->departement->name);
       return view("employee.index",["employees"=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();

        return view('employee.create',["departments"=>$departments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required',
            'address' => 'required',
            'department' => 'required|exists:departments,id',
        ]);
        try {
            $employee = new Employee();
            $employee->name = $request->name;
            $employee->address = $request->address;
            $employee->email = $request->email;
            $employee->phone_number = $request->phone;
            $employee->department_id = $request->department;
            $employee->save();

            return redirect()->route('employees.index')->with('success', 'Employee created successfully');
            
        } catch (\Exception $e) {
            return redirect()->route('employees.index')->with('error', 'Failed to create employee: ' . $e->getMessage());
        }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee,$id)
    {
        $departments = Department::all();
        // Ambil data employee berdasarkan parameter $employee yang sudah diambil dari route model binding
        $employee = Employee::with('department')->findOrFail($id);    
        return view('employee.edit', compact('employee', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee,string $id)
    {
        try {
            $employee = Employee::findOrFail($id);
            $employee->delete();
            
            return redirect()->route('employees.index')->with('success', 'Employee deleted successfully');
            
        } catch (\Exception $e) {
            return redirect()->route('employees.index')->with('error', 'Failed to delete employee: ' . $e->getMessage());
        }
    }
}
