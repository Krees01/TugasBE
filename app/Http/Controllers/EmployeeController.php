<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:20',
            'age' => 'required|integer|min:21',
            'address' => 'required|string|min:10|max:40',
            'phone' => 'required|string|regex:/^08[0-9]{7,10}$/',
        ]);

        Employee::create($request->all());

        return redirect('/')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:20',
            'age' => 'required|integer|min:21',
            'address' => 'required|string|min:10|max:40',
            'phone' => 'required|string|regex:/^08[0-9]{7,10}$/',
        ]);

        $employee->update($request->all());

        return redirect('/')->with('success', 'Data karyawan berhasil diperbarui!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect('/')->with('success', 'Karyawan berhasil dihapus!');
    }
}
