<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Home;

use App\Models\Icon\IconAcademyStartup;
use App\Models\Icon\IconAcademyDataScience;
use Livewire\Component;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;


class Index extends Component
{
    //TODO (Putri) Beranda
    //Modifikasi dari beranda admin BIONIX
    //
    //URL : /dashboard/admin/academy/
    public $tanggal_awal_startup = '';
    public $tanggal_akhir_startup = '';
    public $tanggal_awal_ds = '';
    public $tanggal_akhir_ds = '';

    public function mount()
    {
        $data_startup = IconAcademyStartup::selectRaw('DATE(created_at) as created_at, COUNT(*) as total')->groupByRaw("DATE(created_at)")->orderBy('created_at', 'asc')->get();
        if (sizeof($data_startup) > 0) {
            $this->tanggal_awal_startup = date('d F Y', strtotime($data_startup[0]->created_at));
            $this->tanggal_akhir_startup = date('d F Y', strtotime($data_startup[sizeof($data_startup) - 1]->created_at));
        } else {
            $this->tanggal_awal_startup = date('d F Y');
            $this->tanggal_akhir_startup = date('d F Y');
        }

        $data_ds = IconAcademyDataScience::selectRaw('DATE(created_at) as created_at, COUNT(*) as total')->groupByRaw("DATE(created_at)")->orderBy('created_at', 'asc')->get();
        if (sizeof($data_ds) > 0) {
            $this->tanggal_awal_ds = date('d F Y', strtotime($data_ds[0]->created_at));
            $this->tanggal_akhir_ds = date('d F Y', strtotime($data_ds[sizeof($data_ds) - 1]->created_at));
        } else {
            $this->tanggal_awal_ds = date('d F Y');
            $this->tanggal_akhir_ds = date('d F Y');
        }
    }
    protected function getCountPayment($status, $type = 'startup'): int
    {
        if ($type == 'startup') {
            return IconAcademyStartup::select('*')
                ->where('payment_verif_status', $status)
                ->count();
        } else {
            return IconAcademyDataScience::select('*')
                ->where('payment_verif_status', $status)
                ->count();
        }
    }
    protected function getCountVerified($status, $type = 'startup'): int
    {
        if ($type == 'startup') {
            return IconAcademyStartup::select('*')
                ->where('profile_verif_status', $status)
                ->count();
        } else {
            return IconAcademyDataScience::select('*')
                ->where('profile_verif_status', $status)
                ->count();
        }
    }

    protected function getSum($type = 'startup'): int
    {
        if ($type == 'startup') {
            return IconAcademyStartup::all()->count();
        } else {
            return IconAcademyDataScience::all()->count();
        }
    }

    public function render()
    {
        //        ['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']
        $pieChartVerifikasiIconAcademyStartupModel =
            (new PieChartModel())
            ->setTitle('Status Verifikasi Pendaftar')
            ->addSlice('Belum Unggah', $this->getCountVerified('Belum Unggah'), '#f6ad55')
            ->addSlice('Tahap Verifikasi', $this->getCountVerified('Tahap Verifikasi'), '#f6ad55')
            ->addSlice('Terverifikasi', $this->getCountVerified('Terverifikasi'), '#8CE665')
            ->addSlice('Ditolak', $this->getCountVerified('Ditolak'), '#6C1AC0');

        // Line Chart Jumlah Pendaftar Per Hari untuk yang Student
        $data_startup = IconAcademyStartup::selectRaw('DATE(created_at) as created_at, COUNT(*) as total')->whereRaw("DATE(created_at)>='" . date('Y-m-d', strtotime($this->tanggal_awal_startup)) . "' and DATE(created_at)<='" . date('Y-m-d', strtotime($this->tanggal_akhir_startup)) . "'")->groupByRaw("DATE(created_at)")->orderBy('created_at', 'asc')->get();

        $line_chart_startup =
            (new LineChartModel())
            ->setTitle("Statistik pendaftar ICON Academy Startup");
        foreach ($data_startup as $d) {
            $line_chart_startup->addPoint(date('d F Y', strtotime($d->created_at)), $d->total);
        }


        $pieChartVerifikasiIconAcademyDataScienceModel =
            (new PieChartModel())
            ->setTitle('Status Verifikasi Pendaftar')
            ->addSlice('Belum Unggah', $this->getCountVerified('Belum Unggah', 'senior'), '#f6ad55')
            ->addSlice('Tahap Verifikasi', $this->getCountVerified('Tahap Verifikasi', 'senior'), '#f39c12')
            ->addSlice('Terverifikasi', $this->getCountVerified('Terverifikasi', 'senior'), '#8CE665')
            ->addSlice('Ditolak', $this->getCountVerified('Ditolak', 'senior'), '#6C1AC0');
        // Line Chart Jumlah Pendaftar Per Hari untuk yang College
        $data_ds = IconAcademyDataScience::selectRaw('DATE(created_at) as created_at, COUNT(*) as total')->whereRaw("DATE(created_at)>='" . date('Y-m-d', strtotime($this->tanggal_awal_ds)) . "' and DATE(created_at)<='" . date('Y-m-d', strtotime($this->tanggal_akhir_ds)) . "'")->groupByRaw("DATE(created_at)")->orderBy('created_at', 'asc')->get();

        $line_chart_ds =
            (new LineChartModel())
            ->setTitle("Statistik pendaftar ICON Academy Data Science");
        foreach ($data_ds as $d) {
            $line_chart_ds->addPoint(date('d F Y', strtotime($d->created_at)), $d->total);
        }

        return view('livewire.pages.icon.academy.admin.home.index')->with([
            'pieChartVerifikasiIconAcademyStartupModel' => $pieChartVerifikasiIconAcademyStartupModel,
            'pieChartVerifikasiIconAcademyDataScienceModel' => $pieChartVerifikasiIconAcademyDataScienceModel,
            'sumStartup' => $this->getSum('startup'),
            'sumdS' => $this->getSum('data scince'),
            'lineChartStartup' => $line_chart_startup,
            'lineChartDs' => $line_chart_ds,
        ]);
    }
}
