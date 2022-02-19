<div class="card">
    <div class="card-body">
        <form action="#" method="POST">
            <div class="grid grid-cols-1 gap-6 font-bold">
                <div>
                    <h1>Form Promo</h1>
                </div>
                <div>
                    <label for="promo-name">Nama Promo</label>
                    <input id="promo-name" name="promo-name" type="text" required class="promo-form input-text">
                </div>
                <div>
                    <label for="promo-code">Kode Promo</label>
                    <input id="promo-code" name="promo-code" type="text" required class="promo-form input-text">
                </div>
                <div>
                    <label for="nominal">Nominal Promo</label>
                    <input type="number" id="nominal" name="nominal" min="0" step="10000" required class="promo-form input-text">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="promo-date-start">Tanggal Mulai</label>
                        <input id="promo-date-start" type="date" name="promo-date-start" class="promo-form input-text" required>
                    </div>
                    <div>
                        <label for="promo-date-end">Tanggal Selesai</label>
                        <input id="promo-date-end" type="date" name="promo-date-end" class="promo-form input-text" required>
                    </div>
                </div>
                <div>
                    <button type="submit" class="items-center w-full hover:shadow-lg py-2 px-4 border border-transparent font-bold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Buat Promo
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Isian form:
- Nama promo
- Kode promo
- Nominal promo
- Masa berlaku (tanggal mulai - selesai)

- Jumlah promo dimasukkan dalam bentuk nominal.
- Promo ini tidak ada batasan penukaran, jadi mau dituker ampe 1000x pun gak masalah, yang penting masih berlaku --}}