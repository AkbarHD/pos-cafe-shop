<div>
    <input type="checkbox" class="modal-toggle" @checked($show)>
    <div class="modal" role="dialog">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Tambah Menu</h3>
            <div class="py-4 space-y-2">
                <div class="flex justify-center">
                    <label for="pickphoto" class="avatar">
                        <div class="w-32 rounded-lg">
                            <img src="{{ $photo ? $photo->temporaryUrl() : url('no-image.jpg') }}" />
                        </div>
                    </label>
                </div>
                <input type="file" id="pickphoto`" class="hidden" wire:model="photo">
                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Nama Menu</span>
                    </div>
                    <input type="text" placeholder="Nama menu" @class([
                        'input input-bordered',
                        'input-error' => $errors->first('form.name'),
                    ]) wire:model="form.name" />
                </label>

                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Harga Menu</span>
                    </div>
                    <input type="number" placeholder="Harga menu" @class(['input input-bordered', $errors->first('form.price')])
                        wire:model="from.price" />
                </label>

                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Type Menu</span>
                    </div>
                    <select @class([
                        'select select-bordered',
                        'select-error' => $errors->first('form.type'),
                    ]) wire:model="form.type">
                        <option value=""></option>
                        @foreach ($types as $tipe)
                            <option value="{{ $tipe }}">{{ $tipe }}</option>
                        @endforeach
                    </select>
                </label>

                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Keterangan</span>
                    </div>
                    <textarea @class([
                        'input input-bordered',
                        'input-error' => $errors->first('form.desc'),
                    ]) wire:model="form.desc" placeholder="Tulis keterangan menu disini"></textarea>
                </label>
            </div>
            <div class="modal-action justify-between">
                <button type="button" class="btn btn-ghost" wire:click="closeModal">Close!</button>
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </div>
    </div>
</div>
