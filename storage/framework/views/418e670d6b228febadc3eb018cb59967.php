<div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <button wire:click="pilihMenu('lihat')" class="btn <?php echo e($pilihanMenu=='lihat'? 'btn-primary' : 'btn-outline-primary'); ?>">
                Semua Pengguna
                </button>

                <button wire:click="pilihMenu('tambah')" class="btn <?php echo e($pilihanMenu=='tambah'? 'btn-primary' : 'btn-outline-primary'); ?>">
                Tambah Pengguna

                </button>

                <button wire:loading class="btn btn-info"">
                        Loading...
                </button>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!--[if BLOCK]><![endif]--><?php if($pilihanMenu=='lihat'): ?>
                <div class="card border-primary my-2">
                    <div class="card-header">
                        Semua Pengguna
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Peran</th>
                                <th>Data</th>
                            </thead>
                            <tbody>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $semuaPengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengguna): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($pengguna->name); ?></td>
                                    <td><?php echo e($pengguna->email); ?></td>
                                    <td><?php echo e($pengguna->peran); ?></td>
                                    <td>
                                        <button wire:click="pilihEdit(<?php echo e($pengguna->id); ?>)"
                                        class="btn <?php echo e($pilihanMenu=='edit' ? 'btn-primary' : 'btn-outline-primary'); ?>">
                                            Edit Pengguna
                                            </button>
                                        <button wire:click="pilihHapus(<?php echo e($pengguna->id); ?>)" class="btn <?php echo e($pilihanMenu=='hapus'? 'btn-primary' : 'btn-outline-primary'); ?>">
                                        Hapus Pengguna

                                        </button>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php elseif($pilihanMenu=='tambah'): ?>
                <div class="card border-primary my-2">
                    <div class="card-header">
                        Tambah Pengguna
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
                            <Label>Email</Label>
                            <input type="email" class="form-control" wire:model='email' />
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
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
                            <Label>Password</Label>
                            <input type="password" class="form-control" wire:model='password' />
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['password'];
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
                            <Label>Peran</Label>
                            <select class="form-control" wire:model='peran'>
                                <option>-- Pilih Peran --</option>
                                <option value="Kasir">Kasir</option>
                                <option value="Admin">Admin</option>
                            </select>
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['peran'];
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
                <?php elseif($pilihanMenu=='edit'): ?>
                <div class="card border-primary my-2">
                    <div class="card-header">
                        Edit Pengguna
                    </div>
                    <div class="card-body">
                        <form wire:submit='simpanEdit'>
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
                            <Label>Email</Label>
                            <input type="email" class="form-control" wire:model='email' />
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
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
                            <Label>Password</Label>
                            <input type="password" class="form-control" wire:model='password' />
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['password'];
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
                            <Label>Peran</Label>
                            <select class="form-control" wire:model='peran'>
                                <option>-- Pilih Peran --</option>
                                <option value="Kasir">Kasir</option>
                                <option value="Admin">Admin</option>
                            </select>
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['peran'];
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
                            <button type="button" class="btn btn-secondary my-2" wire:click='batal'>Batal</button>
                        </form>
                    </div>
                </div>
                <?php elseif($pilihanMenu=='hapus'): ?>
                <div class="card border-danger my-2">
                    <div class="card-header bg-danger text-white">
                        Hapus Pengguna
                    </div>
                    <div class="card-body">
                        Anda Yakin akan menghapus User ini?
                        <p>Nama : <?php echo e($penggunaTerpilih->name); ?></p>
                        <button class="btn btn-danger" wire:click='hapus'>Hapus</button>
                        <button class="btn btn-secondary" wire:click='batal'>Batal</button>
                    </div>
                </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\laragon\www\Pak-Maja\resources\views/livewire/user.blade.php ENDPATH**/ ?>