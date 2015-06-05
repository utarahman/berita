<?php
class News extends CI_Model
{
    public function tampil_data_news($kode)
    {
  		if ($kode=='all'){
   		$hasil=$this->db->get('tabel_news');
  	}else{
   		$this->db->where('kode_news',$kode);
   		$hasil=$this->db->get('tabel_news');
  	}
        return $hasil->result();
    }
    
 	public function simpan_data_news($data)
 	{
  		if ($data['mode']=='baru'){
   		unset($data['mode']);
   		$hasil=$this->db->insert('tabel_news', $data); 
  		}else{
   			unset($data['mode']);
   			$this->db->where('kode_buku',$data['news_id']);
   			$hasil=$this->db->update('tabel_news', $data); 
  		}
  	return $hasil;
 	}
 	
 	public function hapus_data_news($kode)
 	{
  		$this->db->where('news_id', $kode);
  		$hasil=$this->db->delete('tabel_news');
  		return $hasil;
 	}
}
?> 