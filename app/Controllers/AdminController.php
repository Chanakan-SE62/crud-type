<?php

namespace App\Controllers;
use App\Models\categoryModel;
use CodeIgniter\RESTful\ResourceController;

class AdminController extends ResourceController
{
    public function index()
    {
        return view('admin_index');
    }

    public function type()
    {
        return view('admin-typePage1');
    }

    public function addType(){
        helper('form');
        $model = new categoryModel();
        $data = [
            'name_category' => $this->request->getVar('name_category'),
        ];
        $model->save($data);
        return redirect()->to('/typeShow');
    
    }

    public function showData($id){
        helper('form');
        $model = new categoryModel();
        $data['data'] = $model->where('categoryId', $id)->first();
        //var_dump($data);
        echo view('admin-typePage2',$data);
    }

    public function deleteData($id){
        helper('form');
        $model = new categoryModel();
        $data['data'] = $model->where('categoryId', $id)->delete();
        //var_dump($data);
        echo view('admin-typePage1',$data);
        return redirect()->to('/typeShow');
    }

    public function updateData(){
        helper('form');
        $model = new categoryModel();
        $id = [
            'categoryId' => $this->request->getVar('categoryId'),
        ];
        $data = [
            'name_category' => $this->request->getVar('name_category'),
        ];
        $model->where('categoryId', $id)->set($data)->update();
        return redirect()->to('/typeShow');
    }
}