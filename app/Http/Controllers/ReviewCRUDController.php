<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\IndivReview;

class ReviewCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $indivreviews = IndivReview::all();
      return view('indivreviews.index', compact('indivreviews'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('indivreviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
        'SportsPersonReview' => 'required'
      ]);

      IndivReview::create($request->all());
            return redirect()->route('indivreviews.index')
                            ->with('success','Review created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $review = IndivReview::find($id);
      return view('indivreviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $indivreviews= IndivReview::find($id);
      return view('indivreviews.edit',compact('indivreviews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'title' => 'required',
        'SportsPersonReview' => 'required',
      ]);

      IndivReview::find($id)->update($request->all());
      return redirect()->route('indivreviews.index')
              ->with('success','Review updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      IndivReview::find($id)->delete();
      return redirect()->route('indivreviews.index')
                ->with('success','Review deleted successfully');
    }
}
