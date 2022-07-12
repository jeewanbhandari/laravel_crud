<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class FormController extends Controller
{
    function create()
    {
        return view('employee.create');
    }
    function store(Request $request)
    {
        // Form validation
        $request->validate
        (
        [
            'name'=>'required|regex:/^([a-zA-Z\s])$/',
            'email'=>'required|email|unique:employees',
            'phone' => 'required|unique:employees|min:10|max:10'

        ]
        );
        try{
            $od = $request -> all();
            array_shift($od);
            $employee = Employee::create($od);
            if($employee)
            {
                $request->session()->flash('success','Employee created sucessfully');
            }
            else
            {
                $request->session()->flash('error','Employee created failed');

            }
        }
        catch(exception $exception)
        {
            $request->session()->flash('error','Failed!!'. $exception->getMessage());
        }

       
        return redirect()->route('employee.index');
    }
    function index()
    {
        $data = Employee::all();
        // $data = Employee::where('phone','>',50)->orderby('name')->get();
        //$data = Employee::paginate(1);

        return view('employee.index',compact('data'));
    }

        
    function show($id)
    {
        $employee = Employee::find($id);
        return view('employee.show',compact('employee'));


    }
    function destroy(Request $request,$id)
    {
       try
       {
           $employee = Employee::find($id);
           if($employee->delete())
           {
              request()->session()->flash('success','Employee Deleted Successfully!!');
           }
           else
           {
            request()->session()->flash('error','Employee Deleted Failed');
           }

       }
       catch(Exception $exception)
       {
          request()->session()->flash('error','Error:'.$exception->getMessage());
       }
       return redirect()->route('employee.index');
    }
    function edit($id)
    {
       try
       {
           $employee = Employee::find($id);
           if(!$employee)
           {
              request()->session()->flash('error','Error:Invalid Request');
              return redirect()->route('empoyee.index');
           }
       }
       catch(Exception $exception)
       {
          request()->session()->flash('error','Error:'.$exception->getMessage());
       }
       return view('employee.edit',compact('employee'));
    }

    function update(Request $request,$id)
    {
       try
       {
           $employee = Employee::find($id);
           if(!$employee)
           {
              request()->session()->flash('error','Error:Invalid Request');
              return redirect()->route('empoyee.index');
           }
           if($employee->update($request->all()))
           {
            request()->session()->flash('success','Updated');
            
           }else
           {
            request()->session()->flash('error','Updated failed');
           }

         }
       catch(Exception $exception)
       {
          request()->session()->flash('error','Error:'.$exception->getMessage());
       }
       return redirect()->route('employee.index');
    }
}