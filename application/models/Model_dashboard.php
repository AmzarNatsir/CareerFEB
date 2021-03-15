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
        return $t_1.",".$t_2.",".$t_3.",".$t_4.",".$t_5.",".$t_6.",".$t_7.",".$t_8;
    }
    function get_a_1_3($tahun)
    {
        $t_1=0;
        $t_2=0;
        $t_3=0;
        $t_4=0;
        $t_5=0;
        $t_6=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_1_3']==1){
                $t_1+=1;
            }
            if($val['q_no_1_3']==2){
                $t_2+=1;
            }
            if($val['q_no_1_3']==3){
                $t_3+=1;
            }
            if($val['q_no_1_3']==4){
                $t_4+=1;
            }
            if($val['q_no_1_3']==5){
                $t_5+=1;
            }
            if($val['q_no_1_3']==6){
                $t_6+=1;
            }
        }
        return $t_1.",".$t_2.",".$t_3.",".$t_4.",".$t_5.",".$t_6;
    }
    function get_a_1_4($tahun)
    {
        $t_1=0;
        $t_2=0;
        $t_3=0;
        $t_4=0;
        $t_5=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_1_4']==1){
                $t_1+=1;
            }
            if($val['q_no_1_4']==2){
                $t_2+=1;
            }
            if($val['q_no_1_4']==3){
                $t_3+=1;
            }
            if($val['q_no_1_4']==4){
                $t_4+=1;
            }
            if($val['q_no_1_4']==5){
                $t_5+=1;
            }
        }
        return $t_1.",".$t_2.",".$t_3.",".$t_4.",".$t_5;
    }
    function get_a_1_5($tahun)
    {
        $t_1=0;
        $t_2=0;
        $t_3=0;
        $t_4=0;
        $t_5=0;
        $t_6=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_1_5']==1){
                $t_1+=1;
            }
            if($val['q_no_1_5']==2){
                $t_2+=1;
            }
            if($val['q_no_1_5']==3){
                $t_3+=1;
            }
            if($val['q_no_1_5']==4){
                $t_4+=1;
            }
            if($val['q_no_1_5']==5){
                $t_5+=1;
            }
            if($val['q_no_1_5']==6){
                $t_6+=1;
            }
        }
        return $t_1.",".$t_2.",".$t_3.",".$t_4.",".$t_5.",".$t_6;
    }
    function get_a_1_6($tahun)
    {
        $t_1=0;
        $t_2=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_1_6']==1){
                $t_1+=1;
            }
            if($val['q_no_1_6']==2){
                $t_2+=1;
            }
        }
        return $t_1.",".$t_2;
    }
    function get_a_1_7($tahun)
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
        $t_13=0;
        $t_14=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            $arr = explode(",", $val['q_no_1_7']);
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
                    if($arr[$i]==13) {
                        $t_13+=1;
                    }
                    if($arr[$i]==14) {
                        $t_14+=1;
                    }
                }
            }
        }
        return $t_1.", ".$t_2.", ".$t_3.", ".$t_4.", ".$t_5.", ".$t_6.", ".$t_7.", ".$t_8.", ".$t_9.", ".$t_10.", ".$t_11.", ".$t_12.", ".$t_13.", ".$t_14;
    }
    function get_a_1_8($tahun)
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
            if($val['q_no_1_8']==1){
                $t_1+=1;
            }
            if($val['q_no_1_8']==2){
                $t_2+=1;
            }
            if($val['q_no_1_8']==3){
                $t_3+=1;
            }
            if($val['q_no_1_8']==4){
                $t_4+=1;
            }
            if($val['q_no_1_8']==5){
                $t_5+=1;
            }
            if($val['q_no_1_8']==6){
                $t_6+=1;
            }
            if($val['q_no_1_8']==7){
                $t_7+=1;
            }
            if($val['q_no_1_8']==8){
                $t_8+=1;
            }
        }
        return $t_1.",".$t_2.",".$t_3.",".$t_4.",".$t_5.",".$t_6.",".$t_7.",".$t_8;
    }
    function get_a_1_9($tahun)
    {
        $t_1=0;
        $t_2=0;
        $t_3=0;
        $t_4=0;
        $t_5=0;
        $t_6=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_1_9']==1){
                $t_1+=1;
            }
            if($val['q_no_1_9']==2){
                $t_2+=1;
            }
            if($val['q_no_1_9']==3){
                $t_3+=1;
            }
            if($val['q_no_1_9']==4){
                $t_4+=1;
            }
            if($val['q_no_1_9']==5){
                $t_5+=1;
            }
            if($val['q_no_1_9']==6){
                $t_6+=1;
            }
        }
        return $t_1.",".$t_2.",".$t_3.",".$t_4.",".$t_5.",".$t_6;
    }
    function get_a_1_10($tahun)
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
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_1_10']==1){
                $t_1+=1;
            }
            if($val['q_no_1_10']==2){
                $t_2+=1;
            }
            if($val['q_no_1_10']==3){
                $t_3+=1;
            }
            if($val['q_no_1_10']==4){
                $t_4+=1;
            }
            if($val['q_no_1_10']==5){
                $t_5+=1;
            }
            if($val['q_no_1_10']==6){
                $t_6+=1;
            }
            if($val['q_no_1_10']==7){
                $t_7+=1;
            }
            if($val['q_no_1_10']==8){
                $t_8+=1;
            }
            if($val['q_no_1_10']==9){
                $t_9+=1;
            }
            if($val['q_no_1_10']==10){
                $t_10+=1;
            }
        }
        return $t_1.",".$t_2.",".$t_3.",".$t_4.",".$t_5.",".$t_6.",".$t_7.",".$t_8.",".$t_9.",".$t_10;
    }
    function get_a_1_11($tahun)
    {
        $t_1=0;
        $t_2=0;
        $t_3=0;
        $t_4=0;
        $t_5=0;
        $t_6=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_1_11']==1){
                $t_1+=1;
            }
            if($val['q_no_1_11']==2){
                $t_2+=1;
            }
            if($val['q_no_1_11']==3){
                $t_3+=1;
            }
            if($val['q_no_1_11']==4){
                $t_4+=1;
            }
            if($val['q_no_1_11']==5){
                $t_5+=1;
            }
            if($val['q_no_1_11']==6){
                $t_6+=1;
            }
        }
        return $t_1.",".$t_2.",".$t_3.",".$t_4.",".$t_5.",".$t_6;
    }
    function get_a_1_12($tahun)
    {
        $t_12_1_tp=0; $t_12_1_tk=0; $t_12_1_b=0; $t_12_1_p=0; $t_12_1_sp=0;
        $t_12_2_tp=0; $t_12_2_tk=0; $t_12_2_b=0; $t_12_2_p=0; $t_12_2_sp=0;
        $t_12_3_tp=0; $t_12_3_tk=0; $t_12_3_b=0; $t_12_3_p=0; $t_12_3_sp=0;
        $t_12_4_tp=0; $t_12_4_tk=0; $t_12_4_b=0; $t_12_4_p=0; $t_12_4_sp=0;
        $t_12_5_tp=0; $t_12_5_tk=0; $t_12_5_b=0; $t_12_5_p=0; $t_12_5_sp=0;
        $t_12_6_tp=0; $t_12_6_tk=0; $t_12_6_b=0; $t_12_6_p=0; $t_12_6_sp=0;
        $t_12_7_tp=0; $t_12_7_tk=0; $t_12_7_b=0; $t_12_7_p=0; $t_12_7_sp=0;
        $t_12_8_tp=0; $t_12_8_tk=0; $t_12_8_b=0; $t_12_8_p=0; $t_12_8_sp=0;
        $t_12_9_tp=0; $t_12_9_tk=0; $t_12_9_b=0; $t_12_9_p=0; $t_12_9_sp=0;
        $t_12_10_tp=0;$t_12_10_tk=0;$t_12_10_b=0;$t_12_10_p=0;$t_12_10_sp=0;
        $t_12_11_tp=0;$t_12_11_tk=0;$t_12_11_b=0;$t_12_11_p=0;$t_12_11_sp=0;
        $t_12_12_tp=0;$t_12_12_tk=0;$t_12_12_b=0;$t_12_12_p=0;$t_12_12_sp=0;
        $t_12_13_tp=0;$t_12_13_tk=0;$t_12_13_b=0;$t_12_13_p=0;$t_12_13_sp=0;
        $t_12_14_tp=0;$t_12_14_tk=0;$t_12_14_b=0;$t_12_14_p=0;$t_12_14_sp=0;

        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {

            for($i=1; $i<=14;$i++) 
            {
                if($val['q_no_1_12_'.$i]==1){
                    ${"t_12_".$i."_tp"}+=1;
                }
                if($val['q_no_1_12_'.$i]==2){
                    ${"t_12_".$i."_tk"}+=1;
                }
                if($val['q_no_1_12_'.$i]==3){
                    ${"t_12_".$i."_b"}+=1;
                }
                if($val['q_no_1_12_'.$i]==4){
                    ${"t_12_".$i."_p"}+=1;
                }
                if($val['q_no_1_12_'.$i]==5){
                    ${"t_12_".$i."_sp"}+=1;
                }
            }

        }
        for($i=1; $i<=14;$i++) 
        {
            if($i==1){
                $var = ${"t_12_".$i."_tp"};
            } else {
                $var .=",".${"t_12_".$i."_tp"};
            }
            $var .=",".${"t_12_".$i."_tk"};
            $var .=",".${"t_12_".$i."_b"};
            $var .=",".${"t_12_".$i."_p"};
            $var .=",".${"t_12_".$i."_sp"};
        }
        return $var;
        //return $t_12_1_tp.",".$t_12_1_tk.",".$t_12_1_b.",".$t_12_1_p.",".$t_12_1_sp.",".$t_12_2_tp.",".$t_12_2_tk.",".$t_12_2_b.",".$t_12_2_p.",".$t_12_2_sp;
    }
    function get_a_1_13($tahun)
    {
        $t_13_1_oq=0; $t_13_1_q=0; $t_13_1_uq=0;
        $t_13_2_oq=0; $t_13_2_q=0; $t_13_2_uq=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {

            for($i=1; $i<=2;$i++) 
            {
                if($val['q_no_1_13_'.$i]==1){
                    ${"t_13_".$i."_oq"}+=1;
                }
                if($val['q_no_1_13_'.$i]==2){
                    ${"t_13_".$i."_q"}+=1;
                }
                if($val['q_no_1_13_'.$i]==3){
                    ${"t_13_".$i."_uq"}+=1;
                }
            }

        }
        for($i=1; $i<=2;$i++) 
        {
            if($i==1){
                $var = ${"t_13_".$i."_oq"};
            } else {
                $var .=",".${"t_13_".$i."_oq"};
            }
            $var .=",".${"t_13_".$i."_q"};
            $var .=",".${"t_13_".$i."_uq"};
        }
        return $var;
    }
    function get_a_1_14($tahun)
    {
        $t_14_1_sk=0; $t_14_1_k=0; $t_14_1_c=0; $t_14_1_lc=0; $t_14_1_sl=0;
        $t_14_2_sk=0; $t_14_2_k=0; $t_14_2_c=0; $t_14_2_lc=0; $t_14_2_sl=0;
        $t_14_3_sk=0; $t_14_3_k=0; $t_14_3_c=0; $t_14_3_lc=0; $t_14_3_sl=0;
        $t_14_4_sk=0; $t_14_4_k=0; $t_14_4_c=0; $t_14_4_lc=0; $t_14_4_sl=0;
        $t_14_5_sk=0; $t_14_5_k=0; $t_14_5_c=0; $t_14_5_lc=0; $t_14_5_sl=0;
        $t_14_6_sk=0; $t_14_6_k=0; $t_14_6_c=0; $t_14_6_lc=0; $t_14_6_sl=0;
        $t_14_7_sk=0; $t_14_7_k=0; $t_14_7_c=0; $t_14_7_lc=0; $t_14_7_sl=0;
        $t_14_8_sk=0; $t_14_8_k=0; $t_14_8_c=0; $t_14_8_lc=0; $t_14_8_sl=0;
        $t_14_9_sk=0; $t_14_9_k=0; $t_14_9_c=0; $t_14_9_lc=0; $t_14_9_sl=0;
        $t_14_10_sk=0;$t_14_10_k=0;$t_14_10_c=0;$t_14_10_lc=0;$t_14_10_sl=0;
        $t_14_11_sk=0;$t_14_11_k=0;$t_14_11_c=0;$t_14_11_lc=0;$t_14_11_sl=0;
        $t_14_12_sk=0;$t_14_12_k=0;$t_14_12_c=0;$t_14_12_lc=0;$t_14_12_sl=0;
        $t_14_13_sk=0;$t_14_13_k=0;$t_14_13_c=0;$t_14_13_lc=0;$t_14_13_sl=0;
        $t_14_14_sk=0;$t_14_14_k=0;$t_14_14_c=0;$t_14_14_lc=0;$t_14_14_sl=0;

        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {

            for($i=1; $i<=14;$i++) 
            {
                if($val['q_no_1_14_'.$i]==1){
                    ${"t_14_".$i."_sk"}+=1;
                }
                if($val['q_no_1_14_'.$i]==2){
                    ${"t_14_".$i."_k"}+=1;
                }
                if($val['q_no_1_14_'.$i]==3){
                    ${"t_14_".$i."_c"}+=1;
                }
                if($val['q_no_1_14_'.$i]==4){
                    ${"t_14_".$i."_lc"}+=1;
                }
                if($val['q_no_1_14_'.$i]==5){
                    ${"t_14_".$i."_sl"}+=1;
                }
            }

        }
        for($i=1; $i<=14;$i++) 
        {
            if($i==1){
                $var = ${"t_14_".$i."_sk"};
            } else {
                $var .=",".${"t_14_".$i."_sk"};
            }
            $var .=",".${"t_14_".$i."_k"};
            $var .=",".${"t_14_".$i."_c"};
            $var .=",".${"t_14_".$i."_lc"};
            $var .=",".${"t_14_".$i."_sl"};
        }
        return $var;
        //return $t_12_1_tp.",".$t_12_1_tk.",".$t_12_1_b.",".$t_12_1_p.",".$t_12_1_sp.",".$t_12_2_tp.",".$t_12_2_tk.",".$t_12_2_b.",".$t_12_2_p.",".$t_12_2_sp;
    }
    //Belum Bekerja
    function get_a_2_1($tahun)
    {
        $t_1=0;
        $t_2=0;
        $t_3=0;
        $t_4=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            $arr = explode(",", $val['q_no_2_1']);
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
                }

            }
        }
        return $t_1.",".$t_2.",".$t_3.",".$t_4;
    }
    function get_a_2_2($tahun)
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
            $arr = explode(",", $val['q_no_2_2']);
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
    function get_a_2_3($tahun)
    {
        $t_1=0;
        $t_2=0;
        $t_3=0;
        $t_4=0;
        $t_5=0;
        $t_6=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_2_3']==1){
                $t_1+=1;
            }
            if($val['q_no_2_3']==2){
                $t_2+=1;
            }
            if($val['q_no_2_3']==3){
                $t_3+=1;
            }
            if($val['q_no_2_3']==4){
                $t_4+=1;
            }
            if($val['q_no_2_3']==5){
                $t_5+=1;
            }
            if($val['q_no_2_3']==6){
                $t_6+=1;
            }
        }
        return $t_1.",".$t_2.",".$t_3.",".$t_4.",".$t_5.",".$t_6;
    }
    function get_a_2_4($tahun)
    {
        $t_1=0;
        $t_2=0;
        $t_3=0;
        $t_4=0;
        $t_5=0;
        $t_6=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_2_4']==1){
                $t_1+=1;
            }
            if($val['q_no_2_4']==2){
                $t_2+=1;
            }
            if($val['q_no_2_4']==3){
                $t_3+=1;
            }
            if($val['q_no_2_4']==4){
                $t_4+=1;
            }
            if($val['q_no_2_4']==5){
                $t_5+=1;
            }
            if($val['q_no_2_4']==6){
                $t_6+=1;
            }
        }
        return $t_1.",".$t_2.",".$t_3.",".$t_4.",".$t_5.",".$t_6;
    }
    function get_a_2_5($tahun)
    {
        $t_1=0;
        $t_2=0;
        $t_3=0;
        $t_4=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            $arr = explode(",", $val['q_no_2_5']);
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
                }
            }
        }
        return $t_1.", ".$t_2.", ".$t_3.", ".$t_4;
    }
    function get_a_2_6($tahun)
    {
        $t_15_1_tp=0; $t_15_1_tk=0; $t_15_1_b=0; $t_15_1_p=0; $t_15_1_sp=0;
        $t_15_2_tp=0; $t_15_2_tk=0; $t_15_2_b=0; $t_15_2_p=0; $t_15_2_sp=0;
        $t_15_3_tp=0; $t_15_3_tk=0; $t_15_3_b=0; $t_15_3_p=0; $t_15_3_sp=0;
        $t_15_4_tp=0; $t_15_4_tk=0; $t_15_4_b=0; $t_15_4_p=0; $t_15_4_sp=0;
        $t_15_5_tp=0; $t_15_5_tk=0; $t_15_5_b=0; $t_15_5_p=0; $t_15_5_sp=0;
        $t_15_6_tp=0; $t_15_6_tk=0; $t_15_6_b=0; $t_15_6_p=0; $t_15_6_sp=0;
        $t_15_7_tp=0; $t_15_7_tk=0; $t_15_7_b=0; $t_15_7_p=0; $t_15_7_sp=0;
        $t_15_8_tp=0; $t_15_8_tk=0; $t_15_8_b=0; $t_15_8_p=0; $t_15_8_sp=0;

        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {

            for($i=1; $i<=8;$i++) 
            {
                if($val['q_no_2_6_'.$i]==1){
                    ${"t_15_".$i."_tp"}+=1;
                }
                if($val['q_no_2_6_'.$i]==2){
                    ${"t_15_".$i."_tk"}+=1;
                }
                if($val['q_no_2_6_'.$i]==3){
                    ${"t_15_".$i."_b"}+=1;
                }
                if($val['q_no_2_6_'.$i]==4){
                    ${"t_15_".$i."_p"}+=1;
                }
                if($val['q_no_2_6_'.$i]==5){
                    ${"t_15_".$i."_sp"}+=1;
                }
            }

        }
        for($i=1; $i<=8;$i++) 
        {
            if($i==1){
                $var = ${"t_15_".$i."_tp"};
            } else {
                $var .=",".${"t_15_".$i."_tp"};
            }
            $var .=",".${"t_15_".$i."_tk"};
            $var .=",".${"t_15_".$i."_b"};
            $var .=",".${"t_15_".$i."_p"};
            $var .=",".${"t_15_".$i."_sp"};
        }
        return $var;    
    }
    //himpunan alumni
    function get_b_1($tahun)
    {
        $t_1=0;
        $t_2=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_3_1']==1){
                $t_1+=1;
            }
            if($val['q_no_3_1']==2){
                $t_2+=1;
            }
        }
        return $t_1.",".$t_2;
    }
    function get_b_2($tahun)
    {
        $t_1_y=0; $t_1_n=0;
        $t_2_y=0; $t_2_n=0;
        $t_3_y=0; $t_3_n=0;
        $t_4_y=0; $t_4_n=0;
        $t_5_y=0; $t_5_n=0;
        $res = $this->db->where("YEAR(tanggal_post)", $tahun)->get("cc_tracer_study")->result_array();
        foreach($res as $val) {
            if($val['q_no_3_2_1']==1){
                $t_1_y+=1;
            } 
            if($val['q_no_3_2_1']==2) {
                $t_1_n+=1;
            }
            if($val['q_no_3_2_2']==1){
                $t_2_y+=1;
            } 
            if($val['q_no_3_2_2']==2) {
                $t_2_n+=1;
            }
            if($val['q_no_3_2_3']==1){
                $t_3_y+=1;
            } 
            if($val['q_no_3_2_3']==2) {
                $t_3_n+=1;
            }
            if($val['q_no_3_2_4']==1){
                $t_4_y+=1;
            } 
            if($val['q_no_3_2_4']==2) {
                $t_4_n+=1;
            }
            if($val['q_no_3_2_5']==1){
                $t_5_y+=1;
            } 
            if($val['q_no_3_2_5']==2) {
                $t_5_n+=1;
            }
        }
        return $t_1_y.",".$t_1_n.",".$t_2_y.",".$t_2_n.",".$t_3_y.",".$t_3_n.",".$t_4_y.",".$t_4_n.",".$t_5_y.",".$t_5_n;
    }
}