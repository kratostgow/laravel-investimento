<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    private $repository;
    private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator) {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function index() {
        return view('user.dashboard');
    }

    public function auth(Request $request) {

        $data = [
            'email' => $request->get('username'),
            'password' => $request->get('password'),
        ];

        try {
            if (env('PASSWORD_HASH')) {
                \Auth::attempt($data, false);
            } else {
                $user = $this->repository->findWhere(['email' => $request->get('username')])->first();

                if (!$user) {
                    throw new Exception('O email informado é inválido.');
                }
                if ($user->password == $request->get('password')) {
                    throw new Exception('A senha informada é inválida.');
                };

                \Auth::login($user);
            };

            return redirect()->route('user.dashboard');
        } catch (Exception $e) {
            return $e->getMessage();
        }

        dd($request->all());
        echo 'Fuck';
    }
}
