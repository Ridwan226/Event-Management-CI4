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

    if ($this->db->affectedRows() > 0) {
      return redirect()->to(site_url('gawe'))->with('success', 'Berhasil DiTambah');
    }
  }

  public function editGawe($id)
  {
    if ($id != null) {
      $query = $this->db->table('gawe')->getWhere(['id_gawe' => $id]);

      // print_r($query);

      if ($query->resultID->num_rows > 0) {
        // echo 'lanjut Edit';
        $data['gawe'] = $query->getRow();
        return view('gawe/edit', $data);
      } else {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      }
    } else {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
  }

  public function updateGawe($id)
  {
    $data = $this->request->getPost();

    $query = $this->db->table('gawe')->getWhere(['id_gawe' => $id]);

    if ($query->resultID->num_rows < 0) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    unset($data['_method']);

    $this->db->table('gawe')->where(['id_gawe' => $id])->update($data);

    if ($this->db->affectedRows() > 0) {
      return redirect()->to(site_url('gawe'))->with('success', 'Berhasil DiEdit');
    }
  }


  public function delGawe($id)
  {
    $query = $this->db->table('gawe')->getWhere(['id_gawe' => $id]);

    if ($query->resultID->num_rows < 0) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    $this->db->table('gawe')->where(['id_gawe' => $id])->delete();
    return redirect()->to(site_url('gawe'))->with('success', 'Berhasil DiHapus');
  }
}
