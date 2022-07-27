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
        //
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

        $pdf = PDFDownload::create($request->only(['title'] + ['file' => $path]));
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
        Storage::disk('public')->delete($pdf_download->file);
        $path = $request->file('file')->store('pdf', 'public');
        $pdf_download->update($request->only(['title']) + ['file' => $path]);
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
        $pdf_download->delete();
    }
}
