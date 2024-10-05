<?php

namespace App\Http\Controllers;

use App\Models\usermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class usercontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

     function form()
    {
        return view('create');

    }



   public function store(Request $req)
    {


        // $req->validate([
        //     'name' => 'required|string|min:5',
        //     'email' => 'required|email'
        //      // Validate interests as an array
        // ]);


            $data=new usermodel();
            //first name in table second name in input field
            $data->name=$req->input('txtname');
            $data->email=$req->input('txtemail');

    // //save image
        if($req->hasFile('image'))
        {
            $image=$req->file('image');
            $extension=$image->getClientOriginalExtension();
            $image_name=time().".". $extension;
            $image->move('storage/image',$image_name);
            $data->image=$image_name;
            $data->save();
           
        }

    $data->phone=$req->input('phone');
   
    $data->birth=$req->input('date');
    
   $data->gender=$req->input('gender');
    //check box send data

    $checkboxdata=$req->input('skill');
    $data->skill=implode(',',$checkboxdata);

    

    $data->country=$req->input('country');
    $data->city=$req->input('city');
    $data->save();
    return back()->with('success', 'Registration successfully!');
    return back()->with('error', 'Registration failed.');
    }


    public function show()
    {
        //$tabledata=usermodel::all();

        //using pagination
        $tabledata=usermodel::paginate(5);
        return view('show',compact('tabledata'));
    }

    public function delete($id)
    {
            usermodel::destroy($id);
            return back();
            
    }

    public function edit($id)
    {
       $editdata= usermodel::find($id);
       return view('Update',compact('editdata'));
    }


    //update data into database

    public function update_data( Request $req,$id)
    {
        $updatedata=usermodel::find($id);

        $updatedata->name=$req->input('txtname');
        $updatedata->email=$req->input('txtemail');

// //save image
    if($req->hasFile('image'))
    {
        $image=$req->file('image');
        $extension=$image->getClientOriginalExtension();
        $image_name=time().".". $extension;
        $image->move('storage/image',$image_name);
        $updatedata->image=$image_name;
        $updatedata->save();
       
    }
        $updatedata->phone=$req->input('phone');
        $updatedata->birth=$req->input('date');
        $updatedata->gender=$req->input('gender');
            //check box send data
     $checkboxdata=$req->input('skill');
     $updatedata->skill=implode(',',$checkboxdata);
    $updatedata->country=$req->input('country');
     $updatedata->city=$req->input('city');
     $updatedata->save();
          return redirect('/show');
     }
    
}
