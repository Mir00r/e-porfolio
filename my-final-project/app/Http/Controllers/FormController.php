<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
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
use Illuminate\Support\Facades\DB;
use Input;


class FormController extends Controller
{
    // Project
    public function project(Request $request){

        //get logged in user data;
        $user = $request->user();
        //$alldata= project::all();
        //delete a specific row;
        if($request->delete){
            DB::delete('delete from projects where id = ?',[$request->delete]);
        }
        $data["project_list"] = DB::select('select * from projects where user_id = ?', [$user->id]);
//        echo "<pre>";
//        print_r($project_list);
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('project-test',$data, $profiledata);
        //return view('project-test',compact('alldata'));
    }

    public function addproject(Request $request){

        $user = $request->user();
        $data['user_id'] = $user->id;
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('/form/add-project',$data, $profiledata);
    }


    public function pstore(Request $request){

        $input=new project;
        $input->user_id= $request->user_id;
        $input->title= $request->title;
        $input->supervisor= $request->supervisor;
        $input->url= $request->url;
        $input->pmember= $request->member;
        $input->date= $request->date;
        $input->description= $request->description;
        $input->save();
        return redirect('project-test');

    }


    // Publication
    public function publication(Request $request){

        if ($request->delete) {
            DB::delete('delete from publications where id = ?',[$request->delete]);
        }
        //$alldata=publication::all();
        $user=$request->user();
        $data['publication_list']=DB::select('select * from publications where user_id=?',[$user->id]);
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('publication', $data, $profiledata);

        if ($request->delete) {
            DB::delete('delete from publications where id = ?',[$request->delete]);
        }
    }

    public function addpublication(Request $request){

        $user=$request->user();
        $data['user_id']=$user->id;
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('/form/add-publication',$data, $profiledata);
    }

    public function publicationstore(Request $request){

        $input= new publication;
        $input->user_id=$request->user_id;
        $input->title= $request->title;
        $input->publisher= $request->publisher;
        $input->url= $request->url;
        $input->auther= $request->auther;
        $input->date= $request->date;
        $input->description= $request->description;

        $input->save();
        return redirect('publication');


    }


    // Achievement and Awards
    public function awards(Request $request){

        if($request->delete){

            DB::delete('delete from awards where id=?',[$request->delete]);
        }
        //$alldata=award::all();
        $user=$request->user();
        $data['award_list']=DB::select('Select * from awards where user_id=?',[$user->id]);
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('awards', $data, $profiledata);
    }

    public function addawards(Request $request){

        $user=$request->user();
        $data['user_id']=$user->id;
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('/form/add-award',$data, $profiledata);
    }

    public function awardstore(Request $request){


        $input= new award;
        $input->user_id=$request->user_id;
        $input->title= $request->title;
        $input->organization= $request->organization;
        $input->issuar= $request->issuar;
        $input->description= $request->description;
        $input->save();

        return redirect('awards');

    }



    // Certifications
    public function certification(Request $request){

        if($request->delete){
            DB::delete('delete from certifications where id=?',[$request->delete]);
        }
        //$alldata= certification::all();
        $user=$request->user();
        $data['certi_list']=DB::select('select * from certifications where user_id=?',[$user->id]);
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('certification',$data, $profiledata);
    }

    public function addcertification(Request $request){

        $user=$request->user();

        $data['user_id']=$user->id;
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('/form/add-certification',$data, $profiledata);
    }

    public function certificationstore(Request $request){
        $input= new certification;
        $input->user_id=$request->user_id;
        $input->name= $request->name;
        $input->authority=$request->authority;
        $input->license=$request->license;
        $input->url=$request->url;
        $input->date=$request->date;
        $input->save();

        return redirect('certification');

    }


    // Competitive Coding
    public function coding(){

        return view('/form/add-coding');
    }


    // Test Score
    public function scores(Request $request){

        if($request->delete){
            DB::delete('delete from score where id=?',[$request->delete]);
        }

        //$alldata= testscore::all();
        $user=$request->user();
        $data['score_list']=DB::select('select * from score where user_id=?',[$user->id]);
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('scores',$data, $profiledata);
    }

    public function addscore(Request $request){
        $user=$request->user();
        $data['user_id']=$user->id;
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('/form/add-score',$data, $profiledata);
    }

    public function scorestore(Request $request){

        $input= new testscore;
        $input->user_id=$request->user_id;
        $input->name= $request->name;
        $input->insname= $request->insname;
        $input->score= $request->score;
        $input->date= $request->date;
        $input->description= $request->description;
        $input->save();

        return redirect('scores');

    }


