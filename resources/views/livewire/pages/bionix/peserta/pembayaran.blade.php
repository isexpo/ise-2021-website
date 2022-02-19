@php
    if(Auth::user()->userable->bionix->payment_verif_status=='Tahap Verifikasi'){
        $alert_color='yellow';
        $alert_header = 'Pembayaran Sedang Dalam Tahap Verifikasi';
        $alert_content = 'Mohon tunggu beberapa saat hingga pembayaran anda diverifikasi oleh admin';
    }
    elseif(Auth::user()->userable->bionix->payment_verif_status=='Terverifikasi'){
        $alert_color='green';
        $alert_header = 'Pembayaran Telah Terverifikasi';
        $alert_content = 'Selamat pembayaran telah diverifikasi oleh admin';
    }
    elseif(Auth::user()->userable->bionix->payment_verif_status=='Ditolak'){
        $alert_color='red';
        $alert_header = 'Pembayaran Ditolak';
        $alert_content = 'Pembayaran karena alasan berikut : '.Auth::user()->userable->bionix->payment_verif_comment;
    } elseif(Auth::user()->userable->bionix->payment_verif_status=='Belum Unggah'){
        $alert_color='blue';
        $alert_header = 'Segera Unggah Bukti Bayar Anda';
        $alert_content = 'Lakukan pengunggahan bukti bayar tempat yang telah disediakan';
    }
    elseif(Auth::user()->userable->bionix_type == "bionix_senior"&&!(!(Auth::user()->userable->payment_batch_2&&date('Y-m-d')<=date('Y-m-d',strtotime('2021-09-22')))||(Auth::user()->userable->payment_batch_2&&(date('Y-m-d')>=date('Y-m-d',strtotime('2021-09-23'))&&date('Y-m-d')<=date('Y-m-d',strtotime('2021-09-26'))))))
    {
        $alert_color='red';
        $alert_header = 'Masa Pembayaran Sudah Berakhir';
        $alert_content = 'Anda tidak bisa lagi mengunggah bukti pembayaran';
    }
    else{
        $alert_color = 'blue';
        $alert_header = 'Segera Lakukan Pembayaran';
        $alert_content = 'Lakukan pembayaran sesuai detail di bawah. ';
        if(Auth::user()->userable->bionix_type == "bionix_senior"){
            $alert_content.='Lakukan pembayaran sebelum <b>'.(Auth::user()->userable->bionix->payment_batch_2?'26 September 2021':'22 September 2021').' 23:59:59</b>';
        }
    }
