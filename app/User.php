<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $rules = [
        // 'name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required'
    ];


    public function resetPassword($email) {
        $user = User::where(['email' => $email])->first([
    			'id',
    			'email',
    			'password'
    	]);
    
    	if(!empty($user)) {
    		$random_password =Str::random(8);
    		
            $details = [
                'from' => "greetings@mail.com",
                'subject' => 'Your Password For Web | Greetings',
                'pass' => $random_password,
                "body"  => "Yor password is change ."
            ];
            $user->password = Hash::make($random_password);
    		if($user->save()) {
                // Mail::to($user->email)->send(new ForgotPass($details));

    		
    			
    		}
    	}
    	
    }
}
