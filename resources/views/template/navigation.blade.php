        <div class="nk-apps-sidebar bg-black">
            <div class="nk-apps-brand">
                <a href="/" class="logo-link">
                    <img class="logo-light logo-img" src="./images/icon.png" srcset="./images/icon.png 2x"
                        alt="logo" />
                    <img class="logo-dark logo-img" src="./images/icon.png"
                        srcset="./images/icon.png 2x" alt="logo-dark" />
                </a>
            </div>
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-body">
                    <div class="nk-sidebar-content" data-simplebar>
                        <div class="nk-sidebar-menu">
                            <!-- Menu -->
                            <ul class="nk-menu apps-menu">
                                <!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/dashboard" class="nk-menu-link" title="Dashboard">
                                        <span class="nk-menu-icon"><em class="icon ni ni-speed"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/belajar-trading" class="nk-menu-link" title="Belajar Trading">
                                        <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                                    </a>
                                </li>
                                @if (Auth::user()->roles === 'admin')
                                <li class="nk-menu-hr"></li>
                                <li class="nk-menu-item">
                                    <a href="/market" class="nk-menu-link" title="Market">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bar-c"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/sinyal" class="nk-menu-link" title="Sinyal">
                                        <span class="nk-menu-icon"><em class="icon ni ni-activity-round"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/user-list" class="nk-menu-link" title="User List">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/add-panduan" class="nk-menu-link" title="Tambahkan Panduan">
                                        <span class="nk-menu-icon"><em class="icon ni ni-article"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="/list-panduan" class="nk-menu-link" title="List Panduan">
                                        <span class="nk-menu-icon"><em class="icon ni ni-template"></em></span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
