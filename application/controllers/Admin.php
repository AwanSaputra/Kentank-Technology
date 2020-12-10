<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rolemodel');
        $this->load->model('loginmodel');
        $this->load->helper(array('form', 'url'));
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php/home'));
    }

    public function index()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/AdmHomeView');
        $this->load->view('templates/admin/footer');
    }

    public function about()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/AdmAboutView');
        $this->load->view('templates/admin/footer');
    }

    // Semua fungsi products
    public function products()
    {
        $data['products'] = $this->rolemodel->getProducts();
        $this->load->view('templates/admin/header');
        $this->load->view('admin/AdmProductsView', $data);
        $this->load->view('templates/admin/footer');
    }
    public function addN()
    {
        $this->load->view('admin/addn', array('error' => ' '));
    }

    public function addProudcts()
    {
        $data = [
            "title" => $this->input->post('title', true),
            "description" => $this->input->post('description', true),
            "date" => date('y-m-d'),
            "picture" => "",
        ];
        $this->uploadImage();
        $file_info = $this->upload->data();
        $data['picture'] = $file_info['file_name'];
        $this->rolemodel->addProudcts($data);
        $this->session->set_flashdata('alert', 'News has been added!');
        redirect('admin/products', 'refresh');
    }

    public function manageProducts()
    {
        $data['products'] = $this->rolemodel->getNews();
        $this->load->view('templates/admin/header');
        $this->load->view('admin/manageProducts', $data);
        $this->load->view('templates/admin/footer');
    }
    public function removeProducts($id)
    {
        $this->rolemodel->removeProducts($id);
        redirect('admin/products', 'refresh');
    }



    //semua fungsi supplier

    public function supplier()
    {
        $data['supplier'] = $this->rolemodel->getSupplier();
        $this->load->view('templates/admin/header');
        $this->load->view('admin/AdmSupplierView', $data);
        $this->load->view('templates/admin/footer');
    }

    public function addS()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/addSupplier', array('error' => ' '));
        $this->load->view('templates/admin/footer');
    }

    public function addSupplier()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "kontak" => $this->input->post('kontak', true),
            "profile" => $this->input->post('profile', true),
            "photo" => "",
        ];
        $this->uploadImage();
        $file_info = $this->upload->data();
        $data['photo'] = $file_info['file_name'];
        $this->rolemodel->addSupplier($data);
        $this->session->set_flashdata('alert', 'Doctor has been added!');
        redirect('admin/supplier', 'refresh');
    }

    public function editSupplier($id)
    {
        $data['judul'] = 'Form Ubah Data Mahasiswa';

        $data['supplier'] = $this->rolemodel->getSupplierById($id);
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required');
        $this->form_validation->set_rules('profile', 'Profile', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin/header');
            $this->load->view('admin/editSupplier', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->rolemodel->ubahDataSupplier();
            $this->session->set_flashdata('flash', 'data changed successfully');
            redirect('admin/supplier');
        }
    }

    public function manageSupplier()
    {
        $data['supplier'] = $this->rolemodel->getSupplier();
        $this->load->view('templates/admin/header');
        $this->load->view('admin/manageSupplier', $data);
        $this->load->view('templates/admin/footer');
    }
    public function removeSupplier($id)
    {
        $this->rolemodel->removeSupplier($id);
        redirect('admin/supplier', 'refresh');
    }


    // semua fungsi messages
    public function messages()
    {
        $data['messages'] = $this->rolemodel->getMessages();
        $this->load->view('templates/admin/header');
        $this->load->view('admin/messagesView', $data);
        $this->load->view('templates/admin/footer');
    }

    public function addContacts()
    {
        $data = [
            "fname" => $this->input->post('fname', true),
            "lname" => $this->input->post('lname', true),
            "email" => $this->input->post('email', true),
            "subject" => $this->input->post('subject', true),
            "message" => $this->input->post('message', true),
        ];

        $this->rolemodel->addContacts($data);
        $this->session->set_flashdata('flash', 'Message has been sent!');
        redirect('home/contacts', 'refresh');
    }

    public function removeMessages($id)
    {
        $this->rolemodel->removeMessages($id);
        redirect('admin/messages', 'refresh');
    }






    public function uploadImage()
    {
        $config['upload_path']         = './assets/images/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 5024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('userfile')) {
            $data = array('upload_data' => $this->upload->data());
        } else {
            $error = array('error' => $this->upload->display_errors());
        }
    }
}
