<div class="navbar fixed top-0 bg-base-200">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-circle btn-ghost">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </label>
            <ul
                tabindex="0"
                class="menu dropdown-content rounded-box menu-sm z-[1] mt-3 w-52 bg-base-100 p-2 shadow">
                <li><a>Homepage</a></li>
                <li><a>Portfolio</a></li>
                <li><a>About</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a class="flex h-full items-center space-x-2 text-xl normal-case">
            <img class="h-14 w-14" src="{{ asset('/storage/images/logo/logo.png') }}" alt="" />
            <span
                class="flex items-center justify-center space-x-2 font-main text-sm font-bold text-base-content">
                <span>Botswana Power Corporation</span>
            </span>
        </a>
    </div>
    <div class="navbar-end pr-4">Admin</div>
</div>
