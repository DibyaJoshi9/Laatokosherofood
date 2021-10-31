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


    // public function username()
    // {
    //     $login = request()->input('email');

    //     if(is_numeric($login)){
    //         $field = 'phone_number';
    //     } elseif (filter_var($login, FILTER_VALIDATE_EMAIL)) {
    //         $field = 'email';
    //     }

    //     request()->merge([$field => $login]);

    //     return $field;
    // }

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
      // protected function credentials(Request $request)
      // {
      //   if(is_numeric($request->get('email'))){
      //     return ['phone_number'=>$request->get('email'),'password'=>$request->get('password')];
      //   }
      //   elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
      //     return ['email' => $request->get('email'), 'password'=>$request->get('password')];
      //   }
      // }


      protected function attemptLogin(Request $request)
      {
          return $this->guard()->attempt(
              $this->credentials($request), $request->filled('remember')
          );
      }
  
  
      protected function credentials(Request $request)
      {
          $admin = Customer::where('email', $request->email)->first();
  
          if ($admin) {
              if ($admin->active == 0) {
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