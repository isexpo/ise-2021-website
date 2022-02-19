<div class="card">
    <div class="card-body">
        <form action="#" method="POST">
            <div class="grid grid-cols-1 gap-6 font-bold">
                <div>
                    <h1>Form Tugas</h1>
                </div>
                <div>
                    <label for="task-name">Nama Tugas</label>
                    <input id="task-name" name="task-name" type="text" required class="tugas-form input-text">
                </div>
                <div>
                    <label for="task-description">Deskripsi Tugas</label>
                    <textarea id="task-description" name="task-description" required class="tugas-form input-text overflow-auto h-32"></textarea>
                </div>
                
                <div>
                    <label for="type_task">Tipe Tugas</label>
                    <div class="mt-1 font-normal">
                            <input type="radio" id="startup" name="task_type" class="registration-form input-radio" required>
                            <label for="startup">Startup</label><br>
                            <input type="radio" id="data-science" name="task_type" class="registration-form input-radio">
                            <label for="data science">Data Science</label><br>
                    </div>
                </div>
                <div>
                    <label for="task-deadline">Deadline</label>
                    <input id="task-deadline" type="date" name="task-deadline" class="tugas-form input-text" required>
                </div>

                <div>
                    <label for="add_file">File Tambahan:</label>
                    <input type="file" id="add_file" name="add_file">
                </div>
                <div>
                    <button type="submit" class="items-center w-full hover:shadow-lg py-2 px-4 border border-transparent font-bold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Post Tugas
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