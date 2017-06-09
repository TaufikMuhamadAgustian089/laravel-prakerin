<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coba;

class CobaController extends Controller
{
    //
    public function test ()
    {
    	$a = coba::all();
    	return $a;
    }

    public function testt ($id)
    {
    	$a = coba::find($id);
    	return $a;
    }

    public function indexa ()
    {
        $a = coba::all();
        return view ('coba', compact('a'));
    }
    public function indexi ()
    {
        $buah = ['Mangga', 'Jeruk', 'Apel', 'Anggur', 'Manggis'];
        return view ('buah', compact('buah'));
    }

    public function indexh ($id)
    {
        $tiga = ['hewan' => ['Kucing','Ikan'],
                 'kendaraan' => ['mobil', 'motor'],
                 'laptop' => ['asus', 'acer']];
                 $haha = $tiga[$id];
                 return view ('tiga', compact('haha'));
    }

    public function indexn ()
    {
        $nama = ['Taufik', 'Aditya', 'Sodikin', 'Didin', 'Dani'];
        return view ('nama', compact('nama'));
    }
}
