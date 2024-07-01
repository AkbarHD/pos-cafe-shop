<ul class="menu bg-base-100 text-base-content min-h-full w-80 p-4 border-r-2 border-base-300 space-y-4">
    <!-- Sidebar content here -->
    <li>
        <h2 class="menu-title">Dashbooad</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}" @class(['active' => Route::is('home')]) wire:navigate>
                    <x-tabler-dashboard class="size-5" />
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-file-plus class="size-5" />
                    <span>Input Transaksi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="menu-title">Data Master</h2>
        <ul>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-layout-grid-add class="size-5" />
                    <span>Menu Makanan</span>
                </a>
            </li>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-users class="size-5" />
                    <span>Data Customer</span>
                </a>
            </li>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-file class="size-5" />
                    <span>Riwayat Transaksi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="menu-title">Account</h2>
        <ul>
            <li>
                <a href="{{ route('profile') }}" @class(['active' => Route::is('profile')]) wire:navigate>
                    <x-tabler-user class="size-5" />
                    <span>Edit Profile</span>
                </a>
            </li>
            <li>
                <button wire:click="logout" @class(['active' => false])>
                    <x-tabler-logout class="size-5" />
                    <span>Logout</span>
                </button>
            </li>
        </ul>
    </li>

</ul>
