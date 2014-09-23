<div class="col-md-4 col-lg-2">
    <aside>
        <div class="hidden-sm hidden-xs" style="height: 149px"></div>
        <article>
            <h6 style="font-style: italic; color: #bbb">Our projects</h6>
            <h4><span class="glyphicon glyphicon-th-list"></span>{{ trans('main.search') }}</h4>
            <div class="list-group">
                <a href="{{ URL::route('projects') . '?tag=Design' }} " class="list-group-item"> <span class="badge">{{ $designCount }} </span>{{ trans('main.design') }}</a>
                <a href="{{ URL::route('projects') . '?tag=Foundation' }} " class="list-group-item"> <span class="badge">{{ $foundationCount }}</span> {{ trans('main.foundation') }}</a>
                <a href="{{ URL::route('projects') . '?tag=Structure' }} " class="list-group-item"> <span class="badge">{{ $structureCount }}</span> {{ trans('main.structure') }}</a>
                <a href="{{ URL::route('projects') . '?tag=' . urlencode('Curtain wall')}} " class="list-group-item"> <span class="badge">{{ $curtainCount }}</span> {{ trans('main.curtainWall') }}</a>
            </div>
        </article>
    </aside>
</div>