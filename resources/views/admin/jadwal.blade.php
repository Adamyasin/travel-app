<section id="jadwal" class="bg-white p-6 rounded shadow-md">
    <h2 class="text-xl font-semibold mb-4">Form Jadwal Travel</h2>

    <form id="formJadwal">
        @csrf
        <input type="hidden" name="id" id="jadwalId">
        <input type="text" name="tujuan" id="tujuan" placeholder="Tujuan" class="border p-2 w-full mb-2">
        <input type="datetime-local" name="tanggal_keberangkatan" id="tanggal" class="border p-2 w-full mb-2">
        <input type="number" name="kuota" id="kuota" placeholder="Kuota" class="border p-2 w-full mb-2">
        <input type="number" name="harga_tiket" id="harga" placeholder="Harga Tiket"
            class="border p-2 w-full mb-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>

    <h2 class="text-xl font-semibold mt-6">Daftar Jadwal Travel</h2>
    <table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">Tujuan</th>
                <th class="border p-2">Tanggal</th>
                <th class="border p-2">Kuota</th>
                <th class="border p-2">Harga</th>
                <th class="border p-2">Penumpang</th>
                <th class="border p-2">Aksi</th>
            </tr>
        </thead>
        <tbody id="jadwalList"></tbody>
    </table>
</section>

<!-- Modal untuk Menampilkan Penumpang -->
<div id="modalPenumpang" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-4 rounded shadow-lg w-1/2">
        <h2 class="text-xl font-semibold">Riwayat Penumpang</h2>
        <ul id="listPenumpang" class="mt-4"></ul>
        <button onclick="tutupModal()" class="mt-4 bg-gray-500 text-white px-4 py-2 rounded">Tutup</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        loadJadwal();

        $("#formJadwal").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('dashboard.jadwal.store') }}",
                type: "POST",
                data: $(this).serialize(),
                success: function() {
                    loadJadwal();
                    $("#formJadwal")[0].reset();
                    $("#jadwalId").val('');
                }
            });
        });
    });

    function loadJadwal() {
        $.get("{{ route('dashboard.jadwal.index') }}", function(data) {
            $("#jadwalList").empty();
            data.forEach(function(j) {
                $("#jadwalList").append(`
                    <tr id="jadwal-${j.id}">
                        <td class="border p-2">${j.tujuan}</td>
                        <td class="border p-2">${j.tanggal_keberangkatan}</td>
                        <td class="border p-2">${j.kuota}</td>
                        <td class="border p-2">Rp ${parseInt(j.harga_tiket).toLocaleString()}</td>
                        <td class="border p-2">${j.penumpang_count} penumpang</td>
                        <td class="border p-2">
                            <button onclick="editJadwal(${j.id}, '${j.tujuan}', '${j.tanggal_keberangkatan}', ${j.kuota}, ${j.harga_tiket})" class="bg-yellow-500 text-white px-4 py-1 rounded">Edit</button>
                            <button onclick="hapusJadwal(${j.id})" class="bg-red-500 text-white px-4 py-1 rounded">Hapus</button>
                            <button onclick="lihatPenumpang(${j.id})" class="bg-green-500 text-white px-4 py-1 rounded">Lihat</button>
                        </td>
                    </tr>
                `);
            });
        });
    }

    function lihatPenumpang(id) {
        $.get(`/dashboard/jadwal/${id}/penumpang`, function(data) {
            $("#listPenumpang").empty();
            data.forEach(p => $("#listPenumpang").append(`<li>${p.nama_penumpang}</li>`));
            $("#modalPenumpang").removeClass("hidden");
        });
    }

    function tutupModal() {
        $("#modalPenumpang").addClass("hidden");
    }
</script>
