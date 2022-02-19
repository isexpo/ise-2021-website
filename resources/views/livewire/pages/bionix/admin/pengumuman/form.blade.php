<div class="card">
    <div class="card-body">
        <form action="#" method="POST">
            <div class="grid grid-cols-1 gap-6 font-bold">
                <div>
                    <h1>Form Pengumuman</h1>
                </div>
                <div>
                    <label for="announcement-name">Nama Pengumuman</label>
                    <input id="announcement-name" name="announcement-name" type="text" required class="pengumuman-form input-text">
                </div>
                <div>
                    <label for="announcement-content">Isi Pengumuman</label>
                    <textarea id="announcement-content" name="announcement-content" required class="pengumuman-form input-text overflow-auto h-32"></textarea>
                </div>
                <div class="grid grid-cols-2">
                    <div>
                        <label for="announcement_type">Tipe Pengumuman</label>
                        <div class="mt-1 font-normal">
                            <input type="radio" id="urgent" name="announcement_type" class="registration-form input-radio" required>
                            <label for="urgent">Urgent</label><br>
                            <input type="radio" id="normal" name="announcement_type" class="registration-form input-radio">
                            <label for="normal">Normal</label><br>
                            <input type="radio" id="lainnya" name="announcement_type" class="registration-form input-radio">
                            <label for="lainnya">Lainnya</label>
                        </div>
                    </div>
                    <div>
                        <label for="announcement_category">Kategori Pengumuman</label>
                        <div class="mt-1 font-normal">
                            <input type="checkbox" id="junior" name="announcement_category" class="pengumuman-form input-radio" value="junior">
                            <label for="junior">Junior</label><br>
                            <input type="checkbox" id="senior" name="announcement_category" class="pengumuman-form input-radio" value="senior">
                            <label for="senior">Senior</label><br>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="announcement-date-start">Tanggal Mulai Tayang</label>
                        <input id="announcement-date-start" type="date" name="announcement-date-start" class="pengumuman-form input-text" required>
                    </div>
                    <div>
                        <label for="announcement-date-end">Tanggal Selesai Tayang</label>
                        <input id="announcement-date-end" type="date" name="announcement-date-end" class="pengumuman-form input-text" required>
                    </div>
                </div>
                <div>
                    <label for="add_file">File Tambahan:</label>
                    <input type="file" id="add_file" name="add_file">
                </div>
                <div>
                    <button type="submit" class="items-center w-full hover:shadow-lg py-2 px-4 border border-transparent font-bold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Post Pengumuman
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Isian form:
- Nama pengumuman
- Isi pengumuman
- Tipe
- Kategori (junior / senior / keduanya)
- Tanggal tayang (tanggal mulai - selesai)
- Upload file (opsional)

- Terserah sih mau gimana, pokoknya bisa diisi banyak pengumuman. Pengumumannya harus bisa ditambah, diedit, atau dihapus
- Tipe itu maksudnya urgent (danger), normal (primary), atau lainnya (belom kepikiran sih)
- Rencananya nanti pengumuman peserta yang lolos ke babak berikutnya akan diumumkan lewat sini juga --}}