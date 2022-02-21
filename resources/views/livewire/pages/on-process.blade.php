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
                        <td><span class="badge badge-success px-2 py-2">
                                {{ $transaction->status }}
                            </span>
                        </td>
                        <td>
                            <a wire:click="selectedTransaction({{ $transaction->id }}, 'procced')" class="btn btn-primary mx-2">
                                Finish
                            </a>
                            {{-- <a wire:click="print()" class="btn btn-primary">
                                Print
                            </a> --}}
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
    <!-- Modal -->
    <div class="modal fade" id="proccedModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Finishing Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Anda Yakin Menyelesaikan Pesanan ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button wire:click="procced" type="button" class="btn btn-primary">Finish</button>
                    <button wire:click="proccedThenPrint" type="button" class="btn btn-success">Finish And Print</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('closeProccedModal', event => {
            $("#proccedModal").modal('hide');
        });
        window.addEventListener('openProccedModal', event => {
            $("#proccedModal").modal('show');
        });
    </script>
</div>
