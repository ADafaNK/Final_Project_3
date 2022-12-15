<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/5b2b770845.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Hasil Panen</title>
    <link rel="stylesheet" href="assets/css/style-panen.css">
</head>

<body>
    <div class="atas">
        <input type="checkbox" id="check">
        <label for="check">
            <div class="batal" id="btn">></div>
            <div class="a3" id="cancel"></div>
        </label>
        <div class="sidebar">
            <div class="sidebar-bg">
                <div class="sidebar-bgs"></div>
            </div>
            <div class="user">
                <?php
                include "database/database.php";
                $nama = $_SESSION['id'];
                if ($nama == "") {
                    header("location:login");
                    exit;
                } elseif ($nama == "44441") {
                    echo "<div class='nama'>";
                    echo "Admin";
                    echo "</div>";
                    echo "<i class='fa-solid fa-star'></i>";
                    echo "<div class='id'>";
                    echo "********";
                    echo "</div><br>";
                } else {
                    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$nama'");
                    $data = mysqli_fetch_array($query);
                    echo "<div class='nama'>";
                    echo "$data[nama]";
                    echo "</div>";
                    echo "<i class='fa-solid fa-circle-user'></i>";
                    echo "<div class='id'>";
                    echo $_SESSION['id'];
                    echo "</div><br>";
                }
                ?>
            </div>
            <ul>
                <li id="b1"><a href="fp_user">Home</a></li>
                <li id="b2"><a style="background: rgb(238, 234, 226);" href="hasilpanen_user">Hasil Panen</a></li>
                <li id="b3"><a href="contact_user">Contact</a></li>

            </ul>
        </div>


        <div class="header">
            <h2>SISTEM INFORMASI ANALISA PERTANIAN</h2>
            <ul>
                <li><a href="login">Log Out</a></li>
            </ul>
        </div>

        <script>
            window.addEventListener("scroll", function() {
                var header = document.querySelector(".header");
                header.classList.toggle("bar", window.scrollY > 0);
            })
        </script>
        <div class="s1"><br><br><br>
            <div class="dp1">
                <table class="table-table-primary">
                    <tr>
                        <th width="5%">No</th>
                        <th>Tanggal</th>
                        <th>Hasil Panen</th>
                        <th>Hari</th>
                        <th>Berat</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($panen as $row) {
                    ?>
                        <tr>
                            <td widtd="5%"><?php echo $no++; ?></td>
                            <td><?php echo $row->tanggal; ?></td>
                            <td><?php echo $row->hasil_panen; ?> Karung</td>
                            <td><?php echo $row->hari; ?> Hari</td>
                            <td><?php echo $row->berat; ?> Kg</td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>

            </div>
        </div>
        <div class="footer">
            <div class="info" style="float: left;">
                <img src="assets/img/bsi.png" height="120" width="120" style=" margin-top: 100px;">
                <h3>Universitas Bina Sarana Informatika</h3><br>
                <div class="footer-address">
                    Jl. Abdul Rahman Saleh No.18, <br> Bangka Belitung Laut,
                    <br> Kec. Pontianak Tenggara, <br> Kota Pontianak,
                    <br> Kalimantan Barat 78124
                    <br>
                    <br>
                    <span>Telp/Whatsapp:</span>
                    <a href="tel:+6282157308640">0821-5730-8640</a><br>
                </div>
            </div>
        </div>

        <div class="logo-icon">
            <center>
                <table>
                    <td>
                        <div class="logo-ig">
                            <a href="https://www.instagram.com/reel/CkPvT_qjhU-/?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </td>
                    <td>
                        <div class="logo-yt">
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </td>
                </table>
            </center>
        </div>
    </div>
    <div class="wall">
        <div class="walls"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>