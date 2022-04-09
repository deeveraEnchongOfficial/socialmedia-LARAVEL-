@extends('layouts.app')

@section('content')
<div class="wrapper">
    @include('layouts.nav')
    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                            <div class="main-left-sidebar no-margin">
                                <div class="user-data full-width">
                                    <div class="user-profile">
                                        <div class="username-dt">
                                            <div class="usr-pic">
                                                <img src="images/Profile/{{ Auth::user()->profile_image }}" alt="" width="100" height="100">
                                            </div>
                                        </div>
                                        <!--username-dt end-->
                                        <div class="user-specs">
                                            <h3>{{ Auth::user()->name }}</h3>
                                            <span>Graphic Designer at Self Employed</span>
                                        </div>
                                    </div>
                                    <!--user-profile end-->
                                    <ul class="user-fw-status">
                                        <li>
                                            <h4>Following</h4>
                                            <span>34</span>
                                        </li>
                                        <li>
                                            <h4>Followers</h4>
                                            <span>155</span>
                                        </li>
                                        <li>
                                            <a href="#" title="">View Profile</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--user-data end-->
                                <div class="suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Suggestions</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <!--sd-title end-->
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
                                    </div>
                                    <!--suggestions-list end-->
                                </div>
                                <!--suggestions end-->
                                <div class="tags-sec full-width">
                                    <ul>
                                        <li><a href="#" title="">Help Center</a></li>
                                        <li><a href="#" title="">About</a></li>
                                        <li><a href="#" title="">Privacy Policy</a></li>
                                        <li><a href="#" title="">Community Guidelines</a></li>
                                        <li><a href="#" title="">Cookies Policy</a></li>
                                        <li><a href="#" title="">Career</a></li>
                                        <li><a href="#" title="">Language</a></li>
                                        <li><a href="#" title="">Copyright Policy</a></li>
                                    </ul>
                                    <div class="cp-sec">
                                        <img src="images/logo2.png" alt="">
                                        <p><img src="images/cp.png" alt="">Copyright 2018</p>
                                    </div>
                                </div>
                                <!--tags-sec end-->
                            </div>
                            <!--main-left-sidebar end-->
                        </div>
                        <div class="col-lg-6 col-md-8 no-pd">
                            <div class="main-ws-sec">
                                <div class="post-topbar">
                                    <div class="user-picy">
                                        <img src="images/Profile/{{ Auth::user()->profile_image }}" alt="" width="50" height="50">
                                    </div>
                                    <div class="post-st">
                                        <ul>
                                            <li><a class="post-jb active" href="#" title="">Post</a></li>
                                        </ul>
                                    </div>
                                    <!--post-st end-->
                                </div>
                                <!--post-topbar end-->
                                <div class="posts-section">
                                    @foreach ($post as $posts)
                                    <div class="post-bar">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                <a href="{{ route('user.show', $posts->user_id) }}">
                                                    <img src="images/Profile/{{ $posts->profile_image }}" alt="" width="50" height="50">
                                                <div class="usy-name">
                                                    <h3>{{ $posts->name }}</h3>
                                                </a>
                                                    <span><img src="images/clock.png" alt="">{{ $posts->created_at->format('Y-m-d-H:i') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job_descp">
                                            <p>{{ $posts->Description }}</p>
                                        </div>
                                        {{-- <input class="post_id" name="invisible" type="hidden" value="{{ $posts->user_id }}"> --}}
                                        {{-- <i class="la la-heart"></i> --}}
                                        <div class="job-status-bar">
                                            <ul class="like-com">
                                                <input type="hidden" id="post_id" value="{{ $posts->id }}" />
                                                <li> <a class="like-Unlike" href="" id="{{ $posts->id }}" title="{{ $posts->id }}">
                                                        Like </a>{{ $posts->id }}</li>
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
                                                <img src="images/Profile/{{ $data->profile_image }}" alt="" width="57" height="57">
                                                <h3>{{ $data->name }}</h3>
                                                <span>Graphic Designer</span>
                                                <ul>
                                                    <li><a href="#" title="" class="followw">Follow</a></li>
                                                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png"
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
                                </div>
                                <!--posts-section end-->
                            </div>
                            <!--main-ws-sec end-->
                        </div>
                        <div class="col-lg-3 pd-right-none no-pd">
                            <div class="right-sidebar">
                                <div class="widget widget-about">
                                    <img src="images/wd-logo.png" alt="">
                                    <h3>Track Time on Workwise</h3>
                                    <span>Pay only for the Hours worked</span>
                                    <div class="sign_link">
                                        <h3><a href="#" title="">Sign up</a></h3>
                                        <a href="#" title="">Learn More</a>
                                    </div>
                                </div>
                                <!--widget-about end-->
                                <div class="widget widget-jobs">
                                    <div class="sd-title">
                                        <h3>Top Jobs</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="jobs-list">
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior Product Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <!--job-info end-->
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior UI / UX Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <!--job-info end-->
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Junior Seo Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <!--job-info end-->
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior PHP Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <!--job-info end-->
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior Developer Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <!--job-info end-->
                                    </div>
                                    <!--jobs-list end-->
                                </div>
                                <!--widget-jobs end-->
                                <div class="widget widget-jobs">
                                    <div class="sd-title">
                                        <h3>Most Viewed This Week</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="jobs-list">
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior Product Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <!--job-info end-->
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior UI / UX Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <!--job-info end-->
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Junior Seo Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <!--job-info end-->
                                    </div>
                                    <!--jobs-list end-->
                                </div>
                                <!--widget-jobs end-->
                                <div class="widget suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Most Viewed People</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <!--sd-title end-->
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
                                                <span>C &amp; C++ Developer</span>
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
                                    </div>
                                    <!--suggestions-list end-->
                                </div>
                            </div>
                            <!--right-sidebar end-->
                        </div>
                    </div>
                </div><!-- main-section-data end-->
            </div>
        </div>
    </main>



    <div class="post-popup job_post">
        <div class="post-project">
            <h3>Post</h3>
            <div class="post-project-fields">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- <input name="id" type="hidden" value="{{ Auth::user()->id }}"> --}}
                        {{-- <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Title">
                        </div> --}}
                        <div class="col-lg-12">
                            <textarea name="Description" placeholder="Description"></textarea>
                            <input class="user_id" name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active" type="submit" value="post">Post</button></li>
                                <li><a href="#" title="">Cancel</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <!--post-project-fields end-->
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div>
        <!--post-project end-->
    </div>
    <!--post-project-popup end-->
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function () {

        fetchslikes()

function fetchslikes() {
    $.ajax({
        type: "GET",
        url: "/fetch-likes",
        dataType: "json",
        success: function (response) {
            // console.log(response.post);
            // console.log(response.likes);
            const arr1 = response.post;
            const arr2 = response.likes;
            const children = arr1.concat(arr2); 
            // console.log(children);
            // $('.posts-section').html("");
            $.each(children, function (key, item) {
                // console.log(item.likes);
                // $('.posts-section').append('<div class="post-bar">\
                //                         <div class="post_topbar">\
                //                             <div class="usy-dt">\
                //                                 <a href="{{ route('user.show', $posts->user_id) }}">\
                //                                     <img src="images/Profile/' + item.profile_image + '" alt="" width="50" height="50">\
                //                                 <div class="usy-name">\
                //                                     <h3>' + item.name + '</h3>\
                //                                 </a>\
                //                                     <span><img src="images/clock.png" alt="">{{ $posts->created_at->format('Y-m-d-H:i') }}</span>\
                //                                 </div>\
                //                             </div>\
                //                         </div>\
                //                         <div class="job_descp">\
                //                             <p>' + item.Description + '</p>\
                //                             <p>' + item.user_id + '</p>\
                //                         </div>\
                //                         <div class="job-status-bar">\
                //                             <ul class="like-com">\
                //                                 <input type="hidden" id="post_id" value=" + item.post_id + " />\
                //                                 <li> <a class="like-Unlike" href="#" id="'+ item.post_id +'" title=" + item.post_id + ">\
                //                                         Like </a>{{ $posts->id }}</li>\
                //                                 <li><a href="#"><i class="la la-comments"></i>\
                //                                         Comment 15</a></li>\
                //                             </ul>\
                //                         </div>\
                //                     \</div>');
            });
        }
        // success: function (response) {
        //             // console.log(response);
        //             $('posts-section').html("");
        //             $.each(response.students, function (key, item) {
        //                 $('.posts-section').append('<tr>\
        //                     <td>' + item.id + '</td>\
        //                     <td>' + item.name + '</td>\
        //                     <td>' + item.course + '</td>\
        //                     <td>' + item.email + '</td>\
        //                     <td>' + item.phone + '</td>\
        //                     <td><button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm">Edit</button></td>\
        //                     <td><button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button></td>\
        //                 \</tr>');
        //             });
        //         }
    });
}

$(".like-Unlike").click(function(e){
    e.preventDefault();
    var post=$(this).attr("title");
    var user = $('.user_id').val();
    var post_id=parseInt(post);
    var user_id=parseInt(user);
    if ($(this).html() == "Like") {
        $(this).html('Unlike');

        var data = {
            // 'like': $(this).html(),
            'post_id': post_id,
            'user_id': user_id,
        }
        console.log(data);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: '/likes',
            data: data,
            dataType: "json",
            success: function (response) {
                console.log(response);
            }
        });
    }
    else {
        $(this).html('Like');
    }
    fetchslikes()
})

    });

</script>
@endsection