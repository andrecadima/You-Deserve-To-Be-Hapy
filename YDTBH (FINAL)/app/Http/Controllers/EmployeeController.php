<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Employee;
use DB;

class EmployeeController extends Controller
{

    public function thanksForRegistering(){
        return view("employees.thanksForRegistering");
    }
    
    public function thankYou(){
        return view("employees.ThankYou");
    }

    public function getEmployees() {
        return Employee::all();
    }

    public function getEmployee($id) {
        return Employee::find($id);
    }

    public function listEmployees() {
        return view("employees.list");
    }

    public function newEmployee(){
        return view("employees.new");
    }

    public function postEmployee(Request $request) {
        $result = ['result' => 'Registry Inserted Succesfully'];
        try {
            DB::beginTransaction();

            $user = User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            Employee::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'birthDate' => $request->birthDate,
                'city' => $request->city,
                'address' => $request->address,
                'photo' => $request->photo,
                'userId' => $user->id
            ]);

            DB::commit();
        } catch (Exception $e) {
            $result = ['result' => 'error'];
            DB::rollback();
        }

        return $result;
    }

    public function editEmployee($id) {
        return view("employees.edit", ["id" => $id]);
    }

    public function putEmployee(Request $request) {
        $result = ['result' => 'Registry Updated Succesfully'];
        try {
            DB::beginTransaction();
            $employee = Employee::where(["id" => $request->id])->first();
            $employee->firstName = $request->firstName;
            $employee->lastName = $request->lastName;
            $employee->birthDate = $request->birthDate;
            $employee->city = $request->city;
            $employee->address = $request->address;
            $employee->photo = $request->photo;

            $user = User::find($employee->userId);
            $user->name = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $employee->update();
            $user->update();
            DB::commit();
        } catch (Exception $e) {
            $result = ['result' => 'error'];
            DB::rollback();
        }
        return $result;
    }


    public function deleteEmployee($id) {
        $result = ['result' => 'ok'];
        try {
            DB::beginTransaction();
            $employee = Employee::find($id);
            $user = User::find($employee->userId);
            $employee->delete();
            $user->delete();
            DB::commit();
        } catch (Exception $e) {
            $result = ['result' => 'error'];
            DB::rollback();
        }

        return $result;
    }

    

    

    
}
