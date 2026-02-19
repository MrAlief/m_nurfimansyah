<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Monitoring BOM Mechanical & Sipil</title>

<style>
* { box-sizing: border-box; font-family: Arial, sans-serif; }
body { margin: 0; background: #f4f6f9; }

.header {
    background: #0f172a;
    color: white;
    padding: 20px;
    font-size: 22px;
    font-weight: bold;
}

.container { padding: 20px; }

.summary {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 20px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

.card h3 { margin: 0; font-size: 14px; color: #6b7280; }
.card p { margin-top: 8px; font-size: 20px; font-weight: bold; }

.filter { margin-bottom: 15px; }

select {
    padding: 8px;
    border-radius: 6px;
}

table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 10px;
    overflow: hidden;
}

th {
    background: #1e293b;
    color: white;
    padding: 8px;
    text-align: left;
    font-size: 13px;
}

td {
    padding: 8px;
    border-bottom: 1px solid #e5e7eb;
    font-size: 13px;
}

tr:hover { background: #f1f5f9; }

.priority {
    padding: 5px 8px;
    border-radius: 20px;
    color: white;
    font-weight: bold;
    display: inline-block;
    min-width: 35px;
    text-align: center;
}

.p1 { background: #dc2626; }
.p2 { background: #ea580c; }
.p3 { background: #ca8a04; }
.p4 { background: #16a34a; }

.category { font-weight: bold; }
.bom { font-weight: bold; text-align: center; }
</style>
</head>

<body>

<div class="header">
Dashboard Monitoring Material Mechanical & Sipil - Bill of Material
</div>

<div class="container">

<div class="summary">
    <div class="card">
        <h3>Total Material</h3>
        <p id="totalMaterial">0</p>
    </div>
    <div class="card">
        <h3>Total Berat (Kg)</h3>
        <p id="totalWeight">0</p>
    </div>
    <div class="card">
        <h3>Total Nilai (Rp)</h3>
        <p id="totalCost">0</p>
    </div>
</div>

<div class="filter">
    Filter Prioritas:
    <select id="priorityFilter" onchange="filterTable()">
        <option value="all">Semua</option>
        <option value="1">Prioritas 1</option>
        <option value="2">Prioritas 2</option>
        <option value="3">Prioritas 3</option>
        <option value="4">Prioritas 4</option>
    </select>
</div>

<table id="bomTable">
<thead>
<tr>
<th>Kategori</th>
<th>Nama Material</th>
<th>Deskripsi</th>
<th>BOM Parsial</th>
<th>Qty</th>
<th>Satuan</th>
<th>Berat (Kg)</th>
<th>Harga (Rp)</th>
<th>Prioritas</th>
<th>Keterangan Waktu</th>
</tr>
</thead>

<tbody>

<!-- MECHANICAL -->
<tr data-priority="1">
<td class="category">Mechanical</td>
<td>Carbon Steel Pipe 6"</td>
<td>ASTM A106 Gr.B Sch 40</td>
<td class="bom">1</td>
<td>200</td>
<td>Meter</td>
<td>8200</td>
<td>1200000000</td>
<td><span class="priority p1">1</span></td>
<td></td>
</tr>

<tr data-priority="2">
<td class="category">Mechanical</td>
<td>Gate Valve 8"</td>
<td>Class 150, RF, A216 WCB</td>
<td class="bom">2</td>
<td>12</td>
<td>Unit</td>
<td>1500</td>
<td>480000000</td>
<td><span class="priority p2">2</span></td>
<td></td>
</tr>

<tr data-priority="3">
<td class="category">Mechanical</td>
<td>Centrifugal Pump 90kW</td>
<td>Flow 150m3/h, Head 45m</td>
<td class="bom">1</td>
<td>2</td>
<td>Unit</td>
<td>2100</td>
<td>890000000</td>
<td><span class="priority p3">3</span></td>
<td></td>
</tr>

<tr data-priority="4">
<td class="category">Mechanical</td>
<td>Air Receiver Tank</td>
<td>Capacity 3000L, 10 Bar</td>
<td class="bom">3</td>
<td>1</td>
<td>Unit</td>
<td>980</td>
<td>150000000</td>
<td><span class="priority p4">4</span></td>
<td></td>
</tr>

<tr data-priority="2">
<td class="category">Mechanical</td>
<td>Butterfly Valve 10"</td>
<td>PN16, Cast Iron Body</td>
<td class="bom">2</td>
<td>20</td>
<td>Unit</td>
<td>1100</td>
<td>350000000</td>
<td><span class="priority p2">2</span></td>
<td></td>
</tr>

<tr data-priority="3">
<td class="category">Mechanical</td>
<td>Expansion Joint 8"</td>
<td>Rubber Type, PN10</td>
<td class="bom">4</td>
<td>15</td>
<td>Unit</td>
<td>750</td>
<td>210000000</td>
<td><span class="priority p3">3</span></td>
<td></td>
</tr>

<!-- SIPIL -->
<tr data-priority="1">
<td class="category">Sipil</td>
<td>Rebar D16</td>
<td>BJTS 420</td>
<td class="bom">2</td>
<td>8000</td>
<td>Kg</td>
<td>8000</td>
<td>120000000</td>
<td><span class="priority p1">1</span></td>
<td></td>
</tr>

<tr data-priority="2">
<td class="category">Sipil</td>
<td>Steel H-Beam 300</td>
<td>Grade SS400</td>
<td class="bom">3</td>
<td>50</td>
<td>Batang</td>
<td>12500</td>
<td>950000000</td>
<td><span class="priority p2">2</span></td>
<td></td>
</tr>

<tr data-priority="3">
<td class="category">Sipil</td>
<td>Anchor Bolt M24</td>
<td>Grade 8.8 Length 600mm</td>
<td class="bom">1</td>
<td>300</td>
<td>Unit</td>
<td>1200</td>
<td>95000000</td>
<td><span class="priority p3">3</span></td>
<td></td>
</tr>

<tr data-priority="4">
<td class="category">Sipil</td>
<td>Precast U-Ditch 600x600</td>
<td>Concrete Precast Class A</td>
<td class="bom">4</td>
<td>120</td>
<td>Unit</td>
<td>24000</td>
<td>420000000</td>
<td><span class="priority p4">4</span></td>
<td></td>
</tr>

<tr data-priority="2">
<td class="category">Sipil</td>
<td>Wiremesh M8</td>
<td>Standard SNI</td>
<td class="bom">3</td>
<td>250</td>
<td>Lembar</td>
<td>3500</td>
<td>275000000</td>
<td><span class="priority p2">2</span></td>
<td></td>
</tr>

</tbody>
</table>

</div>

<script>
function calculateSummary() {
    const rows = document.querySelectorAll("#bomTable tbody tr");
    let totalWeight = 0;
    let totalCost = 0;

    rows.forEach(row => {
        totalWeight += parseFloat(row.cells[6].innerText);
        totalCost += parseFloat(row.cells[7].innerText);

        let priority = row.dataset.priority;
        row.cells[9].innerText = "Bulan ke-" + priority;
    });

    document.getElementById("totalMaterial").innerText = rows.length;
    document.getElementById("totalWeight").innerText = totalWeight.toLocaleString();
    document.getElementById("totalCost").innerText = totalCost.toLocaleString();
}

function filterTable() {
    const filter = document.getElementById("priorityFilter").value;
    const rows = document.querySelectorAll("#bomTable tbody tr");

    rows.forEach(row => {
        if(filter === "all" || row.dataset.priority === filter) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
}

calculateSummary();
</script>

</body>
</html>