<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index(): string
    {
        $data =
        [
            'title'       => lang('Website.home_title'),
            'description' => lang('Website.home_description'),
        ];

        return view('website/home', $data);
    }

    public function scaffoldDemo(): string
    {
        return view('website/scaffold-demo');
    }

    public function contact(): string
    {
        $data = [
            'title'       => lang('Website.contact_title'),
            'description' => lang('Website.contact_description'),
        ];

        return view('website/contact', $data);
    }
}
