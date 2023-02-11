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



{{-- <head>
    <title>Cara menghitung total harga dengan menggunakan jquery</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <style type="text/css">
        .kotak_info {
            margin-top: 15px;
        }

        .error {
            color: red;
        }

        table {
            border: 1px solid blue;
            margin-left: 20px;
            width: 460px
        }

        .container {
            width: 500px;
            margin: auto;
            border: 2px dashed red;
        }

        h1 {
            text-align: center;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.error').hide();
            $('.submit').click(function(event) {
                event.preventDefault();

                var hitung = 0;
                var total = 0;

                $('form').find(':checkbox').each(function() {
                    if ($(this).is(':checked')) {
                        hitung++;
                        total = total + parseInt($(this).val());
                    }
                });
                if (hitung == 0) {
                    $('p.hasil').hide();
                    $('.error').show();
                } else {
                    $('.error').hide();
                    $('p.hasil').show();
                    $('p.hasil').text('Total Rp. ' + total);
                }
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h1>Cara menghitung total harga dengan menggunakan jquery</h1>
        <form>
            <table border="1" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Pilih</th>
                    <th>Menu Ayam</th>
                </tr>
                <tr>
                    <th>1</th>
                    <td><input type="checkbox" id="Ayam_goreng" name="Ayam_goreng" value=15000 class="kotak_info"></td>
                    <td>Ayam goreng Rp.15000</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td><input type="checkbox" id="Ayam_sambal_tomat" name="Ayam_sambal_tomat" value=17000
                            class="kotak_info"></td>
                    <td>Ayam sambal tomat Rp.17000</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td><input type="checkbox" id="" name="" value=16000 class="kotak_info"></td>
                    <td>Ayam bakar Rp.16000</td>
                </tr>
                <tr>
                    <th>4</th>
                    <td><input type="checkbox" id="" name="" value=15000 class="kotak_info"></td>
                    <td>Ayam Penyet Rp.15000</td>
                </tr>
                <tr>
                    <th>5</th>
                    <td><input type="checkbox" id="" name="" value=13000 class="kotak_info"></td>
                    <td>Ayam Ulek Rp.13000</td>
                </tr>
                <tr>
                    <th>6</th>
                    <td><input type="checkbox" id="" name="" value=25000 class="kotak_info"></td>
                    <td>Ayam Dada Mentok Rp.25000</td>
                </tr>
                <tr>
                    <th>7</th>
                    <td><input type="checkbox" id="" name="" value=17000 class="kotak_info"></td>
                    <td>Paha Ayam Cinere Rp.17000</td>
                </tr>
                <tr>
                    <th>8</th>
                    <td><input type="checkbox" id="" name="" value=65000 class="kotak_info"></td>
                    <td>Ayam Sambal Terasi Rp.65000</td>
                </tr>
                <tr>
                    <th>9</th>
                    <td><input type="checkbox" id="" name="" value=25000 class="kotak_info"></td>
                    <td>Ayam Tumis balado Rp.25000</td>
                </tr>
                <tr>
                    <th>10</th>
                    <td><input type="checkbox" id="" name="" value=45000 class="kotak_info"></td>
                    <td>Ayam Kampung Rp.45000</td>
                </tr>
                <tr>
                    <th>11</th>
                    <td><input type="checkbox" id="" name="" value=75000 class="kotak_info"></td>
                    <td>Ayam Jago Rp.75000</td>
                </tr>
            </table>

            <p class="error">Pilih sedikitnya satu jenis makanan ya. </p>
            <strong>
                <p class="hasil"></p>
            </strong>
            <input class="submit" type="submit" value="Total Bang">
        </form>
    </div>
</body>

</html> --}}
