<?php

namespace App\Controllers;

use App\Models\Matkul;
use App\Controllers\BaseController;

class AsdosController extends BaseController
{
    public function index()
    {
        $model = new Matkul();
        $data ['matkul']= $model->findAll();
        return view('asdos/data', $data);
    }

    public function create()
    {
        return view('asdos/create');
    }
    public function save()
    {
        $model = new Matkul();
        $data = [
            'matkul' => $this->request->getPost('matkul'),
            'sks' => $this->request->getPost('sks')
        ];
        $model->insert($data);
        return redirect()->to('/data');
    }
    public function edit($id_matkul)
    {
        $model = new Matkul();
        $data['matkul'] = $model->find($id_matkul);
        return view('asdos/edit', $data);
    }
    public function update($id_matkul)
    {
        $model = new Matkul();
        $data = [
            'matkul' => $this->request->getPost('matkul'),
            'sks' => $this->request->getPost('sks')
        ];
        $model->update($id_matkul, $data);
        return redirect()->to('/data');
    }
    public function delete($id_matkul)
    {
        $model = new Matkul();
        $model->delete($id_matkul);
        return redirect()->to('/data');
    }
}
