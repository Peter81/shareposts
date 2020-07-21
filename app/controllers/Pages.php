<?php
class Pages extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data = [
      'title' => 'SharePosts',
      'description' => 'Simple social network built with php framework',
    ];

    $this->view('pages/index', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us',
      'description' => 'App o share posts with other users',
    ];

    $this->view('pages/about', $data);
  }
}
