<h1><a href="{{ URL::to('/') }}">Asgard</a> CMS</h1>
<nav id="nav">
    <ul>
        <li class="{{ on_route('homepage') ? 'active' : ''}}"><a href="{{ URL::to('/') }}">Home</a></li>
        {{--<li><a href="{{ URL::route('install') }}" class="button {{ Request::is('install') ? 'active' : ''}}">Install</a></li>--}}
        <li class="{{ on_route('faq') ? 'active' : ''}}"><a href="{{ URL::route('faq') }}">F.A.Q.</a></li>
        <li class="{{ on_route('doc.show') ? 'active' : ''}}"><a href="{{ URL::route('doc.index') }}">Documentation</a></li>
        <li class="{{ Request::is('*auth/*') ? 'active' : ''}}">
            <a href="" class="icon fa-angle-down">Account</a>
            <ul>
                <?php if ($user): ?>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                    <?php if ($user->hasRoleName('Admin')): ?>
                        <li><a href="{{ route('dashboard.index') }}">Admin</a></li>
                    <?php endif; ?>
                <?php else: ?>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                <?php endif; ?>
            </ul>
        </li>
    </ul>
</nav>
