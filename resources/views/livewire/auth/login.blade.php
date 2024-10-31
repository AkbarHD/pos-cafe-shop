    <div class="card">
        <form class="card-body" wire:submit="login">
            <h3 class="card-title">Selamat Datang</h3>
            <div class="py-4 space-y-3">
                <label @class([
                    'input input-bordered flex items-center gap-2',
                    'input-error' => $errors->first('email'),
                ])>
                    <x-tabler-at class="size-5" />
                    <input type="text" class="grow" placeholder="Email" autocomplete="off" wire:model="email" />
                </label>
                @error('email')
                    <span class="error text-red-600 text-sm">{{ $message }}</span>
                @enderror


                <label @class([
                    'input input-bordered flex items-center gap-2',
                    'input-error' => $errors->first('password'),
                ])>
                    <x-tabler-key class="size-5" />
                    <input type="password" class="grow" placeholder="password" autocomplete="off"
                        wire:model="password" />
                </label>
                @error('password')
                    <span class="error text-red-600 text-sm">{{ $message }}</span>
                @enderror

            </div>
            <div class="card-actions">
                <button class="btn btn-primary">
                    <x-tabler-login class="size-5" />
                    <span>Login</span>
                </button>
            </div>
        </form>
    </div>
