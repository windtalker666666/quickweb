<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'quickweb') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                   
                <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav"> 

                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">浏览 <span class="caret"></span></a>
                            
                            <ul class="dropdown-menu">
                                <li><a href="/threads">所有文章</a></li>

                                @if(auth()->check())
                                  <li><a href="/threads?by={{ auth()->user()->name }}">我的文章</a></li>
                                @endif

                                <li><a href="/threads?popular=1">热门文章</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="/threads/create">创建文章</a>
                        </li>
                        


                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">标签 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach(App\Channel::all() as $channel)
                                    <li><a href="/threads/{{$channel->slug}}">{{$channel->name}}</a> </li>
                                @endforeach
                            </ul>
                        </li>

                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">登陆(Login)</a></li>
                            <li><a href="{{ route('register') }}">注册(Register)</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="/profiles/{{ Auth::user()->name }}">我的文章</a>
                                    </li>

                                    <li>

                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            退出登陆
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>               

                    

                    
      