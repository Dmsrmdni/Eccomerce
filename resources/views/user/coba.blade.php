<html>
<script type="text/javascript">
    function tugas2() {
        var jumlah = 0;
        var harga;


        if (document.getElementById("menu1").checked) {
            harga = document.getElementById("menu1").value;
            jumlah = jumlah + parseInt(harga);
        }
        if (document.getElementById("menu2").checked) {
            harga = document.getElementById("menu2").value;
            jumlah = jumlah + parseInt(harga);
        }
        if (document.getElementById("menu3").checked) {
            harga = document.getElementById("menu3").value;
            jumlah = jumlah + parseInt(harga);
        }
        document.getElementById("total").value = jumlah;
    }
</script>

<body>
    <h2>Silahkan pilih menu sesuka perutmu </h2>
    Bakso Kepala Rp 5.000 <input type="checkbox" id="menu1" value="5000" onClick="tugas2()"> <br>
    Es Teh Goreng Rp 1.500<input type="checkbox" id="menu2" value="1500" onClick="tugas2()"><br>
    Tahu Goreng Rp. 500 <input type="checkbox" id="menu3" value="500" onClick="tugas2()">
    <hr>
    Total Rp <input type="text" id="total"></br>
    Jumlah Pembayaran Rp <input type="text" id="bayar" onchange="inputan()"></br>
    Jumlah Pengembalian Rp <span id="kembali"></span>
    <footer>&copy; Mohamad Hanafi</footer></br>
</body>

</html>
