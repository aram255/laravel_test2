<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;
use DB;

class ContactController extends Controller
{
	protected  $model;

	public function __construct()
	{
	   $this->model = new ContactModel();
	}
    public function Addcontact()
    {
       return view('addcontact');
    }

    public function Allcontact()
    {   
        // $userData['data'] = $this->model::AllcontactModel(); // static
    	$userData['data'] = $this->model->AllcontactModel();
    	
    	return view('allcontact')->with("all_contacts",$userData);
    }

    public function InsertContact(Request $request)
    {
                                        // ESi  Arajin tarberakna
       $this->validate($request, [
           'name' =>  'required',
           'email' => 'required',
           'phone' => 'required'
       ]);

       $data = array();
       $data['name']  = $request->name;
       $data['email'] = $request->email;
       $data['phone'] = $request->phone;
        
         //ContactModel::InsertContactModel($data); esi 1 tarberak  static dzevov
                     // 2-rd tarberak
         return $this->model->InsertContactModel($data);

    	

    	// if($this->model->save())
    	// {
    	// 	$notification = array(
		   //      'message'=>'Contact Added',
		   //      'alert-type' => 'Success'
     //     	);
     //     	return Redirect()->back()->with($notification);
    	// }else{
    	// 	echo "Error";
    	// }
    }
}
