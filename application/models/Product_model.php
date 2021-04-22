<?php

class Product_model extends CI_Model
{
    function get_rf_products()
    {
        $this->db->where('cat_name', 'RF & Microwave');
        return $this->db->get('products');
    }
    function get_fcp_products()
    {
        $this->db->where('cat_name', 'Electro Mechanical Products');
        return $this->db->get('products');
    }
    function get_emp_products()
    {
        $this->db->where('cat_name', 'Frequency Control Products');
        return $this->db->get('products');
    }
    function get_standard_products()
    {
        return $this->db->get('standard_product');
    }
    function get_navigation_products()
    {
        return $this->db->get('navigation_products');
    }
    function get_navigation_oem()
    {
        return $this->db->get('oem');
    }
    function get_product_data($product_name)
    {
        $this->db->where('product_name', $product_name);
        return $this->db->get('products');
    }
    function get_first_sub_product($prod_name)
    {
        $this->db->where('product_name', $prod_name);
        $this->db->limit(1);
        return $this->db->get('sub_products');
    }
    function get_sub_product_data($prod_name)
    {
        $this->db->where('sub_prod_name', $prod_name);
        $this->db->limit(1);
        return $this->db->get('sub_products');
    }
    function get_product_data_by_name($prod_name)
    {
        $this->db->where('product_name', $prod_name);
        return $this->db->get('products');
    }
    function get_all_sub_products($name)
    {
        $this->db->where('product_name', $name);
        return $this->db->get('sub_products');
    }
    function get_product_links($prod_name)
    {
        // printf($prod_name);
        // die;
        $this->db->where('product_name', $prod_name);
        return $this->db->get('links');
    }
    function get_related_products($name)
    {
        $this->db->where('product_name', $name);
        $q = $this->db->get('products');
        foreach ($q->result() as $row) {
            $cat_name = $row->cat_name;
        }
        $this->db->where('cat_name', $cat_name);
        return $this->db->get('products');
    }
    function get_images_products($prod)
    {
        $this->db->where('product_name', $prod);
        return $this->db->get('images_product');
    }
    function get_images_sub_products($prod)
    {
        $this->db->where('sub_prod_name', $prod);
        return $this->db->get('images_sub_product');
    }
    function get_standard_product_data($prod)
    {
        $this->db->where('product_name', $prod);
        return $this->db->get('standard_product');
    }
    function get_related_standard_products()
    {
        return $this->db->get('standard_product');
    }
    function get_images_standard_products($prod)
    {
        $this->db->where('product_name', $prod);
        return $this->db->get('images_standard_product');
    }
    function get_links_standard_products($prod)
    {
        $this->db->where('product_name', $prod);
        return $this->db->get('links');
    }
    function get_navigation_product_data($name)
    {
        $this->db->where('product_name', $name);
        return $this->db->get('navigation_products');
    }
    function get_related_navigation_products($name)
    {
        $this->db->where('product_name', $name);
        $q = $this->db->get('navigation_products');
        foreach ($q->result() as $row) {
            $oem = $row->oem;
            $this->db->where('oem', $oem);
            return $this->db->get('navigation_products');
        }
    }
    function get_images_navigation_products($name)
    {
        $this->db->where('product_name', $name);
        return $this->db->get('images_si_navigation_product');
    }
    function get_links_navigation_products($name)
    {
        $this->db->where('product_name', $name);
        return $this->db->get('links');
    }
    function get_navigation_products_by_oem($name)
    {
        $this->db->where('oem', $name);
        return $this->db->get('navigation_products');
    }
    function get_si_products()
    {
        return $this->db->get('si_products');
    }
    function get_si_product_details($name)
    {
        $this->db->where('si_product_name', $name);
        return $this->db->get('si_products');
    }
    function get_related_si_products()
    {
        return $this->db->get('si_products');
    }
    function get_images_si_products($n)
    {
        $this->db->where('product_name', $n);
        return $this->db->get('images_si_products');
    }
    function get_links_si_products($n)
    {
        $this->db->where('product_name', $n);
        return $this->db->get('links');
    }
    function get_si_sub_products($name)
    {
        $this->db->where('product_name', $name);
        return $this->db->get('sub_products');
    }
    function get_si_sub_product_data($name)
    {
        $this->db->where('sub_prod_name', $name);
        return $this->db->get('sub_products');
    }
    public function get_images_si_sub_products($name)
    {
        $this->db->where('product_name', $name);
        return $this->db->get('images_si_products');
    }
    function get_si_sub_products_all($name)
    {
        $this->db->where('sub_prod_name', $name);
        $q = $this->db->get('sub_products');
        foreach ($q->result() as $row) {
            $this->db->where('product_name', $row->product_name);
            return $this->db->get('sub_products');
        }
    }
    function get_all_oem()
    {
        return $this->db->get('partners');
    }
}
