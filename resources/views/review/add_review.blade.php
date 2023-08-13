@extends('yield.master')
@section('title','home')
@section('content')
<h1 class="text-center">You can give your feedback to our Page.</h1>
<div
          class="container justify-content-center align-items-center text-center margin-auto d-flex flex-column my-3"
          style="
            background: linear-gradient(rgb(237, 154, 154), rgb(145, 145, 214));
          "
        >
     <form action="{{route('restore.review')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
        @csrf

          <div>
            <label for="group" class="col-sm-3 col-form-label">Your Opinion</label>
            <div class="">
                <select class="form-select" name="group" id="group" aria-label="Default select example">
                    <option disabled selected="">Slect Rate</option>
                    <option value="Good">Good</option>
                    <option value="Very Good">Very Good</option>
                    <option value="Bad">Bad</option>
                    <option value="Very Bad">Very Bad</option>
                  </select>
            </div>
            <textarea
              name="area"
              id="area"
              rows="8"
              cols="40"
              placeholder="You can review here"
              class="my-3"
            ></textarea>
            <button type="submit" class="btn btn-primary me-2 d-flex text-align-center justify-content-center text-center mb-2">Give Review</button>
          </div>
        </div>
      </form>
      @endsection
