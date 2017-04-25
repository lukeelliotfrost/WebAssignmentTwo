<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeamReview;

class TeamReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = TeamReview::orderBy('id','DESC')->paginate(5);
      return view('Team_Reviews.index',compact('team_reviews'))
      ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('TeamReviews.create');
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
        'TeamReview' => 'required',
      ]);

      TeamReview::create($request->all());
      return redirect()->route('TeamReviews.index')
      ->with('success','Team Review created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $review = TeamReview::find($id);
      return view('TeamReviews.show',compact('team_reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $review = TeamReview::find($id);
      return view('TeamReviews.edit',compact('team_reviews'));
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
      'TeamReview' => 'required',
      ]);

      TeamReview::find($id)->update($request->all());
      return redirect()->route('TeamReviews.index')
      ->with('success','Team Review updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      TeamReview::find($id)->delete();
      return redirect()->route('TeamReviews.index')
      ->with('success','Team Review deleted successfully');
    }
}
