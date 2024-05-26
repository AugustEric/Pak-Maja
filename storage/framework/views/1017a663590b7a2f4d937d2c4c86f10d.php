<div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <button wire:click="pilihMenu('lihat')"
                    class="btn <?php echo e($pilihanMenu == 'lihat' ? 'btn-primary' : 'btn-outline-primary'); ?>">
                    Semua Produk
                </button>

                <button wire:click="pilihMenu('tambah')"
                    class="btn <?php echo e($pilihanMenu == 'tambah' ? 'btn-primary' : 'btn-outline-primary'); ?>">
                    Tambah Produk
                </button>

                <button wire:click="pilihMenu('excel')"
                    class="btn <?php echo e($pilihanMenu == 'excel' ? 'btn-primary' : 'btn-outline-primary'); ?>">
                    Impor Produk
                </button>

                <button wire:loading class="btn btn-info"">
                    Loading...
                </button>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!--[if BLOCK]><![endif]--><?php if($pilihanMenu == 'lihat'): ?>
                    <div class="card border-primary my-2">
                        <div class="card-header">
                            Semua Produk
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Data</th>
                                </thead>
                                <tbody>
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $semuaProduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($produk->kode); ?></td>
                                            <td><?php echo e($produk->nama); ?></td>
                                            <td><?php echo e($produk->harga); ?></td>
                                            <td><?php echo e($produk->stok); ?></td>
                                            <td>
                                                <button wire:click="pilihEdit(<?php echo e($produk->id); ?>)"
                                                    class="btn <?php echo e($pilihanMenu == 'edit' ? 'btn-primary' : 'btn-outline-primary'); ?>">
                                                    Edit Produk
                                                </button>
                                                <button wire:click="pilihHapus(<?php echo e($produk->id); ?>)"
                                                    class="btn <?php echo e($pilihanMenu == 'hapus' ? 'btn-primary' : 'btn-outline-primary'); ?>">
                                                    Hapus Produk

                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php elseif($pilihanMenu == 'tambah'): ?>
                    <div class="card border-primary my-2">
                        <div class="card-header">
                            Tambah Produk
                        </div>
                        <div class="card-body">
                            <form wire:submit='simpan'>
                                <Label>Nama</Label>
                                <input type="text" class="form-control" wire:model='nama' />
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                <br>

                                <Label>Kode / Barcode</Label>
                                <input type="kode" class="form-control" wire:model='kode' />
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['kode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                <br>

                                <Label>Harga</Label>
                                <input type="number" class="form-control" wire:model='harga' />
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                <br>

                                <Label>Stok</Label>
                                <input type="number" class="form-control" wire:model='stok' />
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger">Peran Harus Diisi</span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                <br>
                                <button type="submit" class="btn btn-primary my-2">Simpan</button>
                            </form>
                        </div>
                    </div>
                <?php elseif($pilihanMenu == 'edit'): ?>
                    <div class="card border-primary my-2">
                        <div class="card-header">
                            Edit Produk
                        </div>
                        <div class="card-body">
                            <form wire:submit='SimpanEdit'>
                                <Label>Nama</Label>
                                <input type="text" class="form-control" wire:model='nama' />
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                <br>

                                <Label>Kode / Barcode</Label>
                                <input type="kode" class="form-control" wire:model='kode' />
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['kode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                <br>

                                <Label>Harga</Label>
                                <input type="number" class="form-control" wire:model='harga' />
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                <br>

                                <Label>Stok</Label>
                                <input type="number" class="form-control" wire:model='stok' />
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger">Peran Harus Diisi</span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                <br>
                                <button type="submit" class="btn btn-primary my-2">Simpan</button>
                            </form>
                        </div>
                    </div>
                <?php elseif($pilihanMenu == 'hapus'): ?>
                    <div class="card border-danger my-2">
                        <div class="card-header bg-danger text-white">
                            Hapus Produk
                        </div>
                        <div class="card-body">
                            Anda Yakin akan menghapus Produk ini?
                            <br />
                            <br>
                            <p>Nama : <?php echo e($produkTerpilih->nama); ?></p>
                            <p>Kode : <?php echo e($produkTerpilih->kode); ?></p>
                            <button class="btn btn-danger" wire:click='hapus'>Hapus</button>
                            <button class="btn btn-secondary" wire:click='batal'>Batal</button>
                        </div>
                    </div>
                    <?php elseif($pilihanMenu == 'excel'): ?>
                    <div class="card border-primary my-2">
                        <div class="card-header bg-primary text-white">
                            Import Produk
                        </div>
                        <div class="card-body">
                            <form wire:submit='imporExcel'>
                                <input type="file" class="form-control" wire:model='fileExcel'>
                                <br>
                                <button class="btn btn-primary" type="submit">Kirim</button>
                            </form>
                        </div>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\laragon\www\Pak-Maja\resources\views/livewire/produk.blade.php ENDPATH**/ ?>