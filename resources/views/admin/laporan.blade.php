<section id="laporan" class="bg-white p-6 rounded shadow-md">
    <h2 class="text-xl font-semibold mb-4">Laporan Jumlah Penumpang Per Travel</h2>

    <table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">Tujuan Travel</th>
                <th class="border p-2">Tanggal Keberangkatan</th>
                <th class="border p-2">Jumlah Penumpang</th>
            </tr>
        </thead>
        <tbody id="laporanList"></tbody>
    </table>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        loadLaporan();
    });

    function loadLaporan() {
        $.get("{{ route('dashboard.laporan.index') }}", function(data) {
            $("#laporanList").empty();
            data.forEach(function(l) {
                $("#laporanList").append(`
                    <tr>
                        <td class="border p-2">${l.tujuan}</td>
                        <td class="border p-2">${l.tanggal_keberangkatan}</td>
                        <td class="border p-2">${l.penumpang_count} penumpang</td>
                    </tr>
                `);
            });
        });
    }
</script>
