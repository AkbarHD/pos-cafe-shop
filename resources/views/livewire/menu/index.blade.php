<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="page-wrapper">
        <div class="flex justify-between">
            <input type="search" class="input input-bordered" placeholder="Pencarian">

            <button class="btn btn-primary" wire:click="$dispatch('createMenu')">
                <x-tabler-plus class="size-5" />
                <span>Tambah Menu</span>
            </button>
        </div>
        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="flex gap-3">
                                    <div class="avatar">
                                        <div class="w-12 rounded-lg">
                                            <img src="{{ $menu->gambar }}" alt="">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="font-bold">{{ $menu->name }}</div>
                                        <div>{{ $menu->type }}</div>
                                    </div>
                                </div>
                            </td>
                            {{-- harga?? --}}
                            <td>{{ $menu->harga }}</td>
                            <td>{{ $menu->desc }}</td>
                            <td>
                                <button class="btn btn-xs btn-square">
                                    <x-tabler-edit class="size-4" />
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    {{-- modal --}}
    @livewire('menu.actions')
</div>
