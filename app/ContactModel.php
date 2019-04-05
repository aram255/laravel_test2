<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    public function InsertContactModel($data)
    {
       $insert = DB::table('contact')->insert($data);
       if($insert)
       {
       	// $notification = array(
        //   'message'=>'Contact Added',
        //   'alert-type' => 'Success'
       	// );
       	  echo "Yes";
       }else{
       	echo "Error";
       }
    }

    public function AllcontactModel()
    {
    	return $show = DB::table('contact')->get();
    }
}
