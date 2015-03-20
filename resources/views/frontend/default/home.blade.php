@extends('frontend.layout')
@section('main_content')



    <div class="page-content">
        <div class="row clearfix">
            <div class="grid_9 alpha">
                <div class="ipress_slider mbf">
                    <div class="slider_a owl-carousel owl-theme">
                        <div class="item clearfix">
                            <div class="half">
                                <div class="slide_details">
                                    <a class="cat color3" href="#" title="View all posts under Entertainment">Entertainment</a>
                                    <span class="post_rating" href="#" title="Rating"><i
                                                class="fa fa-star"></i> 8.55</span>

                                    <h3><a href="single_post.html">Sed ut perspiciatis unde omnis iste</a></h3>
                                </div>
                                <a href="single_post.html"><img src="/themes/ipress/images/assets/slider1.jpg"
                                                                alt=""></a>
                            </div>
                            <!-- /half -->

                            <div class="half">
                                <div class="slide_details">
                                    <a class="cat color1" href="#" title="View all posts under People">People</a>
                                    <span class="post_rating" href="#" title="Rating"><i
                                                class="fa fa-star"></i> 9.1</span>

                                    <h3><a href="single_post.html">Discovered the undoubtable source</a></h3>
                                </div>
                                <a href="single_post.html"><img src="/themes/ipress/images/assets/slider2.jpg"
                                                                alt=""></a>
                            </div>
                            <!-- /half -->

                            <div class="half">
                                <div class="slide_details">
                                    <a class="cat color2" href="#" title="View all posts under Travel">Travel</a>
                                    <span class="post_rating" href="#" title="Rating"><i
                                                class="fa fa-star"></i> 7.42</span>

                                    <h3><a href="single_post.html">The standard chunk of Lorem ipsum</a></h3>
                                </div>
                                <a href="single_post.html"><img src="/themes/ipress/images/assets/slider3.jpg"
                                                                alt=""></a>
                            </div>
                            <!-- /half -->
                        </div>
                        <!-- /slide -->

                        <div class="item clearfix">
                            <div class="half">
                                <div class="slide_details">
                                    <a class="cat color4" href="#" title="View all posts under Sports">Sports</a>
                                    <span class="post_rating" href="#" title="Rating"><i
                                                class="fa fa-star"></i> 9.11</span>

                                    <h3><a href="single_post.html">Sed ut perspiciatis unde omnis iste</a></h3>
                                </div>
                                <a href="single_post.html"><img src="/themes/ipress/images/assets/slider4.jpg"
                                                                alt=""></a>
                            </div>
                            <!-- /half -->

                            <div class="half">
                                <div class="slide_details">
                                    <a class="cat color5" href="#" title="View all posts under Music">Music</a>
                                    <span class="post_rating" href="#" title="Rating"><i
                                                class="fa fa-star"></i> 10</span>

                                    <h3><a href="single_post.html">Discovered the undoubtable source</a></h3>
                                </div>
                                <a href="single_post.html"><img src="/themes/ipress/images/assets/slider5.jpg"
                                                                alt=""></a>
                            </div>
                            <!-- /half -->

                            <div class="half">
                                <div class="slide_details">
                                    <a class="cat color6" href="#" title="View all posts under TV">TV</a>
                                    <span class="post_rating" href="#" title="Rating"><i
                                                class="fa fa-star"></i> 6.99</span>

                                    <h3><a href="single_post.html">The standard chunk of Lorem ipsum</a></h3>
                                </div>
                                <a href="single_post.html"><img src="/themes/ipress/images/assets/slider6.jpg"
                                                                alt=""></a>
                            </div>
                            <!-- /half -->
                        </div>
                        <!-- /slide -->

                    </div>
                    <!-- /slider -->
                </div>
                <!-- /slider ipress -->

                <div class="grid_8 omega posts righter">
                    <div class="post_day mbf clearfix">
                        <div class="title colordefault"><h4>Post Of The Day</h4></div>

                        <div class="grid_6 alpha relative">
                            <a class="cat" href="#" title="View all posts under Travel">Travel</a>
                            <a class="hover-shadow" href="single_post.html"><img
                                        src="/themes/ipress/images/assets/r_4.jpg" alt=""></a>
                        </div>
                        <!-- /grid6 alpha -->

                        <div class="grid_6 omega">
                            <div class="post_day_content">
                                <h3><a href="single_post.html">Here's What Instagram Ads Will Look Like</a></h3>

                                <div class="meta mb"> 3 hours ago / <a href="single_post.html">0 comments</a></div>
                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry unknown
                                    printer took a galley of type and scrambled it to make a type has survived not only
                                    fiv... </p>
                            </div>
                            <!-- /post content -->
                        </div>
                        <!-- /grid6 omega -->
                    </div>
                    <!-- /post day -->
                    @foreach($articleByCat as $nameCat => $article)
                        <div class="posts_block mbf clearfix">
                            <div class="title color5">
                                <h4>{{$nameCat}}</h4>
                                <a href="#" class="feed toptip" title="RSS Feed"><i class="icon-feed"></i></a>
                            </div>
                            <!-- /title bar -->

                            <div class="grid_6 alpha">
                                <div class="mb hover-shadow"><a href="single_post.html"><img
                                                src="/themes/ipress/images/assets/r_5.jpg" alt=""></a></div>
                                <div class="post_m_content">
                                    <h3><a href="single_post.html">Here's What Instagram Ads Will Look Like</a></h3>

                                    <div class="meta mb"> 3 hours ago / <a href="single_post.html">0 comments</a></div>
                                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting... </p>
                                </div>
                                <!-- post content -->
                            </div>
                            <!-- /grid6 omega -->

                            <div class="grid_6 omega">
                                <div class="small_slider_music owl-carousel owl-theme">
                                    <div class="item clearfix">
                                        <ul class="small_posts">
                                            <li class="clearfix">
                                                <a class="s_thumb hover-shadow" href="single_post.html"><img width="70"
                                                                                                             height="70"
                                                                                                             src="/themes/ipress/images/assets/thumb1.jpg"
                                                                                                             alt="#"></a>

                                                <h3><a href="single_post.html">What worst could be the worst?</a></h3>

                                                <div class="meta mb"> 5 hours ago / <a href="single_post.html">1
                                                        comments</a></div>
                                            </li>
                                            <li class="clearfix">
                                                <a class="s_thumb hover-shadow" href="single_post.html"><img width="70"
                                                                                                             height="70"
                                                                                                             src="/themes/ipress/images/assets/thumb2.jpg"
                                                                                                             alt="#"></a>

                                                <h3><a href="single_post.html">Praesent ipsum adipiscing mi eget
                                                        ipsum</a></h3>

                                                <div class="meta mb"> 1 days ago / <a href="single_post.html">5
                                                        comments</a></div>
                                            </li>
                                            <li class="clearfix">
                                                <a class="s_thumb hover-shadow" href="single_post.html"><img width="70"
                                                                                                             height="70"
                                                                                                             src="/themes/ipress/images/assets/thumb3.jpg"
                                                                                                             alt="#"></a>

                                                <h3><a href="single_post.html">Paul Thomson on post with SoundCloud</a>
                                                </h3>

                                                <div class="meta mb"> 3 days ago / <a href="single_post.html">14
                                                        comments</a></div>
                                            </li>
                                            <li class="clearfix">
                                                <a class="s_thumb hover-shadow" href="single_post.html"><img width="70"
                                                                                                             height="70"
                                                                                                             src="/themes/ipress/images/assets/thumb4.jpg"
                                                                                                             alt="#"></a>

                                                <h3><a href="single_post.html">For the days of peace and warmth</a></h3>

                                                <div class="meta mb"> 3 days ago / <a href="single_post.html">14
                                                        comments</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item clearfix">
                                        <ul class="small_posts">
                                            <li class="clearfix">
                                                <a class="s_thumb hover-shadow" href="single_post.html"><img width="70"
                                                                                                             height="70"
                                                                                                             src="/themes/ipress/images/assets/thumb9.jpg"
                                                                                                             alt="#"></a>

                                                <h3><a href="single_post.html">What worst could be the worst?</a></h3>

                                                <div class="meta mb"> 5 hours ago / <a href="single_post.html">1
                                                        comments</a></div>
                                            </li>
                                            <li class="clearfix">
                                                <a class="s_thumb hover-shadow" href="single_post.html"><img width="70"
                                                                                                             height="70"
                                                                                                             src="/themes/ipress/images/assets/thumb10.jpg"
                                                                                                             alt="#"></a>

                                                <h3><a href="single_post.html">Praesent ipsum adipiscing mi eget
                                                        ipsum</a></h3>

                                                <div class="meta mb"> 1 days ago / <a href="single_post.html">5
                                                        comments</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /slides -->
                            </div>
                            <!-- grid6 omega -->
                        </div><!-- posts block Music -->
                    @endforeach
                    <div class="ads_block mbf">
                        <a href="#"><img src="/themes/ipress/images/ads3.png" alt=""></a>
                    </div>
                    <!-- ads block -->

                </div>
                <!-- end grid9 -->

                <div class="grid_4 alpha sidebar sidebar_b">
                    <div class="widget">
                        <div class="title"><h4>New Video</h4></div>

                        <iframe src="http://player.vimeo.com/video/13897659?color=E84A4A" height="180"></iframe>
                        <a href="http://vimeo.com/13897659">Iconic Poster design</a>

                    </div>
                    <!-- widget -->

                    <div class="widget">
                        <div id="calendar_wrap">
                            <table id="wp-calendar">
                                <caption>January 2014</caption>
                                <thead>
                                <tr>
                                    <th scope="col" title="Monday">M</th>
                                    <th scope="col" title="Tuesday">T</th>
                                    <th scope="col" title="Wednesday">W</th>
                                    <th scope="col" title="Thursday">T</th>
                                    <th scope="col" title="Friday">F</th>
                                    <th scope="col" title="Saturday">S</th>
                                    <th scope="col" title="Sunday">S</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <td colspan="3" id="prev"><a href="#" title="View posts for December 2013">« Dec</a>
                                    </td>
                                    <td class="pad">&nbsp;</td>
                                    <td colspan="3" id="next" class="pad">&nbsp;</td>
                                </tr>
                                </tfoot>

                                <tbody>
                                <tr>
                                    <td colspan="2" class="pad">&nbsp;</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td id="today">18</td>
                                    <td>19</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                    <td class="pad" colspan="2">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- widget -->

                    <div class="widget">
                        <div class="title"><h4>Random Posts</h4></div>
                        <div class="relative hover-shadow mb">
                            <a href="single_post.html"><img src="/themes/ipress/images/assets/r_1.jpg" alt=""></a>

                            <div class="r_content">
                                <a class="cat color5" href="#" title="View all posts under Music">Music</a>

                                <div class="r_title"><a href="single_post.html">At vero eos et accusamus et iusto</a>
                                </div>
                            </div>
                        </div>
                        <!-- relative -->

                        <div class="relative hover-shadow mb">
                            <a href="single_post.html"><img src="/themes/ipress/images/assets/r_2.jpg" alt=""></a>

                            <div class="r_content">
                                <a class="cat color6" href="#" title="View all posts under TV">TV</a>

                                <div class="r_title"><a href="single_post.html">A picture of Sin Fang in Bairro Alto</a>
                                </div>
                            </div>
                        </div>
                        <!-- relative -->

                        <div class="relative hover-shadow mb">
                            <a href="single_post.html"><img src="/themes/ipress/images/assets/r_3.jpg" alt=""></a>

                            <div class="r_content">
                                <a class="cat color2" href="#" title="View all posts under Travel">Travel</a>

                                <div class="r_title"><a href="single_post.html">Bairro Alto in Lisboa, Portugal</a>
                                </div>
                            </div>
                        </div>
                        <!-- relative -->
                    </div>
                    <!-- widget -->

                    <div class="widget">
                        <div class="title"><h4>Popular Tags</h4></div>
                        <div class="tags">
                            <a href="#" title="17 topic"> corporate </a>
                            <a href="#" title="44 topic"> theme </a>
                            <a href="#" title="10 topic"> css3 </a>
                            <a href="#" title="2 topic"> premium </a>
                            <a href="#" title="29 topic"> html5 </a>
                            <a href="#" title="4 topic"> business </a>
                            <a href="#" title="20 topic"> all purpose </a>
                            <a href="#" title="14 topic"> jquery </a>
                            <a href="#" title="1 topic"> muse template </a>
                            <a href="#" title="4 topic"> minimalist </a>
                        </div>
                    </div>
                    <!-- widget -->

                    <div class="widget">
                        <div class="title"><h4>Like Us</h4></div>
                        <div class="bg_light">
                            <!-- iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=313&amp;height=300&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true&amp;appId=138798126277575" height="292"></iframe-->
                        </div>
                    </div>
                    <!-- widget -->

                </div>
                <!-- end grid9 -->
            </div>
            <!-- end grid9 -->

            <div class="grid_3 omega sidebar sidebar_a">
                <div class="widget">
                    <ul class="counter clearfix">
                        <li class="twitter">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <span> 2545 <br> Followes </span>
                        </li>
                        <li class="facebook">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <span> 1317 <br> Likes </span>
                        </li>
                        <li class="dribbble">
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <span> 325 <br> Followes </span>
                        </li>
                        <li class="rss">
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <span> 27 <br> Subscribers </span>
                        </li>
                    </ul>
                </div>
                <!-- widget -->

                <div class="widget">
                    <div class="ads_widget clearfix">
                        @include('frontend.advertise.rightAdvertise')

                        <a href="#" class="lefter mt"><img src="/themes/ipress/images/ads3.jpg" alt="#"></a>
                        <a href="#" class="righter mt"><img src="/themes/ipress/images/ads3.jpg" alt="#"></a>
                    </div>
                    <!-- widget -->
                </div>
                <!-- widget -->

                <div class="widget">
                    <div class="title"><h4>What's Hot</h4></div>

                    <div class="small_slider_hots owl-carousel owl-theme">
                        <div class="item clearfix">
                            <ul class="small_posts">
                                <li class="clearfix">
                                    <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70"
                                                                                                 src="/themes/ipress/images/assets/thumb13.jpg"
                                                                                                 alt="#"><span>1</span></a>

                                    <h3><a href="single_post.html">What is the worst could be the worst?</a></h3>

                                    <div class="meta mb"><a class="cat color1" href="#"
                                                            title="View all posts under Entertainment">Entertainment</a><span
                                                class="post_rating" href="#" title="Rating">8.89</span></div>
                                </li>
                                <li class="clearfix">
                                    <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70"
                                                                                                 src="/themes/ipress/images/assets/thumb12.jpg"
                                                                                                 alt="#"><span>2</span></a>

                                    <h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>

                                    <div class="meta mb"><a class="cat color3" href="#"
                                                            title="View all posts under News">News</a><span
                                                class="post_rating" href="#" title="Rating">8.1</span></div>
                                </li>
                                <li class="clearfix">
                                    <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70"
                                                                                                 src="/themes/ipress/images/assets/thumb11.jpg"
                                                                                                 alt="#"><span>3</span></a>

                                    <h3><a href="single_post.html">Paul Thomson on post with SoundCloud</a></h3>

                                    <div class="meta mb"><a class="cat color4" href="#"
                                                            title="View all posts under Sports">Sports</a><span
                                                class="post_rating" href="#" title="Rating">7.95</span></div>
                                </li>
                                <li class="clearfix">
                                    <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70"
                                                                                                 src="/themes/ipress/images/assets/thumb10.jpg"
                                                                                                 alt="#"><span>4</span></a>

                                    <h3><a href="single_post.html">For the days of peace and warmth</a></h3>

                                    <div class="meta mb"><a class="cat color5" href="#"
                                                            title="View all posts under People">People</a><span
                                                class="post_rating" href="#" title="Rating">7.5</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="item clearfix">
                            <ul class="small_posts">
                                <li class="clearfix">
                                    <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70"
                                                                                                 src="/themes/ipress/images/assets/thumb9.jpg"
                                                                                                 alt="#"><span>5</span></a>

                                    <h3><a href="single_post.html">What worst could be the worst?</a></h3>

                                    <div class="meta mb"><a class="cat color6" href="#"
                                                            title="View all posts under People">People</a><span
                                                class="post_rating" href="#" title="Rating">7</span></div>
                                </li>
                                <li class="clearfix">
                                    <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70"
                                                                                                 src="/themes/ipress/images/assets/thumb8.jpg"
                                                                                                 alt="#"><span>6</span></a>

                                    <h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>

                                    <div class="meta mb"><a class="cat color7" href="#" title="View all posts under TV">TV</a><span
                                                class="post_rating" href="#" title="Rating">5.89</span></div>
                                </li>
                                <li class="clearfix">
                                    <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70"
                                                                                                 src="/themes/ipress/images/assets/thumb7.jpg"
                                                                                                 alt="#"><span>7</span></a>

                                    <h3><a href="single_post.html">Paul Thomson on post with SoundCloud</a></h3>

                                    <div class="meta mb"><a class="cat color8" href="#"
                                                            title="View all posts under Society">Society</a><span
                                                class="post_rating" href="#" title="Rating">5.5</span></div>
                                </li>
                                <li class="clearfix">
                                    <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70"
                                                                                                 src="/themes/ipress/images/assets/thumb6.jpg"
                                                                                                 alt="#"><span>8</span></a>

                                    <h3><a href="single_post.html">For the days of peace and warmth</a></h3>

                                    <div class="meta mb"><a class="cat color3" href="#"
                                                            title="View all posts under Health">Health</a><span
                                                class="post_rating" href="#" title="Rating">4</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /slides -->
                </div>
                <!-- /widget -->

                <div class="widget">
                    <div class="latest_tweets">
                        <h4><i class="fa fa-twitter"></i>  @iPress
                            <small> tweets</small>
                        </h4>
                        <div class="tweets">
                            <div class="tweets_slider owl-carousel owl-theme">
                                <div class="item clearfix">
                                    Singolo is a free PSD template of a flat, single page website created by @T20
                                    #freebie #psd <a href="#">http://bit.ly/19XM8Lj</a> <br><br> 2 hours ago
                                </div>
                                <!-- /slide -->
                                <div class="item clearfix">
                                    Singolo is a free PSD template of a flat, single page website created by @T20
                                    #freebie #psd <a href="#">http://bit.ly/19XM8Lj</a> <br><br>
                                    1 day ago
                                </div>
                                <!-- /slide -->
                                <div class="item clearfix">
                                    Singolo is a free PSD template of a flat, single page website created by @T20
                                    #freebie #psd <a href="#">http://bit.ly/19XM8Lj</a> <br><br>
                                    5 days ago
                                </div>
                                <!-- /slide -->
                            </div>
                            <!-- /tweets slider -->
                        </div>
                        <!-- /tweets -->
                    </div>
                    <!-- /latest tweets -->
                </div>
                <!-- /widget -->

                <div class="widget">
                    <div class="title"><h4>Polls</h4></div>
                    <div class="wp-polls">
                        <form class="wp-polls-form" action="#" method="post">
                            <p class="tac"><strong>What do you think about our website?</strong></p>

                            <div class="wp-polls-ans">
                                <ul class="wp-polls-ul">
                                    <li><input type="radio" name="poll_2" value="6"> <label
                                                for="poll-answer-6">Awesome</label></li>
                                    <li><input type="radio" name="poll_2" value="7"> <label
                                                for="poll-answer-7">Super</label></li>
                                    <li><input type="radio" name="poll_2" value="8"> <label
                                                for="poll-answer-8">Normal</label></li>
                                    <li><input type="radio" name="poll_2" value="9"> <label
                                                for="poll-answer-9">Bad</label></li>
                                </ul>

                                <input type="button" name="vote" value="   Vote   " class="Buttons">
                                <input type="button" name="results" value="   View Results   " class="Buttons">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- widget -->

                <div class="widget">
                    <div class="title"><h4>Recent Comments</h4></div>
                    <ul class="recent_comments small_posts">
                        <li class="clearfix">
                            <a class="s_thumb hover-shadow" href="single_post.html"><img width="80" height="80"
                                                                                         src="/themes/ipress/images/assets/avatar1.jpg"
                                                                                         alt="#"></a>
                            <h5><a href="#">Alex Cohn</a>:</h5>

                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                        </li>
                        <li class="clearfix">
                            <a class="s_thumb hover-shadow" href="single_post.html"><img width="80" height="80"
                                                                                         src="/themes/ipress/images/assets/avatar2.jpg"
                                                                                         alt="#"></a>
                            <h5><a href="#">Michele</a>:</h5>

                            <p>Here's What Instagram Ads Will Look Like...</p>
                        </li>
                        <li class="clearfix">
                            <a class="s_thumb hover-shadow" href="single_post.html"><img width="80" height="80"
                                                                                         src="/themes/ipress/images/assets/avatar3.jpg"
                                                                                         alt="#"></a>
                            <h5><a href="#">Admin</a>:</h5>

                            <p>Lorem ipsum is dolor sit amet text of the ipsum...</p>
                        </li>
                        <li class="clearfix">
                            <a class="s_thumb hover-shadow" href="single_post.html"><img width="80" height="80"
                                                                                         src="/themes/ipress/images/assets/avatar4.jpg"
                                                                                         alt="#"></a>
                            <h5><a href="#">Tomas Giggs</a>:</h5>

                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                        </li>
                    </ul>
                </div>
                <!-- /widget -->

            </div>
            <!-- /grid3 sidebar A -->
        </div>
        <!-- /row -->
    </div><!-- /end page content -->
@stop