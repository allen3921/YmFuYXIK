<?php

class DriverController extends BaseController {

    protected $layout = 'layouts.main';

    public function login(){
        return View::make('driver.login');
    }

    public function loginPost()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        //$credentials = array('username' => $username, 'password' => $password, 'remember' => true);
        $credentials = array('email' => $email, 'password' => $password);
        if(Auth::attempt($credentials))
        {
            return Redirect::to('/');
        }
        else
        {
            return Redirect::to('driver/login')
                ->with('login_errors', true);
        }
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }

    public function register(){
        return View::make('driver.register');
    }

    public function registerPost()
    {
        $username = Input::get('username');
        $email = Input::get('email');
        $password = Input::get('password');
        $active = true;
        if(empty($username) || empty($password))
        {
            return Redirect::to('driver/register')
                ->with('register_errors', true);
        }else{
            $arr = array(
                'username' => $username,
                'email'    => $email,
                'password' => Hash::make($password),
                'active'   => $active
            );
            $rules = array(
                'username'  => 'unique:driver,username|required|min:1|max:20',
                'password'  => 'required',
                'email'     => 'unique:driver,email|required'
            );

            $v = Validator::make($arr, $rules);

            if ( $v->fails() )
            {
                return Redirect::to('driver/register')
                    //->with('driver', Auth::driver())
                    ->withErrors($v)
                    ->withInput();

            }
            $driver = new Driver();
            $driver->fill($arr);
            $result = $driver->save();

            if($result)
            {
                if(Auth::attempt(array( 'email' => $email,  'password' => $password)))
                {
                    return Redirect::to('/');
                }
                else
                {

                    return Redirect::to('driver/login')
                        ->with('login_errors', true);
                }
            }
            else
            {
                return Redirect::to('driver/register')
                    ->with('register_errors', true);
            }
        }

    }


    public function view($id)
    {
        $driver = Driver::find($id);
        //$driver = DB::select('select * from driver where id = ?', array($id));
        return Response::json($driver);
    }

    public function all(){
        $drivers = Driver::all();
        return Response::json($drivers);
    }

    public function edit(){
    }

}
