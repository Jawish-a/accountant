<div class="sidebar ps ps--active-y" data-color="white" data-active-color="info">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color=" default | primary | info | success | warning | danger |"
  -->
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="img/logo-small.png">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
            <strong>Bookkeeping</strong> <sub>by bca</sub>
            <!-- <div class="logo-image-big">
          <img src="img/logo-big.png">
        </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper ps ps--active-x">
        <div class="user">
            <div class="photo">
                <img src="img/faces/avatar.png">
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        {{auth()->user()->name}}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{route('profile')}}">
                                <span class="sidebar-mini-icon">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">EP</span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">$</span>
                                <span class="sidebar-normal">Subscription</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                <span class="sidebar-mini-icon">X</span>
                                <span class="sidebar-normal">Logout</span>
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            {{-- admin --}}
            @if (auth()->user()->role_id == 3)
            {{-- files --}}
            <li>
                <a data-toggle="collapse" href="#filesTab">
                    <i class="nc-icon nc-book-bookmark"></i>
                    <p>
                        Documents <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="filesTab">
                    <ul class="nav">
                        <li>
                            <a href="{{route('files.create')}}">
                                <span class="sidebar-mini-icon">UP</span>
                                <span class="sidebar-normal"> upload </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('files.index')}}">
                                <span class="sidebar-mini-icon">O</span>
                                <span class="sidebar-normal"> My Documents </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- chat --}}
            <li>
                <a data-toggle="collapse" href="#chatTap">
                    <i class="nc-icon nc-chat-33"></i>
                    <p>
                        Chat <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="chatTap">
                    <ul class="nav">
                        <li>
                            <a href="{{route('chat.create')}}">
                                <span class="sidebar-mini-icon">A</span>
                                <span class="sidebar-normal"> Ask </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('chat.index')}}">
                                <span class="sidebar-mini-icon">V</span>
                                <span class="sidebar-normal"> View Conversation </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- reports --}}
            <li>
                <a href="{{route('reports.index')}}">
                    <i class="nc-icon nc-chart-pie-36"></i>
                    <p>Reports</p>
                </a>
            </li>
            @endif
            {{-- accountant --}}
            @if (auth()->user()->role_id == 2)
            <hr>
            {{-- companies --}}
            @foreach (auth()->user()->companies as $company)
            <li>
                <a href="{{route('company.show', $company)}}">
                    <i class="nc-icon nc-app"></i>
                    <p>{{$company->name}}</p>
                </a>
            </li>
            @endforeach
            @endif
            {{-- client --}}
            @if (auth()->user()->role_id == 1)
            <hr>
            {{-- Users --}}
            <li>
                <a href="{{route('users.index')}}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Users</p>
                </a>
            </li>
            {{-- Roles --}}
            <li>
                <a href="{{route('roles.index')}}">
                    <i class="nc-icon nc-badge"></i>
                    <p>Roles</p>
                </a>
            </li>
            {{-- subscriptions  --}}
            <li>
                <a href="{{route('roles.index')}}">
                    <i class="nc-icon nc-money-coins"></i>
                    <p>Subscriptions </p>
                </a>
            </li>
            @endif
            <hr>
            {{-- knowladge base --}}
            <li>
                <a href="../examples/widgets.html">
                    <i class="nc-icon nc-hat-3"></i>
                    <p>knowladge base</p>
                </a>
            </li>
            {{-- support --}}
            <li>
                <a href="../examples/charts.html">
                    <i class="nc-icon nc-support-17"></i>
                    <p>Support</p>
                </a>
            </li>
        </ul>
        <div class="ps__rail-x" style="width: 260px; left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 258px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 952px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 947px;"></div>
    </div>
</div>
