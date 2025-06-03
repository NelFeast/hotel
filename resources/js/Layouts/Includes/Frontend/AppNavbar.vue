<script setup>
import {
    IconSun,
    IconMoonStars,
    IconBell,
    IconX,
    IconUser,
    IconLogout,
    IconMenu2,
    IconLayoutDashboard,
    IconDeviceDesktopAnalytics,
    IconMailOpened,
} from "@tabler/icons-vue";
</script>

<template>
    <nav
        class="layout-navbar navbar navbar-expand-xl align-items-center"
        id="layout-navbar"
    >
        <div class="container-xxl">
            <div
                class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4 ms-0"
            >
                <a href="index.html" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <span class="text-primary">
                            <svg
                                width="32"
                                height="22"
                                viewBox="0 0 32 22"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                    fill="currentColor"
                                />
                                <path
                                    opacity="0.06"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                    fill="#161616"
                                />
                                <path
                                    opacity="0.06"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                    fill="#161616"
                                />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </span>
                    </span>
                    <span
                        class="app-brand-text demo menu-text fw-bold text-heading"
                        >Vuexy</span
                    >
                </a>

                <a
                    href="javascript:void(0);"
                    class="layout-menu-toggle menu-link text-large ms-auto d-xl-none"
                >
                    <IconX
                        class="icon-base icon-sm d-flex align-items-center justify-content-center"
                    />
                </a>
            </div>

            <div
                class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"
            >
                <a
                    class="nav-item nav-link px-0 me-xl-6"
                    href="javascript:void(0)"
                >
                    <IconMenu2 class="icon-base icon-md" />
                </a>
            </div>

            <div
                class="navbar-nav-right d-flex align-items-center justify-content-end"
                id="navbar-collapse"
            >
                <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                            id="nav-theme"
                            href="javascript:void(0);"
                            data-bs-toggle="dropdown"
                        >
                            <IconSun
                                class="icon-base theme-icon-active text-heading"
                            />
                            <span class="d-none ms-2" id="nav-theme-text"
                                >Toggle theme</span
                            >
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="nav-theme-text"
                        >
                            <li>
                                <button
                                    type="button"
                                    class="dropdown-item align-items-center active"
                                    data-bs-theme-value="light"
                                    aria-pressed="false"
                                >
                                    <span>
                                        <IconSun
                                            class="icon-base theme-icon-active text-heading me-3"
                                        />
                                        Light</span
                                    >
                                </button>
                            </li>
                            <li>
                                <button
                                    type="button"
                                    class="dropdown-item align-items-center"
                                    data-bs-theme-value="dark"
                                    aria-pressed="true"
                                >
                                    <span>
                                        <IconMoonStars
                                            class="icon-base theme-icon-active text-heading me-3"
                                        />Dark</span
                                    >
                                </button>
                            </li>
                            <li>
                                <button
                                    type="button"
                                    class="dropdown-item align-items-center"
                                    data-bs-theme-value="system"
                                    aria-pressed="false"
                                >
                                    <span>
                                        <IconDeviceDesktopAnalytics
                                            class="icon-base theme-icon-active text-heading me-3"
                                        />System</span
                                    >
                                </button>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2"
                    >
                        <a
                            class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                            href="javascript:void(0);"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="outside"
                            aria-expanded="false"
                        >
                            <span class="position-relative">
                                <IconBell class="icon-base text-heading" />
                                <span
                                    class="badge rounded-pill bg-danger badge-dot badge-notifications border"
                                ></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-0">
                            <li class="dropdown-menu-header border-bottom">
                                <div
                                    class="dropdown-header d-flex align-items-center py-3"
                                >
                                    <h6 class="mb-0 me-auto">Notification</h6>
                                    <div
                                        class="d-flex align-items-center h6 mb-0"
                                    >
                                        <span class="badge bg-primary me-2"
                                            >8 New</span
                                        >
                                        <a
                                            href="javascript:void(0)"
                                            class="dropdown-notifications-all p-2 btn btn-icon"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Mark all as read"
                                        >
                                            <IconMailOpened
                                                class="icon-base text-heading"
                                            />
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li
                                class="dropdown-notifications-list scrollable-container"
                            >
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item"
                                    >
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span
                                                        class="avatar-initial rounded-circle bg-label-danger"
                                                        >CF</span
                                                    >
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1 small">
                                                    Charles Franklin
                                                </h6>
                                                <small
                                                    class="mb-1 d-block text-body"
                                                    >Accepted your
                                                    connection</small
                                                >
                                                <small
                                                    class="text-body-secondary"
                                                    >12hr ago</small
                                                >
                                            </div>
                                            <div
                                                class="flex-shrink-0 dropdown-notifications-actions"
                                            >
                                                <a
                                                    href="javascript:void(0)"
                                                    class="dropdown-notifications-read"
                                                    ><span
                                                        class="badge badge-dot"
                                                    ></span
                                                ></a>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="dropdown-notifications-archive"
                                                >
                                                    <IconX class="icon-base" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="border-top">
                                <div class="d-grid p-4">
                                    <a
                                        class="btn btn-primary btn-sm d-flex"
                                        href="javascript:void(0);"
                                    >
                                        <small class="align-middle"
                                            >View all notifications</small
                                        >
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!--/ Notification -->

                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a
                            class="nav-link dropdown-toggle hide-arrow p-0"
                            href="javascript:void(0);"
                            data-bs-toggle="dropdown"
                        >
                            <div class="avatar avatar-online">
                                <img
                                    :src="
                                        $page.props.baseUrl +
                                        '/images/avatar/default.png'
                                    "
                                    class="rounded-circle"
                                />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <Link
                                    class="dropdown-item mt-0"
                                    :href="route('profile.index')"
                                >
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img
                                                    :src="
                                                        $page.props.baseUrl +
                                                        '/images/avatar/default.png'
                                                    "
                                                    class="rounded-circle"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0 text-truncate" style="max-width: 100px;">{{ $page.props.user.name }}</h6>
                                            <small class="text-body-secondary"
                                                >User</small
                                            >
                                        </div>
                                    </div>
                                </Link>
                            </li>
                            <li>
                                <div class="dropdown-divider my-1 mx-n2"></div>
                            </li>
                            <li>
                                <Link
                                    class="dropdown-item"
                                    :href="route('profile.index')"
                                >
                                    <IconUser class="icon-base me-3 icon-md" />
                                    <span class="align-middle">Profile</span>
                                </Link>
                            </li>
                            <li>
                                <div class="dropdown-divider my-1 mx-n2"></div>
                            </li>
                            <li>
                                <div class="d-grid px-2 pt-2 pb-1">
                                    <Link
                                        class="btn btn-sm btn-danger d-flex"
                                        :href="route('logout')" method="post"
                                    >
                                        <small class="align-middle"
                                            >Logout</small
                                        >
                                        <IconLogout
                                            class="icon-base ms-2 icon-md"
                                        />
                                    </Link>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!--/ User -->
                </ul>
            </div>
        </div>
    </nav>
</template>
