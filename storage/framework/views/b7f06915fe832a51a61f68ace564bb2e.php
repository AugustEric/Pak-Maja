<div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-12">
                <!--[if BLOCK]><![endif]--><?php if(!$transaksiAktif): ?>
                <button class="btn btn-primary" wire::click='transaksiBaru'>Transaksi Baru</button>
                <?php else: ?>
                <button class="btn btn-danger" wire::click='batalTransaksi'>Batalkan Transaksi</button>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <button class="btn btn-info" wire:loading>Loading...</button>
            </div>
        </div>
            <div class="row mt-2">
            <div class="col-8">
            <div class="card  border-primary">
            <div class="card-body">
                <h4 class="card-title">No Invoice:</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
        </div>
        </div>
        </div>
            <div class="col-4">
            <div class="card  border-primary">
            <div class="card-body">
                <h4 class="card-title">Total Biaya</h4>
                <div class="d-flex justify-content-between">
                    <span>Rp. </span>
                    <span><?php echo e(number_format('1234567', 2, '.', ',')); ?>0</span>
                </div>
            </div>
            </div>
            <div class="card  border-primary mt-2">
                <div class="card-body">
                <h4 class="card-title">Bayar</h4>
                <input type="number" class="form-control" placeholder="Bayar">
            </div>
            </div>
            </div>
            <div class="card  border-primary mt-2">
                 <div class="card-body">
                <h4 class="card-title">Kembalian</h4>
                <span>Rp. </span>
                    <span><?php echo e(number_format('1234567', 2, '.', ',')); ?>0</span>
            </div>
            </div>
            <button class="btn btn-success mt-2 w-100">Bayar</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\Pak-Maja\resources\views/livewire/transaksi.blade.php ENDPATH**/ ?>