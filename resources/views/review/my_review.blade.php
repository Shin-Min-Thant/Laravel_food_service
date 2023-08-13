@extends('yield.master')
@section('title','home')
@section('content')



<form action="{{route('add.review')}}" enctype="multipart/form-data">
    <div
      class="container justify-content-center align-items-center text-center margin-auto d-flex flex-column my-3"
      style="
        background: linear-gradient(rgb(237, 154, 154), rgb(145, 145, 214));
      "
    >
      <div>
        <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>Sl</th>
                  <th>Review</th>
                  <th>Comment</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>


@foreach ($reviews as $key=>$review)


                <tr>
                  <td>{{$key++}}</td>
                  <td>{{$review->group}}</td>
                  <td>{{$review->area}}</td>
                  <td>
                      <a href="{{route('edit.review',$review->id)}}" class="btn btn-inverse-warning">Edit</a>
                      <a href="{{route('delete.review',$review->id)}}" id="delete" class="btn btn-inverse-danger">Delete</a>

                  </td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        <div class="mt-3">
            <button class="btn btn-lg btn-secondary w-50 fs-6 mb-3" type="submit">Add Review</button>
        </div>
      </div>
    </div>
  </form>
</div>


@endsection
