<?php

namespace App\Controllers\Actions;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{
    protected $session;
    protected $usersModel;

    public function __construct()
    {
        $this->session = session();
        $this->usersModel = new UsersModel();
    }

    public function register()
    {
        // set validation rules
        $rules = [
            'email'         => 'required|min_length[6]|max_length[100]|valid_email|is_unique[tb_users.email]',
            'fullname'      => 'required|min_length[3]|max_length[255]',
            'password'      => 'required|min_length[6]|max_length[255]',
            'konfirmasi_password'  => 'matches[password]'
        ];

        // check validation
        if(!$this->validate($rules)){
            $data['validation'] = $this->validator;
            return view('auth/register', $data);
        }

        // set data for add user
        $data = [
            'email'    => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role_id'     => 3,
            'fullname'    => $this->request->getVar('fullname'),
            'created_at'  => Time::now(),
            'updated_at'  => Time::now(),
        ];

        // add user
        $this->usersModel->save($data);

        // redirect to login page
        return redirect()->to('auth/login');
    }

    public function login()
    {
        // get request
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // get user by email
        $user = $this->usersModel->getUserByEmail($email);

        // check user
        if ($user === null) {
            $this->session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('auth/login');
        }

        // check password
        $verify_pass = password_verify($password, $user->password);
        if (!$verify_pass) {
            $this->session->setFlashdata('msg', 'Wrong Password');
            return redirect()->to('auth/login');
        }

        // set session data
        $ses_data = [
            'id'              => $user->id,
            'role'            => $user->role_name,
            'email'           => $user->email,
            'fullname'        => $user->fullname,
        ];
        $this->session->set($ses_data);

        // redirect to page based on role
        return redirect()->to("$user->role_name");
    }

    public function logout()
    {
        // destroy session
        $this->session->destroy();

        // redirect to login page
        return redirect()->to('auth/login');
    }
}
