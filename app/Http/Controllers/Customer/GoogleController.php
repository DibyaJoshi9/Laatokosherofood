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
                // ->setAccessType("offline")
                ->user();
            // dd($user);
            $googleId = Customer::where('google_id', $user->id)->first();
            // dd($googleId);

            if ($googleId) {
                // dd($user);
                Auth::login($googleId);
                return redirect('/');
            } else {
                $newUser = Customer::create([
                    'first_name' => $user->user['given_name'],
                    'last_name' => $user->user['family_name'],
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
                return redirect('/');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
