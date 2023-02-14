<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function pdf(Request $request)
    {
        if ($request->type == 'pdf') {
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('admin.pdf');
            return $pdf->stream();
        } else {
            return "excel";
        }
    }
}
