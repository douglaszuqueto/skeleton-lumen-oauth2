<?php

namespace App;

use Illuminate\Support\Facades\Auth;

class PasswordGrantVerifier
{
  public function verify($username, $password)
  {
      $credentials = [
        'email'    => $username,
        'password' => $password,
      ];

//      if(Auth::viaRequest('api', function() use($credentials) {
         $user =  \App\User::where($credentials)->first();
	if($user){ return $user; }
  //    }));

      return false;
  }
}
