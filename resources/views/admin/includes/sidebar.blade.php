<!-- Page Sidebar -->
<div class="page-sidebar">

    <!-- Site header  -->
    <header class="site-header">
        <div class="site-logo"><img src="{{ asset('assets/admin/images/logo.png') }}" alt="logo" title="Mouldifi"></div>
        <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
        <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
    </header>
    <!-- /site header -->

    <!-- Main navigation -->
    <ul id="side-nav" class="main-menu navbar-collapse collapse">
        <li class="has-sub"><a href="index.html"><i class="icon-gauge"></i><span class="title">Dashboard</span></a>
            <ul class="nav collapse">
                <li><a href="{{ route("admin.article.index") }}" class="title">Article</a></li>
                <li><a href="{{ route("admin.faq.index") }}" class="title">Faq</a></li>
                <li><a href="{{ route("admin.project.index") }}" class="title">project</a></li>
                <li><a href="{{ route("admin.resume.index") }}" class="title">resume</a></li>
                <li><a href="{{ route("admin.skill.index") }}" class="title">skill</a></li>
                <li><a href="{{ route("admin.contact.index") }}" class="title">contact</a></li>
            </ul>
        </li>
    </ul>
    <!-- /main navigation -->
</div>
<!-- /page sidebar -->
