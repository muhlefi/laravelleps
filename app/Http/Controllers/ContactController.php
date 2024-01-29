<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\LewaCoffee;


class ContactController extends Controller
{
    private $contacts = [];

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor_hp' => 'required',
            'menu' => 'required|in:1,2,3,4,5,6',
            'jumlah_pesanan' => 'required|numeric',
            'alamat' => 'required',
            'pesan' => 'required',
        ]);

        LewaCoffee::create($validatedData);
        return redirect('/contact')->with('success', 'Orderanmu telah terekam! Akan kami konfirmasikan via Whatsapp untuk harga & jadwal pengiriman. ');
    }

    public function showDashboard()
    {
        // Ambil data dari tabel lewa_coffees
        $orders = LewaCoffee::all();

        // Tampilkan halaman dashboard tanpa layout
        return view('dashboard', compact('orders'));
    }

    public function editOrder($id)
    {
        $order = LewaCoffee::find($id);
        return view('edit', compact('order'));
    }

    public function updateOrder(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            // Tambahkan validasi untuk kolom lainnya sesuai kebutuhan
        ]);
    
        $order = LewaCoffee::find($id);
        $order->update($validatedData);
    
        return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui');
    }
    
    public function deleteOrder($id)
    {
        $order = LewaCoffee::find($id);
        $order->delete();
    
        return redirect()->route('dashboard')->with('success', 'Data berhasil dihapus');
    }
    

    }
