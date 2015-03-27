<footer id="footer">
    <div class="row clearfix">
        <div class="grid_3">
            <div class="widget">
                <div class="title"><h4>About iPress</h4></div>
                <p> iPress is a magazine/blog/ad/review template. Nunc montes odio phasellus dignissim, aenean, nec augue velit integer elementum ut montes quis integer cursus, est purus, lectus duis, scelerisque tincidunt ultricies phasellus elementum turpis tristique.<br><br>Email:	<a href="contact.html">information@ipress.com</a> </p>
            </div><!-- /widget -->
        </div><!-- /grid3 -->

        <div class="grid_3">
            <div class="widget">
                <div class="title"><h4>Recent Posts</h4></div>
                @if($recentPost)
                <ul class="small_posts">
                    @foreach($recentPost as $post)
                    <li class="clearfix">
                        <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70" src="{{$post->image_path}}" alt="#"></a>
                        <h3><a href="single_post.html">{{$post->alttitle}}</a></h3>
                        <div class="meta mb"> <?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($article->published_time))->diffForHumans() ?>  /  <a href="single_post.html">3 comment</a> </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div><!-- /widget -->
        </div><!-- /grid3 -->

        <div class="grid_3">
            <div class="widget">
                <div class="title"><h4>Best Reviews</h4></div>
                @if($bestReview)
                <ul class="small_posts">
                    @foreach($bestReview as $post)
                    <li class="clearfix">
                        <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70" src="{{$post->image_path}}" alt="#"></a>
                        <h3><a href="single_post.html">{{$post->alttitle}}</a></h3>
                        <div class="meta mb"> <a class="cat color1" href="/category/{{$post->code}}" title="View all posts under Entertainment">{{$post->name_vi}}</a><span class="post_rating" href="#" title="Rating">8.89</span> </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div><!-- /widget -->
        </div><!-- /grid3 -->

        <div class="grid_3">
            <div class="widget">
                <div class="title"><h4>Newsletters</h4></div>
                <p> To receive the latest updates and Latest Posts enter your email. </p>
                <form id="newsletters" method="post" action="http://feedburner.google.com/fb/a/mailverify" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=sevenpsd', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                    <input type="email" onfocus="if (this.value=='Type Your Email') this.value = '';" onblur="if (this.value=='') this.value = 'Type Your Email';" value="Type Your Email" placeholder="Type Your Email" required="required">
                    <button type="submit"><i class="icon-checkmark"></i></button>
                </form>
            </div><!-- /widget -->

            <div class="widget">
                <div class="title"><h4>Follow us</h4></div>
                <div class="social">
                    <a href="#" class="toptip" title="Twitter"><i class="fa-twitter"></i></a>
                    <a href="#" class="toptip" title="Facebook"><i class="fa-facebook"></i></a>
                    <a href="#" class="toptip" title="Google Plus"><i class="fa-google-plus"></i></a>
                    <a href="#" class="toptip" title="Linkedin"><i class="fa-linkedin"></i></a>
                    <a href="#" class="toptip" title="Github"><i class="fa-github"></i></a>
                    <a href="#" class="toptip" title="instagram"><i class="fa-instagram"></i></a>
                    <a href="#" class="toptip" title="Dribbble"><i class="fa-dribbble"></i></a>
                </div><!-- /social -->
            </div><!-- /widget -->
        </div><!-- /grid3 -->

    </div><!-- /row -->

    <div class="row clearfix">
        <div class="footer_last">
            <span class="copyright">© 2014 <a href="http://theme20.com/">Theme20</a>. All Rights Reserved. Powered by <a href="http://themeforest.net/user/T20">Themeforest</a>.</span>

            <div id="toTop" class="toptip" title="Back to Top"><i class="icon-arrow-thin-up"></i></div>
        </div><!-- /last footer -->
    </div><!-- /row -->

</footer><!-- /footer -->