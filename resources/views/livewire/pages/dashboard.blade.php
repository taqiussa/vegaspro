<div class="card mt-5 mx-5 px-2 py-2 shadow">
    {{-- <x-wire-loading /> --}}
    <div wire:init="loadTransactions" class="card-body">
        @isset($data)
            <div class="row">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Bulan</label>
                    <select wire:model="month" class="form-control" id="exampleFormControlSelect1">
                        <option>- Bulan -</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
            </div>
            <div class=" border-top border-width-3 border-info my-3"></div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info shadow-lg">
                        <div class="inner">
                            <h3>{{ $totalOrders }}</h3>

                            <p>Total Pesanan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <a href="#" class="small-box-footer">Bulan : {{ $humanMonth }}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info shadow-lg">
                        <div class="inner">
                            <h3>{{ $totalDone }}</h3>

                            <p>Total Selesai</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <a href="#" class="small-box-footer">Bulan : {{ $humanMonth }}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info shadow-lg">
                        <div class="inner">
                            <h3>{{ $totalWaiting }}</h3>

                            <p>Menunggu</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                        <a href="#" class="small-box-footer">Bulan : {{ $humanMonth }}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary shadow-lg">
                        <div class="inner">
                            <h3>{{ number_format($totalYear, 0,'.','.') }}</h3>

                            <p>Total Pesanan Pertahun</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <a href="#" class="small-box-footer">Tahun : {{ date('Y', strtotime(now())) }}</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success shadow-lg">
                        <div class="inner">
                            <h4>{{ number_format($qtyPerMonth, 0,'.','.') }}</h4>

                            <p>Total Barang Diproduksi / Bulan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-archive"></i>
                        </div>
                        <a href="#" class="small-box-footer">Bulan : {{ $humanMonth }}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success shadow-lg">
                        <div class="inner">
                            <h4>{{ number_format($totalQty, 0,'.','.') }}</h4>

                            <p>Total Barang Diproduksi / Tahun</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-arrow-circle-up"></i>
                        </div>
                        <a href="#" class="small-box-footer">Tahun : {{ date('Y', strtotime(now())) }}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success shadow-lg">
                        <div class="inner">
                            <h4>Rp. {{ number_format($incomePerMonth, 0,'.','.') }},-</h4>

                            <p>Total Pemasukan / Bulan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <a href="#" class="small-box-footer">Bulan : {{ $humanMonth }}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-teal shadow-lg">
                        <div class="inner">
                            <h4>Rp. {{ number_format($totalIncome, 0,'.','.') }},-</h4>

                            <p>Total Pemasukan / Tahun</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <a href="#" class="small-box-footer">Tahun : {{ date('Y', strtotime(now())) }}</a>
                    </div>
                </div>
            </div>
        @else
            <x-skeleton />
        @endisset
    </div>
</div>
