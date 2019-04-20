<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;
use DB;
use Session;

class ContactController extends Controller
{
	protected  $model;

	public function __construct()
	{
	   $this->model = new ContactModel();
     $this->middleware('auth');
     
     //$this->middleware('LanguageSwitcher');
        /*  Sessia */
      session(['key1' => 'value1','key2' => 'value2']);
    
     if(session()->has('key1') || session()->has('key2') || session()->has('key')){
         $a =  session()->get('key1');
       var_dump($a);
      }else{
         $a =  'No data in the session';
         var_dump($a);
      }
       /*  Sessia */

	}
    public function Addcontact()
    {
       return view('addcontact');

    }

    public function Allcontact()
    {   
        // $userData['data'] = $this->model::AllcontactModel(); // static
    
    	$userData = $this->model->AllcontactModel();
    	
    	return view('allcontact')->with("all_contacts",$userData);
    }

    public function InsertContact(Request $request)
    {
                                        // ESi  Arajin tarberakna
       $this->validate($request, [
           'name_am' =>  'required',
           'name_en' =>  'required',
           'name_ru' =>  'required',
           'email'   => 'required',
           'phone'   => 'required'
       ]);

       $data = array();
       $data['name_am']  = $request->name_am;
       $data['name_en']  = $request->name_en;
       $data['name_ru']  = $request->name_ru;
       $data['email']    = $request->email;
       $data['phone']    = $request->phone;

         //ContactModel::InsertContactModel($data); esi 1 tarberak  static dzevov
                     // 2-rd tarberak
         return $this->model->InsertContactModel($data);

    }

    public function DeleteContact($id)
    {
       $delete = $this->model->DeleteContactModel($id);
    //$delete = $this->model::find($id)->DeleteContactModel(); // sataic tarberak

       if($delete){
           //return redirect('all-contact')->with('status', 'Delete'.$id);
        return redirect('all-contact')->with('status', 'Item deleted successfully.'.$id);
       }
    }


    public function ShowContactView($id)
    {
        $data = $this->model->ShowContactModel($id);
        return view('show_data')->with("contacy_view",$data);
    }

    public function EditContactView($id)
    {
      //$data = ContactModel::find($id)->first();
      $data = $this->model->ShowContactModel($id);
      return view('edit_contact')->with("contact_view",$data);
    }

    public function EditContact(Request $request,$id)
    {
     $this->validate($request, [
           'name_am' =>  'required',
           'name_en' =>  'required',
           'name_ru' =>  'required',
           'email'   =>  'required',
           'phone'   =>  'required'
       ]);

       $data = array();
       $data['name_am']  = $request->name_am;
       $data['name_en']  = $request->name_en;
       $data['name_ru']  = $request->name_ru;
       $data['name']     = $request->name;
       $data['email']    = $request->email;
       $data['phone']    = $request->phone;

       return $this->model->EditContactModel($id,$data);
    }

}
