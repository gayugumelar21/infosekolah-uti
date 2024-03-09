<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcehController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function provaceh()
    {
        // Mengambil data dari database, pada tabel kabupaten
        // QUERY BUILDER
        $title = "Aceh";
        $kabaceh = DB::table('kabupaten')
        ->where('provinsi_id', 2)
        ->get();
        
        // redirect ke views
        return view('indexprovaceh', ['kabaceh'=>$kabaceh, 'title'=>$title]);
    }


    public function kabacehbaratdaya()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Aceh Barat Daya";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 116)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 116)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }

    public function kabacehbesar()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Aceh Besar";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 117)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 117)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kabacehjaya()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Aceh Jaya";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 118)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 118)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kabacehnaganraya()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Nagan Raya";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 119)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 119)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kabacehselatan()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Aceh Selatan";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 120)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 120)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kabacehsingkil()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Aceh Singkil";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 121)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 121)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kabacehtamiang()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Aceh Tamiang";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 122)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 122)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kabacehtengah()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Aceh Tengah";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 123)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 123)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kabacehtenggara()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Aceh Tenggara";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 124)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 124)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kabacehtimur()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Aceh Timur";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 125)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 125)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kabacehutara()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Aceh Utara";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 126)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 126)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }


    public function kabbenermeriah()
    {
        $nm_provinsi = "Aceh";
        $nm_kabupaten = "Bener Meriah";
        // Mengambil data dari database, pada tabel daftar_sekolah
        // QUERY BUILDER
        $dafsekolah_sma = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 127)
                    ->where('category', 'SMA') // Tambahkan kondisi untuk category SMA
                    ->get();

        $dafsekolah_smk = DB::table('daftar_sekolah')
                    ->where('kabupaten_id', 127)
                    ->where('category', 'SMK') // Tambahkan kondisi untuk category SMK
                    ->get();

        // redirect ke views
        return view('tampilkabaceh', ['dafsekolah_sma'=>$dafsekolah_sma, 'dafsekolah_smk'=>$dafsekolah_smk, 'nm_provinsi'=>$nm_provinsi, 'nm_kabupaten'=>$nm_kabupaten]);
    }
    

}
