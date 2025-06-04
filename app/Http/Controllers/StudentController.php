<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class StudentController extends Controller
{
    //
    function printrecord(Request $req)
    {
       if($req->fname == '' || $req->lname == '')
       {
        echo "Fields are empty";
       }
       else
       {
         
         $t = new contact();
         $t->Name = $req->fname; 
         $t->LastName = $req->lname; 
         $t->Email = $req->email; 
         $t->Message = $req->message;
         $t->save();
          
       }
    
    }
    public function fetchcontact()
    {
      $rec = contact::get();
      // echo $rec;
      return view('admin.fetch',compact('rec'));
    }
    public function deleterecord($userid)
    {
      $t = contact::find($userid);
      $t->delete();
      return redirect('/get');
    }
    public function editrecord($userid)
    {
      $t = contact::find($userid);
      $t->Name = 'ABC';
      $t->save();
      return redirect('/get');
    }
}
