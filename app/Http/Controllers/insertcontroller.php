<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Auth\Guard;
use DB;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class insertcontroller extends Controller
{
  public function __construct(){
 //   $this->middleware('guest');
  }

//
     public function insert_personal(Request $req){
      // personal start
        $personal_id =uniqid();
        $login_id ='login_id';
      	$firstName =$req->input('fname');
     		$middleName= $req->input('mname');
     		$lastName = $req->input('lname');
     		$dob= $req->input('dob');
        
     		$height =$req->input('height');
     		$complexion= $req->input('complexion');
     		$subcast= $req->input('subcast');
     		$weight = $req->input('weight');
     		$physicaldisability=$req->input('physicaldisability');
        $gender=$req->input('gender');

    	$data_personal = array('personal_id'=>$personal_id ,'login_id'=>$login_id,'fname' => $firstName,'mname'=>$middleName,'lname'=>$lastName,'dob'=>$dob,'gender'=>$gender,'height'=>$height,'complexion'=>$complexion,'subcast'=>$subcast,'weight'=>$weight);
    	DB::table('mstr_personal')->insert($data_personal);
      //personal end

        //horoscope start
          $horoscope_id =uniqid();
          $birth_place=$req->input('birth_place');
          $birth_time=$req->input('birth_time');
          $mangal=$req->input('mangal');
          $rashi =$req->input('rashi');

      $data_horoscope = array('horoscope_id'=>$horoscope_id,'personal_id'=>$personal_id,'birth_place'=>$birth_place,'birth_time'=>$birth_time,'rashi' => $rashi,'mangal'=>$mangal);
      DB::table('mstr_horoscope')->insert($data_horoscope);
      // horoscope end
      //education start
       $education_id =uniqid();

        $education_area=$req->input('education_area');
        $education=$req->input('education');
        $occupation=$req->input('occupation');
        $income =$req->input('income');

        $data_education = array('education_id'=>$education_id,'personal_id'=>$personal_id,'education_area'=>$education_area,'education'=>$education,'occupation' => $occupation,'income'=>$income);
        DB::table('mstr_education')->insert($data_education);
      //education end
        //address strart
         $address_id =uniqid();
          $address=$req->input('address');
          $city=$req->input('city');
          $state=$req->input('state');
          $country =$req->input('country');
          $email =$req->input('email');
          $adhar =$req->input('adhar');
        $data_address = array('address_id'=>$address_id,'personal_id'=>$personal_id,'address'=>$address,'city'=>$city,'state' => $state,'country'=>$country,'email'=>$email,'adhar'=>$adhar);
        DB::table('mstr_address')->insert($data_address);
        //address end
       // family start
         $family_id =uniqid();
          $father=$req->input('father');
          $mother=$req->input('mother');
          $brother=$req->input('brother');
          $sister =$req->input('sister');
       
        $data_family = array('family_id'=>$family_id,'personal_id'=>$personal_id,'father'=>$father,'mother'=>$mother,'brother' => $brother,'sister'=>$sister);
        DB::table('mstr_family')->insert($data_family);
        //family end
        //expection start
          $expectation_id =uniqid();
          $mangal=$req->input('mangal');
          $expected_caste=$req->input('expected_caste');
          $expected_height=$req->input('expected_height');
       
        $data = array('expectation_id'=>$expectation_id,'personal_id'=>$personal_id,'mangal'=>$mangal);
        DB::table('mstr_expectation')->insert($data);
        //espection end

    return view('pages.enroll');
    }
    public function insert_horoscope(Request $req){
          $horoscope_id =uniqid();
          $personal_id = "12";
          $birth_place=$req->input('birth_place');
          $birth_time=$req->input('birth_time');
          $mangal=$req->input('mangal');
	      $rashi =$req->input('rashi');

    	$data = array('horoscope_id'=>$horoscope_id,'personal_id'=>$personal_id,'birth_place'=>$birth_place,'birth_time'=>$birth_time,'rashi' => $rashi,'mangal'=>$mangal);
    	DB::table('mstr_horoscope')->insert($data);
     return view('pages.enroll');

    }

    public function insert_education(Request $req){
     
        $lastcollegename =$req->input('lastcollegename');
        $postgraduation=$req->input('postgraduation');
        $graduation=$req->input('graduation');
        $current_employer=$req->input('current_employer');
        $occupation=$req->input('occupation');
        $employerin =$req->input('employerin');
        $income = $req->input('income');
         $userid = Auth::user()->id;
           $data = array('lastcollegename'=>$lastcollegename,'postgraduation'=>$postgraduation,'graduation'=>$graduation,'current_employer'=>$current_employer,'occupation'=>$occupation,'employerin'=>$employerin,'income'=>$income);
        DB::table('users')->where('id',$userid)->update($data);
        
         $users = DB::table('users')->where('id',$userid)->get();
         return view('pages.education_details',['users'=>$users]);
    }

    public function update_family(Request $req){
        $fatheroccupation=$req->input('fatheroccupation');
        $motheroccupation=$req->input('motheroccupation');
        $parentcontact =$req->input('parentcontact');
        $familytype=$req->input('familytype');
        $familyvalue=$req->input('familyvalue');
        $familystatus=$req->input('familystatus');
        $aboutmyfamily=$req->input('aboutmyfamily');

        $father=$req->input('father');
        $mother=$req->input('mother');
        $sister=$req->input('sister');
        $brother=$req->input('brother');
        $userid = Auth::user()->id;

           $data = array('father'=>$father,'mother'=>$mother,'sister'=>$sister,'brother'=>$brother,
            'fatheroccupation'=>$fatheroccupation,'motheroccupation'=>$motheroccupation,'parentcontact'=>$parentcontact,
            'familytype'=>$familytype,'familyvalue'=>$familyvalue,'familystatus'=>$familystatus,
            'aboutmyfamily'=>$aboutmyfamily);
       DB::table('users')->where('id',$userid)->update($data);

       $users = DB::table('users')->where('id',$userid)->get();    
          return view('pages.family_details',['users'=>$users]);
    }

    public function update_horoscope(Request $req){
       $rashi=$req->input('rashi');
        $birth_place=$req->input('birth_place');
        $birth_date =$req->input('birth_date');
        $birth_time=$req->input('birth_time');
         $userid = Auth::user()->id;
           $data = array('rashi'=>$rashi,'birth_place'=>$birth_place,'birth_date'=>$birth_date,'birth_time'=>$birth_time);
        DB::table('users')->where('id',$userid)->update($data);
      $users = DB::table('users')->where('id',$userid)->get();
          return view('pages.horoscope_details',['users'=>$users]);
    }
    public function update_hobbies(Request $req){
        $hobbies=$req->input('hobbies');
         $userid = Auth::user()->id;
           $data = array('hobbies'=>$hobbies);
        DB::table('users')->where('id',$userid)->update($data);
     $users = DB::table('users')->where('id',$userid)->get();
        return view('pages.hobbies_details',['users'=>$users]);
    }
        public function contactus(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $subject=$req->input('subject');
        $message =$req->input('message');

         $data = array('name' => $name,'email'=>$email,'subject'=>$subject,'message'=>$message );
        DB::table('contactus')->insert($data);
        return view('pages.index');
    }
    public function insert_address(Request $req){
          $address_id =uniqid();
          $personal_id = "12";
          $address=$req->input('address');
          $city=$req->input('city');
          $state=$req->input('state');
          $country =$req->input('country');
          $email =$req->input('email');
          $adhar =$req->input('adhar');
        $data = array('address_id'=>$address_id,'personal_id'=>$personal_id,'address'=>$address,'city'=>$city,'state' => $state,'country'=>$country,'email'=>$email,'adhar'=>$adhar);
        DB::table('mstr_address')->insert($data);
     return view('pages.enroll');
    }
    public function insert_family(Request $req){
          $family_id =uniqid();
          $personal_id = "12";
          $father=$req->input('father');
          $mother=$req->input('mother');
          $brother=$req->input('brother');
          $sister =$req->input('sister');
       
        $data = array('family_id'=>$family_id,'personal_id'=>$personal_id,'father'=>$father,'mother'=>$mother,'brother' => $brother,'sister'=>$sister);
        DB::table('mstr_family')->insert($data);
       return view('pages.enroll');
    }
    public function insert_expectation(Request $req){
        $expectation_id =uniqid();
          $personal_id = "12";
          $mangal=$req->input('mangal');
          $expected_caste=$req->input('expected_caste');
          $expected_height=$req->input('expected_height');
       
        $data = array('expectation_id'=>$expectation_id,'personal_id'=>$personal_id,'mangal'=>$mangal);
        DB::table('mstr_expectation')->insert($data);
       return view('pages.enroll');
    }
 public function insert_matches($id,Request $req){
      $user_log_id =uniqid();
      $userid = Auth::user()->id;
      $data = Array('user_log_id'=>$user_log_id,'request_id'=>$userid,'accepted_id'=>$id,'flag'=>'1','created_at'=>new \dateTime,'updated_at'=>new \dateTime);
     $record = DB::table('user_log')->where('request_id','=',$userid)->where('accepted_id','=',$id)->first();

      $gender = Auth::user()->gender;
            $subcaste =Auth::User()->subcaste;
            $userid = Auth::user()->id;
           // if('kunbi' == $subcaste || 'kunbi-marath'){
               $users = DB::table('users')->where('gender', '!=', $gender)->where('subcaste','=',$subcaste)->get();
                $userlogs = DB::table('user_log')->where('request_id','=',$userid)->get();
    if($record === null){
      DB::table('user_log')->insert($data);
     
        return view('pages.matches',['users'=> $users,'userlogs'=>$userlogs]);
    }  
    return view('pages.matches',['users'=> $users,'userlogs'=>$userlogs]);
  
    }
    public function insertExpectation(Request $req){

 $expectation=$req->input('expectation');
         $userid = Auth::user()->id;
           $data = array('expectation'=>$expectation);
           DB::table('users')->where('id',$userid)->update($data);
   
           $users = DB::table('users')->where('id',$userid)->get();
          return view('pages.expectation_details',['users'=>$users]);
      
    }
     public function index_photo_upload (Request $req){

        If(Input::hasFile('file')){
            

            $file = Input::file('file');

            $destinationPath = public_path().'/assets/Index_image_upload/';
            $filename = $file->getClientOriginalName();

            $file->move($destinationPath, $filename);

            $full_path =  $destinationPath."".$filename;
            $userid = Auth::user()->id;

           

            $data = array('path'=> "/public/assets/Index_image_upload/".$filename);
            DB::table('Image_tbl')->insert($data);
             
              $users = DB::table('users')->where('id',$userid)->get();

               $slider_url= DB::table('Image_tbl')->get();

              return view('pages.adminpage',['slider_urls'=>$slider_url]);



        }   
    }
}
