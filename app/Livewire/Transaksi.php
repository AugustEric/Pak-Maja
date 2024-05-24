<?php

namespace App\Livewire;

use App\Models\DetilTransaksi;
use App\Models\Transaksi as ModelsTransaksi;
use Livewire\Component;

class Transaksi extends Component
{
    public $kode, $total, $bayar, $kembalian, $totalSemuaBelanja;
    public $transaksiAktif;

    public function transaksiBaru(){
        $this->reset();
        $this->transaksiAktif = new ModelsTransaksi();
        $this->transaksiAktif->kode =  'INV'. date('YmdHis');
        $this->transaksiAktif->total = 0;
        $this->transaksiAktif->status = 'pending';
        $this->transaksiAktif->save();
    }

    public function batalTransaksi(){
        if ($this->transaksiAktif) {
        $detilTransaksi = DetilTransaksi::where('transaksi_id', $this->transaksiAktif->id)->get();
        foreach ($detilTransaksi as $detil) {
            $detil->delete();
        }
        $this->transaksiAktif->delete();
        }
        $this->reset();
    }
    public function render()
    {
        return view('livewire.transaksi');
    }
}
