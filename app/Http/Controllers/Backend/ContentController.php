<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Content\ContentRequest;
use App\Models\Content\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    protected $content;

    function __construct(Content $content)
    {
        $this->content = $content;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contents = $this->content->get();

        return view('backend.content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.content.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentRequest $request)
    {
        //
        if($content = $this->content->create($request->data())) {
            return redirect()->route('content.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(content $content)
    {
        //
        
        return view('backend.content.edit', compact('content'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(contentRequest $request, content $content)
    {
        //
        if ($content->update($request->data())) {
            $content->fill([
                'slug' => $request->title,
            ])->save();
        }

        return redirect()->route('content.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $content = $this->content->find($id);
        $content->delete();
        return redirect()->route('content.index')->withSuccess(trans('content has been deleted'));
    }
    
}
