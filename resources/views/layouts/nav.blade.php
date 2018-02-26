
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hidden-sm" href="/" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'navbar-首页'])">
          <i class="glyphicon glyphicon-home"></i>
        迅网科技</a>
      </div>
      <div class="navbar-collapse collapse" role="navigation">
        <ul class="nav navbar-nav">
          <li><a href="/customization"  target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'v2doc'])">网站定制</a></li>
          <li><a href="/threads" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'less'])">社区交流</a></li>
          <li><a href="/service" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'jquery'])">售后服务</a></li>
          <li><a href="http://expo.bootcss.com" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'expo'])">网站实例</a></li>
        </ul>

       

          @if(Auth::check())
          <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                  <i class="glyphicon glyphicon-user"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/personal">
                                          <i class="glyphicon glyphicon-user"></i>
                                            个人信息
                                        </a>
                                      </li>

                                      <li>
                                        <a href="">
                                          <i class="glyphicon glyphicon-th"></i>
                                            我的定制
                                        </a>
                                        </li>
                                        
                                        <li>
                                        <a href="">
                                          <i class="glyphicon glyphicon-cog"></i>
                                            设置
                                        </a>
                                        </li>
                                        <li role="presentation" class="divider"></li>
                                         
                                        <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="glyphicon glyphicon-log-out"></i>
                                            退出登陆
                                        </a>
                                        </li>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                   
                                </ul>
                              </li> 
                              </ul>                 

          @else
           <ul class="nav navbar-nav navbar-right">

              <li>
                <a href="{{ route('login') }}">
                  <i class="glyphicon glyphicon-log-in"></i>
                  登陆
                </a>
              </li>

              <li>
                <a href="{{ route('register') }}">
                  <i class="glyphicon glyphicon-pencil"></i>
                  注册
                </a>
              </li>
          </ul>

          @endif
       
    
      </div>
    </div>
  </div>