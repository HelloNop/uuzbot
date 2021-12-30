                <div class="nk-header nk-header-fixed is-light border-1">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-header-app-name">
                                <div class="nk-header-app-info">
                                    <span class="lead-text">UuzBot v.1.0</span>
                                </div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown list-apps-dropdown d-lg-none">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em
                                                    class="icon ni ni-menu-circled"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                            <div class="dropdown-body">
                                                <ul class="list-apps">
                                                    <li>
                                                        <a href="/dashboard">
                                                            <span class="list-apps-media"><em class="icon ni ni-speed"></em></span>
                                                            <span class="list-apps-title">Dashboard</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/belajar-trading">
                                                            <span class="list-apps-media"><em class="icon ni ni-book-read"></em></span>
                                                            <span class="list-apps-title">Edukasi</span>
                                                        </a>
                                                    </li>
                                            {{-- menu mobile full --}}
                                            @if (Auth::user()->roles === 'admin')
                                                    <li>
                                                        <a href="/market">
                                                            <span class="list-apps-media"><em class="icon ni ni-bar-c"></em></span>
                                                            <span class="list-apps-title">Market</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/sinyal">
                                                            <span class="list-apps-media"><em class="icon ni ni-activity-round"></em></span>
                                                            <span class="list-apps-title">Sinyal</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/user-list">
                                                            <span class="list-apps-media"><em class="icon ni ni-users"></em></span>
                                                            <span class="list-apps-title">User</span>
                                                        </a>
                                                    </li>
                                            @endif
                                                </ul>
                                            </div>
                                            <!-- .nk-dropdown-body -->
                                        </div>
                                    </li>
                                    <!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                                <div class="user-info d-none d-md-block">
                                                    @if (Auth::user()->roles === 'user')
                                                    <div class="user-status user-status-unverified">
                                                        belum terverifikasi</div>
                                                    @else
                                                    <div class="user-status user-status-verified">
                                                        {{ Auth::user()->roles }}</div>
                                                    @endif
                                                    <div class="user-name dropdown-indicator">
                                                        {{ Auth::user()->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-md-block d-sm-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                       <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        @if (Auth::user()->roles === 'user')
                                                        <div class="user-status user-status-unverified">
                                                            belum terverifikasi</div>
                                                        @else
                                                        <div class="user-status user-status-verified">
                                                            {{ Auth::user()->roles }}</div>
                                                        @endif
                                                        <span class="lead-text">{{ Auth::user()->name }}</span>
                                                        <span class="sub-text">{{ Auth::user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="/profile"><em
                                                                class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a>
                                                    </li>
                                                    {{-- <li>
                                                        <a href="html/user-profile-setting.html"><em
                                                                class="icon ni ni-setting-alt"></em><span>Account
                                                                Setting</span></a>
                                                    </li> --}}
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em
                                                                class="icon ni ni-signout"></em><span>Sign
                                                                out</span>
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
