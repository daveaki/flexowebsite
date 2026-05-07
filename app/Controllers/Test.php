<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index(): string
    {
        $data =
        [
            'title'       => 'Test',
            'description' => 'Test page',
        ];

        return view('website/test', $data);
    }
}
