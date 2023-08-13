@extends('yield.master')
@section('title','home')
@section('content')




<section>
    <div class="container gradient">
    <div class="begin"></div>
     <div class="text-img  text-center">
        <h2 class="">Welcome to our Food Festival</h2>
        <p >You can buy food with flexible price</p>
     </div>

    </div>
</section>

<section>
    <div class="container review">
        <h4 class="text-center py-3 buy mt-3 ">You can buy many foods in one place</h4>
          <!-- Card1 -->
            <div class="row match-to-row choose text-center">
                <div class="car col-lg-4 col-md-6 py-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('assets/img/food/main food/burger.jpg')}}"   alt="">
                        </div>
                        <div class="card-footer">
                            <p>You can choose other types of burger.</p>
                            <a href="burger.html" class="btn btn-secondary">See More...</a>
                        </div>
                    </div>
                </div>

                <!--Card2  -->

                <div class="car col-lg-4 py-3 col-sm-12 col-md-6">
                   <div class="card">
                    <div class="card-body">
                        <img src="{{asset('assets/img/food/main food/chicken.jpg')}}" alt="">
                    </div>
                    <div class="card-footer">
                        <p>You can choose other types of chicken.</p>
                        <a href="chcken.htm" class="btn btn-secondary">See More...</a>

                    </div>
                   </div>

                </div>

                 <!-- Card3  -->
                <div class="car col-lg-4 py-3 col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('assets/img/food/main food/pasta.jpeg')}}" alt="">
                        </div>
                        <div class="card-footer">
                            <p>You can choose other types of pasta.</p>
                            <a href="pasta.html" class="btn btn-secondary">See More...</a>
                        </div>
                    </div>
                </div>

                      <!-- Card 4 -->
                <div class="car col-lg-4 py-3 col-sm-12 col-md-6">
                   <div class="card">
                    <div class="card-body">
                        <img src="{{asset('assets/img/food/main food/piza.jpg')}}" alt="">
                    </div>
                    <div class="card-footer">
                        <p>You can choose other types of pizza.</p>
                            <a href="pizza.html" class="btn btn-secondary">See More...</a>
                    </div>
                   </div>
                </div>

                <!-- Card 5 -->
                <div class="car col-lg-4 py-3 col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('assets/img/food/main food/shshi.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="card-footer">
                            <p>You can choose other types of sushi.</p>
                            <a href="sushi.html" class="btn btn-secondary">See More...</a>
                        </div>
                    </div>
                </div>

                <!--card 6  -->
                <div class="car col-lg-4 py-3 col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('assets/img/food/main food/desert.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="card-footer">
                            <p>You can choose other types of dessert.</p>
                            <a href="dessert.htm" class="btn btn-secondary">See More...</a>
                        </div>
                    </div>

            </div>



    </div>
</section>



<!-- Sigup -->
<section>
    <div class="container" style="background: linear-gradient(rgb(219, 185, 237),rgb(252, 238, 149));">
        <div class="row">
          <div class="col-lg-6">
           <div class="d-flex flex-wrap border shadow box-shadow text-center justify-content-center py-3 bg-light" ;
           ;>
            <img src="{{asset('assets/img/food/main food/img1.jpg')}}" alt="" class="img-fluid" style="width:300px">
            <img src="{{asset('assets/img/food/main food/img-2.jpg')}}" alt="" class="img-fluid" style="width:300px">
            <img src="{{asset('assets/img/food/main food/img3.jpg')}}" alt="" class="img-fluid" style="width:300px">
            <img src="{{asset('assets/img/food/main food/img4.jpg')}}" alt="" class="img-fluid" style="width:300px">
           </div>
          </div>
          <div
            class="col-lg-6 text-center align-items-center justify-content-center"
          >
            <div class="py-3">
                <div class="text-center">
                    <h3 class="">We can give you many happiness about our food</h3>
                  </div>

                  <div class="text-center ">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse,
                      laboriosam. Tenetur maiores possimus, quaerat labore, hic tempore
                      ex consectetur rerum odio itaque praesentium in nobis aliquam
                      quasi dignissimos. Impedit, fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. In blanditiis ut doloribus ex aspernatur, natus quidem earum enim fuga accusamus est sit veniam asperiores corporis tempora, minus quis? Quasi, id?
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam porro obcaecati temporibus quia totam nemo tempore vel numquam asperiores provident voluptates corrupti praesentium error quaerat atque quo perferendis, illo magni.
                    </p>
                  </div>

                    <button class=" btn btn-primary mx-3"><a href="signup.html" class="nav-link">Sign Up</a></button>

            </div>
          </div>
        </div>
      </div>
</section>

@endsection
