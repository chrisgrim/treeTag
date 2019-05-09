<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRGeneratorController extends Controller
{
	public function index()
	{
		return view('qrCode');
	}
    public function store(Request $request)
    {
    	$filename = 'tester.png';
    	$result = QrCode::format('png')->size(500)->generate(request('url'), 'storage/images/'. $filename);

    	return view('qrCode', compact('filename'));
    }
}
