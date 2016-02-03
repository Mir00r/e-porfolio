<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Guzzle\Tests\Plugin\Redirect;

use App\User;
use App\project;
use App\publication;
use App\award;
use App\certification;
use App\testscore;
use App\experience;
use App\course;
use App\volunteering;
use App\profiledetails;
use App\about;

class UserController extends Controller
{

    public function search_user(Request $request){
        $alldata = User::orderBy('name');

        /*$alldata = DB::table('users')
            ->orderBy('name', 'desc')
            ->get();*/

        $name = $request->input('name');

        if (!empty($name)){
            $alldata->Where('name', 'LIKE', '%'.$name.'%' );
        }
       // $alldata = $alldata->paginate(10);
        /*return $alldata;*/
        $allname['user_list'] = DB::table('users')
                                ->orderBy('name', 'asc')
                                ->get();
        return view('search-result', $allname);
    }


    public function store(Request $request)
    {
        if($_FILES['user_img']['name'] != null)
        {
            $path= base_path().'/public/profile/dist/img/'.$_FILES['user_img']['name'];
            move_uploaded_file($_FILES['user_img']['tmp_name'],  $path);

            $user = Auth::user();
            $user_img = $_FILES['user_img']['name'];
            DB::table('users')
                ->where('id', $user->id)
                ->update(['avatar' => $user_img]);

            return redirect('/profile_page/index');
        }
    }


    public function display_user_profile(Request $request)
    {
        $user = $request->user();

        $about['aboute_me']=DB::select('select * from aboutme where user_id=?',[$user->id]);
        $project["project_list"] = DB::select('select * from projects where user_id = ?', [$user->id]);
        $publication['publication_list']=DB::select('select * from publications where user_id=?',[$user->id]);
        $awards['award_list']=DB::select('Select * from awards where user_id=?',[$user->id]);
        $certification['certi_list']=DB::select('select * from certifications where user_id=?',[$user->id]);
        $score['score_list']=DB::select('select * from score where user_id=?',[$user->id]);
        $experience['exp_list']=DB::select('select * from experiences where user_id=?',[$user->id]);
        $course['course_list']=DB::select('select * from courses where user_id=?',[$user->id]);
        $volunteering['volun_list']=DB::select('select * from volun where user_id=?',[$user->id]);

        return view( 'view-profile', $project, $publication);
    }

}
