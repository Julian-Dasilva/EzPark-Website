<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use App\reservations;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use PhpSpec\Exception\Exception;

class RegistrationController extends Controller {

	//

   // public function register(Request $input){
        //$this->validate($input, ['fname' => 'required', 'lname' => 'required', 'email' => 'email', 'password' => 'required', 'phone' => 'required|digits:10']);
       // User::create($input->all()); //Take all user input anc create a new record in the users table
		//if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']]))
        
		//return redirect('landingR.html'); // redirect to register page
        
		   
  //  }
   public function register(Request $request){
        $input = $request->all();
        $fname = $input['fname'];
		$lname = $input['lname'];
        $email = $input['email'];
        $phone = $input['phone'];
        $password = $input['password'];
        // syntax for custom database insertions: DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
		$this->validate($request, ['fname' => 'required', 'lname' => 'required', 'email' => 'email', 'password' => 'required', 'phone' => 'required|digits:10']);
        try {
        DB::insert('insert into users (fname, lname, email, phone, password) values (?, ?, ?, ?, ?)', [$fname, $lname, $email, $phone, $password]);
        } catch(\PDOException $e) {
            return redirect('register.html')->withInput($request->all())->withErrors(['errors' => 'You also may already have registered!']);
        }

            return redirect('landingR.html');
    }

    public function parking(Request $request){
        $input = $request->all();
        $name = $input['name'];
        $email = $input['email'];
        $phone = $input['phone'];
        $time = $input['time'];
        $prox = $input['proximity'];
        // syntax for custom database insertions: DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        try {
        DB::insert('insert into reservations (name, email, phone, time, proximity) values (?, ?, ?, ?, ?)', [$name, $email, $phone, $time, $prox]);
        } catch(\PDOException $e) {
            return redirect('parking.html')->withInput($request->all())->withErrors(['errors' => 'You also may already have a reservation!']);
        }

            return redirect('landingP.html');
    }

}
