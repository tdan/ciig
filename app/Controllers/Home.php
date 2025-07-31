<?php

namespace App\Controllers;

use App\Models\Post;

class Home extends BaseController
{
    public function index(): string
    {
        $postModel = new Post();
        $data['title'] = 'CIIG - An Instagram Clone';
        $data['posts'] = $postModel->orderBy('created_at', 'DESC')->findAll();

        return view('templates/header', $data)
            .view('home_dashboard', $data)
            .view('templates/footer');
    }
}
