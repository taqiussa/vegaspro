<div class="card mt-5 mx-5 px-5 py-5 shadow">
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="name">Nama</label>
                <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Nama Customer" autocomplete="off">
                @error('name')
                <div class="text-danger mx-1 mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="order">Pesanan</label>
            <textarea wire:model.defer="order" class="form-control" id="order" rows="3"></textarea>
            @error('order')
            <div class="text-danger mx-1 mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="qty">Jumlah Pesanan</label>
                <input wire:model.defer="qty" type="number" class="form-control" id="qty">
                @error('qty')
                <div class="text-danger mx-1 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="price">Harga Satuan</label>
                <input wire:model.defer="price" type="number" class="form-control" id="price">
                @error('price')
                <div class="text-danger mx-1 mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="order_date">Tanggal Pesan</label>
                <input wire:model.defer="order_date" type="date" class="form-control" id="order_date">
                @error('order_date')
                <div class="text-danger mx-1 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="due_date">Tanggal Deadline</label>
                <input wire:model.defer="due_date" type="date" class="form-control" id="due_date">
                @error('due_date')
                <div class="text-danger mx-1 mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>
