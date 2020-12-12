<?php
class rolemodel extends CI_Model
{
    // Fungsi Model yang dipake user dan admin
    public function getProducts()
    {
        return $this->db->get('products')->result();
    }
    public function getSupplier()
    {
        return $this->db->get('supplier')->result();
    }

    public function addContacts($data)
    {
        return $this->db->insert('contacts', $data);
    }

    // Fungsi model yang khusus dipake admin
    public function getMessages()
    {
        return $this->db->get('contacts')->result();
    }

    public function removeMessages($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contacts');
    }

    //product
    public function addProducts($data)
    {
        return $this->db->insert('products', $data);
    }

    public function removeProducts($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('products');
    }

    public function getProductsById($id)
    {
        return $this->db->get_where('products', ['id' => $id])->row_array();
    }

    public function ubahDataProducts()
    {
        $data = [
            "title" => $this->input->post('title', true),
            "description" => $this->input->post('description', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('products', $data);
    }

    //supplier
    public function addSupplier($data)
    {
        return $this->db->insert('supplier', $data);
    }

    public function removeSupplier($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('supplier');
    }

    public function getSupplierById($id)
    {
        //get data supplier based on id 
        return $this->db->get_where('supplier', ['id' => $id])->row_array();
    }

    public function ubahDataSupplier()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "kontak" => $this->input->post('kontak', true),
            "profile" => $this->input->post('profile', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('supplier', $data);
    }
}
