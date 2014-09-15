<div class="col-md-4 col-lg-2">
    <aside>
        <div class="hidden-sm hidden-xs" style="height: 149px"></div>
        <article>
            <h3><span class="glyphicon glyphicon-th-list"></span>Search by Categories</h3>
            <div class="list-group">
                <a href="{{ URL::route('projects') . '?tag=Design' }} " class="list-group-item"> <span class="badge">{{ DB::table('project_tag')->where('tag_id', '=', 1)->count() }} </span> Design</a>
                <a href="{{ URL::route('projects') . '?tag=Foundation' }} " class="list-group-item"> <span class="badge">{{ DB::table('project_tag')->where('tag_id', '=', 3)->count() }} </span> Foundation</a>
                <a href="{{ URL::route('projects') . '?tag=Structure' }} " class="list-group-item"> <span class="badge">{{ DB::table('project_tag')->where('tag_id', '=', 4)->count() }} </span> Structure</a>
                <a href="{{ URL::route('projects') . '?tag=' . Tag::find(5)->tag_en }} " class="list-group-item"> <span class="badge">{{ DB::table('project_tag')->where('tag_id', '=', 5)->count() }} </span> Curtain wall</a>
            </div>
        </article>
    </aside>
</div>