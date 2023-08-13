@extends('yield.master')
@section('title','home')
@section('content')
<h1 class="text-center">Edit your Review</h1>
<div
          class="container justify-content-center align-items-center text-center margin-auto d-flex flex-column my-3"
          style="
            background: linear-gradient(rgb(237, 154, 154), rgb(145, 145, 214));
          "
        >
     <form action="{{route('update.review')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
        @csrf

          <div>
            <input type="hidden" name="id" value="{{$review->id}}">
            <label for="group" class="col-sm-3 col-form-label">Your Opinion</label>
            <div class="">
                <select class="form-select" name="group" id="group" aria-label="Default select example">
                    <option disabled selected="">Slect Rate</option>
                    <option value="Good"{{$review->group == 'Good' ? 'selected' : ''}}>Good</option>
                    <option value="Very Good"{{$review->group == 'Very Good' ? 'selected' : ''}}>Very Good</option>
                    <option value="Bad"{{$review->group == 'Bad' ? 'selected' : ''}}>Bad</option>
                    <option value="Very Bad"{{$review->group == 'Very Bad' ? 'selected' : ''}}>Very Bad</option>
                  </select>
            </div>
            <textarea
              name="area"
              id="area"
              rows="8"
              cols="40"
              placeholder="You can review here"
              class="my-3"
            >{{$review->area}}</textarea>
            <button type="submit" class="btn btn-primary me-2 d-flex text-align-center justify-content-center text-center mb-2">Update Review</button>
          </div>
        </div>
      </form>
      @endsection
