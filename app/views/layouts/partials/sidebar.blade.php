<div class="col-md-4 col-lg-2">
    <aside>
        <div class="hidden-sm hidden-xs" style="height: 149px"></div>
        <article>
            <h3><span class="glyphicon glyphicon-th-list"></span>Search by Categories</h3>
            <div class="list-group">
                <a href="{{ URL::route('projects') . '?tag=Design' }} " class="list-group-item"> <span class="badge">{{ $designCount }} </span> Design</a>
                <a href="{{ URL::route('projects') . '?tag=Foundation' }} " class="list-group-item"> <span class="badge">{{ $foundationCount }}</span> Foundation</a>
                <a href="{{ URL::route('projects') . '?tag=Structure' }} " class="list-group-item"> <span class="badge">{{ $structureCount }}</span> Structure</a>
                <a href="{{ URL::route('projects') . '?tag=' . urlencode('Curtain wall')}} " class="list-group-item"> <span class="badge">{{ $curtainCount }}</span> Curtain wall</a>
            </div>
        </article>
    </aside>
</div>