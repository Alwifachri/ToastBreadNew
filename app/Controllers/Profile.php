<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Profile extends Controller
{
    protected $users;
    protected $session;
    public function __construct()
    {
        $this->users = new UserModel();
        $this->session = session();
    }

    public function index()
    {
        $data = [
            'users' => $this->users->getUser(),
            'session' => $this->session->get()
        ];
        // dd($data);
        helper(['form']);
        return view('profile', $data);;
    }

    public function update()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email',
            'address'       => 'required|min_length[6]|max_length[200]',
        ];

        if ($this->validate($rules)) {
            // $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_address'  => $this->request->getVar('address'),
            ];
            // $model->save($data);
            $this->users->save($data);
            session()->setFlashdata('message', 'Updated Successfully!');
            session()->setFlashdata('alert-class', 'alert-success');
            return redirect()->to('/profile');
        } else {
            $data['validation'] = $this->validator;
            session()->setFlashdata('message', 'Data not saved!');
            session()->setFlashdata('alert-class', 'alert-danger');
            echo view('profile', $data);
        }
    }

    public function editprofile($user_id)
    {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
            'users' => $this->users->getUser($user_id)
        ];
        dd($data);
        return view('profile', $data);
    }
}
