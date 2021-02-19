<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator; 
class UserController extends Controller
{
    public function signUp(Request $request)
    {
        try {
            
            $validator = Validator::make($request->all(), User::$rules);
         
            if (!$validator->fails()) {
                
                $users = new User();
                $users->name= $request->name;
                $users->email       = $request->email;
                $users->role_id       = 2;
                $users->password    = Hash::make($request->password);
                $users->mobileno = $request->mobileno;
                $users->access_token = uniqid();
                // $users->device_type = $request->header('client-id');
               
                
                $users->Save();
            } else {
                
                return $this->sendResponse(
                    Config::get('error.code.INTERNAL_SERVER_ERROR'),
                    null,
                    $validator->messages()->all(),
                    Config::get('error.code.INTERNAL_SERVER_ERROR')
                );
            }
            
            if (true) {
             
                $users = User::find(2, [
                    'id','name', 'email',  'access_token',
                ]);
                $users->get_notification = ($users->get_notification ? true : false);
                return $this->sendResponse(200, $users);
            }
        } catch (\Exception $e) {
            return $this->sendResponse(
                500,
                null,
                $e->getMessage()
            );
        }
    }

    public function login(Request $request)
    {
      
        try {
         
            //Request input Validation
            
            $validation = Validator::make($request->all(), User::$rules);
           
            // dd($validation);
            if (!$validation->fails()) {
                
                return $this->sendResponse(
                    Config::get('error.code.BAD_REQUEST'),
                    null,
                    $validation->getMessageBag()->all(),
                    Config::get('error.code.BAD_REQUEST')
                );
            } else {
                
                $authUser = Auth::attempt([
                    'email' => $request->email,
                    'password' => $request->password
                ]);
                

                //Get record if user has authenticated
                if ($authUser) {
                    $device = $request->header('client-id');
                    $user = User::where([
                        'email' => $request->email
                    ])->get([
                        'access_token',
                        'id',
                        'name',
                        'email',
                        'mobileno'
                    ])
                        ->first();

                    $user->access_token = uniqid();
                    // $user->device_type = $device;
                    $user->save();
                    $user->get_notification = ($user->get_notification ? true : false);

                    unset($user->device_type);
                    $responseArray =  [
                        'status' => Config::get('constants.status.OK'),
                        'response' => $user,
                        'error' => null,
                        'custom_error_code' => null
                    ];
                } else {
                    $responseArray =  [
                        'status' => Config::get('error.code.NOT_FOUND'),
                        'response' => null,
                        'error' => [Config::get('error.message.USER_NOT_FOUND')],
                        'custom_error_code' => Config::get('error.code.NOT_FOUND')
                    ];
                }

                // end sad

                //Set the JSON response
                $status_code = $responseArray['status'];
                $response = $responseArray['response'];
                $error = $responseArray['error'];
                $custom_error_code = $responseArray['custom_error_code'];

                return $this->sendResponse($status_code, $response, $error, $custom_error_code);
            }
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => [$e->errorInfo[2]],
                'custom_error_code' => $e->errorInfo[0]
            ];
        }
    }

    public function forgetpassword(Request $request)
    {
        return $request;
    }

    public function logout()
    {
        # code...
        Auth::logout(); 
        return $this->sendResponse(200, 'logout successfully!');
    }

}
