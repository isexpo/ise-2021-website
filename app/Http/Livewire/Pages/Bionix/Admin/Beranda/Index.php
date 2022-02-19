<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Beranda;

use App\Models\Bionix\City;
use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamSeniorData;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;

class Index extends Component
{
    public $tanggal_awal_junior = '';
    public $tanggal_akhir_junior = '';
    public $tanggal_awal_senior = '';
    public $tanggal_akhir_senior = '';

    public function mount()
    {
        $data_junior = TeamJuniorData::selectRaw('DATE(created_at) as created_at, COUNT(*) as total')->groupByRaw("DATE(created_at)")->orderBy('created_at', 'asc')->get();
        if (sizeof($data_junior) > 0) {
            $this->tanggal_awal_junior = date('d F Y', strtotime($data_junior[0]->created_at));
            $this->tanggal_akhir_junior = date('d F Y', strtotime($data_junior[sizeof($data_junior) - 1]->created_at));
        } else {
            $this->tanggal_awal_junior = date('d F Y');
            $this->tanggal_akhir_junior = date('d F Y');
        }


        $data_senior = TeamSeniorData::selectRaw('DATE(created_at) as created_at, COUNT(*) as total')->groupByRaw("DATE(created_at)")->orderBy('created_at', 'asc')->get();
        if (sizeof($data_senior) > 0) {
            $this->tanggal_awal_senior = date('d F Y', strtotime($data_senior[0]->created_at));
            $this->tanggal_akhir_senior = date('d F Y', strtotime($data_senior[sizeof($data_senior) - 1]->created_at));
        } else {
            $this->tanggal_awal_senior = date('d F Y');
            $this->tanggal_akhir_senior = date('d F Y');
        }
    }

    protected function getCountRegion($id, $type = 'junior'): int
    {
        if ($type == 'junior') {
            return TeamJuniorData::select('*')
                ->join('cities', 'cities.id', '=', 'city_id')
                ->where('cities.region', $id)
                ->count();
        } else {
            return TeamSeniorData::select('*')
                ->join('cities', 'cities.id', '=', 'city_id')
                ->where('cities.region', $id)
                ->count();
        }
    }

    protected function getCountPayment($status, $type = 'junior'): int
    {
        if ($type == 'junior') {
            return TeamJuniorData::select('*')
                ->where('payment_verif_status', $status)
                ->count();
        } else {
            return TeamSeniorData::select('*')
                ->where('payment_verif_status', $status)
                ->count();
        }
    }

    protected function getCountVerified($status, $type = 'junior'): int
    {
        if ($type == 'junior') {
            return TeamJuniorData::select('*')
                ->where('profile_verif_status', $status)
                ->count();
        } else {
            return TeamSeniorData::select('*')
                ->where('profile_verif_status', $status)
                ->count();
        }
    }

    protected function getSum($type = 'junior'): int
    {
        if ($type == 'junior') {
            return TeamJuniorData::all()->count();
        } else {
            return TeamSeniorData::all()->count();
        }
    }

    protected function getCountInformationSource($status, $type = 'junior'): int
    {
        if ($type == 'junior') {
            return TeamJuniorData::select('*')
                ->where('info_source', $status)
                ->count();
        } else {
            return TeamSeniorData::select('*')
                ->where('info_source', $status)
                ->count();
        }
    }

