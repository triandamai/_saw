<?php

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('DataModel');
        $this->load->library('form_validation');
    }

    public function checkSession()
    {
        $cek = $this->session->userdata("nik");
        if (empty($cek)) {
            return false;
        } else {
            return true;
        }
    }

    public function index(){
        if (!$this->checkSession()) {
           $data['login'] = "penduduk";
           $this->load->view('master/login', $data);
        } else {
            // $data['page'] = 'penduduk/home';
            $data['profile'] = $this->DataModel->getWhere('nik', $this->session->userdata('nik'));
            $data['profile'] = $this->DataModel->getData('data_penduduk')->result();
            $this->load->view('user/home_new', $data);
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('nik', 'Username', 'required');
       // $this->form_validation->set_rules('pass', 'Password', 'required');

        $nik = $this->input->post('nik');
        //$pass = $this->input->post('pass');

        if ($this->form_validation->run() == false) {
            $this->load->view('master/login');
        } else {
            $data = array(
                "nik" => $nik,
                //"password" => $pass,
            );
            $result = $this->DataModel->Login("data_penduduk", $data)->row();

            if ($result != null) {
                $id = $result->nik;
                //$username = $result->username;
                $level = "penduduk";
                $data_session = array(
                    'nik' => $id,
                    'level' => $level,
                    'status' => "login",
                    'nama' => $result->nama
                );
                $this->session->set_userdata($data_session);
                redirect(base_url('index.php/penduduk/index'));
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <p>Username atau Password salah</p></div>');
                $data['login'] = "penduduk";
                $this->load->view('master/login', $data);
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php/user/index'));
    }

}

