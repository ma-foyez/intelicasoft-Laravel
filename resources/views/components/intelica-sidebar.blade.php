@props([
    'collapsed' => false,
    'class' => '',
])

@php
$classes = collect([
    'fixed left-0 top-0 h-full bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-700 shadow-lg z-40 transition-all duration-300',
    $collapsed ? 'w-16' : 'w-64',
    $class,
])->filter()->implode(' ');
@endphp

<aside
    {{ $attributes->merge(['class' => $classes]) }}
    x-data="{ collapsed: {{ $collapsed ? 'true' : 'false' }} }"
>
    <!-- Sidebar Header -->
    <div class="flex items-center justify-between p-4 border-b border-gray-200 dark:border-gray-700">
        <div class="flex items-center space-x-3" x-show="!collapsed">
            <div class="intelica-icon-glow bg-intelica-500/20 text-intelica-500">
                <i class="fas fa-rocket text-xl"></i>
            </div>
            <div>
                <h1 class="text-lg font-bold intelica-gradient-text">
                    {{ config('app.name', 'Intelica Soft') }}
                </h1>
                <p class="text-xs text-gray-500 dark:text-gray-400">
                    Admin Panel
                </p>
            </div>
        </div>

        <div class="flex items-center justify-center w-8 h-8" x-show="collapsed">
            <i class="fas fa-rocket text-intelica-500 text-lg"></i>
        </div>

        <button
            type="button"
            class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
            @click="collapsed = !collapsed"
        >
            <i class="fas fa-bars text-gray-500"></i>
        </button>
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 overflow-y-auto p-4">
        <ul class="space-y-2">
            <!-- Dashboard -->
            <li>
                <a href="{{ route('admin.dashboard') }}"
                   class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span x-show="!collapsed" x-transition>Dashboard</span>
                </a>
            </li>

            <!-- Content Management -->
            <li class="pt-4" x-show="!collapsed">
                <div class="px-3 mb-2">
                    <h3 class="text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Content
                    </h3>
                </div>
            </li>

            <li>
                <a href="{{ route('admin.services.index') }}"
                   class="sidebar-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                    <i class="fas fa-cogs"></i>
                    <span x-show="!collapsed" x-transition>Services</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.portfolios.index') }}"
                   class="sidebar-link {{ request()->routeIs('admin.portfolios.*') ? 'active' : '' }}">
                    <i class="fas fa-briefcase"></i>
                    <span x-show="!collapsed" x-transition>Portfolio</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.about.index') }}"
                   class="sidebar-link {{ request()->routeIs('admin.about.*') ? 'active' : '' }}">
                    <i class="fas fa-user"></i>
                    <span x-show="!collapsed" x-transition>About</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.contacts.index') }}"
                   class="sidebar-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                    <i class="fas fa-envelope"></i>
                    <span x-show="!collapsed" x-transition>Messages</span>
                    @if ($unreadCount = App\Models\Contact::unread()->count())
                        <span class="sidebar-badge" x-show="!collapsed">{{ $unreadCount }}</span>
                    @endif
                </a>
            </li>

            <!-- Settings -->
            <li class="pt-4" x-show="!collapsed">
                <div class="px-3 mb-2">
                    <h3 class="text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Settings
                    </h3>
                </div>
            </li>

            <li>
                <a href="{{ route('admin.settings.index') }}"
                   class="sidebar-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                    <i class="fas fa-cog"></i>
                    <span x-show="!collapsed" x-transition>Site Settings</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.users.index') }}"
                   class="sidebar-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <i class="fas fa-users"></i>
                    <span x-show="!collapsed" x-transition>Users</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- User Profile -->
    <div class="border-t border-gray-200 dark:border-gray-700 p-4">
        <div class="flex items-center space-x-3" x-show="!collapsed">
            <div class="w-8 h-8 bg-intelica-500 rounded-lg flex items-center justify-center text-white font-medium">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                    {{ auth()->user()->name ?? 'Admin' }}
                </p>
                <p class="text-xs text-gray-500 dark:text-gray-400 truncate">
                    {{ auth()->user()->email ?? 'admin@example.com' }}
                </p>
            </div>
            <div class="relative" x-data="{ open: false }">
                <button
                    type="button"
                    class="p-1 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                    @click="open = !open"
                >
                    <i class="fas fa-ellipsis-v text-gray-500"></i>
                </button>

                <div
                    class="absolute bottom-full right-0 mb-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700"
                    x-show="open"
                    x-transition
                    @click.away="open = false"
                    style="display: none;"
                >
                    <a href="{{ route('admin.profile') }}" class="dropdown-link">
                        <i class="fas fa-user mr-2"></i>
                        Profile
                    </a>
                    <a href="{{ route('admin.settings.index') }}" class="dropdown-link">
                        <i class="fas fa-cog mr-2"></i>
                        Settings
                    </a>
                    <hr class="border-gray-200 dark:border-gray-700">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-link w-full text-left text-red-600 dark:text-red-400">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="flex justify-center" x-show="collapsed">
            <div class="w-8 h-8 bg-intelica-500 rounded-lg flex items-center justify-center text-white font-medium">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>
        </div>
    </div>
</aside>

<style>
.sidebar-link {
    @apply flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200 relative;
}

.sidebar-link.active {
    @apply bg-gradient-to-r from-intelica-500 to-intelica-600 text-white shadow-lg;
}

.sidebar-link.active::after {
    content: '';
    @apply absolute right-2 w-2 h-2 bg-white rounded-full animate-pulse;
}

.sidebar-badge {
    @apply ml-auto bg-red-500 text-white text-xs rounded-full px-2 py-1 min-w-[1.25rem] h-5 flex items-center justify-center;
}

.dropdown-link {
    @apply block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors first:rounded-t-lg last:rounded-b-lg;
}
</style>
