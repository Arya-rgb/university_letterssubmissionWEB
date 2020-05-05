<?php 
class Ajuan extends CI_Controller {
    function __construct(){
		parent::__construct();		
        $this->load->helper('url');
        $this->load->library('javascript');
        $this->load->model('m_data');
    }
    public function index() {
        $this->load->view('mainpage');
    }
    public function form1() {
        $this->load->view('form1');
    }
    public function selamat1() {
        $this->load->view('selamat1');
    }
    public function login_admin(){
        $this->load->view('login_admin');
    }
    public function tambah_aksi() {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $email = $this->input->post('email');
        $jenis_surat = $this->input->post('jenis_surat');
        $kat_surat = $this->input->post('kat_surat');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'email' => $email,
            'jenis_surat' => $jenis_surat,
            'kat_surat' => $kat_surat

        );
        $this->m_data->input_data($data,'ajuan_surat');
        redirect('http://localhost/miniproject/index.php/ajuan/selamat1');
        
    }
    function login_aksi(){
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_data->cek_login("layanan_akademik",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/admin"));
 
		}else{
			echo "Username dan password salah !";
		}
    }
    function logout(){
		$this->session->sess_destroy();
        redirect(base_url('index.php/ajuan/index'));
    }
}