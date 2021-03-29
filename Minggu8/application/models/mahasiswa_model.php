<?php
class mahasiswa_model extends CI_Model {
  public function get_data(){
    $data_mahasiswa = [
        ['Nama'=>'GAMAN','Prodi'=>'TIF'],
        ['Nama'=>'PAMUNGKAS','Prodi'=>'MIF'],
        ['Nama'=>'PANDU','Prodi'=>'TKK']
      ];
    return $data_mahasiswa;
  }
}