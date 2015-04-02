@foreach($articles as $article)
    <div class="post_day mbf clearfix">
        <div class="grid_6 alpha relative">
            <a class="hover-shadow" href="single_post.html"><img src="{{$article->image_path}}" alt=""></a>
        </div><!-- /grid6 alpha -->
        <div class="grid_6 omega">
            <div class="post_day_content">
                <h3> <a href="single_post.html">{{$article->title}}</a> </h3>
                <div class="meta mb"> <?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($article->published_time))->diffForHumans() ?>    /    <a href="single_post.html">0 comments</a> </div>
                <p> {{$article->header}} </p>
            </div><!-- /post content -->
        </div><!-- /grid6 omega -->
    </div><!-- /post day -->
@endforeach
<div class="pagination-tt clearfix">
    <?php echo $articles->render(); ?>
    <span class="pages">Page <?php echo $articles->currentPage(); ?> of <?php echo $articles->lastPage(); ?></span>
</div>