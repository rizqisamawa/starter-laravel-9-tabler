<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                <img
                    src="{{ asset('tabler/img/logo-white.svg') }}"
                    width="110"
                    height="32"
                    alt="Tabler"
                    class="navbar-brand-image"
                />
            </a>
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="./">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"
                            ><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <polyline
                                    points="5 12 3 12 12 3 21 12 19 12"
                                ></polyline>
                                <path
                                    d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"
                                ></path>
                                <path
                                    d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"
                                ></path>
                            </svg>
                        </span>
                        <span class="nav-link-title"> Home </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#navbar-help"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="false"
                        role="button"
                        aria-expanded="false"
                    >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"
                            ><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <circle cx="12" cy="12" r="4"></circle>
                                <circle cx="12" cy="12" r="9"></circle>
                                <line
                                    x1="15"
                                    y1="15"
                                    x2="18.35"
                                    y2="18.35"
                                ></line>
                                <line
                                    x1="9"
                                    y1="15"
                                    x2="5.65"
                                    y2="18.35"
                                ></line>
                                <line x1="5.65" y1="5.65" x2="9" y2="9"></line>
                                <line
                                    x1="18.35"
                                    y1="5.65"
                                    x2="15"
                                    y2="9"
                                ></line>
                            </svg>
                        </span>
                        <span class="nav-link-title"> Help </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./docs/">
                            Documentation
                        </a>
                        <a class="dropdown-item" href="./changelog.html">
                            Changelog
                        </a>
                        <a
                            class="dropdown-item"
                            href="https://github.com/tabler/tabler"
                            target="_blank"
                            rel="noopener"
                        >
                            Source code
                        </a>
                        <a
                            class="dropdown-item text-pink"
                            href="https://github.com/sponsors/codecalm"
                            target="_blank"
                            rel="noopener"
                        >
                            <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-inline me-1"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <path
                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"
                                ></path>
                            </svg>
                            Sponsor project!
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>
