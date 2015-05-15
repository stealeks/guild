<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $error = null;

        if ($request->method() == Request::METHOD_POST) {
            if (\Auth::attempt($request->only('username', 'password'))) {
                return redirect('index');
            }

            $error = 'Can\'t login';
        }

        return $this->render('user.login', [
            'error' => $error,
        ]);
    }
}