    public function render()
    {
        $columnChartRegionBionixModel =
            (new ColumnChartModel())
            ->setTitle('Statistik Pendaftar per Region')
            ->addColumn('Region 1', $this->getCountRegion(1), '#f6ad55')
            ->addColumn('Region 2', $this->getCountRegion(2), '#fc8181')
            ->addColumn('Region 3', $this->getCountRegion(3), '#6C1AC0')
            ->addColumn('Region 4', $this->getCountRegion(4), '#8CE665')
            ->addColumn('Region 5', $this->getCountRegion(5), '#BBCBA5')
            ->addColumn('Region 6', $this->getCountRegion(6), '#4267F8')
            ->addColumn('Region 7', $this->getCountRegion(7), '#C628C6');

        //        ['Belum Unggah','Belum Bayar', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']
        $pieChartPembayaranBionixModel =
            (new PieChartModel())
            ->setTitle('Status Pembayaran Pendaftar')
            ->addSlice('Belum Bayar', $this->getCountPayment('Belum Bayar'), '#fc8181')
            ->addSlice('Belum Unggah', $this->getCountPayment('Belum Unggah'), '#f6ad55')
            ->addSlice('Tahap Verifikasi', $this->getCountPayment('Tahap Verifikasi'), '#f39c12')
            ->addSlice('Terverifikasi', $this->getCountPayment('Terverifikasi'), '#8CE665')
            ->addSlice('Ditolak', $this->getCountPayment('Ditolak'), '#6C1AC0');

        //        ['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']
        $pieChartVerifikasiBionixModel =
            (new PieChartModel())
            ->setTitle('Status Verifikasi Pendaftar')
            ->addSlice('Belum Unggah', $this->getCountVerified('Belum Unggah'), '#f6ad55')
            ->addSlice('Tahap Verifikasi', $this->getCountVerified('Tahap Verifikasi'), '#f39c12')
            ->addSlice('Terverifikasi', $this->getCountVerified('Terverifikasi'), '#8CE665')
            ->addSlice('Ditolak', $this->getCountVerified('Ditolak'), '#6C1AC0');

        $columnChartRegionSeniorBionixModel =
            (new ColumnChartModel())
            ->setTitle('Statistik Pendaftar per Region')
            ->addColumn('Region 1', $this->getCountRegion(1, 'senior'), '#f6ad55')
            ->addColumn('Region 2', $this->getCountRegion(2, 'senior'), '#fc8181')
            ->addColumn('Region 3', $this->getCountRegion(3, 'senior'), '#6C1AC0')
            ->addColumn('Region 4', $this->getCountRegion(4, 'senior'), '#8CE665')
            ->addColumn('Region 5', $this->getCountRegion(5, 'senior'), '#BBCBA5')
            ->addColumn('Region 6', $this->getCountRegion(6, 'senior'), '#4267F8')
            ->addColumn('Region 7', $this->getCountRegion(7, 'senior'), '#C628C6');

        //        ['Belum Unggah','Belum Bayar', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']
        $pieChartPembayaranSeniorBionixModel =
            (new PieChartModel())
            ->setTitle('Status Pembayaran Pendaftar')
            ->addSlice('Belum Bayar', $this->getCountPayment('Belum Bayar', 'senior'), '#fc8181')
            ->addSlice('Belum Unggah', $this->getCountPayment('Belum Unggah', 'senior'), '#f6ad55')
            ->addSlice('Tahap Verifikasi', $this->getCountPayment('Tahap Verifikasi', 'senior'), '#f39c12')
            ->addSlice('Terverifikasi', $this->getCountPayment('Terverifikasi', 'senior'), '#8CE665')
            ->addSlice('Ditolak', $this->getCountPayment('Ditolak', 'senior'), '#6C1AC0');

        //        ['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']
        $pieChartVerifikasiSeniorBionixModel =
            (new PieChartModel())
            ->setTitle('Status Verifikasi Pendaftar')
            ->addSlice('Belum Unggah', $this->getCountVerified('Belum Unggah', 'senior'), '#f6ad55')
            ->addSlice('Tahap Verifikasi', $this->getCountVerified('Tahap Verifikasi', 'senior'), '#f39c12')
            ->addSlice('Terverifikasi', $this->getCountVerified('Terverifikasi', 'senior'), '#8CE665')
            ->addSlice('Ditolak', $this->getCountVerified('Ditolak', 'senior'), '#6C1AC0');

        //        ["Media Sosial ISE! 2021",
        //            "Media Sosial selain ISE! 2021 (info lomba, dll)",
        //            "Roadshow ISE! 2021",
        //            "Grup WA/Line/dll",
        //            "Sekolah (guru, dll)",
        //            "Teman/keluarga"]);
        $pieChartInformasiSeniorBionixModel =
            (new PieChartModel())
            ->setTitle('Asal Informasi Pendaftar')
            ->addSlice('Media Sosial ISE! 2021', $this->getCountInformationSource('Media Sosial ISE! 2021', 'senior'), '#f6ad55')
            ->addSlice('Media Sosial selain ISE! 2021 (info lomba, dll)', $this->getCountInformationSource('Media Sosial selain ISE! 2021 (info lomba, dll)', 'senior'), '#181039')
            ->addSlice('Roadshow ISE! 2021', $this->getCountInformationSource('Roadshow ISE! 2021', 'senior'), '#8CE665')
            ->addSlice('Grup WA/Line/dll', $this->getCountInformationSource('Grup WA/Line/dll', 'senior'), '#6C1AC0')
            ->addSlice('Sekolah (guru, dll)', $this->getCountInformationSource('Sekolah (guru, dll)', 'senior'), '#F23FBD')
            ->addSlice('Teman/keluarga', $this->getCountInformationSource('Teman/keluarga', 'senior'), '#34CD7A');

        //        ["Media Sosial ISE! 2021",
        //            "Media Sosial selain ISE! 2021 (info lomba, dll)",
        //            "Roadshow ISE! 2021",
        //            "Grup WA/Line/dll",
        //            "Sekolah (guru, dll)",
        //            "Teman/keluarga"]);
        $pieChartInformasiBionixModel =
            (new PieChartModel())
            ->setTitle('Asal Informasi Pendaftar')
            ->addSlice('Media Sosial ISE! 2021', $this->getCountInformationSource('Media Sosial ISE! 2021', 'junior'), '#f6ad55')
            ->addSlice('Media Sosial selain ISE! 2021 (info lomba, dll)', $this->getCountInformationSource('Media Sosial selain ISE! 2021 (info lomba, dll)', 'junior'), '#181039')
            ->addSlice('Roadshow ISE! 2021', $this->getCountInformationSource('Roadshow ISE! 2021', 'junior'), '#8CE665')
            ->addSlice('Grup WA/Line/dll', $this->getCountInformationSource('Grup WA/Line/dll', 'junior'), '#6C1AC0')
            ->addSlice('Sekolah (guru, dll)', $this->getCountInformationSource('Sekolah (guru, dll)', 'junior'), '#F23FBD')
            ->addSlice('Teman/keluarga', $this->getCountInformationSource('Teman/keluarga', 'junior'), '#34CD7A');

        // Line Chart Jumlah Pendaftar Per Hari untuk yang Student
        $data_junior = TeamJuniorData::selectRaw('DATE(created_at) as created_at, COUNT(*) as total')->whereRaw("DATE(created_at)>='" . date('Y-m-d', strtotime($this->tanggal_awal_junior)) . "' and DATE(created_at)<='" . date('Y-m-d', strtotime($this->tanggal_akhir_junior)) . "'")->groupByRaw("DATE(created_at)")->orderBy('created_at', 'asc')->get();

        $line_chart_junior =
            (new LineChartModel())
            ->setTitle("Statistik pendaftar BIONIX Student");
        foreach ($data_junior as $d) {
            $line_chart_junior->addPoint(date('d F Y', strtotime($d->created_at)), $d->total);
        }

        // Line Chart Jumlah Pendaftar Per Hari untuk yang College
        $data_senior = TeamSeniorData::selectRaw('DATE(created_at) as created_at, COUNT(*) as total')->whereRaw("DATE(created_at)>='" . date('Y-m-d', strtotime($this->tanggal_awal_junior)) . "' and DATE(created_at)<='" . date('Y-m-d', strtotime($this->tanggal_akhir_junior)) . "'")->groupByRaw("DATE(created_at)")->orderBy('created_at', 'asc')->get();

        $line_chart_senior =
            (new LineChartModel())
            ->setTitle("Statistik pendaftar BIONIX College");
        foreach ($data_senior as $d) {
            $line_chart_senior->addPoint(date('d F Y', strtotime($d->created_at)), $d->total);
        }

        return view('livewire.pages.bionix.admin.beranda.index')->with([
            'columnChartRegionBionixModel' => $columnChartRegionBionixModel,
            'pieChartPembayaranBionixModel' => $pieChartPembayaranBionixModel,
            'pieChartVerifikasiBionixModel' => $pieChartVerifikasiBionixModel,
            'columnChartRegionBionixSeniorModel' => $columnChartRegionSeniorBionixModel,
            'pieChartPembayaranBionixSeniorModel' => $pieChartPembayaranSeniorBionixModel,
            'pieChartVerifikasiBionixSeniorModel' => $pieChartVerifikasiSeniorBionixModel,
            'pieChartInformasiBionixModel' => $pieChartInformasiBionixModel,
            'pieChartInformasiSeniorBionixModel' => $pieChartInformasiSeniorBionixModel,
            'lineChartJunior' => $line_chart_junior,
            'lineChartSenior' => $line_chart_senior,
            'sumJunior' => $this->getSum('junior'),
            'sumSenior' => $this->getSum('senior'),
        ]);
    }
}
