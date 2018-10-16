<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <!-- <div class="signup-img">
                    <img src="images/form-img.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div> -->
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Nama</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="TTL" class="required">Tempat, Tanggal Lahir</label>
                                    <div class="col">
                                        <input type="text" placeholder="Tempat," name="tempat" id="tempat" /><input type="date"  placeholder="Tanggal Lahir" name="TTL" id="TTL" />
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="alamat" class="required">Alamat</label>
                                    <textarea name="alamat" id="alamat"></textarea>
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="no_tlp" class="required">Nomor Telepon</label>
                                    <input type="text" name="no_tlp" id="no_tlp" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="kecamatan" class="required">Kecamatan</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="kecamatan" id="meal_preference">
                                            <option value="Ampelgading">Ampelgading</option>
                                            <option value="Bantur">Bantur</option>
                                            <option value="Bululawang">Bululawang</option>
                                            <option value="Dampit">Dampit</option>
                                            <option value="Dau">Dau</option>
                                            <option value="Donomulyo">Donomulyo</option>
                                            <option value="Gedangan">Gedangan</option>
                                            <option value="Gondanglegi">Gondanglegi</option>
                                            <option value="Jabung">Jabung</option>
                                            <option value="Kalipare">Kalipare</option>
                                            <option value="Karangploso">Karangploso</option>
                                            <option value="Kasembon">Kasembon</option>
                                            <option value="Kepanjen">Kepanjen</option>
                                            <option value="Kromengan">Kromengan</option>
                                            <option value="Lawang">Lawang</option>
                                            <option value="Ngajum">Ngajum</option>
                                            <option value="Ngantang">Ngantang</option>
                                            <option value="Pagak">Pagak</option>
                                            <option value="Pagelaran">Pagelaran</option>
                                            <option value="Pakis">Pakis</option>
                                            <option value="Pakisaji">Pakisaji</option>
                                            <option value="Poncokusumo">Poncokusumo</option>
                                            <option value="Pujon">Pujon</option>
                                            <option value="Sumbermanjing Wetan">Sumbermanjing Wetan</option>
                                            <option value="Singosari">Singosari</option>
                                            <option value="Sumberpucung">Sumberpucung</option>
                                            <option value="Tajinan">Tajinan</option>
                                            <option value="Tirtoyudo">Tirtoyudo</option>
                                            <option value="Tumpang">Tumpang</option>
                                            <option value="Turen">Turen</option>
                                            <option value="Wagir">Wagir</option>
                                            <option value="Wajak">Wajak</option>
                                            <option value="Wonosari">Wonosari</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="cabor" class="required">Cabang Olahraga</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="cabor" class="meal_preference">
                                            <option value="Anggar">Anggar</option>
                                            <option value="Atletik">Atletik</option>
                                            <option value="Balap Sepeda">Balap Sepeda</option>
                                            <option value="Bola Basket">Bola Basket</option>
                                            <option value="Bridge">Bridge</option>
                                            <option value="Hockey">Hockey</option>
                                            <option value="Kick Boxing(Full Contact)">Kick Boxing(Full Contact)</option>
                                            <option value="Kick Boxing(Point Fighting)">Kick Boxing(Point Fighting)</option>
                                            <option value="Kick Boxing(Musical Form)">Kick Boxing(Musical Form)</option>
                                            <option value="Muaythai(Putra)">Muaythai(Putra)</option>
                                            <option value="Muaythai(Putri)">Muaythai(Putri)</option>
                                            <option value="Panahan">Panahan</option>
                                            <option value="Panjat Tebing">Panjat Tebing</option>
                                            <option value="Pentaque">Pentaque</option>
                                            <option value="Tarung Derajat">Tarung Derajat</option>
                                            <option value="Tinju">Tinju</option>
                                            <option value="Bola Voli Indoor">Bola Voli Indoor</option>
                                            <option value="Bola Voli Pasir">Bola Voli Pasir</option>
                                            <option value="Wushu">Wushu</option>
                                            <option value="Pencak Silat(Tanding)">Pencak Silat(Tanding)</option>
                                            <option value="Pencak Silat(Seni)">Pencak Silat(Seni)</option>
                                            <option value="Shorinji Kempo">Shorinji Kempo</option>
                                            <option value="Gulat">Gulat</option>
                                            <option value="Selam">Selam</option>
                                            <option value="Futsal">Futsal</option>
                                            <option value="Sepak Bola">Sepak Bola</option>
                                            <option value="Karate">Karate</option>
                                            <option value="Tenis Lapangan">Tenis Lapangan</option>
                                            <option value="Taekwondo">Taekwondo</option>
                                            <option value="Cricket">Cricket</option>
                                            <option value="Bilyar">Bilyar</option>
                                            <option value="Catur">Catur</option>
                                        </select>
                                    </div>

                                    <!-- <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" checked>
                                            <label for="cash">Cash</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque">
                                            <label for="cheque">Cheque</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand">
                                            <label for="demand">Demand Draf</label>
                                            <span class="check"></span>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="cancel" class="submit" id="cancel" name="cancel" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>