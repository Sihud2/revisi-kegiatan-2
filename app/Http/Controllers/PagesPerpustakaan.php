<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\User;
use DB;
// use App\Http\Controllers\;

class PagesPerpustakaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function daftar()
    {
        // echo "Ini Kelas Daftar Buku";
        $buku = Buku::select('kode_buku', 'nama_buku', 'nama_pengarang')->get();
        // $daftar_buku = DB::table('buku')->select('kode_buku', 'nama_buku', 'nama_pengarang')->get();
        return view('perpustakaan.daftarbuku', compact('buku'));
    }

    public function pengunjung()
    {
        $users = User::select('name', 'jurusan')->get();
        return view('perpustakaan.pengunjung', compact('users'));
    }

    public function detail()
    {
        $users = DB::table('users')
            ->join('buku', 'buku.kode_buku', "=" ,'users.id_buku')
            ->select('buku.kode_buku', 'buku.nama_buku', 'users.name', 'users.jurusan', 'users.tanggal_pinjam', 
                    'users.tanggal_pengembalian')
            ->get();
        return view('perpustakaan.data_peminjam')->with('users', $users);
    }

    public function index()
    {
        $buku = Buku::all();
        return view('perpustakaan.home', compact('buku'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $users = DB::table('users')
        ->join('buku', 'buku.kode_buku', "=" ,'users.id_buku')
        ->select('buku.kode_buku', 'buku.nama_buku', 'users.name', 'users.jurusan', 'users.tanggal_pinjam', 
                'users.tanggal_pengembalian')
        ->where('name', 'like', "%".$cari."%")
        ->paginate(1);

        // return view('perpustakaan.cari', ['users'=>$users]);
        return view('perpustakaan.cari', compact('cari', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
