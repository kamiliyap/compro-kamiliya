<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        return "Halo saya sedang belajar laravel";
    }

    public function create()
    {
        return view('create');
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function kurang()
    {
        return view('kurang');
    }

    public function kali()
    {
        return view('kali');
    }

    public function bagi()
    {
        return view('bagi');
    }

    // public function tambahAction(Request $request)
    // {
    //     // ubah ke angka (float atau integer)
    //     $angka1 = (float) $request->angka1;
    //     $angka2 = (float) $request->post('angka2');

    //     $hasil = $angka1 + $angka2;

    //     return "Hasil penjumlahan dari $angka1 + $angka2 adalah $hasil";
    // }
        public function tambahAction(Request $request)
    {
        // ubah ke angka (float atau integer)
        $angka1 = (float) $request->angka1;
        $angka2 = (float) $request->angka2;

        $hasil = $angka1 + $angka2;

        return view('tambah', compact('hasil'));
    }

    public function bagiAction(Request $request)
    {
        $angka1 = (float) $request->angka1;
        $angka2 = (float) $request->angka2;

        if ($angka2 == 0) {
            $hasil = 'Tidak bisa membagi dengan nol!';
        } else {
            $hasil = $angka1 / $angka2;
        }

        return view('bagi', compact('hasil'));
    }


    public function kaliAction(Request $request)
    {
        $angka1 = (float) $request->angka1;
        $angka2 = (float) $request->angka2;

        $hasil = $angka1 * $angka2;

        // kirim hasil ke view
        return view('kali', compact('hasil'));
    }
    public function kurangAction(Request $request)
    {
        // ubah ke angka (float atau integer)
        $angka1 = (float) $request->angka1;
        $angka2 = (float) $request->angka2;

        $hasil = $angka1 - $angka2;

        return view('kurang', compact('hasil'));
    }

}
