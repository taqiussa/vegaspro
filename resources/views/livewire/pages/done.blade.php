<div class="card mt-5 mx-2 px-2 py-2 shadow">
    {{-- <x-wire-loading /> --}}
    <div wire:init="loadTransactions" class="card-body">
        @isset($data)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pesanan</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Tgl Pesan</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </thead>
                @foreach ($transactions as $key => $transaction)
                    <tr>
                        <td>{{ $transactions->firstItem() + $key }}</td>
                        <td>{{ $transaction->name }}</td>
                        <td>{{ $transaction->order }}</td>
                        <td>{{ $transaction->qty }}</td>
                        <td>
                            Rp. {{ number_format($transaction->price, 0, '.', '.') . ',-' }}
                        </td>
                        <td>
                            Rp. {{ number_format($transaction->total, 0, '.', '.') . ',-' }}
                        </td>
                        <td>{{ $transaction->order_date }}</td>
                        <td>{{ $transaction->due_date }}</td>
                        <td><span class="badge badge-danger px-2 py-2">
                                {{ $transaction->status }}
                            </span>
                        </td>
                        <td>
                            <a wire:click="print({{ $transaction->id }})" class="btn btn-primary">
                                Print
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="py-3">
                {{ $transactions->onEachSide(1)->links() }}
            </div>
        </div>
        @else
        <x-skeleton />
        @endisset
    </div>
</div>
