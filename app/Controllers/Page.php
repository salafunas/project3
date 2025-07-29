<?php

namespace App\Controllers;

class Page extends BaseController
{
public function about()
{
echo view("about");
}

 public function Kontak()
{
echo view("kontak");
}

 public function FAQs()
{
echo view("FAQs");
}
}