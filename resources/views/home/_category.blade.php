@php
    $parentMenus = \App\Http\Controllers\HomeController::menulist()
@endphp

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">
        Pages
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="property-single.html">Property Single</a>
        <a class="dropdown-item" href="blog-single.html">Blog Single</a>
        <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
        <a class="dropdown-item" href="agent-single.html">Agent Single</a>
    </div>
</li>
