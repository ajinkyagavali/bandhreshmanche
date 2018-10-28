<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;

use App\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;


class updateController extends Controller
{
      protected $redirectTo = '/index';

	 protected function validator(array $data)
    {

        return Validator::make($data, [
            'user_id' => 'string|max:255',
            'postgraduation' => 'string|max:255',
            'graduation' => 'string|max:255',
            'current_employer'=>'string|max:255',
            'occupation'=>'string|max:255',
        ]);
    }
    
     protected function create(Request $request)
    {
        $data = $request->all();
     // $userid = Auth::user()->id;
        return Education::create([
            'user_id' => $data['user_id'],
            'postgraduation' => $data['postgraduation'],
            'graduation' => $data['graduation'],
            'current_employer'=>$data['current_employer'],
            'occupation'=>$data['occupation'],
        ]);
    }
    public function upload (Request $req){

        If(Input::hasFile('file')){
            

            $file = Input::file('file');

            $destinationPath = public_path().'/assets/uploads/';
            $filename = $file->getClientOriginalName();

            $file->move($destinationPath, $filename);

            $full_path =  $destinationPath."".$filename;
            $userid = Auth::user()->id;

            $description=$req->input('description');

            $data = array('photo'=> "/public/assets/uploads/".$filename,"description"=>$description);
             DB::table('users')->where('id',$userid)->update($data);
             
              $users = DB::table('users')->where('id',$userid)->get();
              return view('pages.profile',['users'=>$users]);
        }   
    }

  

     public function update_matches($user_log_id){
     DB::table('user_log')->where('user_log_id','=',$user_log_id)->update(['flag' => 0]);

       $userid= Auth::user()->id;
       // $userlogs = DB::table('user_log')->where('accepted_id','=',$userid)->get();
        $userlogs = DB::table('users')
            ->leftJoin('user_log', 'users.id', '=', 'user_log.accepted_id')
            ->where('request_id','=',$userid)->get();
            
        //
        $sql = "select COUNT( accepted_id ) as countreqt FROM  user_log  inner join users where users.id=user_log.accepted_id and  request_id = $userid";
      $countreq = DB::select($sql);
      return view('pages.getrequest',['userlogs'=>$userlogs],['countreqs'=>$countreq]);
    
    }

    public function acceptPayment($user_id){
        DB::table('users')->where('id','=',$user_id)->update(['ispayment' => 1]);
        
        $users = DB::table('users')->get();
      return view('pages.customer',['users'=> $users]);

    }
    public function isaccepted($user_id){
      DB::table('users')->where('id','=',$user_id)->update(['isaccepted'=>1]);
        $users = DB::table('users')->get();
      return view('pages.customer',['users'=> $users]);
    }

    public function isdeleted($user_id,$isdeleted){
    if($isdeleted == 1){
           DB::table('users')->where('id','=',$user_id)->update(['isdeleted'=>1]);
            $users = DB::table('users')->get();
          }else{
              DB::table('users')->where('id','=',$user_id)->update(['isactive'=>0]);
            $users = DB::table('users')->get();
          }
      return view('pages.customer',['users'=> $users]);
    }

}
