<!-- widget -->
<div class="widget">
    <div class="title"><h4>Random Posts</h4></div>
    @if(isset($articles)&&count($articles))
        @foreach($articles as $article)
            <?php
            $category = \App\Models\Category::find(array('id'=>$article->category_id))->first();
            ?>
            <div class="relative hover-shadow mb">
                <a href="#"><img src="{{$article->image_path}}" alt=""></a>

                <div class="r_content">
                    <a class="cat color5" href="#" title="View all posts under Music"><?php if($category) echo htmlspecialchars($category->name_vi) ?></a>

                    <div class="r_title"><a href="#">{{$article->title}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
                    <!-- relative -->
</div>
<!-- widget -->