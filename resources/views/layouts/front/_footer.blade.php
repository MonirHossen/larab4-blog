
    <div class="container">
        <div class="row mb-5">
            @foreach($abouts as $about)
                <div class="col-md-4">
                    <h3>About Us</h3>
                    <p class="mb-4">
                        <img src="{{ asset($about->image) }}" alt="Image placeholder" class="img-fluid">
                    </p>

                    <p>{!!  \Illuminate\Support\Str::limit($about->content,100)  !!}<a href="{{ route('about_us') }}">Read More</a></p>
                </div>
                @endforeach
            <div class="col-md-6 ml-auto">
                <div class="row">
                        <div class="col-md-7">
                            <h3>Latest Post</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    @foreach($latest_posts as $post)
                                    <li>
                                        <a href="">
                                            <img src="{{ asset($post->image) }}" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>{{ $post->title }}</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">{{ date('M d, Y',strtotime($post->published_at)) }}</span> &bullet;
                                                    <span class="ml-2"><span class="fa fa-comment"></span> {{ $post->author->name }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    <div class="col-md-1"></div>

                    <div class="col-md-4">

                        <div class="mb-5">
                            <h3>Quick Links</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Categories</a></li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h3>Social</h3>
                            <ul class="list-unstyled footer-social">
                                <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                                <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                                <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                                <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                                <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="small">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This blog is made <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="{{ route('about_us') }}" target="_blank" >Monir Hossen</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>

