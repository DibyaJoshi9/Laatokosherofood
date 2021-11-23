<?php



namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Http\Controllers\Controller;

use Laravel\Socialite\Facades\Socialite;

use Illuminate\Support\Facades\Auth;

use Exception;




class GoogleController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */


    public function __construct()
    {
        $this->middleware('guest:customer');
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }

    public function redirectToGoogle()

    {

        return Socialite::driver('google')->redirect();
    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function handleGoogleCallback()

    {

        try {



            $user = Socialite::driver('google')
                ->stateless()

                ->user();
            // dd($user);
            $googleId = Customer::where('google_id', $user->id)->first();
            // $googleId = Customer::find(16);
            // dd($googleId);
            if ($googleId) {
                // dd($user);
                // Auth::loginUsingId(16);
                // Auth::login($googleId);
                // $this->guard()->attempt(['email' => 'tamrakar.shreyaa@gmail.com', 'password' => '123456dummy']);
                $this->guard()->attempt(['email' => $googleId->email, 'password' => '123456dummy']);
                return redirect('/');
            } else {
                $newUser = Customer::create([
                    'first_name' => $user->user['given_name'],
                    // 'first_name' => 'testuser',
                    'last_name' => $user->user['family_name'],
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => bcrypt('123456dummy')
                ]);
                // Auth::login($newUser);
                $this->guard()->attempt(['email' => $newUser->email, 'password' => '123456dummy']);

                return redirect('/');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