    // Article and Blog
    public function blog(){

        return view('/Blog/article');
    }


    // Experience
    public function experience(Request $request){

        if ($request->delete) {
            DB::delete('delete from experiences where id=?',[$request->delete]);
        }

        //$alldata= experience::all();
        $user=$request->user();
        $data['exp_list']=DB::select('select * from experiences where user_id=?',[$user->id]);
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('experience', $data, $profiledata);
    }

    public function addexperience(Request $request){
        $user=$request->user();
        $data['user_id']=$user->id;
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('/form/add-experience',$data, $profiledata);
    }

    public function experiencestore(Request $request){

        $input= new experience;
        $input->user_id=$request->user_id;
        $input->name=$request->name;
        $input->role=$request->role;
        $input->address=$request->address;
        $input->duration=$request->duration;
        $input->description=$request->description;
        $input->save();

        return redirect('experience');
    }



    // Courses
    public function courses(Request $request){

        if($request->delete){
            DB::delete('delete from courses where id=?',[$request->delete]);
        }

        //$alldata= course::all();
        $user=$request->user();
        $data['course_list']=DB::select('select * from courses where user_id=?',[$user->id]);
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('courses', $data, $profiledata);
    }

    public function addcourse(Request $request){

        $user=$request->user();
        $data['user_id']=$user->id;
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('/form/add-courses',$data, $profiledata);
    }

    public function courseStore(Request $request){

        $input= new course;
        $input->user_id=$request->user_id;
        $input->title= $request->title;
        $input->code=$request->code;
        $input->associated= $request->associated;
        $input->save();

        return redirect('courses');


    }


    // Volunteering
    public function volunteering(Request $request){

        if($request->delete){
            DB::delete('delete from volun where id=?',[$request->delete]);
        }

        $user=$request->user();
        $data['volun_list']=DB::select('select * from volun where user_id=?',[$user->id]);
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('volunteering',$data, $profiledata);
    }

    public function addvolun(Request $request){
        $user=$request->user();
        $data['user_id']=$user->id;
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('/form/add-volun-expe',$data, $profiledata);

    }

    public function volunstore(Request $request){

        $input= new volunteering;
        $input->user_id=$request->user_id;
        $input->name=$request->name;
        $input->role=$request->role;
        $input->reason=$request->reason;
        $input->date=$request->date;
        $input->description=$request->description;
        $input->save();

        return redirect('volunteering');

    }

    // Profile info
    public function showprofile(Request $request){

        $user=$request->user();
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);
       /* $data['aboute_me']=DB::select('select * from aboutme where user_id=?',[$user->id]);*/

        /*return view('master',$profiledata, $data);*/
        return view('master',$profiledata);
    }

    public function editprofile(Request $request){

        $user=$request->user();
        $data['user_id']=$user->id;
        return view('editprofile',$data);
    }


    public function storeprofile(Request $request){

        $input= new profiledetails;
        $input->user_id=$request->user_id;
        $input->university=$request->university;
        $input->lives=$request->lives;
        $input->interested=$request->interested;
        $input->save();

        return redirect('/profile_page/index');
    }


    // About me
    public function aboutme(){
        return view('aboutme');
    }


    public function showaboute(Request $request){
        $user=$request->user();
        $data['aboute_me']=DB::select('select * from aboutme where user_id=?',[$user->id]);

        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);
        return view('aboutme',$data, $profiledata);

    }

    public function addaboute(Request $request){

        $user=$request->user();
        $data['user_id']=$user->id;
        $profiledata['profile_list']=DB::select('select * from profile where user_id=?',[$user->id]);

        return view('add-aboute',$data, $profiledata);
    }

    public function aboutestore(Request $request){

        $input =new about;
        $input->user_id=$request->user_id;
        $input->aboutme=$request->aboutme;
        $input->save();

        return redirect('aboutme');
    }

    /*    public function blog(){
            return view('Blog/article');
        }


        public function showblog(Request $request){
            $user=$request->user();
            $data['aboute_me']=DB::select('select * from aboutme where user_id=?',[$user->id]);

            return view('aboutme',$data);

        }

        public function addblog(Request $request){

            $user=$request->user();
            $data['user_id']=$user->id;
            return view('add-aboute',$data);
        }

        public function storeblog(Request $request){

            $input =new about;
            $input->user_id=$request->user_id;
            $input->aboutme=$request->aboutme;
            $input->save();

            return redirect('Blog/article');
        }*/
}
