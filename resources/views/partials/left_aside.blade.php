<!-- START Template Sidebar (Left) -->
        <aside class="sidebar sidebar-left sidebar-menu">
            <!-- START Sidebar Content -->
            <section class="content slimscroll">
                <!-- START Template Navigation/Menu -->
                <ul class="topmenu topmenu-responsive" data-toggle="menu">
                    <li class="active">
                        <a href="/" data-target="#dashboard" data-parent=".topmenu">
                            <span class="figure"><i class="ico-home2"></i></span>
                            <span class="text">@lang('menu.dashboard')</span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#layout" data-parent=".topmenu">
                            <span class="figure"><i class="ico-grid"></i></span>
                            <span class="text">@lang('menu.layouts')</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="layout" class="submenu collapse ">
                            <li class="submenu-header ellipsis">@lang('menu.layouts')</li>
                            <li >
                                <a href="{{route('layout.default')}}">
                                    <span class="text">@lang('menu.layout.default')</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('layout.withFooter')}}">
                                    <span class="text">@lang('menu.layout.withFooter')</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('layout.revealHeader')}}">
                                    <span class="text">@lang('menu.layout.revealHeader')</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('layout.fixedHeader')}}">
                                    <span class="text">@lang('menu.layout.fixedHeader')</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('layout.fixedSidebar')}}">
                                    <span class="text">@lang('menu.layout.fixedSidebar')</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('layout.navbarCollapse')}}">
                                    <span class="text">@lang('menu.layout.navbarCollapse')</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li>
                        <a href="/widget" data-parent=".topmenu">
                            <span class="figure"><i class="ico-tasks"></i></span>
                            <span class="text">Stats & Widgets</span>
                            <span class="number"><span class="label label-danger">6</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-screen4"></i></span>
                            <span class="text">UI Elements</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="components" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Components</li>
                            <li >
                                <a href="{{route('component.animation')}}">
                                    <span class="text">Animation</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.button')}}">
                                    <span class="text">Button</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.carousel')}}">
                                    <span class="text">Carousel</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.grid')}}">
                                    <span class="text">Grid</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.icon')}}">
                                    <span class="text">Icon</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.loading')}}">
                                    <span class="text">Loading indicator</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.notification')}}">
                                    <span class="text">Notification</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.panel')}}">
                                    <span class="text">Panel</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.pricing')}}">
                                    <span class="text">Pricing table / box</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.slider')}}">
                                    <span class="text">Slider</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.sortable')}}">
                                    <span class="text">Sortable</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.tabsaccordion')}}">
                                    <span class="text">Tabs &amp; accordion</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.typography')}}">
                                    <span class="text">Typography</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('component.others')}}">
                                    <span class="text">Miscelleneous</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#form" data-parent=".topmenu">
                            <span class="figure"><i class="ico-file"></i></span>
                            <span class="text">Forms</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="form" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Forms</li>
                            <li >
                                <a href="{{route('form.element')}}">
                                    <span class="text">Element</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('form.layout')}}">
                                    <span class="text">Layout</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('form.validation')}}">
                                    <span class="text">Validation</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('form.wizard')}}">
                                    <span class="text">Wizard</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('form.wysiwyg')}}">
                                    <span class="text">WYSIWYG Editor</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('form.xeditable')}}">
                                    <span class="text">X-editable</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('form.fileupload')}}">
                                    <span class="text">File Upload</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('form.imagecrop')}}">
                                    <span class="text">Image Crop</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                            <span class="figure"><i class="ico-table22"></i></span>
                            <span class="text">Tables</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="table" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Tables</li>
                            <li >
                                <a href="{{route('table.default')}}">
                                    <span class="text">Basic Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('table.datatable')}}">
                                    <span class="text">Data Tables</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#page" data-parent=".topmenu">
                            <span class="figure"><i class="ico-copy4"></i></span>
                            <span class="text">Miscelleneous</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="page" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Miscelleneous</li>
                            <li >
                                <a href="{{route('page.starter')}}">
                                    <span class="text">Blank </span>
                                </a>
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#blog" data-parent="#page">
                                    <span class="text">Blog page</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="blog" class="submenu collapse ">
                                    <li >
                                        <a href="{{route('page.blog.default')}}"><span class="text">Blog default</span></a>
                                    </li>
                                    <li >
                                        <a href="{{route('page.blog.grid')}}"><span class="text">Blog grid</span></a>
                                    </li>
                                    <li >
                                        <a href="{{route('page.blog.single')}}"><span class="text">Single post</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="{{route('page.calendar')}}">
                                    <span class="text">Calendar</span>
                                </a>
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#email" data-parent="#page">
                                    <span class="text">Email</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="email" class="submenu collapse ">
                                    <li >
                                        <a href="{{route('page.email.inbox')}}"><span class="text">Inbox</span></a>
                                    </li>
                                    <li >
                                        <a href="{{route('page.email.view')}}"><span class="text">View</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#error" data-parent="#page">
                                    <span class="text">Error</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="error" class="submenu collapse ">
                                    <li >
                                        <a href="{{route('page.error.404')}}"><span class="text">Not Found (404)</span></a>
                                    </li>
                                    <li >
                                        <a href="{{route('page.error.403')}}"><span class="text">Forbidden (403)</span></a>
                                    </li>
                                    <li >
                                        <a href="{{route('page.error.500')}}"><span class="text">Server Error (500)</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="{{route('page.faq')}}">
                                    <span class="text">FAQ</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('page.invoice')}}">
                                    <span class="text">Invoice</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('page-profile.index')}}">
                                    <span class="text">Profile</span>
                                </a>
                            </li>
                            <li >
                                <a href="/login">
                                    <span class="text">Login</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('page.login.returned')}}">
                                    <span class="text">Lock Screen</span>
                                </a>
                            </li>
                            <li >
                                <a href="/register">
                                    <span class="text">Register</span>
                                </a>
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#media" data-parent="#page">
                                    <span class="text">Media</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="media" class="submenu collapse ">
                                    <li >
                                        <a href="{{route('page.media.album')}}"><span class="text">Media album</span></a>
                                    </li>
                                    <li >
                                        <a href="{{route('page.media.gallery')}}"><span class="text">Media gallery</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#message" data-parent="#page">
                                    <span class="text">Message</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="message" class="submenu collapse ">
                                    <li >
                                        <a href="{{route('page.message.bubble')}}"><span class="text">Bubble message</span></a>
                                    </li>
                                    <li >
                                        <a href="{{route('page.message.rich')}}"><span class="text">Rich message</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="{{route('page.timeline.v2')}}">
                                    <span class="text">Timeline</span>
                                </a>
                            </li>

                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="{{route('chart.flot')}}">
                            <span class="figure"><i class="ico-stats-up"></i></span>
                            <span class="text">Charts</span>
                            <span class="number"><span class="label label-success">11</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#maps" data-parent=".topmenu">
                            <span class="figure">
                                <i class="ico-map3"></i>
                            </span>
                            <span class="text">Maps</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="maps" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Maps</li>
                            <li >
                                <a href="{{route('maps.vector')}}">
                                    <span class="text">Vector</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="{{route('maps.google')}}">
                                    <span class="text">Google</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu1" data-parent=".topmenu">
                            <span class="figure">
                                <i class="ico-sitemap"></i>
                            </span>
                            <span class="text">Menu Levels</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="submenu1" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Menu Levels</li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu2" data-parent="#submenu">
                                    <span class="text">Menu Level 1.1</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul id="submenu2" class="submenu collapse ">
                                    <li class="submenu-header ellipsis">Menu Levels 1.1</li>
                                    <li >
                                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu3" data-parent="#submenu2">
                                            <span class="text">Menu Level 2.1</span>
                                            <span class="arrow"></span>
                                        </a>
                                        <ul id="submenu3" class="submenu collapse ">
                                            <li class="submenu-header ellipsis">Menu Levels 2.1</li>
                                            <li >
                                                <a href="/#">
                                                    <span class="text">Menu Level 3.1</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                </ul>
                <!--/ END Template Navigation/Menu -->
                <!-- START Sidebar summary -->
                <!-- Summary -->
                <h5 class="heading">Summary</h5>
                <div class="wrapper">
                    <div class="table-layout">
                        <div class="col-xs-5 valign-middle">
                            <span class="sidebar-sparklines" sparkType="bar" sparkBarColor="#00B1E1">1,5,3,2,4,5,3,3,2,4,5,3</span>
                        </div>
                        <div class="col-xs-7 valign-middle">
                            <h5 class="semibold nm">Server uptime</h5>
                            <small class="semibold">1876 days</small>
                        </div>
                    </div>

                    <div class="table-layout">
                        <div class="col-xs-5 valign-middle">
                            <span class="sidebar-sparklines" sparkType="bar" sparkBarColor="#91C854">2,5,3,6,4,2,4,7,8,9,7,6</span>
                        </div>
                        <div class="col-xs-7 valign-middle">
                            <h5 class="semibold nm">Disk usage</h5>
                            <small class="semibold">83.1%</small>
                        </div>
                    </div>

                    <div class="table-layout">
                        <div class="col-xs-5 valign-middle">
                            <span class="sidebar-sparklines" sparkType="bar" sparkBarColor="#ED5466">5,1,3,7,4,3,7,8,6,5,3,2</span>
                        </div>
                        <div class="col-xs-7 valign-middle">
                            <h5 class="semibold nm">Daily visitors</h5>
                            <small class="semibold">56.5%</small>
                        </div>
                    </div>
                </div>
                <!--/ Summary -->
                <!--/ END Sidebar summary -->
            </section>
            <!--/ END Sidebar Container -->
        </aside>
        <!--/ END Template Sidebar (Left) -->