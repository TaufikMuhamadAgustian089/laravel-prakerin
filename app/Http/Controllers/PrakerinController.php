<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    public function percobaan()
    {
    	$a = "Taufik Muhamad A";
    	$b = "Herry Kustian";
    	$c = "Asep berlian";
    	$d = "Eka Ekaan";
    	$e = "Adi Nurjaman";
    	return view('index', compact('a', 'b', 'c', 'd', 'e'));
    
    	
    	
    }



    public function percobaan1()
    {
    	$a1 = "Taufik A";
    	$b1 = "Herry K";
    	$c1 = "Asep ";
    	$d1 = "Eka ";
    	$e1 = "Adi ";
    	return view('index1', compact('a1', 'b1', 'c1', 'd1', 'e1'));
    
    	
    	
    }



    public function percobaan2()
    {
    	$a2 = "Taufik amad";
    	$b2 = "Herry ujang";
    	$c2 = "Asep berlari";
    	$d2 = "Eka Wayang";
    	$e2 = "Adi Nur";
    	return view('index2', compact('a2', 'b2', 'c2', 'd2', 'e2'));
    
    	
    	
    }

    public function percobaan3()
    {
    	$a3 = "Taufik Muhamad";
    	$b3 = "Herry awa";
    	$c3 = "Asep ian";
    	$d3 = "Eka E";
    	$e3 = "Adi N";
    	return view('index3', compact('a3', 'b3', 'c3', 'd3', 'e3'));
    
    	
    	
    }



    public function percobaan4()
    {
    	$a4 = "Taufik Adam";
    	$b4 = "Herry Herryan";
    	$c4 = "Asep berlin";
    	$d4 = "Eka aan";
    	$e4 = "Adi jaman";
    	return view('index4', compact('a4', 'b4', 'c4', 'd4', 'e4'));
    
    	
    	
    }
    public function param($id)
    {
    	return view('welcome');
    }

    public function parameter($a)
    {
    	return view('welcome2', compact('a'));
    }
}