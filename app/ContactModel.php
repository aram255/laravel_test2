<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    public function InsertContactModel($data)
    {
       $insert = DB::table('contact')->insert($data);
       /*  Insert Id */
       //$id = DB::getPdo()->lastInsertId();;
       /*  Insert Id */
       if($insert)
       {
       	// $notification = array(
        //   'message'=>'Contact Added',
        //   'alert-type' => 'Success'
       	// );
       	  echo "Yes";
           return redirect()->to('all-contact')->with('status', 'Item Add successfully.');
       }else{
       	echo "Error";
       }
    }

    public function AllcontactModel()
    {
    	return $show = DB::table('contact')->get();
    }


    public function DeleteContactModel($id)
    {
      $delete = DB::table('contact')->where('id',$id)->delete();
      return redirect();
    }

    public function ShowContactModel($id)
    {
      $show = DB::table('contact')
      ->where('id',$id)
      ->first();

      return $show;
    }

    public function EditContactModel($id,$data)
    {
       $contact = DB::table('contact')
                  ->where('id',$id)
                  ->update($data);
       if($contact){
        return redirect()->to('all-contact')->with('status', 'Item Edit successfully.');
       }
    }
    
}
