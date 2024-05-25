<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="card border-primary">
                    <div class="card-body">
                        <h4 class="card-title">Laporan Transaksi</h4>
                        <a href="{{ url('/cetak') }}" target="_blank"></a>

                        <table class="table table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>No Invoice</th>
                                <th>Total</th>
                            </thead>
                            <tbody>
                                @foreach ($semuaTransaksi as $transaksi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $transaksi->created_at }}</td>
                                        <td>{{ $transaksi->kdoe }}</td>
                                        <td>Rp. {{ number_format($transaksi->total, 2, '.', ',') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
