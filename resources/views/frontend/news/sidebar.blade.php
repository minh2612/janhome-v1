<aside class="col-lg-3">
    <div class="widget search_blog">
        <form action="{{route('news.list')}}" method="get">
            <div class="form-group">
                <input type="text" name="keyword" id="search" class="form-control" placeholder="Import a keyword">
                <span><input type="submit" value="Search"></span>
            </div>
        </form>
    </div>
    <!-- /widget -->
    <div class="widget">
        <div class="widget-title">
            <h4>Highlighting News</h4>
        </div>
        <ul class="comments-list">
            @foreach($featured_news as $val)
            <li>
                <div class="alignleft">
                    <a href="{{$val->url()}}"><img src="{{$val->getImage()}}" alt="{{$val->title}}"></a>
                </div>
                <small>{{$val->getPostSchedule()}}</small>
                <h3><a href="{{$val->url()}}" title="">{{$val->title}}</a></h3>
            </li>
            @endforeach
        </ul>
    </div>
    <!-- /widget -->
    <div class="widget">
        <div class="widget-title">
            <h4>News Category</h4>
        </div>
        <ul class="cats">
            @foreach($category_arr as $category)
            <li><a href="{{$category->urlNews()}}">{{$category->title}} <span>({{$category->news->count()}})</span></a></li>
            @endforeach
        </ul>
    </div>

</aside>
