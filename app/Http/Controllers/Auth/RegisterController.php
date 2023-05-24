<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Adherent;
use App\Models\Personnel;
use App\Models\User;
use Carbon\Carbon;
use App\Models\CategorieAge;


use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {        
        return Validator::make($data, [
            'nom' => ['string', 'max:255'],
            'prenom' => ['string', 'max:255'],
            'adresse' => ['string', 'max:255'],
            'CP' => ['string', 'max:255'],
            'Situation' => ['string'],
            'courriel' => ['string'],
            'idC' => ['string', 'max:6'],
            'password' => ['string', 'min:8', 'confirmed'],
        ]);

        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $adherent = Adherent::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'adresse' => $data['adresse'],
            'CP' => $data['CP'],
            'courriel' => $data['courriel'],
            'idC' => $data['idC'],
            'password' => Hash::make($data['password']),
        ]);

        $id = $adherent->idAdherent;
        //dd($id);
        if($data['Situation'] == 'Personnel'){
            return Personnel::create([
                'idAdherent' => $id,
            ]);
        }


    }
}