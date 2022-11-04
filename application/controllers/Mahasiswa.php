<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->api = "http://localhost/project/Codeigniter/restfulapi/api/v1/mahasiswa/";
        $this->load->library('Curl.php');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index()
    {
        $data['mahasiswa'] = json_decode($this->curl->simple_get($this->api), true);
        // print_r($data);
        $data['judul'] = 'Show List Mahasiswa';
        $this->load->view('templates/header', $data);
        $this->load->view('listMahasiswa', $data);
        $this->load->view('templates/footer', $data);
    }
}