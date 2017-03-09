<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiswaController extends Controller
{
    //
    public function index(){
    	$halaman = 'siswa';
    	$siswa = ['Ramus Lerdorf', 'Francesco Totti', 'Diego Perotti', 'Mohammed Salah'];
    	return view('siswa.index', compact('halaman', 'siswa'));
    }
}
