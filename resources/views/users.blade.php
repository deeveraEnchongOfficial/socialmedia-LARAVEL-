@extends('layouts.app')

@section('content')
<div class="wrapper">
    @include('layouts.nav')


    <section class="cover-sec">
        <img src="{{ asset('images/Profile/' . $user->cover_image) }}" alt="" width="1600" height="400">
    </section>

    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="main-left-sidebar">
                                <div class="user_profile">
                                    <div class="user-pro-img">
                                        <img src="{{ asset('images/Profile/' . $user->profile_image) }}" alt="" width="170" height="170">
                                    </div><!--user-pro-img end-->
                                    <div class="user_pro_status">
                                        <ul class="flw-hr">
                                            <li><a href="#" title="" class="flww"><i class="la la-plus"></i> Follow</a></li>
                                        </ul>
                                        <ul class="flw-status">
                                            <li>
                                                <span>Following</span>
                                                <b>34</b>
                                            </li>
                                            <li>
                                                <span>Followers</span>
                                                <b>155</b>
                                            </li>
                                        </ul>
                                    </div><!--user_pro_status end-->
                                    <ul class="social_links">
                                        <li><a href="#" title=""><i class="la la-globe"></i> www.example.com</a></li>
                                        <li><a href="#" title=""><i class="fa fa-facebook-square"></i> Http://www.facebook.com/john...</a></li>
                                        <li><a href="#" title=""><i class="fa fa-twitter"></i> Http://www.Twitter.com/john...</a></li>
                                        <li><a href="#" title=""><i class="fa fa-google-plus-square"></i> Http://www.googleplus.com/john...</a></li>
                                        <li><a href="#" title=""><i class="fa fa-behance-square"></i> Http://www.behance.com/john...</a></li>
                                        <li><a href="#" title=""><i class="fa fa-pinterest"></i> Http://www.pinterest.com/john...</a></li>
                                        <li><a href="#" title=""><i class="fa fa-instagram"></i> Http://www.instagram.com/john...</a></li>
                                        <li><a href="#" title=""><i class="fa fa-youtube"></i> Http://www.youtube.com/john...</a></li>
                                    </ul>
                                </div><!--user_profile end-->
                                <div class="suggestions full-width">
                                    <div class="sd-title">
                                        <h3>People Viewed Profile</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div><!--sd-title end-->
                                    <div class="suggestions-list">
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>Jessica William</h4>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>John Doe</h4>
                                                <span>PHP Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>Poonam</h4>
                                                <span>Wordpress Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>Bill Gates</h4>
                                                <span>C & C++ Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>Jessica William</h4>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>John Doe</h4>
                                                <span>PHP Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="view-more">
                                            <a href="#" title="">View More</a>
                                        </div>
                                    </div><!--suggestions-list end-->
                                </div><!--suggestions end-->
                            </div><!--main-left-sidebar end-->
                        </div>
                        <div class="col-lg-6">
                            <div class="main-ws-sec">
                                <div class="user-tab-sec">
                                    <h3>{{ $user->name }}</h3>
                                    <div class="star-descp">
                                        <span>Graphic Designer at Self Employed</span>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                        <a href="#" title="">Status</a>
                                    </div><!--star-descp end-->
                                </div><!--user-tab-sec end-->
                                <div class="product-feed-tab current" id="feed-dd">
                                    <div class="posts-section">
                                        @foreach ($post as $posts)
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="{{ asset('images/Profile/' . $posts->profile_image) }}" alt="" width="50" height="50">
                                                    <div class="usy-name">
                                                        <h3>{{ $posts->name }}</h3>
                                                        <span><img src="{{asset('images/clock.png')}}" alt="">{{ $posts->created_at->format('Y-m-d-H:i') }}</span>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal{{ $posts->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h6 class="modal-title" id="exampleModalLabel">Edit Post</h6>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body" id="skilleditbox">
                                                          <form action="{{ route('post.update', $posts->id) }}" method="post" enctype="multipart/form-data">
                                                            @method('PUT')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $posts->id }}">
                                                            <div class="form-group col-md-12">
                                                                <textarea class="form-control" name="Description" placeholder="Description">{{ $posts->Description }}</textarea>
                                                                <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                          <input type="submit" class="btn btn-danger">
                                                          </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="modal fade" id="deletemodal{{ $posts->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h6 class="modal-title" id="exampleModalLabel">Delete Post</h6>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body" id="skilleditbox">
                                                          <form action="{{ route('post.update', $posts->id) }}" method="post" enctype="multipart/form-data">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $posts->id }}">
                                                            <div class="form-group col-md-12">
                                                                <textarea class="form-control" name="Description" placeholder="Description" readonly>{{ $posts->Description }}</textarea>
                                                                <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                          <input type="submit" class="btn btn-danger" value="Delete">
                                                          </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>


                                                <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open"><i
                                                            class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options">
                                                        <li><a href="#" title="" data-toggle="modal" data-target="#modal{{ $posts->id }}">Edit Post</a></li>
                                                        <li><a href="#" title="" data-toggle="modal" data-target="#deletemodal{{ $posts->id }}">Delete Post</a></li>
                                                        <li><a href="#" title="">Unbid</a></li>
                                                        <li><a href="#" title="">Close</a></li>
                                                        <li><a href="#" title="">Hide</a></li>
                                                    </ul>
                                                </div>
                                            </div>
    
                                            <div class="job_descp">
                                                <p>{{ $posts->Description }}</p>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li><a href="#"><i class="la la-heart"></i>
                                                            Likes {{ $posts->Likes }}</a></li>
                                                    <li><a href="#"><i class="la la-comments"></i>
                                                            Comment 15</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!--post-bar end-->
                                        <div class="col-12 d-flex justify-content-center">
                                            {{$post->links("pagination::bootstrap-4")}}
                                           </div>
                                           <div class="top-profiles">
                                            <div class="pf-hd">
                                                <h3>Top Profiles</h3>
                                                <i class="la la-ellipsis-v"></i>
                                            </div>
                                            <div class="profiles-slider">
                                                @foreach ($users as $data)
                                                <div class="user-profy">
                                                    <img src="{{ asset('images/Profile/' . $data->profile_image) }}" alt="" width="57" height="57">
                                                    <h3>{{ $data->name }}</h3>
                                                    <span>Graphic Designer</span>
                                                    <ul>
                                                        <li><a href="#" title="" class="followw">Follow</a></li>
                                                        <li><a href="#" title="" class="envlp"><img src="{{ asset('images/envelop.png') }}"
                                                                    alt=""></a></li>
                                                    </ul>
                                                    <a href="{{ route('user.show', $data->id) }}" title="">View Profile</a>
                                                </div>
                                                <!--user-profy end-->
                                                @endforeach
                                            </div>
                                            <!--profiles-slider end-->
                                        </div>
                                        <!--top-profiles end-->
    
                                        <!--post-bar end-->
    
                                        <!--posty end-->
                                        <div class="process-comm">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div>
                                        <!--process-comm end-->
                                    </div><!--posts-section end-->
                                </div><!--product-feed-tab end-->
                                <div class="product-feed-tab" id="info-dd">
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="overview-open">Overview</a> <a href="#" title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.</p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov st2">
                                        <h3><a href="#" title="" class="exp-bx-open">Experience </a><a href="#" title="" class="exp-bx-open"><i class="fa fa-pencil"></i></a> <a href="#" title="" class="exp-bx-open"><i class="fa fa-plus-square"></i></a></h3>
                                        <h4>Web designer <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                        <h4>UI / UX Designer <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id.</p>
                                        <h4>PHP developer <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                        <p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="ed-box-open">Education</a> <a href="#" title="" class="ed-box-open"><i class="fa fa-pencil"></i></a> <a href="#" title=""><i class="fa fa-plus-square"></i></a></h3>
                                        <h4>Master of Computer Science</h4>
                                        <span>2015 - 2018</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="lct-box-open">Location</a> <a href="#" title="" class="lct-box-open"><i class="fa fa-pencil"></i></a> <a href="#" title=""><i class="fa fa-plus-square"></i></a></h3>
                                        <h4>India</h4>
                                        <p>151/4 BT Chownk, Delhi </p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="skills-open">Skills</a> <a href="#" title="" class="skills-open"><i class="fa fa-pencil"></i></a> <a href="#"><i class="fa fa-plus-square"></i></a></h3>
                                        <ul>
                                            <li><a href="#" title="">HTML</a></li>
                                            <li><a href="#" title="">PHP</a></li>
                                            <li><a href="#" title="">CSS</a></li>
                                            <li><a href="#" title="">Javascript</a></li>
                                            <li><a href="#" title="">Wordpress</a></li>
                                            <li><a href="#" title="">Photoshop</a></li>
                                            <li><a href="#" title="">Illustrator</a></li>
                                            <li><a href="#" title="">Corel Draw</a></li>
                                        </ul>
                                    </div><!--user-profile-ov end-->
                                </div><!--product-feed-tab end-->
                                <div class="product-feed-tab" id="portfolio-dd">
                                    <div class="portfolio-gallery-sec">
                                        <h3>Portfolio</h3>
                                        <div class="gallery_pf">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/271x174" alt="">
                                                        <a href="#" title=""><img src="{{asset('images/all-out.png')}}" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="{{asset('images/all-out.png')}}" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="{{asset('images/all-out.png')}}" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="{{asset('images/all-out.png')}}" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="{{asset('images/all-out.png')}}" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="{{asset('images/all-out.png')}}" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="{{asset('images/all-out.png')}}" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="{{asset('images/all-out.png')}}" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="{{asset('images/all-out.png')}}" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="http://via.placeholder.com/170x170" alt="">
                                                        <a href="#" title=""><img src="{{asset('images/all-out.png')}}" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                            </div>
                                        </div><!--gallery_pf end-->
                                    </div><!--portfolio-gallery-sec end-->
                                </div><!--product-feed-tab end-->
                                <div class="product-feed-tab" id="payment-dd">
                                    <div class="billing-method">
                                        <ul>
                                            <li>
                                                <h3>Add Billing Method</h3>
                                                <a href="#" title=""><i class="fa fa-plus-circle"></i></a>
                                            </li>
                                            <li>
                                                <h3>See Activity</h3>
                                                <a href="#" title="">View All</a>
                                            </li>
                                            <li>
                                                <h3>Total Money</h3>
                                                <span>$0.00</span>
                                            </li>
                                        </ul>
                                        <div class="lt-sec">
                                            <img src="{{asset('images/lt-icon.png')}}" alt="">
                                            <h4>All your transactions are saved here</h4>
                                            <a href="#" title="">Click Here</a>
                                        </div>
                                    </div><!--billing-method end-->
                                    <div class="add-billing-method">
                                        <h3>Add Billing Method</h3>
                                        <h4><img src="{{asset('images/dlr-icon.png')}}" alt=""><span>With workwise payment protection , only pay for work delivered.</span></h4>
                                        <div class="payment_methods">
                                            <h4>Credit or Debit Cards</h4>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="cc-head">
                                                            <h5>Card Number</h5>
                                                            <ul>
                                                                <li><img src="{{asset('images/cc-icon1.png')}}" alt=""></li>
                                                                <li><img src="{{asset('images/cc-icon2.png')}}" alt=""></li>
                                                                <li><img src="{{asset('images/cc-icon3.png')}}" alt=""></li>
                                                                <li><img src="{{asset('images/cc-icon4.png')}}" alt=""></li>
                                                            </ul>
                                                        </div>
                                                        <div class="inpt-field pd-moree">
                                                            <input type="text" name="cc-number" placeholder="">
                                                            <i class="fa fa-credit-card"></i>
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>First Name</h5>
                                                        </div>
                                                        <div class="inpt-field">
                                                            <input type="text" name="f-name" placeholder="">
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>Last Name</h5>
                                                        </div>
                                                        <div class="inpt-field">
                                                            <input type="text" name="l-name" placeholder="">
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>Expiresons</h5>
                                                        </div>
                                                        <div class="rowwy">
                                                            <div class="row">
                                                                <div class="col-lg-6 pd-left-none no-pd">
                                                                    <div class="inpt-field">
                                                                        <input type="text" name="f-name" placeholder="">
                                                                    </div><!--inpt-field end-->
                                                                </div>
                                                                <div class="col-lg-6 pd-right-none no-pd">
                                                                    <div class="inpt-field">
                                                                        <input type="text" name="f-name" placeholder="">
                                                                    </div><!--inpt-field end-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>Cvv (Security Code) <i class="fa fa-question-circle"></i></h5>
                                                        </div>
                                                        <div class="inpt-field">
                                                            <input type="text" name="l-name" placeholder="">
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit">Continue</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <h4>Add Paypal Account</h4>
                                        </div>
                                    </div><!--add-billing-method end-->
                                </div><!--product-feed-tab end-->
                            </div><!--main-ws-sec end-->
                        </div>
                        <div class="col-lg-3">
                            <div class="right-sidebar">
                                <div class="message-btn">
                                    <a href="#" title=""><i class="fa fa-envelope"></i> Message</a>
                                </div>
                                <div class="widget widget-portfolio">
                                    <div class="wd-heady">
                                        <h3>Portfolio</h3>
                                        <img src="{{asset('images/photo-icon.png')}}" alt="">
                                    </div>
                                    <div class="pf-gallery">
                                        <ul>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                            <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
                                        </ul>
                                    </div><!--pf-gallery end-->
                                </div><!--widget-portfolio end-->
                            </div><!--right-sidebar end-->
                        </div>
                    </div>
                </div><!-- main-section-data end-->
            </div> 
        </div>
    </main>

</div>
@endsection