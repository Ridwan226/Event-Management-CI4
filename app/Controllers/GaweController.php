<?php

namespace App\Controllers;

class GaweController extends BaseController
{
  public function index()
  {
   // Query Builder
    $builder = $this->db->table('gawe');
    $query   = $builder->get()->getResult();
    
    
    // 2 query Manual
    
    // $query = $this->db->query("SELECT * FROM gawe")->getResult();
    
    return view('gawe/get', compact('query'));
  }
  
  public function createData()
  {
    return view('gawe/add');
    
  }
  
  public function storeGawe()
  {
    $data = $this->request->getPost();
    
    $this->db->table('gawe')->insert($data);
    
    if($this->db->affectedRows() > 0) {
      return redirect()->to(site_url('gawe'))->with('success', 'Berhasil DiTambah');
    }
    
  }
  
}
