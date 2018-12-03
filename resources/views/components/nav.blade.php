<div class="nav {{ Route::currentRouteName() == 'timeline' ? 'nav-timeline' : '' }}">
    <a href="{{ route('timeline') }}"
       class="nav-link {{ Route::currentRouteName() == 'timeline' ? 'active' : '' }}">Timeline</a>
    <a href="{{ route('messages') }}"
       class="nav-link {{ Route::currentRouteName() == 'messages' ? 'active' : '' }}">Messages</a>
    <a href="{{ route('sources') }}"
       class="nav-link" {{ Route::currentRouteName() == 'sources' ? 'active' : '' }}>Sources</a>
</div>