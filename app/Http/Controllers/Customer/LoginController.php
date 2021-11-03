<?php
namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }


 

    public function username()
    {
        return 'email';
    }
    protected function guard()
    {
        return Auth::guard('customer');
    }


     /**
       * Get the needed authorization credentials from the request.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return array
       */
     


      protected function attemptLogin(Request $request)
      {
          return $this->guard()->attempt(
              $this->credentials($request), $request->filled('remember')
          );
      }
  
  
      protected function credentials(Request $request)
      {
          $user = Customer::where('email', $request->email)->first();
  
          if ($user) {
              if ($user->status == 0) {
                  return ['email' => 'inactive', 'password' => 'Your account has not been active, please contact Admin'];
              } else {
                  return ['email' => $request->email, 'password' => $request->password];
              }
          }
          return $request->only($this->username(), 'password');
      }


    protected function authenticated(Request $request, $user)
    {
        return new JsonResponse(['status'=>'success','message'=>'Logged in successfully']);
    }

    public function logout(Request $request)
    {

        $this->guard('customer')->logout();
        $request->session()->invalidate();

        return redirect('/');
        }

}