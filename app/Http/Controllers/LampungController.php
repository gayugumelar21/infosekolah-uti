<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LampungController extends Controller
{
    // Menampilkan list Kabupaten Lampung
    public function provlampung()
    {
        // Mengambil data dari database, pada tabel kabupaten
        // QUERY BUILDER
        $title = "Lampung";
        $kablampung = DB::table('kabupaten')
        ->where('provinsi_id', 1)
        ->get();
        
        // redirect ke views
        return view('indexprovlampung', ['kablampung'=>$kablampung, 'title'=>$title]);
    }

    public function kablampungbarat()
    {
        $nm_provinsi = "Lampung";
        $nm_kabupaten = "Lampung Barat";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 101)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 101)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkablampung', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kablampungselatan()
    {
        $nm_provinsi = "Lampung";
        $nm_kabupaten = "Lampung Selatan";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 102)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 102)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkablampung', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kablampungtengah()
    {
        $nm_provinsi = "Lampung";
        $nm_kabupaten = "Lampung Tengah";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 103)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 103)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkablampung', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kablampungtimur()
    {
        $nm_provinsi = "Lampung";
        $nm_kabupaten = "Lampung Timur";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 104)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 104)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkablampung', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kablampungutara()
    {
        $nm_provinsi = "Lampung";
        $nm_kabupaten = "Lampung Utara";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 105)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 105)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkablampung', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function pesawaran()
    {
        $nm_provinsi = "Lampung";
        $nm_kabupaten = "Pesawaran";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 107)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 107)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkablampung', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function tanggamus()
    {
        $nm_provinsi = "Lampung";
        $nm_kabupaten = "Tanggamus";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 109)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 109)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkablampung', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function tulangbawang()
    {
        $nm_provinsi = "Lampung";
        $nm_kabupaten = "Tulang Bawang";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 110)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 110)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkablampung', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function waykanan()
    {
        $nm_provinsi = "Lampung";
        $nm_kabupaten = "Way Kanan";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 112)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 112)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkablampung', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function bandarlampung()
    {
        $nm_provinsi = "Lampung";
        $nm_kabupaten = "Bandar Lampung";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 113)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 113)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkablampung', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function metro()
    {
        $nm_provinsi = "Lampung";
        $nm_kabupaten = "Metro";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 114)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 114)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkablampung', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }



}
