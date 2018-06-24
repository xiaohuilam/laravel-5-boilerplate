<li class="header">MAIN NAVIGATION</li>

<li class="{{ Request::is('admin.dashboard*') ? 'active' : '' }}">
    <a href="{!! route('admin.dashboard') !!}"><i class="glyphicon glyphicon-home"></i><span>首页</span></a>
</li>

