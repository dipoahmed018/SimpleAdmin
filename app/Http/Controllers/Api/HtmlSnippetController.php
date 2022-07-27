<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\HTMLSnippet\StoreHTMLSnippetRequest;
use App\Http\Requests\HTMLSnippet\UpdateHTMLSnippetRequest;
use App\Models\HTMLSnippet;

class HtmlSnippetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $html_snippets = HTMLSnippet::simplePaginate();
        return response()->json($html_snippets, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHTMLSnippetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHTMLSnippetRequest $request)
    {
        $html_snippet = HTMLSnippet::create($request->validated());
        return response()->json($html_snippet, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HTMLSnippet  $hTMLSnippet
     * @return \Illuminate\Http\Response
     */
    public function show(HTMLSnippet $html_snippet)
    {
        return response()->json($html_snippet);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHTMLSnippetRequest  $request
     * @param  \App\Models\HTMLSnippet  $hTMLSnippet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHTMLSnippetRequest $request, HTMLSnippet $html_snippet)
    {
        $html_snippet->update($request->validated());
        return response()->json([$html_snippet->fresh()], 200);
    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(HTMLSnippet $html_snippet)
    {
        $html_snippet->delete();
        return response()->json(['status' => 'success'], 204);
    }
}
