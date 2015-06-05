<?php
class Berita extends CI_Controller
{
 	public function __construct()
 	{
     	parent::__construct();
	}
 	
 	public function index()
    	{
  			$this->load->view('Berita');
    	}
 
 	public function tampil_news()
    {
     	$kode='all';
 		$this->load->model('news');
     	$data_news['datanews']=$this->news->tampil_data_news($kode); 
     	$this->load->view('tampilnews',$data_news);
    }
 	
 	public function tambah_news()
 	{
  		$this->load->view('tambahnews');
 	}
 
 	public function simpan_news()
 	{
  		if (isset($_POST['mysubmit'])){
  		$data = array(
  						'news' => $this->input->post('news_id'),
                		'title' => $this->input->post('news_title'),                                       
                		'description' => $this->input->post('news_description'),
  						'date' => $this->input->post('news_date_created'),   
                		'update' => $this->input->post('news_last_update'),
  						);
   		$this->load->model('news');
   		$hasil=$this->newa->simpan_data_news($data);
   		
   		if ($hasil){
    				echo "Simpan data berhasil";
   		}else{
    			echo "Simpan data gagal";
   		}
   		echo "<br/>";
   		echo anchor('Berita', 'Kembali');
  		}
 	}
 
 	public function koreksi_news($kd)
 	{
  			 $this->load->model('news');
             $data_news['datanews']=$this->news->tampil_data_news($kd); 
  			 $this->load->view('koreksinews',$data_news);
 	}
 
 	public function konfirm_hapus_news($kd)
 	{
  			$this->load->model('news');
          	$data_news['datanews']=$this->news->tampil_data_news($kd); 
  			$this->load->view('konfirmhapus',$data_news);
 	}
 
 	public function hapus_news($kd)
 	{
  			$this->load->model('news');
         	$hasil=$this->news->hapus_data_news($kd);
  		if ($hasil){
    				echo "Hapus data berhasil";
  		}else{
    				echo "Hapus data gagal";
  			 }
  					echo "<br/>";
  					echo anchor('Berita', 'Kembali');
 	}
}
?>