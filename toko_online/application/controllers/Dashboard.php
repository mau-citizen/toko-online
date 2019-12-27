<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->ModelBarang->tampilBarang()->result_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function addToCart($id)
    {
        $barang = $this->ModelBarang->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga_brg,
            'name'    => $barang->nama_brg
        );

        $this->cart->insert($data);
        redirect('dashboard');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/index');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses";
        }
        
    }

    // ini yang lama, yg baru yg atas
    // public function proses_pesanan()
    // {
    //     $this->cart->destroy();
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('proses_pesanan');
    //     $this->load->view('templates/footer');
    // }
}