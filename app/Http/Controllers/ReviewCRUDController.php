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
      // Get all Reviews from the database and display them
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
      // Show Create view
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
      // Request Title and the Review to be stored
      $this->validate($request, [
        'title' => 'required',
        'SportsPersonReview' => 'required'
      ]);
      // Store the Review and return back with the success message
      IndivReview::create($request->all());
            return back()->with('success','Review created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(IndivReview $review)
    {
      // Return show view
      return view('indivreviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(IndivReview $review)
    {
      // Return edit view
      return view('indivreviews.edit',compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IndivReview $review)
    {
      // Request Title and the Review to be updated
      $this->validate($request, [
        'title' => 'required',
        'SportsPersonReview' => 'required',
      ]);
      // UPdate the review and return back
      $review->update($request->all());
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndivReview $review)
    {
      // Select Review to delete and return back with the success message
      $review->delete();
      return back()->with('success','Review deleted successfully');
    }
}
