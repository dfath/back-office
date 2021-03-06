<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Web Application | todo</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('css/font.css') }}" type="text/css" cache="false" />
  <link rel="stylesheet" href="{{ url('css/plugin.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ url('css/app.css') }}" type="text/css" />
  <!--[if lt IE 9]>
    <script src="{{ url('js/ie/respond.min.js') }}" cache="false"></script>
    <script src="{{ url('js/ie/html5.js') }}" cache="false"></script>
    <script src="{{ url('js/ie/fix.js') }}" cache="false"></script>
  <![endif]-->
</head>
<body>
  <section class="hbox stretch">
    <!-- .aside -->
    <aside class="bg-light aside b-r" id="nav">
      <section class="vbox">
        <header class="bg-dark nav-bar">
          <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="body">
            <i class="icon-reorder"></i>
          </a>
          <a href="#" class="nav-brand" data-toggle="fullscreen">todo</a>
          <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user">
            <i class="icon-comment-alt"></i>
          </a>
        </header>
        <footer class="footer b-r bg-gradient hidden-xs">
          <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-sm btn-link m-r-n-xs pull-right">
            <i class="icon-off"></i>
          </a>
          <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm">
            <i class="icon-reorder"></i>
          </a>
        </footer>
        <section>
          <div class="bg-dark lter nav-user hidden-xs pos-rlt">
            <div class="nav-avatar pos-rlt">
              <a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown">
                <img src="images/avatar.jpg" alt="" class="">
                <span class="caret caret-white"></span>
              </a>
              <ul class="dropdown-menu m-t-sm animated fadeInLeft">
              	<span class="arrow top"></span>
                <li>
                  <a href="#">Settings</a>
                </li>
                <li>
                  <a href="profile.html">Profile</a>
                </li>
                <li>
                  <a href="#">
                    <span class="badge bg-danger pull-right">3</span>
                    Notifications
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="docs.html">Help</a>
                </li>
                <li>
                  <a href="signin.html">Logout</a>
                </li>
              </ul>
              <div class="visible-xs m-t m-b">
                <a href="#" class="h3">John.Smith</a>
                <p><i class="icon-map-marker"></i> London, UK</p>
              </div>
            </div>
            <div class="nav-msg">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <b class="badge badge-white count-n">2</b>
              </a>
              <section class="dropdown-menu m-l-sm pull-left animated fadeInRight">
                <div class="arrow left"></div>
                <section class="panel bg-white">
                  <header class="panel-heading">
                    <strong>You have <span class="count-n">2</span> notifications</strong>
                  </header>
                  <div class="list-group">
                    <a href="#" class="media list-group-item">
                      <span class="pull-left thumb-sm">
                        <img src="images/avatar.jpg" alt="John said" class="img-circle">
                      </span>
                      <span class="media-body block m-b-none">
                        Use awesome animate.css<br>
                        <small class="text-muted">28 Aug 13</small>
                      </span>
                    </a>
                    <a href="#" class="media list-group-item">
                      <span class="media-body block m-b-none">
                        1.0 initial released<br>
                        <small class="text-muted">27 Aug 13</small>
                      </span>
                    </a>
                  </div>
                  <footer class="panel-footer text-sm">
                    <a href="#" class="pull-right"><i class="icon-cog"></i></a>
                    <a href="#">See all the notifications</a>
                  </footer>
                </section>
              </section>
            </div>
          </div>
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
              <li>
                <a href="index.html">
                  <i class="icon-eye-open"></i>
                  <span>Discover</span>
                </a>
              </li>
              <li class="dropdown-submenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-beaker"></i>
                  <span>UI kit</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="buttons.html">Buttons</a>
                  </li>
                  <li>
                    <a href="icons.html">
                      <b class="badge pull-right">302</b>Icons
                    </a>
                  </li>
                  <li>
                    <a href="grid.html">Grid</a>
                  </li>
                  <li>
                    <a href="widgets.html">
                      <b class="badge bg-primary pull-right">8</b>Widgets
                    </a>
                  </li>
                  <li>
                    <a href="components.html">
                      <b class="badge pull-right">18</b>Components
                    </a>
                  </li>
                  <li>
                    <a href="list.html">List groups</a>
                  </li>
                  <li>
                    <a href="table.html">Table</a>
                  </li>
                  <li>
                    <a href="form.html">Form</a>
                  </li>
                  <li>
                    <a href="chart.html">Chart</a>
                  </li>
                  <li>
                    <a href="calendar.html">Fullcalendar</a>
                  </li>
                </ul>
              </li>
               <li class="dropdown-submenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-file-text"></i>
                  <span>Pages</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="dashboard.html">Dashboard</a>
                  </li>
                  <li>
                    <a href="dashboard-1.html">Dashboard one</a>
                  </li>
                  <li>
                    <a href="gallery.html">Gallery</a>
                  </li>
                  <li>
                    <a href="profile.html">Profile</a>
                  </li>
                  <li>
                    <a href="blog.html">Blog</a>
                  </li>
                  <li>
                    <a href="invoice.html">Invoice</a>
                  </li>
                  <li>
                    <a href="signin.html">Signin page</a>
                  </li>
                  <li>
                    <a href="signup.html">Signup page</a>
                  </li>
                  <li>
                    <a href="404.html">404 page</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="mail.html">
                  <b class="badge bg-primary pull-right">3</b>
                  <i class="icon-envelope-alt"></i>
                  <span>Mail</span>
                </a>
              </li>
              <li>
                <a href="tasks.html">
                  <i class="icon-tasks"></i>
                  <span>Tasks</span>
                </a>
              </li>
              <li>
                <a href="notes.html">
                  <i class="icon-pencil"></i>
                  <span>Notes</span>
                </a>
              </li>
              <li>
                <a href="timeline.html">
                  <i class="icon-time"></i>
                  <span>Timeline</span>
                </a>
              </li>
            </ul>
          </nav>
        </section>
      </section>
    </aside>
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
      <section class="vbox">
        <header class="header bg-white b-b">
          <p>Welcome to John's profile</p>
        </header>
        <section class="scrollable">
          <section class="hbox stretch">
            <aside class="aside-lg bg-light lter b-r">
              <section class="vbox">
                <section class="scrollable">
                  <div class="wrapper">
                    <div class="clearfix m-b">
                      <a href="#" class="pull-left thumb m-r">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <div class="clear">
                        <div class="h3 m-t-xs m-b-xs">John.Smith</div>
                        <small class="text-muted"><i class="icon-map-marker"></i> London, UK</small>
                      </div>
                    </div>
                    <div class="panel wrapper">
                      <div class="row">
                        <div class="col-xs-4">
                          <a href="#">
                            <span class="m-b-xs h4 block">245</span>
                            <small class="text-muted">Followers</small>
                          </a>
                        </div>
                        <div class="col-xs-4">
                          <a href="#">
                            <span class="m-b-xs h4 block">55</span>
                            <small class="text-muted">Following</small>
                          </a>
                        </div>
                        <div class="col-xs-4">
                          <a href="#">
                            <span class="m-b-xs h4 block">2,035</span>
                            <small class="text-muted">Tweets</small>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group btn-group-justified m-b">
                      <a class="btn btn-success btn-rounded" data-toggle="button">
                        <span class="text">
                          <i class="icon-eye-open"></i> Follow
                        </span>
                        <span class="text-active">
                          <i class="icon-eye-open"></i> Following
                        </span>
                      </a>
                      <a class="btn btn-info btn-rounded">
                        <i class="icon-comment-alt"></i> Chat
                      </a>
                    </div>
                    <div>
                      <small class="text-uc text-xs text-muted">about me</small>
                      <p>Artist</p>
                      <small class="text-uc text-xs text-muted">info</small>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>
                      <div class="line"></div>
                      <small class="text-uc text-xs text-muted">connection</small>
                      <p class="m-t-sm">
                        <a href="#" class="btn btn-rounded btn-twitter btn-icon"><i class="icon-twitter"></i></a>
                        <a href="#" class="btn btn-rounded btn-facebook btn-icon"><i class="icon-facebook"></i></a>
                        <a href="#" class="btn btn-rounded btn-gplus btn-icon"><i class="icon-google-plus"></i></a>
                      </p>
                    </div>
                  </div>
                </section>
              </section>
            </aside>
            <aside class="bg-white">
              <section class="vbox">
                <header class="header bg-light bg-gradient">
                  <ul class="nav nav-tabs nav-white">
                    <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                    <li class=""><a href="#events" data-toggle="tab">Events</a></li>
                    <li class=""><a href="#interaction" data-toggle="tab">Interaction</a></li>
                  </ul>
                </header>
                <section class="scrollable">
                  <div class="tab-content">
                    <div class="tab-pane active" id="activity">
                      <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar_default.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">3 minuts ago</small>
                            <strong class="block">Drew Wllon</strong>
                            <small>Wellcome and play this web application template ... </small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">1 hour ago</small>
                            <strong class="block">Jonathan George</strong>
                            <small>Morbi nec nunc condimentum...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">2 hours ago</small>
                            <strong class="block">Josh Long</strong>
                            <small>Vestibulum ullamcorper sodales nisi nec...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar_default.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">1 day ago</small>
                            <strong class="block">Jack Dorsty</strong>
                            <small>Morbi nec nunc condimentum...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">3 days ago</small>
                            <strong class="block">Morgen Kntooh</strong>
                            <small>Mobile first web app for startup...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar_default.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">Jun 21</small>
                            <strong class="block">Yoha Omish</strong>
                            <small>Morbi nec nunc condimentum...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">May 10</small>
                            <strong class="block">Gole Lido</strong>
                            <small>Vestibulum ullamcorper sodales nisi nec...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar_default.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">Jan 2</small>
                            <strong class="block">Jonthan Snow</strong>
                            <small>Morbi nec nunc condimentum...</small>
                          </a>
                        </li>
                        <li class="list-group-item" href="#email-content" data-toggle="class:show">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar_default.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">3 minuts ago</small>
                            <strong class="block">Drew Wllon</strong>
                            <small>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">1 hour ago</small>
                            <strong class="block">Jonathan George</strong>
                            <small>Morbi nec nunc condimentum...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">2 hours ago</small>
                            <strong class="block">Josh Long</strong>
                            <small>Vestibulum ullamcorper sodales nisi nec...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar_default.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">1 day ago</small>
                            <strong class="block">Jack Dorsty</strong>
                            <small>Morbi nec nunc condimentum...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">3 days ago</small>
                            <strong class="block">Morgen Kntooh</strong>
                            <small>Mobile first web app for startup...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar_default.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">Jun 21</small>
                            <strong class="block">Yoha Omish</strong>
                            <small>Morbi nec nunc condimentum...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">May 10</small>
                            <strong class="block">Gole Lido</strong>
                            <small>Vestibulum ullamcorper sodales nisi nec...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar_default.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">Jan 2</small>
                            <strong class="block">Jonthan Snow</strong>
                            <small>Morbi nec nunc condimentum...</small>
                          </a>
                        </li>
                        <li class="list-group-item" href="#email-content" data-toggle="class:show">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar_default.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">3 minuts ago</small>
                            <strong class="block">Drew Wllon</strong>
                            <small>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">1 hour ago</small>
                            <strong class="block">Jonathan George</strong>
                            <small>Morbi nec nunc condimentum...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">2 hours ago</small>
                            <strong class="block">Josh Long</strong>
                            <small>Vestibulum ullamcorper sodales nisi nec...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar_default.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">1 day ago</small>
                            <strong class="block">Jack Dorsty</strong>
                            <small>Morbi nec nunc condimentum...</small>
                          </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#" class="thumb-sm pull-left m-r-sm">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <a href="#" class="clear">
                            <small class="pull-right">3 days ago</small>
                            <strong class="block">Morgen Kntooh</strong>
                            <small>Mobile first web app for startup...</small>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-pane" id="events">
                      <div class="text-center wrapper">
                        <i class="icon-spinner icon-spin icon-large"></i>
                      </div>
                    </div>
                    <div class="tab-pane" id="interaction">
                      <div class="text-center wrapper">
                        <i class="icon-spinner icon-spin icon-large"></i>
                      </div>
                    </div>
                  </div>
                </section>
              </section>
            </aside>
            <aside class="col-lg-4 b-l">
              <section class="vbox">
                <section class="scrollable">
                  <div class="wrapper">
                    <section class="panel">
                      <form>
                        <textarea class="form-control no-border" rows="5" placeholder="What are you doing..."></textarea>
                      </form>
                      <footer class="panel-footer bg-light lter">
                        <button class="btn btn-info pull-right btn-sm">POST</button>
                        <ul class="nav nav-pills nav-sm">
                          <li><a href="#"><i class="icon-camera"></i></a></li>
                          <li><a href="#"><i class="icon-facetime-video"></i></a></li>
                        </ul>
                      </footer>
                    </section>
                    <section class="panel">
                      <h4 class="font-thin padder">Latest Tweets</h4>
                      <ul class="list-group">
                        <li class="list-group-item">
                            <p>Wellcome <a href="#" class="text-info">@Drew Wllon</a> and play this web application template, have fun1 </p>
                            <small class="block text-muted"><i class="icon-time"></i>2 minuts ago</small>
                        </li>
                        <li class="list-group-item">
                            <p>Morbi nec <a href="#" class="text-info">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p>
                            <small class="block text-muted"><i class="icon-time"></i>1 hour ago</small>
                        </li>
                        <li class="list-group-item">
                            <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                            <small class="block text-muted"><i class="icon-time"></i>2 hours ago</small>
                        </li>
                      </ul>
                    </section>
                    <section class="panel clearfix bg-info lter">
                      <div class="panel-body">
                        <a href="#" class="thumb pull-left m-r">
                          <img src="images/avatar.jpg" class="img-circle">
                        </a>
                        <div class="clear">
                          <a href="#" class="text-info">@Mike Mcalidek <i class="icon-twitter"></i></a>
                          <small class="block text-muted">2,415 followers / 225 tweets</small>
                          <a href="#" class="btn btn-xs btn-success m-t-xs">Follow</a>
                        </div>
                      </div>
                    </section>
                  </div>
                </section>
              </section>
            </aside>
          </section>
        </section>
      </section>
      <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="body"></a>
    </section>
    <!-- /.vbox -->
  </section>
  <!-- App -->
  <script src="{{ url('js/app.js') }}"></script>
</body>
</html>
