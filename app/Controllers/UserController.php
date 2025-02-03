<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('users_view', $data);
    }

    public function show($id = null)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('users_detail_view', $data);
    }

    public function new()
    {
        return view('users_add_view');
    }

    public function create()
    {
        $model = new UserModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'type' => $this->request->getPost('type'),
            'status' => intval($this->request->getPost('status')),
        ];
        $model->save($data);
        return redirect()->to('/users');
    }

    public function edit($id = null)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('users_edit_view', $data);
    }

    public function update($id = null)
    {
        $model = new UserModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'type' => $this->request->getPost('type'),
            'status' => intval($this->request->getPost('status')),
        ];
        $model->update($id, $data);
        return redirect()->to('/users');
    }

    public function delete($id = null)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/users');
    }
}
