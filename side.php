.sidebar {
width: 180px;
}

@media (min-width: 768px) {
.main {
padding-right: 40px;
padding-left: 220px; /* 180 + 40 */
}
}

<nav>...</nav>
<div class="container-fluid">
<div class="row">
<div class="sidebar">
<ul class="nav nav-sidebar">
    <li class="active"><a href="#">Overview</a></li>
    <li><a href="#">Reports</a></li>
    <li><a href="#">Analytics</a></li>
    <li><a href="#">Export</a></li>
</ul>
</div>
<div class="col-sm-12 main">
<h1 class="page-header">Dashboard</h1>
</div>
</div>
</div>