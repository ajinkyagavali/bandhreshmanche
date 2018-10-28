<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class displaycontroller extends Controller
{
        public function get_personal(Request $req){
    	// DB::table('mstr_personal');
    	 $results = DB::select('select * from mstr_personal where personal_id = ?', [1]);
    	 return "success";
    	}
    	  public function get_horoscope(){
    	 DB::table('mstr_horoscope');
    	 return "success";
    	}
	    public function get_education(){
    	 DB::table('mstr_education');
    	 return "success";
    	}
    	    public function get_address(){
    	 DB::table('mstr_address');
    	 return "success";
    	}
    	    public function get_family(){
    	 DB::table('mstr_family');
    	 return "success";
    	}
    	    public function get_expecation(){
    	 DB::table('mstr_expectation');
    	 return "success";
    	}
    	  
}
