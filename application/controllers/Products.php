<?php

/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 29.5.2016
 * Time: 7:09
 */
class Products extends CI_Controller
{
    // osnovna stran seznam izdelkov - zavihek domov 
    public function index($page = 'products')
    {
        $this->load->model('Model_products');
        
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }
        else
        {
            $products = $this->Model_products->getProducts();
            
            // preoblikovanje datuma v slovenski zapis datuma 
            foreach ($products as $product)
            {
                $product->production_date = date('d.m.Y', strtotime($product->production_date));
                $product->expiry_date = date('d.m.Y', strtotime($product->expiry_date));
            }
            $data = array(
                'title' => 'Seznam izdelkov',
                'main_heading' => 'Seznam vseh izdelkov',
                'products' => $products

            );
            
            $this->parser->parse('templates/header', $data);
            $this->parser->parse('pages/products', $data);
            $this->parser->parse('templates/footer', $data);
        }
    }
    
    // O aplikaciji zavihek about 
    public function about($page = 'about')
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }
        else
        {
            $data = array(
                'title' => 'O aplikaciji',
                'main_heading' => 'O Aplikaciji FoodPlus Products'
            );
            $this->parser->parse('templates/header', $data);
            $this->parser->parse('pages/about', $data);
            $this->parser->parse('templates/footer', $data);
        }
    }
    
    // obrazec za vnos podatkov nov izdelek 
    public function addProductView()
    {
        if(!file_exists(APPPATH.'views/pages/add_product.php'))
        {
            show_404();
        }
        else
        {
            $this->load->helper('form');

            $data = array(
                'title' => 'Dodaj Izdelek',
                'main_heading' => 'Vnesi podatke o izdelku'
            );
            
            $this->parser->parse('templates/header', $data);
            $this->parser->parse('pages/add_product', $data);
            $this->parser->parse('templates/footer', $data);
        }
        
    }
    // shrani nov izdelek v bazo 
    public function addProduct()
    {
        $this->load->model('Model_products');
        $this->load->helper('form');
        
        if($_POST)
        {
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'production_date' => $this->input->post('production_date'),
                'expiry_date' => $this->input->post('expiry_date'),
                'price' => $this->input->post('price'),
                'currency' => $this->input->post('currency'),
                'ean_code' => $this->input->post('ean_code'),
                'weight' => $this->input->post('weight'),
                'weight_unit' => $this->input->post('weight_unit')
            );

            $this->Model_products->insertProduct($data);
            return redirect(base_url());
        }

    }
    // vse podrobnosti o izdelku
    public function productDetails($productId)
    {
        if(!file_exists(APPPATH.'views/pages/product_details.php'))
        {
            show_404();
        }
        else
        {
            $this->load->model('Model_products');
            $product = $this->Model_products->getSingleProduct($productId);

            foreach ($product as   $item)
            {
                $item->production_date = date('d.m.Y', strtotime($item->production_date));
                $item->expiry_date = date('d.m.Y', strtotime($item->expiry_date));
            }

            $data = array(
                'title' => 'Izdelek podrobnosti',
                'main_heading' => 'Podrobnosti o izdelku',
                'product' => $product
            );
            
            $this->parser->parse('templates/header', $data);
            $this->parser->parse('pages/product_details', $data);
            $this->parser->parse('templates/footer', $data);
        }
    }

    // obrazec za urejanje podatkov o izdelku
    public function editProductView($productId)
    {
        if(!file_exists(APPPATH.'views/pages/edit_product.php'))
        {
            show_404();
            
        }
        else
        {
            $this->load->model('Model_products');
            $this->load->helper('form');
            
            $product = $this->Model_products->getSingleProduct($productId);
            $data = array(
                'title' => 'Uredi Izdelek',
                'main_heading' => 'Uredi podatke o izdelku',
                'product' => $product
            );

            $this->parser->parse('templates/header', $data);
            $this->parser->parse('pages/edit_product', $data);
            $this->parser->parse('templates/footer', $data);
        }
        
    }
    // posodobi podatke o izdelku v bazi
    public function updateProduct($productId)
    {
        $this->load->model('Model_products');
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'production_date' => $this->input->post('production_date'),
            'expiry_date' => $this->input->post('expiry_date'),
            'price' => $this->input->post('price'),
            'currency' => $this->input->post('currency'),
            'ean_code' => $this->input->post('ean_code'),
            'weight' => $this->input->post('weight'),
            'weight_unit' => $this->input->post('weight_unit')
        );

        $this->Model_products->updateProduct($data, $productId);
        return redirect(base_url('/products/'.$productId));
    }

    
    // brisanje izdelkov 
    public function deleteProduct($prodctId)
    {
        $this->load->model('Model_products');
        $this->Model_products->deleteProduct($prodctId);
        
        return redirect(base_url());
    }

}