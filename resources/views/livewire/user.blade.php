<div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <button wire:click="pilihMenu('lihat')" class="btn {{ $pilihanMenu=='lihat'? 'btn-primary' : 'btn-outline-primary' }}">
                Semua Pengguna
                </button>

                <button wire:click="pilihMenu('tambah')" class="btn {{ $pilihanMenu=='tambah'? 'btn-primary' : 'btn-outline-primary' }}">
                Tambah Pengguna

                </button>

                <button wire:loading class="btn btn-info"">
                        Loading...
                </button>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if($pilihanMenu=='lihat')
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
                                @foreach ($semuaPengguna as $pengguna)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pengguna->name }}</td>
                                    <td>{{ $pengguna->email }}</td>
                                    <td>{{ $pengguna->peran }}</td>
                                    <td>
                                        <button wire:click="pilihEdit({{ $pengguna->id }})"
                                        class="btn {{ $pilihanMenu=='edit' ? 'btn-primary' : 'btn-outline-primary' }}">
                                            Edit Pengguna
                                            </button>
                                        <button wire:click="pilihHapus({{ $pengguna->id }})" class="btn {{ $pilihanMenu=='hapus'? 'btn-primary' : 'btn-outline-primary' }}">
                                        Hapus Pengguna

                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @elseif($pilihanMenu=='tambah')
                <div class="card border-primary my-2">
                    <div class="card-header">
                        Tambah Pengguna
                    </div>
                    <div class="card-body">
                        <form wire:submit='simpan'>
                            <Label>Nama</Label>
                            <input type="text" class="form-control" wire:model='nama' />
                            @error('nama')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
<br>
                            <Label>Email</Label>
                            <input type="email" class="form-control" wire:model='email' />
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
<br>
                            <Label>Password</Label>
                            <input type="password" class="form-control" wire:model='password' />
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
<br>
                            <Label>Peran</Label>
                            <select class="form-control" wire:model='peran'>
                                <option>-- Pilih Peran --</option>
                                <option value="Kasir">Kasir</option>
                                <option value="Admin">Admin</option>
                            </select>
                            @error('peran')
                            <span class="text-danger">Peran Harus Diisi</span>
                            @enderror
<br>
                            <button type="submit" class="btn btn-primary my-2">Simpan</button>
                        </form>
                    </div>
                </div>
                @elseif ($pilihanMenu=='edit')
                <div class="card border-primary my-2">
                    <div class="card-header">
                        Edit Pengguna
                    </div>
                    <div class="card-body">
                        <form wire:submit='simpanEdit'>
                            <Label>Nama</Label>
                            <input type="text" class="form-control" wire:model='nama' />
                            @error('nama')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
<br>
                            <Label>Email</Label>
                            <input type="email" class="form-control" wire:model='email' />
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
<br>
                            <Label>Password</Label>
                            <input type="password" class="form-control" wire:model='password' />
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
<br>
                            <Label>Peran</Label>
                            <select class="form-control" wire:model='peran'>
                                <option>-- Pilih Peran --</option>
                                <option value="kasir">Kasir</option>
                                <option value="admin">Admin</option>
                            </select>
                            @error('peran')
                            <span class="text-danger">Peran Harus Diisi</span>
                            @enderror
<br>
                            <button type="submit" class="btn btn-primary my-2">Simpan</button>
                            <button type="button" class="btn btn-secondary my-2" wire:click='batal'>Batal</button>
                        </form>
                    </div>
                </div>
                @elseif ($pilihanMenu=='hapus')
                <div class="card border-danger my-2">
                    <div class="card-header bg-danger text-white">
                        Hapus Pengguna
                    </div>
                    <div class="card-body">
                        Anda Yakin akan menghapus User ini?
                        <p>Nama : {{ $penggunaTerpilih->name }}</p>
                        <button class="btn btn-danger" wire:click='hapus'>Hapus</button>
                        <button class="btn btn-secondary" wire:click='batal'>Batal</button>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

</div>
