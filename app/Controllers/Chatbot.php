<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Chatbot extends Controller
{
    public function index()
    {
        return view('chatbot'); // Menampilkan view chatbot.php
    }
}