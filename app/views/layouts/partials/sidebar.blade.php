<div class="col-md-4 col-lg-2">
    <aside>
        <div class="hidden-sm hidden-xs" style="height: 149px"></div>
        <article>
            <h3><span class="glyphicon glyphicon-th-list"></span>Catergories</h3>
            <div class="list-group">
                <a href="#" class="list-group-item"> <span class="badge">{{ DB::table('project_tag')->where('tag_id', '=', 1)->count() }} </span> Design</a>
                <a href="#" class="list-group-item"> <span class="badge">{{ DB::table('project_tag')->where('tag_id', '=', 3)->count() }} </span> Foundation</a>
                <a href="#" class="list-group-item"> <span class="badge">{{ DB::table('project_tag')->where('tag_id', '=', 4)->count() }} </span> Structure</a>
                <a href="#" class="list-group-item"> <span class="badge">{{ DB::table('project_tag')->where('tag_id', '=', 5)->count() }} </span> Curtain wall</a>
            </div>
        </article>
    </aside>
</div>