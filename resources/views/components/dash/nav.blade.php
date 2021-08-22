<nav class="nav">
    <div class="nav-top">
        <div class="dash-logo">
            @include('../components/logo_icon_svg', [ 'width' => 50, 'color' => '#ffffff'])
        </div>
        <ul>
            <li><i class="fas fa-chart-bar"></i> <a href="#">Dashboard</a></li>
            <li><i class="fas fa-globe-americas"></i> <a href="#">Domains</a></li>
            <li><i class="fas fa-cog"></i> <a href="#">Settings</a></li>
            <li><i class="fas fa-user"></i> <a href="#">My Account</a></li>
        </ul>
    </div>
    <div class="nav-bottom">
        <ul>
            <li><i class="fas fa-sign-out-alt"></i> <a href="#">Logout</a></li>
        </ul>
    </div>
</nav>