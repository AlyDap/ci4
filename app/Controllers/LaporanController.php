<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;

class LaporanController extends BaseController
{
  public function index()
  {
    $users = model('UserModel')->where('status', 1)->orderBy('id', 'desc')->findAll();
    $dompdf = new Dompdf();
    $dompdf->load_html(view('laporan', ['users' => $users]));
    $dompdf->render();
    $dompdf->stream('laporan_users.pdf', ['Attachment' => 0]);
  }
}
