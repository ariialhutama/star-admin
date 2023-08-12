<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori=Kategori::all();
        return view('kategori.index_kategori', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function data(){
        $kategori=Kategori::orderBy('id', 'desc')->get();

        return datatables()
               ->of($kategori)
               ->addIndexColumn()
               ->addColumn('aksi', function($kategori){
                 return '
                    <button onclick="editForm(`'. route('kategori.update', $kategori->id) .'`)" class="btn btn-success
                     text-white"><i class="fa fa-user"></i></button>
                    
                    <button onclick="deleteForm(`'. route('kategori.destroy', $kategori->id) .'`)" title="delete" class="btn btn-danger btn-lg text-white"><i class="fa fa-trash text-white"></i>Delete</button>
                    ';
               })
               ->rawColumns(['aksi'])
               ->make(true);

    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = Kategori::create($request->all());

        return response()->json('Data Berhasil diinput', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
