<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PDFDownload\StorePDFDownloadRequest;
use App\Http\Requests\PDFDownload\UpdatePDFDownloadRequest;
use App\Models\PDFDownload;
use Illuminate\Support\Facades\Storage;

class PDFDownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(PDFDownload::simplePaginate(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePDFDownloadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePDFDownloadRequest $request)
    {
        $path = $request->file('file')->store('pdf', 'public');
        $input = $request->only(['title']) + ['file' => $path];

        $pdf = PDFDownload::create($input);
        return response()->json($pdf, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PDFDownload  $pDFDownload
     * @return \Illuminate\Http\Response
     */
    public function show(PDFDownload $pdf_download)
    {
        return response()->json($pdf_download);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePDFDownloadRequest  $request
     * @param  \App\Models\PDFDownload  $pDFDownload
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePDFDownloadRequest $request, PDFDownload $pdf_download)
    {
        $input = $request->only('title');
        if($request->hasFile('file')) {
            Storage::disk('public')->delete($pdf_download->file);
            $path = Storage::disk('public')->putFile('pdf', $request->file('file'));
            $input = $input + ['file' => $path];
        }
        $pdf_download->update($input);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PDFDownload  $pDFDownload
     * @return \Illuminate\Http\Response
     */
    public function destroy(PDFDownload $pdf_download)
    {
        Storage::disk('public')->delete($pdf_download->file);
        // dd($pdf_download->file);
        $pdf_download->delete();
    }
}
