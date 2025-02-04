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

  public function show()
  {
    return view('laporan_view');
  }

  public function search()
  {
    $aksi = $this->request->getPost('aksi');
    $type = $this->request->getPost('type');
    $status = intval($this->request->getPost('status'));
    $users = model('UserModel')->where('status', $status)->where('type', $type)->orderBy('id', 'desc')->findAll();
    if ($aksi == 'cari') {
      return view('laporan_view', ['users' => $users, 'type' => $type, 'status' => $status]);
    } else if ($aksi == 'download') {
      $dompdf = new Dompdf();
      $dompdf->load_html(view('laporan', ['users' => $users]));
      $dompdf->render();
      $dompdf->stream('laporan_users.pdf', ['Attachment' => 0]);
    }
  }
}
