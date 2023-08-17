<div class="nav">
    <div class="container sticky-top ">
        <nav class="navbar navbar-expand-lg shadow bg-body p-3 mb-5 intro">
            <a href="{{ url('/') }}" class="nav-link navbar-brand ladona">Ladona
               <br> <span class="shop">Food shopping</span></a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a href="" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" ><span>Food</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="{{route('userBurgur')}}" class="nav-link">Burgur</a></li>
                            <div class="dropdown-divider"></div>

                            <li class="dropdown-item"><a href="{{route('userChicken')}}" class="nav-link">Chicken</a></li>
                            <div class="dropdown-divider"></div>



                        </ul>
                    </li>
                    <li class="nav-itm dropdown">
                    <a href="" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" ><span>Review</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="{{route('all.review')}}" class="nav-link">My Review</a></li>
                            <div class="dropdown-divider"></div>

                            <li class="dropdown-item"><a href="{{route('add.review')}}" class="nav-link">Add Review</a></li>
                            <div class="dropdown-divider"></div>



                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{route('userAbout')}}" class="nav-link">About Us</a></li>

                    @php
                        use Illuminate\Support\Facades\Auth;
                        use App\Models\User;

                       $user =null;
                       if (Auth::check()) {
                            $id = Auth::user()->id;
                            $user = User::find($id);
                    }
                    @endphp

                    <li class="nav-item dropdown">
                        @if($user)
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle" width="45px" src="{{isset( $user->photo) ? url('uploads/user_img/'.  $user->photo) : url('uploads/no_image.png') }}" alt="profile">
                        </a>

                        <ul class="dropdown-menu">

                                    <li><a href="{{ route('userProfile.edit') }}" class="dropdown-item">Edit Profile</a></li>
                                    <li><a href="{{ route('userPassword.change') }}" class="dropdown-item">Change Password</a></li>
                                    <li><a href="{{route('userLogout')}}" class="dropdown-item">Logout</a></li>
                        </ul>
                                @else
                                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle" width="45px" src="{{isset( $user->photo) ? url('uploads/user_img/'.  $user->photo) : url('uploads/no_image.png') }}" alt="profile">
                                </a>
                                <ul class="dropdown-menu">

                                    <a href="{{ route('login') }}" class="dropdown-item">Log in</a>


                                    <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                                </ul>

                         @endif



                    </li>
                </ul>
            </div>
        </nav>


    </div>
   </div>