@endphp
<div class="px-8">
    <div
        class="bg-{{$alert_color}}-100 border-t-4 border-{{$alert_color}}-500 rounded-b text-{{$alert_color}}-900 px-4 py-3 shadow-md"
        role="alert">
        <div class="flex">
            <div class="py-1">
                <svg class="fill-current h-6 w-6 text-{{$alert_color}}-500 mr-4"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                </svg>
            </div>
            <div>
                <p class="font-bold">{{$alert_header}}</p>
                <p class="text-sm">{!! $alert_content !!}</p>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="bg-red-400 border-l-4 border-red-500 p-4 mb-3" role="alert">
            <p class="font-bold text-lg">Validation Error</p>
            @foreach ($errors->all() as $error)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    @endif
    <h3 class="text-xl font-weight-bold my-4">Pembayaran</h3>
    <div
        class="grid @if(!(Auth::user()->userable->bionix->payment_verif_status=='Belum Bayar'&&Auth::user()->userable->bionix_type == "bionix_senior")) md:grid-cols-2 @endif gap-4 pb-8">
        <div class="card rounded-xl mb-0">
            <div class="card-body pb-0">
                <div class="flex flex-col justify-center items-center">
                    <div class="my-8">
                        <div class="flex flex-col justify-center">
                            @if(Auth::user()->userable->bionix->payment_verif_status!='Belum Bayar')
                                <h5 class="text-center font-normal text-xl">Harap lakukan transfer uang ke rekening
                                    bank
                                    berikut
                                    : </h5>
                                <center><img
                                        src="{{asset('img/global/'.\App\Models\Setting::where('name','bionix_bank_name')->first()->value.'.png')}}"
                                        alt="Logo Bank"
                                        class="object-scale-down md:h-1/2 h-14 max-w-xs"/></center>
                                <h4 class="text-center text-2xl">{{\App\Models\Setting::where('name','bionix_bank_norek')->first()->value}}</h4>
                                <h4 class="text-center text-2xl">
                                    a.n. {{\App\Models\Setting::where('name','bionix_bank_owner')->first()->value}}</h4>
                            @endif
                            <h5 class="text-center font-normal text-xl mt-4">Jumlah yang harus dibayar : </h5>
                            <h1 class="text-center text-4xl font-bold">{{"Rp " . number_format($payment_price,2,',','.')}}</h1>
                            @if(Auth::user()->userable->bionix->payment_verif_status=='Belum Bayar')
                                @if(Auth::user()->userable->bionix_type == "bionix_junior")
                                    <p class="mt-4">Anda dapat memasukkan kode promo dan nomor invoice di sini.</p>
                                @endif
                                <p>Setelah menekan tombol bayar, maka anda harus melakukan pembayaran ke
                                    rekening yang tertera.</p>
                            @endif
                            @if(Auth::user()->userable->bionix->payment_verif_status=='Belum Unggah'||Auth::user()->userable->bionix->payment_verif_status=='Ditolak')
                                <button type="button" class="btn btn-outline-danger mt-3"
                                        wire:click="backToPayment">
                                    Kembali ke tahap sebelumnya
                                </button>
                            @else
                                @if(Auth::user()->userable->bionix_type == "bionix_senior")
                                    <form class=" flex flex-col" wire:submit.prevent="submitBayar">
                                        <button type="submit" class="btn btn-outline-success mt-3">
                                            Bayar
                                        </button>
                                    </form>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="card rounded-xl @if(Auth::user()->userable->bionix->payment_verif_status=='Belum Bayar'&&Auth::user()->userable->bionix_type == "bionix_senior") hidden @endif">
            <div class="card-body">
                <div class="justify-center flex">
                    @if(Auth::user()->userable->bionix->payment_verif_status=='Belum Bayar'
&&(
    (Auth::user()->userable->bionix_type == "bionix_senior"&&((!Auth::user()->userable->payment_batch_2&&date('Y-m-d')<=date('Y-m-d',strtotime('2021-09-22')))||(Auth::user()->userable->payment_batch_2&&date('Y-m-d')>=date('Y-m-d',strtotime('2021-09-23'))&&date('Y-m-d')<=date('Y-m-d',strtotime('2021-09-26')))))||
    Auth::user()->userable->bionix_type == "bionix_junior"))
                        @if(Auth::user()->userable->bionix_type == "bionix_junior")
                            <form class=" flex flex-col" wire:submit.prevent="submitBayar">
                                <div class="w-full mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                           for="grid-promo">
                                        Kode Promo (opsional)
                                    </label>
                                    <div class="md:grid md:grid-cols-3 w-full min-w-full gap-4">
                                        <div class="col-span-2">
                                            <input type="text"
                                                   id="grid-promo"
                                                   class="h-14 min-w-full md:pr-8 rounded text-black focus:shadow focus:outline-none uppercase"
                                                   wire:model.defer="kode_promo"/>
                                            {{--                                            <div class="absolute top-4 right-3">--}}
                                            {{--                                                <button--}}
                                            {{--                                                    wire:click="checkPromo"--}}
                                            {{--                                                    type="button"--}}
                                            {{--                                                    class="inline-flex items-center"--}}
                                            {{--                                                    title="Cek Promo">--}}
                                            {{--                                                    <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>--}}
                                            {{--                                                </button>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                        <button
                                            wire:click="checkPromo"
                                            type="button"
                                            class="bg-transparent mt-4 mt-md-0 text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                            Cek Kode Promo
                                        </button>
                                    </div>

                                    @php $i=0; @endphp
                                    @foreach($promo as $p)
                                        <div
                                            class="border-blue-400 bg-blue-100 border-2 px-2 py-2 mt-2 flex flex-row justify-between"
                                            wire:key="promo_{{$i}}">
                                            <div class="mx-1">
                                                <b class="text-green-600 font-extrabold">{{$p['kode']}}</b>
                                                <p class="m-0">Anda mendapatkan potongan maksimal
                                                    Rp{{number_format($p['potongan'], 2, ',', '.')}}</p>
                                            </div>
                                            <div>
                                                <button type="button" title="Hapus" wire:click="removePromo({{$i}})"><i
                                                        class="cil-x"></i></button>
                                            </div>
                                        </div>
                                        @php $i++; @endphp
                                    @endforeach
                                </div>
                                {{-- Nomor Invoice --}}
                                <div class="w-full mb-6 md:mb-0 mt-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                           for="grid-promo">
                                        Nomor Invoice (opsional)
                                    </label>
                                    <div class="md:grid md:grid-cols-3 gap-4">
                                        <div class="md:col-span-2">
                                            <input type="text"
                                                   id="grid-invoice"
                                                   class="h-14 min-w-full pr-8 rounded z-0 focus:shadow focus:outline-none uppercase"
                                                   wire:model.defer="nomor_invoice"/>
                                            {{--                                        <div class="absolute top-4 right-3">--}}
                                            {{--                                            <button--}}
                                            {{--                                                wire:click="checkInvoice"--}}
                                            {{--                                                type="button"--}}
                                            {{--                                                class="inline-flex items-center"--}}
                                            {{--                                                title="Cek Invoice">--}}
                                            {{--                                                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>--}}
                                            {{--                                            </button>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                        <button
                                            wire:click="checkInvoice"
                                            type="button"
                                            class="bg-transparent mt-4 mt-md-0 text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                            Cek Invoice
                                        </button>
                                    </div>
                                    <label class="block tracking-wide text-gray-700 text-xs mb-2"
                                           for="grid-invoice">
                                        Masukkan nomor invoice jika anda pernah melakukan pembayaran sebelumnya
                                    </label>
                                    @if($invoice)
                                        <div
                                            class="border-blue-400 bg-blue-100 border-2 px-2 py-2 mt-2 flex flex-row justify-between">
                                            <div class="mx-1">
                                                <b class="text-green-600 font-extrabold">{{$invoice->invoice_no}}</b>
                                                <p class="m-0">Anda telah melakukan DP sebesar
                                                    Rp{{number_format($invoice->nominal, 2, ',', '.')}}</p>
                                            </div>
                                            <div>
                                                <button type="button" title="Hapus" wire:click="removeInvoice()"><i
                                                        class="cil-x"></i></button>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-outline-success mt-3">
                                    Bayar
                                </button>
                            </form>
                        @endif
                    @else
                        <div class="mt-3 flex flex-col">
                            <center><label
                                    class="text-lg font-weight-bold block tracking-wide text-gray-700 text-xs mb-2"
                                    for="bukti_transfer">
                                    Bukti Transfer
                                </label>
                            </center>
                            <img
                                src="{{$image?$image->temporaryUrl():((Auth::user()->userable->bionix->payment_proof_path&&(Auth::user()->userable->bionix->payment_verif_status=='Terverifikasi'||Auth::user()->userable->bionix->payment_verif_status=='Tahap Verifikasi'))?asset('storage/'.Auth::user()->userable->bionix->payment_proof_path):asset('/img/global/placeholder-image.png'))}}"
                                class="object-fit mx-auto 2xl:max-h-80" alt="Bukti Transfer"
                                id="bukti_transfer_preview">

                            @if((Auth::user()->userable->bionix->payment_verif_status=='Belum Unggah'||Auth::user()->userable->bionix->payment_verif_status=='Ditolak')&&(
    (Auth::user()->userable->bionix_type == "bionix_senior"&&(!(Auth::user()->userable->payment_batch_2&&date('Y-m-d')<=date('Y-m-d',strtotime('2021-09-22')))||(Auth::user()->userable->payment_batch_2&&(date('Y-m-d')>=date('Y-m-d',strtotime('2021-09-23'))&&date('Y-m-d')<=date('Y-m-d',strtotime('2021-09-26'))))))||
    Auth::user()->userable->bionix_type == "bionix_junior"))
                                <form wire:submit.prevent="save" class="flex-col flex items-center">
                                    <label
                                        class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-2">
                                        <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File <input type="file"
                                                                                                       class="form-control-file"
                                                                                                       id="bukti_transfer"
                                                                                                       accept=".jpg,.jpeg,.png"
                                                                                                       hidden
                                                                                                       wire:model="image"/>
                                    </label>
                                    <button type="submit" class="btn btn-success mt-2 font-bold"><i
                                            class="fas fa-save"></i>
                                        Kirim Bukti Bayar
                                    </button>
                                </form>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div wire:loading.delay wire:target="image"
         class="fixed bottom-12 right-12 bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md"
         role="alert" style="color:rgba(30, 58, 138, var(--tw-text-opacity))">
        <div class="flex">
            <div class="py-1">
                <svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                </svg>
            </div>
            <div>
                <p class="font-bold">Sedang mengunggah</p>
                <p class="text-sm">Harap tunggu sesaat.</p>
            </div>
        </div>
    </div>
    @if(session('error'))
        <div
            class="fixed bottom-12 right-12 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Terjadi masalah</p>
                    <p class="text-sm">{{session('error')}}</p>
                </div>
                <button type="button" title="Hapus" wire:click="closeMessage()" class="self-start"><i
                        class="cil-x"></i></button>
            </div>
        </div>
    @endif
</div>
