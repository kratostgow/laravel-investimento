<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Auth;
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
                Auth::attempt($data, false);
            } else {
                $user = $this->repository->findWhere(['email' => $request->get('username')])->first();

                if (!$user) {
                    throw new Exception("Dados de usuário incorretos!");
                }
                if ($user->password != $request->get('password')) {
                    throw new Exception("Senha do usuário incorreta!");
                };

                Auth::login($user);
            };

            abort_unless(Auth::check(), 403);

            return redirect()->route('user.dashboard');

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
