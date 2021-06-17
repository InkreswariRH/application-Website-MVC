<?php

class About extends Controller
{
   public function index()
   {

      $data['judul'] = "Halaman About Me";
      $this->view('templates/header', $data);
      $this->view('about/index', $data);
      $this->view('templates/footer');
   }

   public function page()
   {
      $data['nama'] = $this->model('User_model')->getUser();
      $data['judul'] = "Halaman Page";
      $this->view('templates/header', $data);
      $this->view('about/page', $data);
      $this->view('templates/footer');
   }
}
