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
			'password' => MD5($password)
			);
		$cek = $this->m_data->cek_login("layanan_akademik",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
            $data['ajuan_surat'] = $this->m_data->ambil_data()->result();
            $this->load->view('admin_page',$data);

			//redirect(base_url("index.php/admin"));
 
		}else{
			echo "Username dan password salah !";
        }
        
    }
    function logout(){
		$this->session->sess_destroy();
        redirect(base_url('index.php/ajuan/index'));
    }
    function proses($id){
        $where = array('id' => $id);
        $data['ajuan_surat'] = $this->m_data->proses_data($where,'ajuan_surat')->result();
        $this->load->view('v_proses',$data);
    }
    function proses_action(){
    $id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$nim = $this->input->post('nim');
    $email = $this->input->post('email');
    $kat_surat = $this->input->post('kat_surat');
    $jenis_surat = $this->input->post('jenis_surat');
    $status_surat = $this->input->post('status_surat');
    $link_surat = $this->input->post('link_surat');
 
	$data = array(
        'nama' => $nama,
        'nim' => $nim,
        'email' => $email,
        'kat_surat' => $kat_surat,
        'jenis_surat' => $jenis_surat,
        'status_surat' => $status_surat,
        'link_surat' => $link_surat
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->proses_update($where,$data,'ajuan_surat');
	redirect('ajuan/login_admin');
    }
    function hapus($id) {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where,'ajuan_surat');
        redirect('ajuan/login_admin');
    }
    function status_surats() {
        $data['ajuan_surat'] = $this->m_data->ambil_data()->result();
        $this->load->view('status_surat',$data);
    }
}