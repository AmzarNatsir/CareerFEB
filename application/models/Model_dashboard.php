<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_dashboard extends CI_Model {
	
	public function __construct(){
		$this->load->database();		
    }
    function get_kegiatan_home()
    {
        return $this->db->select("a.*, b.nama_kategori, c.nama_lengkap")
            ->from("cc_kegiatan a")
            ->from("cc_mst_kategori_kegiatan b")
            ->from("cc_alumni c")
            ->where("a.id_kategori=b.id")
            ->where("a.id_kategori=b.id")
            ->where("a.id_user=c.id")
            ->where("a.tampilkan", 1)
            ->order_by("a.tgl_posting", "desc")->get()->result_array();
    }
    function get_loker_home()
    {
        return $this->db->select("a.*, b.nama_kategori, c.nama_provinsi, d.nama_kabupaten")
                ->from("cc_loker a")
                ->from("cc_mst_kategori_job b")
                ->from("mst_provinsi c")
                ->from("mst_kabupaten d")
                ->where("a.id_kategori=b.id")
                ->where("a.id_provinsi=c.id")
                ->where("a.id_kabupaten=d.id")
                ->where("a.tampilkan", 1)
                ->order_by("a.tgl_posting", "desc")->get()->result_array();
        
    }
    function get_responden_per_prodi($id_prodi)
    {
        return $this->db->where("id_prodi", $id_prodi)->where("tracer", 1)->get("cc_alumni")->result_array();
    }
    function get_status_pekerjaan_alumni($status, $tahun)
    {
        return $this->db->where("q_no_1", $status)->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
    }
    //quis 1.1
    function get_a_1_1($tahun)
    {
        $t_1=0;
        $t_2=0;
        $t_3=0;
        $t_4=0;
        $t_5=0;
        $t_6=0;
        $t_7=0;
        $t_8=0;
        $t_9=0;
        $t_10=0;
        $t_11=0;
        $t_12=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            $arr = explode(",", $val['q_no_1_1']);
            if(count($arr)>0)
            {
                for($i=0; $i < count($arr); $i++)
                {
                    if($arr[$i]==1) {
                        $t_1+=1;
                    }
                    if($arr[$i]==2) {
                        $t_2+=1;
                    }
                    if($arr[$i]==3) {
                        $t_3+=1;
                    }
                    if($arr[$i]==4) {
                        $t_4+=1;
                    }
                    if($arr[$i]==5) {
                        $t_5+=1;
                    }
                    if($arr[$i]==6) {
                        $t_6+=1;
                    }
                    if($arr[$i]==7) {
                        $t_7+=1;
                    }
                    if($arr[$i]==8) {
                        $t_8+=1;
                    }
                    if($arr[$i]==9) {
                        $t_9+=1;
                    }
                    if($arr[$i]==10) {
                        $t_10+=1;
                    }
                    if($arr[$i]==11) {
                        $t_11+=1;
                    }
                    if($arr[$i]==12) {
                        $t_12+=1;
                    }
                }
            }
        }
        return $t_1.", ".$t_2.", ".$t_3.", ".$t_4.", ".$t_5.", ".$t_6.", ".$t_7.", ".$t_8.", ".$t_9.", ".$t_10.", ".$t_11.", ".$t_12;
    }
    function get_a_1_2($tahun)
    {
        $t_1=0;
        $t_2=0;
        $t_3=0;
        $t_4=0;
        $t_5=0;
        $t_6=0;
        $t_7=0;
        $t_8=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_1_2']==1){
                $t_1+=1;
            }
            if($val['q_no_1_2']==2){
                $t_2+=1;
            }
            if($val['q_no_1_2']==3){
                $t_3+=1;
            }
            if($val['q_no_1_2']==4){
                $t_4+=1;
            }
            if($val['q_no_1_2']==5){
                $t_5+=1;
            }
            if($val['q_no_1_2']==6){
                $t_6+=1;
            }
            if($val['q_no_1_2']==7){
                $t_7+=1;
            }
            if($val['q_no_1_2']==8){
                $t_8+=1;
            }
        }
        return $t_1.", ".$t_2.", ".$t_3.", ".$t_4.", ".$t_5.", ".$t_6.", ".$t_7.", ".$t_8;
    }
}