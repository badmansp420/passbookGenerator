<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePassbook()
    {
        $data = [
            'title' => "Passbook Generator",
            'date' => date('d-m-Y')
        ];

        $pdf = Pdf::loadView('generatePassbook', $data);
        $pdf->set_option('isRemoteEnabled', true);
        return $pdf->download('passbook.pdf');
    }
}
