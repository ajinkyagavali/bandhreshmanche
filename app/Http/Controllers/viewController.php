<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Auth\Guard;
use DB;
use Auth;
use Illuminate\Http\Request;

class viewController extends Controller
{
   

    public  function display(Request $req){
      DB::update('update counter set counter = counter+1');
     $counter = DB::select('select * from counter');
  $slider_url= DB::select('select * from Image_tbl');
    	return view('pages.index',['slider_urls'=>$slider_url, 'counters'=>$counter]);
    }

    public function aboutus(Request $req){
    	return view('pages.aboutus');
    }
    
    public function profile(Request $req){
       if (Auth::check())
        {
           $userid = Auth::user()->id;
            $users = DB::table('users')->where('id',$userid)->get();
         
    	return view('pages.profile',['users'=>$users]);
    }else{
      return view('auth.login');
    }
    }
 public function profileid($id,Request $req){
       if (Auth::check())
        {
          // $userid = Auth::user()->id;
            $users = DB::table('users')->where('id',$id)->get();
         
      return view('pages.profile',['users'=>$users]);
    }else{
      return view('auth.login');
    }
    }
     public function education_details(Request $req){
       if (Auth::check())
        {
           $userid = Auth::user()->id;
            $users = DB::table('users')->where('id',$userid)->get();
             return view('pages.education_details',['users'=>$users]);
         }else{
      return view('auth.register');
    }
       
    }
      public function family_details(Request $req){
     if(Auth::check()){
           $userid = Auth::user()->id;
           $users = DB::table('users')->where('id',$userid)->get();    
          return view('pages.family_details',['users'=>$users]);
       }else{
      return view('auth.register');
    }
    }
      public function hobbies_details(Request $req){
     if(Auth::check()){
        $userid = Auth::user()->id;
        $users = DB::table('users')->where('id',$userid)->get();
        return view('pages.hobbies_details',['users'=>$users]);
        }else{
      return view('auth.register');
    }
    }
      public function contact_details(Request $req){
     if(Auth::check()){    $userid = Auth::user()->id;
            $users = DB::table('users')->where('id',$userid)->get();
        return view('pages.contact_details',['users'=>$users]);
        }else{
      return view('auth.register');
    }
    }
      public function horoscope_details(Request $req){
     if(Auth::check()){
         $userid = Auth::user()->id;
            $users = DB::table('users')->where('id',$userid)->get();
          return view('pages.horoscope_details',['users'=>$users]);
          }else{
      return view('auth.register');
    }
    }
    ///expectation_details
       public function expectation_details(Request $req){
     if(Auth::check()){
         $userid = Auth::user()->id;
           $users = DB::table('users')->where('id',$userid)->get();
          return view('pages.expectation_details',['users'=>$users]);
          }else{
      return view('auth.register');
    }
    }
    public function matches(){
      if (Auth::check())
        {
            $gender = Auth::user()->gender;
            $subcaste =Auth::User()->subcaste;
            $userid = Auth::user()->id;
           // if('kunbi' == $subcaste || 'kunbi-marath'){
               $users = DB::table('users')->where('gender', '!=', $gender)->where('subcaste','=',$subcaste)->get();
                $userlogs = DB::table('user_log')->where('request_id','=',$userid)->get();
           /// }else{
             //  $users = DB::table('users')->where('gender', '!=', $gender)->where('maratha','=',$subcaste)->orWhere('maratha96','=',$subcaste)->get();
            //}
    	return view('pages.matches',['users'=> $users,'userlogs'=>$userlogs]);
      }else{
      return view('auth.login');
    }
    }
   
    public function contactus(){
    	return view('pages.contactus');
    }
     public function login(){
    	return view('pages.login');
    }
    public function help()
    {
      return view('pages.help');
    }

    public function offers(){
      return view('pages.offers');
    }

    public function customer(){
     
        $users = DB::table('users')->get();
      return view('pages.customer',['users'=> $users]);
    }
    public function getrequest(){
       if(Auth::check()){
       $userid= Auth::user()->id;
       // $userlogs = DB::table('user_log')->where('accepted_id','=',$userid)->get();
        /////////////////////////
        $userlogs = DB::table('users')
            ->leftJoin('user_log', 'users.id', '=', 'user_log.request_id')
            ->where('accepted_id','=',$userid)->get();
            
       //////////////////////////////
            
            $sql = "select COUNT( accepted_id ) as countreqt FROM  user_log  inner join users where users.id=user_log.request_id and  accepted_id = $userid";
$countreq = DB::select($sql);
      return view('pages.getrequest',['userlogs'=>$userlogs],['countreqs'=>$countreq]);
    }else{
      return view('auth.login');
    }
    }
    public function getnotificationcount(){

      if(Auth::check()){
       $userid= Auth::user()->id;
        $userlogs = DB::table('users')
            ->leftJoin('user_log', 'users.id', '=', 'user_log.request_id')
            ->where('accepted_id','=',$userid)->get();
       
        $countreq = DB::table('user_log')
            ->where('request_id','=','24')
                        
             ->count();
      

    return view('pages.getrequest',['userlogs'=>$userlogs],['countreqs'=>$countreq]);
    }else{
      return view('auth.login');
    }
    }

    public function admin_page(Request $req){
       if (Auth::check())
        {
           $userid = Auth::user()->id;
            $users = DB::table('users')->where('id',$userid)->get();
         $slider_urls= DB::table('Image_tbl')->get();
         
   

         return view('pages.adminpage',[ 'slider_urls'=>$slider_urls]);
    }
        }
    
}

