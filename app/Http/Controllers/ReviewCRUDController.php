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
      return view('indivreviews.index', compact('indiv_reviews'));
    } //indivreviews

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('indivreviews.create');
    } // /indivreviews/create

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate(request(), [
        'title' => 'required',
        'SportsPersonReview' => 'required'
      ]);

      $indivreview = new IndivReview;

      IndivReview::create([
        'title' => request('title'),
        'SportsPersonReview' =>('SportsPersonReview')
      ]);

      return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('indivreviews.show');
    } // GET /indivreviews/id

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $indivreviews= IndivReview::find($id);
      return view('indivreviews.edit',compact('indiv_reviews'));
    } // GET /indivreviews/id/edit

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
      return redirect()->route('indivreviews.home')
              ->with('success','Review updated successfully');
    } // PATCH /indivreviews/id

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      IndivReview::find($id)->delete();
      return redirect()->route('indivreviews.home')
                ->with('success','Review deleted successfully');
    } // Delete /tasks/id
}
