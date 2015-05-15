<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function render($subview, $data = [])
    {
        $paper = [
            'paper-lift',
            'paper-curl',
            'paper-curl-left',
            'paper-curl-right',
            'paper-curve-above',
            'paper-curve-below',
            'paper-curve-left',
            'paper-curve-right',
            'paper-curve-vert',
            'paper-curve-horiz',
        ];
        $rotate = [
            'rotate-right-1',
            'rotate-right-2',
            'rotate-right-3',
            'rotate-left-1',
            'rotate-left-2',
            'rotate-left-3',
        ];

        $data['_paper'] = $paper;
        $data['_rotate'] = $rotate;


        return view('layout', [
            '_data' => $data,
            '_subview' => $subview,
        ]);
    }
}
