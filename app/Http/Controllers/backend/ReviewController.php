<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
   public function AllReview(){
    $reviews = Review::all();
    return view('review.my_review',compact('reviews'));
   }

   public function AddReview(){
    return view('review.add_review');
   }

   public function ResotreReview(Request $request){
    Review::insert([
        'group' => $request->group,
        'area' => $request->area
    ]);
    return redirect()->route('all.review');
   }

   public function EditReview($id){
    $review = Review::findOrFail($id);
    return view('review.edit_review',compact('review'));
   }

   public function UpdateReview(Request $request){
    $uid = $request->id;
    Review::findOrFail($uid)->update([
        'group'=>$request->group,
        'area'=>$request->area
    ]);
    return redirect()->route('all.review');
   }

   public function DeleteReview($id){
    Review::findOrFail($id)->delete();
    return redirect()->route('all.review');

   }
}
