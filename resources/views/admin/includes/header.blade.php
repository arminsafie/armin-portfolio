<!-- Main header -->
<div class="main-header row">
    <div class="col-sm-6 col-xs-7">

        <!-- User info -->
        <ul class="user-info pull-left">
            <li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="{{ asset("assets/admin/images/userArmin.jpg") }}">Armin Safaie  <span class="caret"></span></a>

                <!-- User action menu -->
                <ul class="dropdown-menu">

                    <li><a href="#/"><i class="icon-user"></i>My profile</a></li>
                    <li><a href="#/"><i class="icon-mail"></i>Messages</a></li>
                    <li><a href="#"><i class="icon-clipboard"></i>Tasks</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog"></i>Account settings</a></li>
                    <li><a href="#"><i class="icon-logout"></i>Logout</a></li>
                </ul>
                <!-- /user action menu -->

            </li>
        </ul>
        <!-- /user info -->

    </div>

    <div class="col-sm-6 col-xs-5">
        <div class="pull-right">
            <!-- User alerts -->
            <ul class="user-info pull-left">

                <!-- Notifications -->
                <li class="notifications dropdown">
                    <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-attention"></i><span class="badge badge-info">6</span></a>
                    <ul class="dropdown-menu pull-right">
                        <li class="first">
                            <div class="small"><a class="pull-right danger" href="#">Mark all Read</a> You have <strong>3</strong> new notifications.</div>
                        </li>
                        <li>
                            <ul class="dropdown-list">
                                <li class="unread notification-success"><a href="#"><i class="icon-user-add pull-right"></i><span class="block-line strong">New user registered</span><span class="block-line small">30 seconds ago</span></a></li>
                                <li class="unread notification-secondary"><a href="#"><i class="icon-heart pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                <li class="unread notification-primary"><a href="#"><i class="icon-user pull-right"></i><span class="block-line strong">Privacy settings have been changed</span><span class="block-line small">2 hours ago</span></a></li>
                                <li class="notification-danger"><a href="#"><i class="icon-cancel-circled pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                <li class="notification-info"><a href="#"><i class="icon-info pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                <li class="notification-warning"><a href="#"><i class="icon-rss pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                            </ul>
                        </li>
                        <li class="external-last"> <a href="#" class="danger">View all notifications</a> </li>
                    </ul>
                </li>
                <!-- /notifications -->

                <!-- Messages -->
                <li class="notifications dropdown">
                    <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-mail"></i><span class="badge badge-secondary">12</span></a>
                    <ul class="dropdown-menu pull-right">
                        <li class="first">
                            <div class="dropdown-content-header"><i class="fa fa-pencil-square-o pull-right"></i> Messages</div>
                        </li>
                        <li>
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset("assets/admin/images/domnic-brown.png") }}"></div>
                                    <div class="media-body">
                                        <a class="media-heading" href="#">
                                            <span class="text-semibold">Domnic Brown</span>
                                            <span class="media-annotation pull-right">Tue</span>
                                        </a>
                                        <span class="text-muted">Your product sounds interesting I would love to check this ne...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset("assets/admin/images/john-smith.png") }}"></div>
                                    <div class="media-body">
                                        <a class="media-heading" href="#">
                                            <span class="text-semibold">John Smith</span>
                                            <span class="media-annotation pull-right">12:30</span>
                                        </a>
                                        <span class="text-muted">Thank you for posting such a wonderful content. The writing was outstanding...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset("assets/admin/images/stella-johnson.png") }}"></div>
                                    <div class="media-body">
                                        <a class="media-heading" href="#">
                                            <span class="text-semibold">Stella Johnson</span>
                                            <span class="media-annotation pull-right">2 days ago</span>
                                        </a>
                                        <span class="text-muted">Thank you for trusting us to be your source for top quality sporting goods...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset("assets/admin/images/alex-dolgove.png") }}"></div>
                                    <div class="media-body">
                                        <a class="media-heading" href="#">
                                            <span class="text-semibold">Alex Dolgove</span>
                                            <span class="media-annotation pull-right">10:45</span>
                                        </a>
                                        <span class="text-muted">After our Friday meeting I was thinking about our business relationship and how fortunate...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset("assets/admin/images/domnic-brown.png") }}"></div>
                                    <div class="media-body">
                                        <a class="media-heading" href="#">
                                            <span class="text-semibold">Domnic Brown</span>
                                            <span class="media-annotation pull-right">4:00</span>
                                        </a>
                                        <span class="text-muted">I would like to take this opportunity to thank you for your cooperation in recently completing...</span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="external-last"> <a class="danger" href="#">All Messages</a> </li>
                    </ul>
                </li>
                <!-- /messages -->

            </ul>
            <!-- /user alerts -->

        </div>
    </div>
</div>
<!-- /main header -->
