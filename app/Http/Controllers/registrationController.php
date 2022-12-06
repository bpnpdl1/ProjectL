<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class registrationController extends Controller
{
   
    function register(){
        return view('components\register');
    }
    function store(Request $request){
        $request->validate(
            [
            'name'=>'required',
            'email'=> 'required|email',
            'password'=>'required',
            'contact'=>'required',
            'confirmpassword'=>'required|same:password'
            ]
            );

            $employee=new Employee;
            $employee->name=$request['name'];
            $employee->email=$request['email'];
            $employee->contact=$request['contact'];
            $employee->password=md5($request['password']);
            $employee->save();

        echo "<pre>";
        echo "Data is inserted Succesfully!!";
        print_r($request->all());
        echo "</pre>";

    }
    public function view(){
        $employee=Employee::all();
        $data=compact('employee');
        return view('components\data')->with($data);

}
public function delete($id){
 $employee=Employee::find($id);
$employee->delete();

 return redirect()->back();

 
}
public function edit($id){
 $employee=Employee::find($id);
 if(is_null($employee)){
    //not founded
    echo "Data is not Found";
 }
 else{
    // found
    $data=compact('employee');
    return view('components/edit')->with($data);
    
 }

}
public function editstore(Request $data){
$info=$data->toArray();
$employee=Employee::find($info['id']);
$employee->name=$info['name'];
$employee->email=$info['email'];
$employee->contact=$info['contact'];
$employee->save();
$success="Data is Successfully Edited";
$msg=compact('success');
return redirect()->back()->with($msg);

}
}