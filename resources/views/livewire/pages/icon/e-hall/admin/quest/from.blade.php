<div class="card">
    <div class="card-body">
        <form action="#" method="POST">
            <div class="grid grid-cols-1 gap-6 font-bold">
                <div>
                    <h1>Form Quest</h1>
                </div>
                <div>
                    <label for="question">Question</label>
                    <input id="question" name="question" type="text" required class="tugas-form input-text">
                </div>
                <div>
                    <label for="type_task">Tipe Quiz</label>
                    <div class="mt-1 font-normal">
                            <input type="radio" id="pilgan" name="task_type" class="registration-form input-radio" required>
                            <label for="pilgan">Pilihan Ganda</label><br>
                            <input type="radio" id="isian" name="task_type" class="registration-form input-radio">
                            <label for="isian">Isian</label><br>
                            <input type="radio" id="tof" name="task_type" class="registration-form input-radio">
                            <label for="tof">Tof</label><br>
                    </div>
                </div>
                <div>
                    <label for="opt_a">Opsi A</label>
                    <input id="opt_a" name="opt_a" required class="tugas-form input-text overflow-auto h-32"></input>
                </div>
                <div>
                    <label for="opt_b">Opsi B</label>
                    <input id="opt_b" name="opt_b" required class="tugas-form input-text overflow-auto h-32"></input>
                </div>
                <div>
                    <label for="opt_c">Opsi C</label>
                    <input id="opt_c" name="opt_c" required class="tugas-form input-text overflow-auto h-32"></input>
                </div>
                <div>
                    <label for="answer">Answer</label>
                    <textarea id="answer" name="answer required" class="tugas-form input-text overflow-auto h-32"></textarea>
                </div>
                 <div>
                    <label for="explanation">Explanation</label>
                    <textarea id="explanation" name="explanation" required class="tugas-form input-text overflow-auto h-32"></textarea>
                </div>
                <div>
                    <button type="submit" class="items-center w-full hover:shadow-lg py-2 px-4 border border-transparent font-bold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Post Quest
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
