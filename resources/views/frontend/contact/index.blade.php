@extends('frontend.layout')
@section('main_content')

<?php // {{ HTML::style(CaptchaUrls::LayoutStylesheetUrl()) }}?>
<link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
<div class="page-content">			
  <div class="row clearfix">
    <div class="grid_9 alpha">
      <div class="grid_8 alpha posts">
        @if(Session::has('flash_message'))
          <div style="color:red; font-size: 20px; padding-bottom: 10px;"><b>{{ Session::get('flash_message') }}</b></div>
        @endif
        <div class="title"><h4>Contact us</h4></div>
        <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>


        <div class="mbf">
          <iframe height="300" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=New+York,+NY,+United+States&amp;aq=0&amp;oq=New+yok&amp;sll=37.0625,-95.677068&amp;sspn=41.224889,86.044922&amp;ie=UTF8&amp;hq=&amp;hnear=New+York&amp;t=m&amp;z=10&amp;ll=40.714353,-74.005973&amp;output=embed"></iframe>
        </div>
        @if($errors->any()) 
          <ul class="alert alert-danger" style="padding: 10px 0;color: red;font-style: italic;">
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        @endif
        
        <form method="post" id="contactForm" action="{{ route('contact_post') }}">
          <div class="clearfix">
            <div class="grid_6 alpha fll">
              <input type="text" name="name" id="senderName" placeholder="Name *" class="requiredField" maxlength="100" />
            </div>
            <div class="grid_6 omega flr">
              <input type="text" name="email" id="senderEmail" placeholder="Email Address *" class="requiredField email"  maxlength="255">
            </div>
          </div>
          <div style="margin-bottom: 10px;">
            <textarea name="message" id="message" placeholder="Message *" class="requiredField" rows="8"></textarea>
          </div>
            <div class="clearfix">
                <div class="grid_6 alpha fll">
                    <?php  echo $captchaHtml; ?>
                </div>
                <div class="grid_6 omega flr">
                    <input type="text" name="CaptchaCode" id="CaptchaCode" placeholder="Captcha Code *" value="" class="text-input requiredField"/>
                </div>
            </div>
          <div >

          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          <input type="submit" id="sendMessage" name="sendMessage" value="Send Email">
          <span>  </span>
          <div id="ajax-response">
            
          </div>
        </form>
        
      </div><!-- end grid8 -->

      <div class="grid_4 omega sidebar sidebar_b">
        <div class="widget">
          <div class="title"><h4>New Video</h4></div>
          <iframe src="http://player.vimeo.com/video/13897659?color=E84A4A" height="180"></iframe><a href="http://vimeo.com/13897659">Iconic Poster design</a>
        </div><!-- widget -->

        <div class="widget">
          <div id="calendar_wrap"><table id="wp-calendar">
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
                  <td colspan="3" id="prev"><a href="#" title="View posts for December 2013">« Dec</a></td>
                  <td class="pad">&nbsp;</td>
                  <td colspan="3" id="next" class="pad">&nbsp;</td>
                </tr>
              </tfoot>

              <tbody>
                <tr><td colspan="2" class="pad">&nbsp;</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
                <tr><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td></tr>
                <tr><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td id="today">18</td><td>19</td></tr>
                <tr><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td></tr>
                <tr><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td><td class="pad" colspan="2">&nbsp;</td></tr>
              </tbody>
            </table>
          </div>
        </div><!-- widget -->

        <div class="widget">
          <div class="title"><h4>Random Posts</h4></div>
          <div class="relative hover-shadow mb">
            <a href="single_post.html"><img src="themes/ipress/images/assets/r_1.jpg" alt=""></a>
            <div class="r_content">
              <a class="cat color5" href="#" title="View all posts under Music">Music</a>
              <div class="r_title"><a href="single_post.html">At vero eos et accusamus et iusto</a></div>
            </div>
          </div><!-- relative -->

          <div class="relative hover-shadow mb">
            <a href="single_post.html"><img src="themes/ipress/images/assets/r_2.jpg" alt=""></a>
            <div class="r_content">
              <a class="cat color6" href="#" title="View all posts under TV">TV</a>
              <div class="r_title"><a href="single_post.html">A picture of Sin Fang in Bairro Alto</a></div>
            </div>
          </div><!-- relative -->

          <div class="relative hover-shadow mb">
            <a href="single_post.html"><img src="themes/ipress/images/assets/r_3.jpg" alt=""></a>
            <div class="r_content">
              <a class="cat color2" href="#" title="View all posts under Travel">Travel</a>
              <div class="r_title"><a href="single_post.html">Bairro Alto in Lisboa, Portugal</a></div>
            </div>
          </div><!-- relative -->
        </div><!-- widget -->

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
        </div><!-- widget -->

        <?php /*
        <div class="widget">
          <div class="title"><h4>Like Us</h4></div>
          <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=313&amp;height=300&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true&amp;appId=138798126277575" height="292"></iframe>
        </div><!-- widget -->
        */
        ?>
      </div><!-- end grid8 -->
    </div><!-- end grid9 -->

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
      </div><!-- widget -->

      <div class="widget">
        <div class="ads_widget clearfix">
          <a href="#"><img src="images/ads2.jpg" alt="#"></a>
          <a href="#" class="lefter mt"><img src="images/ads3.jpg" alt="#"></a>
          <a href="#" class="righter mt"><img src="images/ads3.jpg" alt="#"></a>
        </div><!-- widget -->
      </div><!-- widget -->

      <div class="widget">
        <div class="title"><h4>What's Hot</h4></div>

          <div class="small_slider_hots owl-carousel owl-theme">
            <div class="item clearfix">
              <ul class="small_posts">
                <li class="clearfix">
                  <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70" src="themes/ipress/images/assets/thumb13.jpg" alt="#"><span>1</span></a>
                  <h3><a href="single_post.html">What is the worst could be the worst?</a></h3>
                  <div class="meta mb"> <a class="cat color1" href="#" title="View all posts under Entertainment">Entertainment</a><span class="post_rating" href="#" title="Rating">8.89</span> </div>
                </li>
                <li class="clearfix">
                  <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70" src="themes/ipress/images/assets/thumb12.jpg" alt="#"><span>2</span></a>
                  <h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
                  <div class="meta mb"> <a class="cat color3" href="#" title="View all posts under News">News</a><span class="post_rating" href="#" title="Rating">8.1</span> </div>
                </li>
                <li class="clearfix">
                  <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70" src="themes/ipress/images/assets/thumb11.jpg" alt="#"><span>3</span></a>
                  <h3><a href="single_post.html">Paul Thomson on post with SoundCloud</a></h3>
                  <div class="meta mb"> <a class="cat color4" href="#" title="View all posts under Sports">Sports</a><span class="post_rating" href="#" title="Rating">7.95</span> </div>
                </li>
                <li class="clearfix">
                  <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70" src="themes/ipress/images/assets/thumb10.jpg" alt="#"><span>4</span></a>
                  <h3><a href="single_post.html">For the days of peace and warmth</a></h3>
                  <div class="meta mb"> <a class="cat color5" href="#" title="View all posts under People">People</a><span class="post_rating" href="#" title="Rating">7.5</span> </div>
                </li>
              </ul>
            </div>
            <div class="item clearfix">
              <ul class="small_posts">
                <li class="clearfix">
                  <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70" src="themes/ipress/images/assets/thumb9.jpg" alt="#"><span>5</span></a>
                  <h3><a href="single_post.html">What worst could be the worst?</a></h3>
                  <div class="meta mb"> <a class="cat color6" href="#" title="View all posts under People">People</a><span class="post_rating" href="#" title="Rating">7</span> </div>
                </li>
                <li class="clearfix">
                  <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70" src="themes/ipress/images/assets/thumb8.jpg" alt="#"><span>6</span></a>
                  <h3><a href="single_post.html">Praesent ipsum adipiscing mi eget ipsum</a></h3>
                  <div class="meta mb"> <a class="cat color7" href="#" title="View all posts under TV">TV</a><span class="post_rating" href="#" title="Rating">5.89</span> </div>
                </li>
                <li class="clearfix">
                  <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70" src="themes/ipress/images/assets/thumb7.jpg" alt="#"><span>7</span></a>
                  <h3><a href="single_post.html">Paul Thomson on post with SoundCloud</a></h3>
                  <div class="meta mb"> <a class="cat color8" href="#" title="View all posts under Society">Society</a><span class="post_rating" href="#" title="Rating">5.5</span> </div>
                </li>
                <li class="clearfix">
                  <a class="s_thumb hover-shadow" href="single_post.html"><img width="70" height="70" src="themes/ipress/images/assets/thumb6.jpg" alt="#"><span>8</span></a>
                  <h3><a href="single_post.html">For the days of peace and warmth</a></h3>
                  <div class="meta mb"> <a class="cat color3" href="#" title="View all posts under Health">Health</a><span class="post_rating" href="#" title="Rating">4</span> </div>
                </li>
              </ul>
            </div>
          </div><!-- /slides -->
      </div><!-- /widget -->

      <div class="widget">
        <div class="latest_tweets">
          <h4> <i class="fa fa-twitter"></i>  @iPress <small> tweets </small> </h4>
          <div class="tweets">
            <div class="tweets_slider owl-carousel owl-theme">
              <div class="item clearfix">
                Singolo is a free PSD template of a flat, single page website created by @T20 #freebie #psd <a href="#">http://bit.ly/19XM8Lj</a> <br><br>										2 hours ago  
              </div><!-- /slide -->
              <div class="item clearfix">
                Singolo is a free PSD template of a flat, single page website created by @T20 #freebie #psd <a href="#">http://bit.ly/19XM8Lj</a> <br><br>
                1 day ago  
              </div><!-- /slide -->
              <div class="item clearfix">
                Singolo is a free PSD template of a flat, single page website created by @T20 #freebie #psd <a href="#">http://bit.ly/19XM8Lj</a> <br><br>
                5 days ago  
              </div><!-- /slide -->
            </div><!-- /tweets slider -->
          </div><!-- /tweets -->
        </div><!-- /latest tweets -->
      </div><!-- /widget -->

      <div class="widget">
        <div class="title"><h4>Polls</h4></div>
        <div class="wp-polls">
          <form class="wp-polls-form" action="#" method="post">
            <p class="tac"><strong>What do you think about our website?</strong></p>
            <div class="wp-polls-ans">
              <ul class="wp-polls-ul">
                <li><input type="radio" name="poll_2" value="6"> <label for="poll-answer-6">Awesome</label></li>
                <li><input type="radio" name="poll_2" value="7"> <label for="poll-answer-7">Super</label></li>
                <li><input type="radio" name="poll_2" value="8"> <label for="poll-answer-8">Normal</label></li>
                <li><input type="radio" name="poll_2" value="9"> <label for="poll-answer-9">Bad</label></li>
              </ul>

              <input type="button" name="vote" value="   Vote   " class="Buttons">
              <input type="button" name="results" value="   View Results   " class="Buttons">
            </div>
          </form>
        </div>
      </div><!-- widget -->

      <div class="widget">
        <div class="title"><h4>Recent Comments</h4></div>
        <ul class="recent_comments small_posts">
          <li class="clearfix">
            <a class="s_thumb hover-shadow" href="single_post.html"><img width="80" height="80" src="themes/ipress/images/assets/avatar1.jpg" alt="#"></a>
            <h5><a href="#">Alex Cohn</a>:</h5>
            <p>Lorem Ipsum is simply dummy text of the printing...</p>
          </li>
          <li class="clearfix">
            <a class="s_thumb hover-shadow" href="single_post.html"><img width="80" height="80" src="themes/ipress/images/assets/avatar2.jpg" alt="#"></a>
            <h5><a href="#">Michele</a>:</h5>
            <p>Here's What Instagram Ads Will Look Like...</p>
          </li>
          <li class="clearfix">
            <a class="s_thumb hover-shadow" href="single_post.html"><img width="80" height="80" src="themes/ipress/images/assets/avatar3.jpg" alt="#"></a>
            <h5><a href="#">Admin</a>:</h5>
            <p>Lorem ipsum is dolor sit amet text of the ipsum...</p>
          </li>
          <li class="clearfix">
            <a class="s_thumb hover-shadow" href="single_post.html"><img width="80" height="80" src="themes/ipress/images/assets/avatar4.jpg" alt="#"></a>
            <h5><a href="#">Tomas Giggs</a>:</h5>
            <p>Lorem Ipsum is simply dummy text of the printing...</p>
          </li>
        </ul>
      </div><!-- /widget -->

    </div><!-- /grid3 sidebar A -->
  </div><!-- /row -->
</div><!-- /end page content -->
@stop