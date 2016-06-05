<?php

/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 29.5.2016
 * Time: 7:17
 */
class Model_products extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // pridobi vse zapise iz tabele
    public function getProducts()
    {
        $query = $this->db->query("SELECT * FROM products ORDER BY name ASC ");
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }
    }
    // shrani podatke v bazo
    public function insertProduct($data)
    {
        $table = 'products';
        return $this->db->insert($table, $data);
    }

    //podatki o posameznem izdelku
    public function getSingleProduct($productId)
    {
        $table = 'products';
        $productData = $this->db->get_where($table, array('id' => $productId));
        return $productData->result();
    }

    // posodobi podatke o izdelku
    public function updateProduct($data, $productId)
    {
        $table = 'products';
        $this->db->set($data);
        $this->db->where('id ', $productId );
        return $this->db->update($table, $data);
    }
    
    // brisanje izdelkov 
    public function deleteProduct($id)
    {
        $table = 'products';
        return $this->db->delete($table, 'id = '.$id);
    }




}