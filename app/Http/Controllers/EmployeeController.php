<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return response()->json(
            [
                'message' => 'Data Employees',
                'employess' => $employees,
                'code' => 200,
            ]
        );
    }

    public function get($id)
    {

        $employees = Employee::find($id);
        if ($employees) {
            return response()->json($employees);
        } else {
            return response()->json([
                'message' => "Employee with id: $id not found",
            ]);
        }
    }

    public function store(Request $request)
    {
        $employees = Employee::create($request->all());
        return response()->json([
            'message' => 'Employee Created Successfully',
            'code' => 200,
        ]);
    }

    public function destroy($id)
    {
        $employees = Employee::find($id);
        if ($employees) {
            $employees->delete();
            return response()->json([
                'message' => 'Employee Deleted Successfully',
                'code' => 200,
            ]);
        } else {
            return response()->json([
                'message' => "Employee with id: $id does not exist",
            ]);
        }
    }

    public function update($id, Request $request)
    {
        $employees = Employee::findOrFail($id);
        $employees->update($request->all());

        return response()->json([
            'message' => 'Employee Updated Successfully',
            'code' => 200,
        ]);
    }
}
