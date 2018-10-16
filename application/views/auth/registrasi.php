   <script type="text/javascript">
        $(document).ready(function() {
            $("#kecamatan").select2();
            function matchStart(params, data) {
              if ($.trim(params.term) === '') {
                return data;
              }
              if (data.text.indexOf(params.term.replace(/^\w/, c => c.toUpperCase())) > -1) {
                  var modifiedData = $.extend({}, data, true);
                  return modifiedData;
                }

              if (typeof data.children === 'undefined') {
                return null;
              }
              
              var filteredChildren = [];
              $.each(data.children, function (idx, child) {
                if (child.text.toUpperCase().indexOf(params.term.toUpperCase()) == 0) {
                  filteredChildren.push(child);
                }
              });

              if (typeof data.text === 'undefined') {
                  return null;
                }

              if (filteredChildren.length) {
                var modifiedData = $.extend({}, data, true);
                modifiedData.children = filteredChildren;
                return modifiedData;
              }


              return null;
            } 

            function matchCustom(params, data) {
                if ($.trim(params.term) === '') {
                  return data;
                }

                if (typeof data.text === 'undefined') {
                  return null;
                }

                if (data.text.indexOf(params.term.replace(/^\w/, c => c.toUpperCase())) > -1) {
                  var modifiedData = $.extend({}, data, true);
                  return modifiedData;
                }
                return null;
            }


            $("#cabor").select2({
                matcher: matchStart
            });

            $('#cabor').on('select2:select', function (e) {
                var data = e.params.data;
                var selectedGroup = $('#cabor :selected').parent().attr('label');
                if (typeof selectedGroup != "undefined") {
                    document.getElementById('select2-cabor-container').innerHTML = $('#cabor :selected').parent().attr('label')+' '+data.text;
                    // if (selectedGroup != 'Bola Basket' || selectedGroup != 'Bridge' || selectedGroup != 'Bola Voli Indoor' || selectedGroup != 'Bola Voli Pasir' || selectedGroup != 'Futsal' || selectedGroup != 'Sepak Bola' || selectedGroup != 'Taekwondo,Poomsae' || selectedGroup != 'Catur') {
                    var elementToRender = '<label for="cabor2" class="required">Cabang Olahraga Kedua</label><select name="cabor2" id="cabor2" class="form-control">';
                    // }
                    if (selectedGroup == 'Atletik') {
                        elementToRender += 
                                "<option value='Atletik, Lari 100 m'>Lari 100 m</option>"
                                +"<option value='Atletik, Lari 400 m'>Lari 400 m</option>"
                                +"<option value='Atletik, Lari 800 m'>Lari 800 m</option>"
                                +"<option value='Atletik, Lari 5000 m'>Lari 5000 m</option>"
                                +"<option value='Atletik, Jalan Cepat 3000 m'>Jalan Cepat 3000 m</option>"
                                +"<option value='Atletik, Lompat Jauh'>Lompat Jauh</option>"
                                +"<option value='Atletik, Lompat Tinggi'>Lompat Tinggi</option>"
                                +"<option value='Atletik, Lempar Lembing'>Lempar Lembing</option>"
                                +"<option value='Atletik, Tolak Peluru'>Tolak Peluru</option></select>";
                    }else if (selectedGroup == 'Anggar') {
                        elementToRender += 
                            '<option value="Anggar, Degen">Degen</option>'
                            +'<option value="Anggar, Sabel">Sabel</option>'
                            +'<option value="Anggar, Floret">Floret</option>'
                            +'</select>';
                    }else if (selectedGroup == 'Balap Sepeda') {
                        elementToRender += 
                            '<option value="Balap Sepeda, Road Criterium">Road Criterium</option>'+
                            '<option value="Balap Sepeda, MTB Criterium">MTB Criterium</option>'+
                            '<option value="Balap Sepeda, BMx Criterium">BMx Criterium</option>'
                    }else if (selectedGroup == 'Hockey') {
                        elementToRender += 
                            '<option value="Hockey, Kelas A(SD 35 kg)">Kelas A(SD 35 kg)</option>'+
                            '<option value="Hockey, Kelas B(SD 40 kg)">Kelas B(SD 40 kg)</option>'+
                            '<option value="Hockey, Kelas C(SD 45 kg)">Kelas C(SD 45 kg)</option>'+
                            '<option value="Hockey, Kelas D(SD 50 kg)">Kelas D(SD 50 kg)</option>'+
                            '<option value="Hockey, Kelas E(SD 55 kg)">Kelas E(SD 55 kg)</option>';
                    }else if (selectedGroup == 'Kick Boxing(Full Contact) Kelas A') {
                        elementToRender += 
                            '<option value="Kick Boxing(Full Contact), Kelas A(16-20 tahun), 41-45 kg">(16-20 tahun) 41-45 kg</option>'+
                            '<option value="Kick Boxing(Full Contact), Kelas A(16-20 tahun), 46-50 kg">(16-20 tahun) 46-50 kg</option>'+
                            '<option value="Kick Boxing(Full Contact), Kelas A(16-20 tahun), 51-55 kg">(16-20 tahun) 51-55 kg</option>'+
                            '<option value="Kick Boxing(Full Contact), Kelas A(16-20 tahun), 56-60 kg">(16-20 tahun) 56-60 kg</option>'
                    }else if (selectedGroup == 'Kick Boxing(Full Contact) Kelas B') {
                        elementToRender +=
                            '<option value="Kick Boxing(Full Contact), Kelas B(< 16 tahun), 41-45 kg">(< 16 tahun) 41-45 kg</option>'+
                            '<option value="Kick Boxing(Full Contact), Kelas B(< 16 tahun), 46-50 kg">(< 16 tahun) 46-50 kg</option>'+
                            '<option value="Kick Boxing(Full Contact), Kelas B(< 16 tahun), 51-55 kg">(< 16 tahun) 51-55 kg</option>'+
                            '<option value="Kick Boxing(Full Contact), Kelas B(< 16 tahun), 56-60 kg">(< 16 tahun) 56-60 kg</option>';
                    }else if (selectedGroup == 'Kick Boxing(Point Fighting) Kelas A') {
                            elementToRender += '<option value="Kick Boxing(Point Fighting), Kelas A(16-20 tahun), 41-45 kg">(16-20 tahun) 41-45 kg</option>'+
                            '<option value="Kick Boxing(Point Fighting), Kelas A(16-20 tahun), 46-50 kg">(16-20 tahun) 46-50 kg</option>'+
                            '<option value="Kick Boxing(Point Fighting), Kelas A(16-20 tahun), 51-55 kg">(16-20 tahun) 51-55 kg</option>'+
                            '<option value="Kick Boxing(Point Fighting), Kelas A(16-20 tahun), 56-60 kg">(16-20 tahun) 56-60 kg</option>';
                    }else if (selectedGroup == 'Kick Boxing(Point Fighting) Kelas B') {
                        elementToRender +=
                            '<option value="Kick Boxing(Point Fighting), Kelas B(< 16 tahun), 41-45 kg">(< 16 tahun) 41-45 kg</option>'+
                            '<option value="Kick Boxing(Point Fighting), Kelas B(< 16 tahun), 46-50 kg">(< 16 tahun) 46-50 kg</option>'+
                            '<option value="Kick Boxing(Point Fighting), Kelas B(< 16 tahun), 51-55 kg">(< 16 tahun) 51-55 kg</option>'+
                            '<option value="Kick Boxing(Point Fighting), Kelas B(< 16 tahun), 56-60 kg">(< 16 tahun) 56-60 kg</option>';
                    }else if (selectedGroup == 'Kick Boxing(Musical Form) Kelas A') {
                            elementToRender += 
                            '<option value="Kick Boxing(Musical Form), Kelas A(14-20 tahun), Tangan Kosong">(14-20 tahun) Tangan Kosong</option>'+
                            '<option value="Kick Boxing(Musical Form), Kelas A(14-20 tahun), Senjata Pendek">(14-20 tahun) Senjata Pendek</option>'+
                            '<option value="Kick Boxing(Musical Form), Kelas A(14-20 tahun), Senjata Panjang">(14-20 tahun) Senjata Panjang</option>';
                    }else if (selectedGroup == '') {
                        elementToRender += 
                            '<option value="Kick Boxing(Musical Form), Kelas B(< 14 tahun), Tangan Kosong">(< 14 tahun) Tangan Kosong</option>'+
                            '<option value="Kick Boxing(Musical Form), Kelas B(< 14 tahun), Senjata Pendek">(< 14 tahun) Senjata Pendek</option>'+
                            '<option value="Kick Boxing(Musical Form), Kelas B(< 14 tahun), Senjata Panjang">(< 14 tahun) Senjata Panjang</option>';
                    }else if (selectedGroup == 'Muaythai(Putra)') {
                        elementToRender += 
                            '<option value="Muaythai(Putra), Kelas A (s/d 43 kg)">Kelas A (s/d 43 kg)</option>'+
                            '<option value="Muaythai(Putra), Kelas B (s/d 45 kg)">Kelas B (s/d 45 kg)</option>'+
                            '<option value="Muaythai(Putra), Kelas C (s/d 48 kg)">Kelas C (s/d 48 kg)</option>'+
                            '<option value="Muaythai(Putra), Kelas D (s/d 51 kg)">Kelas D (s/d 51 kg)</option>'+
                            '<option value="Muaythai(Putra), Kelas E (s/d 54 kg)">Kelas E (s/d 54 kg)</option>'+
                            '<option value="Muaythai(Putra), Kelas F (s/d 57 kg)">Kelas F (s/d 57 kg)</option>'+
                            '<option value="Muaythai(Putra), Kelas G (s/d 60 kg)">Kelas G (s/d 60 kg)</option>'+
                            '<option value="Muaythai(Putra), Kelas H (s/d 63 kg)">Kelas H (s/d 63 kg)</option>'+
                            '<option value="Muaythai(Putra), Kelas I (s/d 67 kg)">Kelas I (s/d 67 kg)</option>'+
                            '<option value="Muaythai(Putra), Kelas J (s/d 71 kg)">Kelas J (s/d 71 kg)</option>'+
                            '<option value="Muaythai(Putra), Kelas K (s/d 75 kg)">Kelas K (s/d 75 kg)</option>'
                        
                    }else if (selectedGroup == 'Muaythai(Putri)') {
                        elementToRender +=
                            '<option value="Muaythai(Putri), Kelas A (s/d 43 kg)">Kelas A (s/d 43 kg)</option>'+
                            '<option value="Muaythai(Putri), Kelas B (s/d 45 kg)">Kelas B (s/d 45 kg)</option>'+
                            '<option value="Muaythai(Putri), Kelas C (s/d 48 kg)">Kelas C (s/d 48 kg)</option>'+
                            '<option value="Muaythai(Putri), Kelas D (s/d 51 kg)">Kelas D (s/d 51 kg)</option>'+
                            '<option value="Muaythai(Putri), Kelas E (s/d 54 kg)">Kelas E (s/d 54 kg)</option>'+
                            '<option value="Muaythai(Putri), Kelas F (s/d 57 kg)">Kelas F (s/d 57 kg)</option>'+
                            '<option value="Muaythai(Putri), Kelas G (s/d 60 kg)">Kelas G (s/d 60 kg)</option>';                        
                    }else if (selectedGroup == 'Panahan') {
                        elementToRender +=
                            '<option value="Panahan, Kelas Pemula (Paralon)">Kelas Pemula (Paralon)</option>'+
                            '<option value="Panahan, Kelas Standart Bown (Jarak 15 m U-9 tahun)">Kelas Standart Bown (Jarak 15 m U-9 tahun)</option>'+
                            '<option value="Panahan, Kelas Standart Bown (Jarak 20 m U-9 tahun)">Kelas Standart Bown (Jarak 20 m U-9 tahun)</option>'+
                            '<option value="Panahan, Kelas Standart Bown (Jarak 30,40,dan 50 m)">Kelas Standart Bown (Jarak 30,40,dan 50 m)</option>'+
                            '<option value="Panahan, Kelas Recurve (Jarak 70 m)">Kelas Recurve (Jarak 70 m)</option>'+
                            '<option value="Panahan, Kelas Compound (Jarak 50 m)">Kelas Compound (Jarak 50 m)</option>';
                    }else if (selectedGroup == 'Panjang Tebing Putra') {
                        elementToRender +=
                            '<option value="Panjat Tebing, Putra, Lead Putra">Lead Putra</option>'+
                            '<option value="Panjat Tebing, Putra, Speed Classic Putra">Speed Classic Putra</option>';
                    }else if (selectedGroup == 'Panjang Tebing Putri') {
                        elementToRender +=
                            '<option value="Panjat Tebing, Putri, Lead Putri">Lead Putri</option>'+
                            '<option value="Panjat Tebing, Putri, Speed Classic Putri">Speed Classic Putri</option>';
                    }else if (selectedGroup == 'Pentaque Putra') {
                        elementToRender += 
                            '<option value="Pentaque, Putra, Nomor Shooting">Nomor Shooting</option>'+
                            '<option value="Pentaque, Putra, Nomor Single">Nomor Single</option>'+
                            '<option value="Pentaque, Putra, Nomor Doble">Nomor Doble</option>';
                    }else if (selectedGroup =='Pentaque Putri') {
                        elementToRender +=
                            '<option value="Pentaque, Putri, Nomor Shooting">Nomor Shooting</option>'
                            '<option value="Pentaque, Putri, Nomor Single">Nomor Single</option>'
                            '<option value="Pentaque, Putri, Nomor Doble">Nomor Doble</option>';
                    }else if (selectedGroup == 'Tarung Derajat') {
                        elementToRender+=
                            '<option value="Tarung Derajat, Bebas Putra (Kelas 54.1-58 kg)">Bebas Putra (Kelas 54.1-58 kg)</option>'+
                            '<option value="Tarung Derajat, Bebas Putri (Kelas 45.1-48 kg)">Bebas Putri (Kelas 45.1-48 kg)</option>';
                    }else if (selectedGroup=='Tinju Putra') {
                        elementToRender += 
                            '<option value="Tinju, Putra, Amatir (49 kg)">Amatir (49 kg)</option>'+
                            '<option value="Tinju, Putra, Amatir (52 kg)">Amatir (52 kg)</option>'+
                            '<option value="Tinju, Putra, Amatir (60 kg)">Amatir (60 kg)</option>';
                    }else if (selectedGroup=='Wushu') {
                        elementToRender +=
                            '<option value="Wushu, Kelas 45 kg">Kelas 45 kg</option>'+
                            '<option value="Wushu, Kelas 48 kg">Kelas 48 kg</option>'+
                            '<option value="Wushu, Kelas 52 kg">Kelas 52 kg</option>'+
                            '<option value="Wushu, Kelas 56 kg">Kelas 56 kg</option>'+
                            '<option value="Wushu, Kelas 60 kg">Kelas 60 kg</option>'+
                            '<option value="Wushu, Kelas 65 kg">Kelas 65 kg</option>'+
                            '<option value="Wushu, Kelas 70 kg">Kelas 70 kg</option>'+
                            '<option value="Wushu, Kelas 75 kg">Kelas 75 kg</option>';
                    }else if (selectedGroup =='Pencak Silat(Tanding) Putra') {
                        elementToRender +=
                            '<option value="Pencak Silat(Tanding), Putra, Kelas A(39 kg s/d 43 kg)">Putra Kelas A(39 kg s/d 43 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putra, Kelas B(>43 kg s/d 47 kg)">Putra Kelas B(>43 kg s/d 47 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putra, Kelas C(>47 kg s/d 51 kg)">Putra Kelas C(>47 kg s/d 51 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putra, Kelas D(>51 kg s/d 55 kg)">Putra Kelas D(>51 kg s/d 55 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putra, Kelas E(>55 kg s/d 59 kg)">Putra Kelas E(>55 kg s/d 59 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putra, Kelas F(>59 kg s/d 63 kg)">Putra Kelas F(>59 kg s/d 63 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putra, Kelas G(>63 kg s/d 67 kg)">Putra Kelas G(>63 kg s/d 67 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putra, Kelas H(>67 kg s/d 71 kg)">Putra Kelas H(>67 kg s/d 71 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putra, Kelas I(>71 kg s/d 75 kg)">Putra Kelas I(>71 kg s/d 75 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putra, Kelas J(>75 kg s/d 79 kg)">Putra Kelas J(>75 kg s/d 79 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putra, Kelas J(>75 kg s/d 79 kg)">Putra Kelas J(>75 kg s/d 79 kg)</option>';
                    }else if (selectedGroup == 'Pencak Silat(Tanding) Putri') {
                        elementToRender +=
                            '<option value="Pencak Silat(Tanding), Putri, Kelas A(39 kg s/d 43 kg)">Putri Kelas A(39 kg s/d 43 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putri, Kelas B(>43 kg s/d 47 kg)">Putri Kelas B(>43 kg s/d 47 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putri, Kelas C(>47 kg s/d 51 kg)">Putri Kelas C(>47 kg s/d 51 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putri, Kelas D(>51 kg s/d 55 kg)">Putri Kelas D(>51 kg s/d 55 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putri, Kelas E(>55 kg s/d 59 kg)">Putri Kelas E(>55 kg s/d 59 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putri, Kelas F(>59 kg s/d 63 kg)">Putri Kelas F(>59 kg s/d 63 kg)</option>'+
                            '<option value="Pencak Silat(Tanding), Putri, Kelas G(>63 kg s/d 67 kg)">Putri Kelas G(>63 kg s/d 67 kg)</option>';
                    }else if (selectedGroup == 'Pencak Silat(Seni) Putra') {
                        elementToRender += 
                            '<option value="Pencak Silat(Seni), Putra, Tunggal">Tunggal</option>'+
                            '<option value="Pencak Silat(Seni), Putra, Ganda">Ganda</option>'+
                            '<option value="Pencak Silat(Seni), Putra, Beregu">Beregu</option>';
                        
                    }else if (selectedGroup == 'Pencak Silat(Seni) Putri') {
                        elementToRender+=
                            '<option value="Pencak Silat(Seni), Putri, Tunggal">Tunggal</option>'+
                            '<option value="Pencak Silat(Seni), Putri, Ganda">Ganda</option>'+
                            '<option value="Pencak Silat(Seni), Putri, Beregu">Beregu</option>';
                        
                    }else if (selectedGroup == 'Shorinji Kempo Putra') {
                        elementToRender +=
                            '<option value="Shorinji Kempo, Putra, Embu Berpasangan Tingkat Kyu III">Embu Berpasangan Tingkat Kyu III</option>'+
                            '<option value="Shorinji Kempo, Putra, Embu Berpasangan Tingkat Kyu Kenshi">Embu Berpasangan Tingkat Kyu Kenshi</option>'+
                            '<option value="Shorinji Kempo, Putra, Embu Beregu Putra">Embu Beregu Putra</option>'+
                            '<option value="Shorinji Kempo, Putra, Randori Putra 50 kg(>45 s/d 50 kg)">Randori Putra 50 kg(>45 s/d 50 kg)</option>'+
                            '<option value="Shorinji Kempo, Putra, Randori Putra 55 kg(>50 s/d 55 kg)">Randori Putra 55 kg(>50 s/d 55 kg)</option>'+
                            '<option value="Shorinji Kempo, Putra, Randori Putra 60 kg(>55 s/d 60 kg)">Randori Putra 60 kg(>55 s/d 60 kg)</option>'+
                            '<option value="Shorinji Kempo, Putra, Randori Putra 65 kg(>60 s/d 65 kg)">Randori Putra 65 kg(>60 s/d 65 kg)</option>'+
                            '<option value="Shorinji Kempo, Putra, Randori Putra 65 kg(>60 s/d 65 kg)">Randori Putra 65 kg(>60 s/d 65 kg)</option>';
                    }else if (selectedGroup == 'Shorinji Kempo Putri') {
                        elementToRender +=
                            '<option value="Shorinji Kempo, Putri, Embu Berpasangan Tingkat Kyu III">Embu Berpasangan Tingkat Kyu III</option>'+
                            '<option value="Shorinji Kempo, Putri, Embu Berpasangan Tingkat Kyu Kenshi">Embu Berpasangan Tingkat Kyu Kenshi</option>'+
                            '<option value="Shorinji Kempo, Putri, Embu Beregu Putri">Embu Beregu Putri</option>'+
                            '<option value="Shorinji Kempo, Putri, Randori Putri 45 kg(>40 s/d 45 kg)">Randori Putri 45 kg(>40 s/d 45 kg)</option>'+
                            '<option value="Shorinji Kempo, Putri, Randori Putri 48 kg(>45 s/d 48 kg)">Randori Putri 48 kg(>45 s/d 48 kg)</option>'+
                            '<option value="Shorinji Kempo, Putri, Randori Putri 50 kg(>48 s/d 50 kg)">Randori Putri 50 kg(>48 s/d 50 kg)</option>'+
                            '<option value="Shorinji Kempo, Putri, Randori Putri 55 kg(>50 s/d 55 kg)">Randori Putri 55 kg(>50 s/d 55 kg)</option>'+
                            '<option value="Shorinji Kempo, Putri, Randori Putri 60 kg(>55 s/d 60 kg)">Randori Putri 60 kg(>55 s/d 60 kg)</option>'+
                            '<option value="Shorinji Kempo, Campuran, Embu Berpasangan Tingkat Kyu III">Campuran Embu Berpasangan Tingkat Kyu III</option>'+
                            '<option value="Shorinji Kempo, Campuran, Embu Berpasangan Tingkat Kyu Kenshi">Campuran Embu Berpasangan Tingkat Kyu Kenshi</option>'+
                            '<option value="Shorinji Kempo, Campuran, Embu Beregu">Campuran Embu Beregu</option>';
                        
                    }else if (selectedGroup =='Shorinji Kempo Campuran') {
                        elementToRender +=
                            '<option value="Shorinji Kempo, Campuran, Embu Berpasangan Tingkat Kyu III">Embu Berpasangan Tingkat Kyu III</option>'+
                            '<option value="Shorinji Kempo, Campuran, Embu Berpasangan Tingkat Kyu Kenshi">Embu Berpasangan Tingkat Kyu Kenshi</option>'+
                            '<option value="Shorinji Kempo, Campuran, Embu Beregu">Embu Beregu</option>';
                        
                    }else if (selectedGroup == 'Gulat Grego Putra') {
                        elementToRender +=
                            '<option value="Gulat, Grego Putra, Kelas 48 kg">Kelas 48 kg</option>'+
                            '<option value="Gulat, Grego Putra, Kelas 52 kg">Kelas 52 kg</option>'+
                            '<option value="Gulat, Grego Putra, Kelas 57 kg">Kelas 57 kg</option>'+
                            '<option value="Gulat, Grego Putra, Kelas 61 kg">Kelas 61 kg</option>'+
                            '<option value="Gulat, Grego Putra, Kelas 65 kg">Kelas 65 kg</option>'+
                            '<option value="Gulat, Grego Putra, Kelas 70 kg">Kelas 70 kg</option>'+
                            '<option value="Gulat, Grego Putra, Kelas 74 kg">Kelas 74 kg</option>'+
                            '<option value="Gulat, Grego Putra, Kelas 79 kg">Kelas 79 kg</option>'+
                            '<option value="Gulat, Grego Putra, Kelas 86 kg">Kelas 86 kg</option>';
                        
                    }else if (selectedGroup == 'Gulat Bebas Putra') {
                        elementToRender +=
                            '<option value="Gulat, Bebas Putra, Kelas 50 kg">Kelas 50 kg</option>'+
                            '<option value="Gulat, Bebas Putra, Kelas 55 kg">Kelas 55 kg</option>'+
                            '<option value="Gulat, Bebas Putra, Kelas 60 kg">Kelas 60 kg</option>'+
                            '<option value="Gulat, Bebas Putra, Kelas 63 kg">Kelas 63 kg</option>'+
                            '<option value="Gulat, Bebas Putra, Kelas 67 kg">Kelas 67 kg</option>'+
                            '<option value="Gulat, Bebas Putra, Kelas 72 kg">Kelas 72 kg</option>'+
                            '<option value="Gulat, Bebas Putra, Kelas 77 kg">Kelas 77 kg</option>'+
                            '<option value="Gulat, Bebas Putra, Kelas 82 kg">Kelas 82 kg</option>'+
                            '<option value="Gulat, Bebas Putra, Kelas 87 kg">Kelas 87 kg</option>';
                        
                    }else if (selectedGroup == 'Gulat Bebas Putri') {
                        elementToRender +=
                            '<option value="Gulat, Bebas Putri, Kelas 46 kg">Kelas 46 kg</option>'+
                            '<option value="Gulat, Bebas Putri, Kelas 50 kg">Kelas 50 kg</option>'+
                            '<option value="Gulat, Bebas Putri, Kelas 53 kg">Kelas 53 kg</option>'+
                            '<option value="Gulat, Bebas Putri, Kelas 55 kg">Kelas 55 kg</option>'+
                            '<option value="Gulat, Bebas Putri, Kelas 57 kg">Kelas 57 kg</option>'+
                            '<option value="Gulat, Bebas Putri, Kelas 59 kg">Kelas 59 kg</option>'+
                            '<option value="Gulat, Bebas Putri, Kelas 62 kg">Kelas 62 kg</option>'+
                            '<option value="Gulat, Bebas Putri, Kelas 65 kg">Kelas 65 kg</option>'+
                            '<option value="Gulat, Bebas Putri, Kelas 68 kg">Kelas 68 kg</option>'+
                            '<option value="Gulat, Bebas Putri, Kelas 72 kg">Kelas 72 kg</option>';
                        
                    }else if (selectedGroup == 'Selam KU A Terbuka') {
                        elementToRender +=
                            '<option value="Selam, KU A Terbuka, Surface 50 m">Surface 50 m</option>'+
                            '<option value="Selam, KU A Terbuka, Surface 100 m">Surface 100 m</option>'+
                            '<option value="Selam, KU A Terbuka, Surface 200 m">Surface 200 m</option>'+
                            '<option value="Selam, KU A Terbuka, Surface 400 m">Surface 400 m</option>'+
                            '<option value="Selam, KU A Terbuka, Surface 800 m">Surface 800 m</option>'+
                            '<option value="Selam, KU A Terbuka, Apnea 50 m">Apnea 50 m</option>'+
                            '<option value="Selam, KU A Terbuka, Bifin 50 m">Bifin 50 m</option>'+
                            '<option value="Selam, KU A Terbuka, Bifin 100 m">Bifin 100 m</option>'+
                            '<option value="Selam, KU A Terbuka, Bifin 200 m">Bifin 200 m</option>'+
                            '<option value="Selam, KU A Terbuka, Bifin 400 m">Bifin 400 m</option>';
                    }else if (selectedGroup == 'Selam KU B') {
                        elementToRender +=
                            '<option value="Selam, KU B, Surface 50 m">Surface 50 m</option>'+
                            '<option value="Selam, KU B, Surface 100 m">Surface 100 m</option>'+
                            '<option value="Selam, KU B, Surface 200 m">Surface 200 m</option>'+
                            '<option value="Selam, KU B, Surface 400 m">Surface 400 m</option>'+
                            '<option value="Selam, KU B, Surface 800 m">Surface 800 m</option>'+
                            '<option value="Selam, KU B, Apnea 50 m">Apnea 50 m</option>'+
                            '<option value="Selam, KU B, Bifin 50 m">Bifin 50 m</option>'+
                            '<option value="Selam, KU B, Bifin 100 m">Bifin 100 m</option>'+
                            '<option value="Selam, KU B, Bifin 200 m">Bifin 200 m</option>'+
                            '<option value="Selam, KU B, Bifin 400 m">Bifin 400 m</option>';
                    }else if (selectedGroup == 'Selam KU C') {
                        elementToRender +=
                            '<option value="Selam, KU C, Surface 50 m">Surface 50 m</option>'+
                            '<option value="Selam, KU C, Surface 100 m">Surface 100 m</option>'+
                            '<option value="Selam, KU C, Surface 200 m">Surface 200 m</option>'+
                            '<option value="Selam, KU C, Bifin 50 m">Bifin 50 m</option>'+
                            '<option value="Selam, KU C, Bifin 100 m">Bifin 100 m</option>'+
                            '<option value="Selam, KU C, Bifin 200 m">Bifin 200 m</option>'
                    }else if (selectedGroup == 'Karate Putra') {
                        elementToRender +=
                            '<option value="Karate, Putra, Kata Perorangan">Kata Perorangan</option>'+
                            '<option value="Karate, Putra, Kata Beregu">Kata Beregu</option>'+
                            '<option value="Karate, Putra, Kumite Perorangan 55 kg">Kumite Perorangan 55 kg</option>'+
                            '<option value="Karate, Putra, Kumite Perorangan 60 kg">Kumite Perorangan 60 kg</option>'+
                            '<option value="Karate, Putra, Kumite Perorangan 67 kg">Kumite Perorangan 67 kg</option>'+
                            '<option value="Karate, Putra, Kumite Perorangan 75 kg">Kumite Perorangan 75 kg</option>'+
                            '<option value="Karate, Putra, Kumite Perorangan 84 kg">Kumite Perorangan 84 kg</option>'+
                            '<option value="Karate, Putra, Kumite Perorangan >84 kg">Kumite Perorangan >84 kg</option>';
                    }else if (selectedGroup == 'Karate Putri') {
                        elementToRender +=
                            '<option value="Karate, Putri, Kata Perorangan">Kumite Perorangan >84 kg</option>'+
                            '<option value="Karate, Putri, Kata Beregu">Kumite Perorangan >84 kg</option>'+
                            '<option value="Karate, Putri, Kumite Perorangan 50 kg">Kumite Perorangan 50 kg</option>'+
                            '<option value="Karate, Putri, Kumite Perorangan 55 kg">Kumite Perorangan 55 kg</option>'+
                            '<option value="Karate, Putri, Kumite Perorangan 61 kg">Kumite Perorangan 61 kg</option>'+
                            '<option value="Karate, Putri, Kumite Perorangan 68 kg">Kumite Perorangan 68 kg</option>'+
                            '<option value="Karate, Putri, Kumite Perorangan >68 kg">Kumite Perorangan >68 kg</option>';
                    }else if (selectedGroup == 'Tenis Lapangan Putra') {
                        elementToRender +=
                            '<option value="Tenis Lapangan, Putra, Tunggal Putra">Tunggal Putra</option>'+
                            '<option value="Tenis Lapangan, Putra, Ganda Putra">Ganda Putra</option>'+
                            '<option value="Tenis Lapangan, Putra, Ganda Campuran">Putra Ganda Campuran</option>';
                    }else if (selectedGroup == 'Tenis Lapangan Putra') {
                        elementToRender +=
                            '<option value="Tenis Lapangan, Putri, Tunggal Putri">Tunggal Putri</option>'+
                            '<option value="Tenis Lapangan, Putri, Ganda Campuran">Putri Ganda Campuran</option>';
                    }else if (selectedGroup == 'Taekwondo Gyeorugi Prestasi(Yunior Putra)') {
                        elementToRender +=
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 45 kg (max. 45 kg)">< 45 kg (max. 45 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 48 kg (45.1 - 48 kg)">< 48 kg (45.1 - 48 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 51 kg (48.1 - 51 kg)">< 51 kg (48.1 - 51 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 55 kg (51.1 - 55 kg)">< 55 kg (51.1 - 55 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 59 kg (55.1 - 59 kg)">< 59 kg (55.1 - 59 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 63 kg (59.1 - 63 kg)">< 63 kg (59.1 - 63 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 68 kg (63.1 - 68 kg)">< 68 kg (63.1 - 68 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 73 kg (68.1 - 73 kg)">< 73 kg (68.1 - 73 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 78 kg (73.1 - 78 kg)">< 78 kg (73.1 - 78 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), > 78 kg">> 78 kg</option>';
                    }else if (selectedGroup == 'Taekwondo Gyeorugi Prestasi(Yunior Putri)') {
                        elementToRender +=
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 42 kg (max. 42 kg)">< 42 kg (max. 42 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 44 kg (42.1 - 44 kg)">< 44 kg (42.1 - 44 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 46 kg (44.1 - 46 kg)">< 46 kg (44.1 - 46 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 49 kg (46.1 - 49 kg)">< 49 kg (46.1 - 49 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 52 kg (49.1 - 52 kg)">< 52 kg (49.1 - 52 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 55 kg (52.1 - 55 kg)">< 55 kg (52.1 - 55 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 59 kg (55.1 - 59 kg)">< 59 kg (55.1 - 59 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 63 kg (59.1 - 63 kg)">< 63 kg (59.1 - 63 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 68 kg (63.1 - 68 kg)">< 68 kg (63.1 - 68 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), > 68 kg">> 68 kg</option>';
                    }else if (selectedGroup == 'Taekwondo Gyeorugi Prestasi(Senior Putra)') {
                        elementToRender +=
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 54 kg">Gyeorugi Prestasi(Senior Putra) < 54 kg</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 58 kg (54.1 - 58 kg)">Gyeorugi Prestasi(Senior Putra) < 58 kg (54.1 - 58 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 63 kg (58.1 - 63 kg)">Gyeorugi Prestasi(Senior Putra) < 63 kg (58.1 - 63 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 68 kg (63.1 - 68 kg)">Gyeorugi Prestasi(Senior Putra) < 68 kg (63.1 - 68 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 74 kg (68.1 - 74 kg)">Gyeorugi Prestasi(Senior Putra) < 74 kg (68.1 - 74 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 80 kg (74.1 - 80 kg)">Gyeorugi Prestasi(Senior Putra) < 80 kg (74.1 - 80 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 87 kg (80.1 - 87 kg)">Gyeorugi Prestasi(Senior Putra) < 87 kg (80.1 - 87 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), > 87 kg">Gyeorugi Prestasi(Senior Putra) > 87 kg</option>';
                    }else if (selectedGroup == 'Taekwondo Gyeorugi Prestasi(Senior Putri)') {
                        elementToRender +=
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 46 kg ">< 46 kg </option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 49 kg (46.1 - 49 kg)">< 49 kg (46.1 - 49 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 53 kg (49.1 - 53 kg)">< 53 kg (49.1 - 53 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 57 kg (53.1 - 57 kg)">< 57 kg (53.1 - 57 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 62 kg (57.1 - 62 kg)">< 62 kg (57.1 - 62 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 67 kg (62.1 - 67 kg)">< 67 kg (62.1 - 67 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 73 kg (67.1 - 73 kg)">< 73 kg (67.1 - 73 kg)</option>'+
                            '<option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), > 73 kg">> 73 kg</option>';
                    }else if (selectedGroup == 'Cricket') {
                        elementToRender +=      
                            "<option value='Cricket,Cricket Super Six (Cricket 6's)'>Cricket Super Six (Cricket 6's)</option>"+
                            "<option value='Cricket,Cricket 6's Man'>Cricket 6's Man</option>";
                    }else if (selectedGroup == 'Bilyar') {
                        elementToRender +=      
                            '<option value="Bilyar, Bola 9 (Nine Ball)">Bola 9 (Nine Ball)</option>'+
                            '<option value="Bilyar, Bola 10 (Ten Ball)">Bola 10 (Ten Ball)</option>'+
                            '<option value="Bilyar, Bola 15/8 Ball">Bola 15/8 Ball</option>';
                    }

                    if (elementToRender != '') {
                        $('#cabangKedua').html(elementToRender);
                    }
                }else{
                    $('#cabangKedua').html('');
                }
                
            });
        });

    </script>
  <!-- Contact -->
  <section id="registrasi" class="home-section bg-gray">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Registrasi</h2>
            <div class="heading-line"></div>
            <p>Daftarkan diri anda sekarang.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="<?=base_url()?>registrasi-proses" method="post" class="form-horizontal" role="form">
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label for="first_name" class="required">Nama</label>
                <input type="text" name="nama" id="first_name" class="form-control" />
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label for="ttl" class="required">Tempat, Tanggal Lahir</label>
                    <div class="col">
                        <input type="text" placeholder="Tempat," name="tempat_lahir" id="tempat" class="form-control" />
                    </div>
                    <div class="col">
                        <input type="date"  placeholder="Tanggal Lahir" name="tanggal_lahir" id="ttl" class="form-control" />
                    </div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label for="alamat" class="required">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control"></textarea>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
                <div class="form-group">
                    <label for="email" class="required">Email</label>
                    <input type="text" name="email" id="email" class="form-control" />
                </div>
            </div>
            <div class="col-md-offset-2 col-md-8">
                <div class="form-group">
                    <label for="no_tlp" class="required center">Nomor Telepon</label>
                    <input type="text" name="no_tlp" id="no_tlp" class="form-control" data-rule="number" data-msg="Mohon masukkan nomor telepon anda"/>
                </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
                <div class="form-group">
                    <label for="kecamatan" class="required">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" class="form-control">
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

            <div class="col-md-offset-2 col-md-8">
                <div class="form-group">
                    <label for="cabor" class="required">Cabang Olahraga</label>
                    <select name="cabor" id="cabor" class="form-control" >
                        <option value="" selected="" disabled="">Pilih Cabang Olahraga</option>
                        <optgroup label="Anggar">
                            <option value="Anggar,Degen">Degen</option>
                            <option value="Anggar,Sabel">Sabel</option>
                            <option value="Anggar,Floret">Floret</option>
                        </optgroup>
                        <optgroup label="Atletik">
                            <option value="Atletik, Lari 100 m">Lari 100 m</option>
                            <option value="Atletik, Lari 400 m">Lari 400 m</option>
                            <option value="Atletik, Lari 800 m">Lari 800 m</option>
                            <option value="Atletik, Lari 5000 m">Lari 5000 m</option>
                            <option value="Atletik, Jalan Cepat 3000 m">Jalan Cepat 3000 m</option>
                            <option value="Atletik, Lompat Jauh">Lompat Jauh</option>
                            <option value="Atletik, Lompat Tinggi">Lompat Tinggi</option>
                            <option value="Atletik, Lempar Lembing">Lempar Lembing</option>
                            <option value="Atletik, Tolak Peluru">Tolak Peluru</option>
                        </optgroup>
                        <optgroup label="Balap Sepeda">
                            <option value="Balap Sepeda, Road Criterium">Road Criterium</option>
                            <option value="Balap Sepeda, MTB Criterium">MTB Criterium</option>
                            <option value="Balap Sepeda, BMx Criterium">BMx Criterium</option>
                        </optgroup>
                        <option value="Bola Basket">Bola Basket</option>
                        <option value="Bridge">Bridge</option>
                        <option value="Bola Voli Indoor">Bola Voli Indoor</option>
                        <option value="Bola Voli Pasir">Bola Voli Pasir</option>
                        <optgroup label="Hockey">
                            <option value="Hockey, Kelas A(SD 35 kg)">Kelas A(SD 35 kg)</option>
                            <option value="Hockey, Kelas B(SD 40 kg)">Kelas B(SD 40 kg)</option>
                            <option value="Hockey, Kelas C(SD 45 kg)">Kelas C(SD 45 kg)</option>
                            <option value="Hockey, Kelas D(SD 50 kg)">Kelas D(SD 50 kg)</option>
                            <option value="Hockey, Kelas E(SD 55 kg)">Kelas E(SD 55 kg)</option>
                        </optgroup>
                        <optgroup label="Kick Boxing(Full Contact) Kelas A">
                            <option value="Kick Boxing(Full Contact), Kelas A(16-20 tahun), 41-45 kg">(16-20 tahun) 41-45 kg</option>
                            <option value="Kick Boxing(Full Contact), Kelas A(16-20 tahun), 46-50 kg">(16-20 tahun) 46-50 kg</option>
                            <option value="Kick Boxing(Full Contact), Kelas A(16-20 tahun), 51-55 kg">(16-20 tahun) 51-55 kg</option>
                            <option value="Kick Boxing(Full Contact), Kelas A(16-20 tahun), 56-60 kg">(16-20 tahun) 56-60 kg</option>
                        </optgroup>
                        <optgroup label="Kick Boxing(Full Contact) Kelas B">
                            <option value="Kick Boxing(Full Contact), Kelas B(< 16 tahun), 41-45 kg">(< 16 tahun) 41-45 kg</option>
                            <option value="Kick Boxing(Full Contact), Kelas B(< 16 tahun), 46-50 kg">(< 16 tahun) 46-50 kg</option>
                            <option value="Kick Boxing(Full Contact), Kelas B(< 16 tahun), 51-55 kg">(< 16 tahun) 51-55 kg</option>
                            <option value="Kick Boxing(Full Contact), Kelas B(< 16 tahun), 56-60 kg">(< 16 tahun) 56-60 kg</option>
                        </optgroup>
                        <optgroup label="Kick Boxing(Point Fighting) Kelas A">
                            <option value="Kick Boxing(Point Fighting), Kelas A(16-20 tahun), 41-45 kg">(16-20 tahun) 41-45 kg</option>
                            <option value="Kick Boxing(Point Fighting), Kelas A(16-20 tahun), 46-50 kg">(16-20 tahun) 46-50 kg</option>
                            <option value="Kick Boxing(Point Fighting), Kelas A(16-20 tahun), 51-55 kg">(16-20 tahun) 51-55 kg</option>
                            <option value="Kick Boxing(Point Fighting), Kelas A(16-20 tahun), 56-60 kg">(16-20 tahun) 56-60 kg</option>
                        </optgroup>
                        <optgroup label="Kick Boxing(Point Fighting) Kelas B">
                            <option value="Kick Boxing(Point Fighting), Kelas B(< 16 tahun), 41-45 kg">(< 16 tahun) 41-45 kg</option>
                            <option value="Kick Boxing(Point Fighting), Kelas B(< 16 tahun), 46-50 kg">(< 16 tahun) 46-50 kg</option>
                            <option value="Kick Boxing(Point Fighting), Kelas B(< 16 tahun), 51-55 kg">(< 16 tahun) 51-55 kg</option>
                            <option value="Kick Boxing(Point Fighting), Kelas B(< 16 tahun), 56-60 kg">(< 16 tahun) 56-60 kg</option>
                        </optgroup>
                        <optgroup label="Kick Boxing(Musical Form) Kelas A">
                            <option value="Kick Boxing(Musical Form), Kelas A(14-20 tahun), Tangan Kosong">(14-20 tahun) Tangan Kosong</option>
                            <option value="Kick Boxing(Musical Form), Kelas A(14-20 tahun), Senjata Pendek">(14-20 tahun) Senjata Pendek</option>
                            <option value="Kick Boxing(Musical Form), Kelas A(14-20 tahun), Senjata Panjang">(14-20 tahun) Senjata Panjang</option>
                        </optgroup>
                        <optgroup label="Kick Boxing(Musical Form) Kelas B">
                            <option value="Kick Boxing(Musical Form), Kelas B(< 14 tahun), Tangan Kosong">(< 14 tahun) Tangan Kosong</option>
                            <option value="Kick Boxing(Musical Form), Kelas B(< 14 tahun), Senjata Pendek">(< 14 tahun) Senjata Pendek</option>
                            <option value="Kick Boxing(Musical Form), Kelas B(< 14 tahun), Senjata Panjang">(< 14 tahun) Senjata Panjang</option>
                        </optgroup>
                        <optgroup label="Muaythai(Putra)">
                            <option value="Muaythai(Putra), Kelas A (s/d 43 kg)">Kelas A (s/d 43 kg)</option>
                            <option value="Muaythai(Putra), Kelas B (s/d 45 kg)">Kelas B (s/d 45 kg)</option>
                            <option value="Muaythai(Putra), Kelas C (s/d 48 kg)">Kelas C (s/d 48 kg)</option>
                            <option value="Muaythai(Putra), Kelas D (s/d 51 kg)">Kelas D (s/d 51 kg)</option>
                            <option value="Muaythai(Putra), Kelas E (s/d 54 kg)">Kelas E (s/d 54 kg)</option>
                            <option value="Muaythai(Putra), Kelas F (s/d 57 kg)">Kelas F (s/d 57 kg)</option>
                            <option value="Muaythai(Putra), Kelas G (s/d 60 kg)">Kelas G (s/d 60 kg)</option>
                            <option value="Muaythai(Putra), Kelas H (s/d 63 kg)">Kelas H (s/d 63 kg)</option>
                            <option value="Muaythai(Putra), Kelas I (s/d 67 kg)">Kelas I (s/d 67 kg)</option>
                            <option value="Muaythai(Putra), Kelas J (s/d 71 kg)">Kelas J (s/d 71 kg)</option>
                            <option value="Muaythai(Putra), Kelas K (s/d 75 kg)">Kelas K (s/d 75 kg)</option>
                        </optgroup>
                        <optgroup label="Muaythai(Putri)">
                            <option value="Muaythai(Putri), Kelas A (s/d 43 kg)">Kelas A (s/d 43 kg)</option>
                            <option value="Muaythai(Putri), Kelas B (s/d 45 kg)">Kelas B (s/d 45 kg)</option>
                            <option value="Muaythai(Putri), Kelas C (s/d 48 kg)">Kelas C (s/d 48 kg)</option>
                            <option value="Muaythai(Putri), Kelas D (s/d 51 kg)">Kelas D (s/d 51 kg)</option>
                            <option value="Muaythai(Putri), Kelas E (s/d 54 kg)">Kelas E (s/d 54 kg)</option>
                            <option value="Muaythai(Putri), Kelas F (s/d 57 kg)">Kelas F (s/d 57 kg)</option>
                            <option value="Muaythai(Putri), Kelas G (s/d 60 kg)">Kelas G (s/d 60 kg)</option>
                        </optgroup>
                        <optgroup label="Panahan">
                            <option value="Panahan, Kelas Pemula (Paralon)">Kelas Pemula (Paralon)</option>
                            <option value="Panahan, Kelas Standart Bown (Jarak 15 m U-9 tahun)">Kelas Standart Bown (Jarak 15 m U-9 tahun)</option>
                            <option value="Panahan, Kelas Standart Bown (Jarak 20 m U-9 tahun)">Kelas Standart Bown (Jarak 20 m U-9 tahun)</option>
                            <option value="Panahan, Kelas Standart Bown (Jarak 30,40,dan 50 m)">Kelas Standart Bown (Jarak 30,40,dan 50 m)</option>
                            <option value="Panahan, Kelas Recurve (Jarak 70 m)">Kelas Recurve (Jarak 70 m)</option>
                            <option value="Panahan, Kelas Compound (Jarak 50 m)">Kelas Compound (Jarak 50 m)</option>
                        </optgroup>
                        <optgroup label="Panjat Tebing Putra">
                            <option value="Panjat Tebing, Putra, Lead Putra">Lead Putra</option>
                            <option value="Panjat Tebing, Putra, Speed Classic Putra">Speed Classic Putra</option>
                        </optgroup>
                        <optgroup label="Panjat Tebing Putri">
                            <option value="Panjat Tebing, Putri">Lead Putri</option>
                            <option value="Panjat Tebing, Putri">Speed Classic Putri</option>
                        </optgroup>
                        <optgroup label="Pentaque Putra">
                            <option value="Pentaque, Putra, Nomor Shooting">Nomor Shooting</option>
                            <option value="Pentaque, Putra, Nomor Single">Nomor Single</option>
                            <option value="Pentaque, Putra, Nomor Doble">Nomor Doble</option>
                        </optgroup>
                        <optgroup label="Pentaque Putri">
                            <option value="Pentaque, Putri, Nomor Shooting">Nomor Shooting</option>
                            <option value="Pentaque, Putri, Nomor Single">Nomor Single</option>
                            <option value="Pentaque, Putri, Nomor Doble">Nomor Doble</option>
                        </optgroup>
                        <optgroup label="Tarung Derajat">
                            <option value="Tarung Derajat, Bebas Putra (Kelas 54.1-58 kg)">Bebas Putra (Kelas 54.1-58 kg)</option>
                            <option value="Tarung Derajat, Bebas Putri (Kelas 45.1-48 kg)">Bebas Putri (Kelas 45.1-48 kg)</option>
                        </optgroup>

                        <optgroup label="Tinju Putra">
                            <option value="Tinju, Putra, Amatir (49 kg)">Amatir (49 kg)</option>
                            <option value="Tinju, Putra, Amatir (52 kg)">Amatir (52 kg)</option>
                            <option value="Tinju, Putra, Amatir (60 kg)">Amatir (60 kg)</option>
                        </optgroup>
                        <optgroup label="Tinju Putri">
                            <option value="Tinju, Putri, Amatir (48 kg)">Amatir (48 kg)</option>
                        </optgroup>

                        <option value="Bola Voli Indoor">Bola Voli Indoor</option>
                        <option value="Bola Voli Pasir">Bola Voli Pasir</option>

                        <optgroup label="Wushu">
                            <option value="Wushu, Kelas 45 kg">Kelas 45 kg</option>
                            <option value="Wushu, Kelas 48 kg">Kelas 48 kg</option>
                            <option value="Wushu, Kelas 52 kg">Kelas 52 kg</option>
                            <option value="Wushu, Kelas 56 kg">Kelas 56 kg</option>
                            <option value="Wushu, Kelas 60 kg">Kelas 60 kg</option>
                            <option value="Wushu, Kelas 65 kg">Kelas 65 kg</option>
                            <option value="Wushu, Kelas 70 kg">Kelas 70 kg</option>
                            <option value="Wushu, Kelas 75 kg">Kelas 75 kg</option>
                        </optgroup>

                        <optgroup label="Pencak Silat(Tanding) Putra">
                            <option value="Pencak Silat(Tanding), Putra, Kelas A(39 kg s/d 43 kg)">Putra Kelas A(39 kg s/d 43 kg)</option>
                            <option value="Pencak Silat(Tanding), Putra, Kelas B(>43 kg s/d 47 kg)">Putra Kelas B(>43 kg s/d 47 kg)</option>
                            <option value="Pencak Silat(Tanding), Putra, Kelas C(>47 kg s/d 51 kg)">Putra Kelas C(>47 kg s/d 51 kg)</option>
                            <option value="Pencak Silat(Tanding), Putra, Kelas D(>51 kg s/d 55 kg)">Putra Kelas D(>51 kg s/d 55 kg)</option>
                            <option value="Pencak Silat(Tanding), Putra, Kelas E(>55 kg s/d 59 kg)">Putra Kelas E(>55 kg s/d 59 kg)</option>
                            <option value="Pencak Silat(Tanding), Putra, Kelas F(>59 kg s/d 63 kg)">Putra Kelas F(>59 kg s/d 63 kg)</option>
                            <option value="Pencak Silat(Tanding), Putra, Kelas G(>63 kg s/d 67 kg)">Putra Kelas G(>63 kg s/d 67 kg)</option>
                            <option value="Pencak Silat(Tanding), Putra, Kelas H(>67 kg s/d 71 kg)">Putra Kelas H(>67 kg s/d 71 kg)</option>
                            <option value="Pencak Silat(Tanding), Putra, Kelas I(>71 kg s/d 75 kg)">Putra Kelas I(>71 kg s/d 75 kg)</option>
                            <option value="Pencak Silat(Tanding), Putra, Kelas J(>75 kg s/d 79 kg)">Putra Kelas J(>75 kg s/d 79 kg)</option>
                            <option value="Pencak Silat(Tanding), Putra, Kelas J(>75 kg s/d 79 kg)">Putra Kelas J(>75 kg s/d 79 kg)</option>
                        </optgroup>
                        <optgroup label="Pencak Silat(Tanding) Putri">
                            <option value="Pencak Silat(Tanding), Putri, Kelas A(39 kg s/d 43 kg)">Putri Kelas A(39 kg s/d 43 kg)</option>
                            <option value="Pencak Silat(Tanding), Putri, Kelas B(>43 kg s/d 47 kg)">Putri Kelas B(>43 kg s/d 47 kg)</option>
                            <option value="Pencak Silat(Tanding), Putri, Kelas C(>47 kg s/d 51 kg)">Putri Kelas C(>47 kg s/d 51 kg)</option>
                            <option value="Pencak Silat(Tanding), Putri, Kelas D(>51 kg s/d 55 kg)">Putri Kelas D(>51 kg s/d 55 kg)</option>
                            <option value="Pencak Silat(Tanding), Putri, Kelas E(>55 kg s/d 59 kg)">Putri Kelas E(>55 kg s/d 59 kg)</option>
                            <option value="Pencak Silat(Tanding), Putri, Kelas F(>59 kg s/d 63 kg)">Putri Kelas F(>59 kg s/d 63 kg)</option>
                            <option value="Pencak Silat(Tanding), Putri, Kelas G(>63 kg s/d 67 kg)">Putri Kelas G(>63 kg s/d 67 kg)</option>
                        </optgroup>

                        <optgroup label="Pencak Silat(Seni) Putra">
                            <option value="Pencak Silat(Seni), Putra, Tunggal">Tunggal</option>
                            <option value="Pencak Silat(Seni), Putra, Ganda">Ganda</option>
                            <option value="Pencak Silat(Seni), Putra, Beregu">Beregu</option>
                        </optgroup>
                        <optgroup label="Pencak Silat(Seni) Putri">
                            <option value="Pencak Silat(Seni), Putri, Tunggal">Tunggal</option>
                            <option value="Pencak Silat(Seni), Putri, Ganda">Ganda</option>
                            <option value="Pencak Silat(Seni), Putri, Beregu">Beregu</option>
                        </optgroup>

                        <optgroup label="Shorinji Kempo Putra">
                            <option value="Shorinji Kempo, Putra, Embu Berpasangan Tingkat Kyu III">Embu Berpasangan Tingkat Kyu III</option>
                            <option value="Shorinji Kempo, Putra, Embu Berpasangan Tingkat Kyu Kenshi">Embu Berpasangan Tingkat Kyu Kenshi</option>
                            <option value="Shorinji Kempo, Putra, Embu Beregu Putra">Embu Beregu Putra</option>
                            <option value="Shorinji Kempo, Putra, Randori Putra 50 kg(>45 s/d 50 kg)">Randori Putra 50 kg(>45 s/d 50 kg)</option>
                            <option value="Shorinji Kempo, Putra, Randori Putra 55 kg(>50 s/d 55 kg)">Randori Putra 55 kg(>50 s/d 55 kg)</option>
                            <option value="Shorinji Kempo, Putra, Randori Putra 60 kg(>55 s/d 60 kg)">Randori Putra 60 kg(>55 s/d 60 kg)</option>
                            <option value="Shorinji Kempo, Putra, Randori Putra 65 kg(>60 s/d 65 kg)">Randori Putra 65 kg(>60 s/d 65 kg)</option>
                            <option value="Shorinji Kempo, Putra, Randori Putra 65 kg(>60 s/d 65 kg)">Randori Putra 65 kg(>60 s/d 65 kg)</option>
                        </optgroup>
                        <optgroup label="Shorinji Kempo Putri">
                            <option value="Shorinji Kempo, Putri, Embu Berpasangan Tingkat Kyu III">Embu Berpasangan Tingkat Kyu III</option>
                            <option value="Shorinji Kempo, Putri, Embu Berpasangan Tingkat Kyu Kenshi">Embu Berpasangan Tingkat Kyu Kenshi</option>
                            <option value="Shorinji Kempo, Putri, Embu Beregu Putri">Embu Beregu Putri</option>
                            <option value="Shorinji Kempo, Putri, Randori Putri 45 kg(>40 s/d 45 kg)">Randori Putri 45 kg(>40 s/d 45 kg)</option>
                            <option value="Shorinji Kempo, Putri, Randori Putri 48 kg(>45 s/d 48 kg)">Randori Putri 48 kg(>45 s/d 48 kg)</option>
                            <option value="Shorinji Kempo, Putri, Randori Putri 50 kg(>48 s/d 50 kg)">Randori Putri 50 kg(>48 s/d 50 kg)</option>
                            <option value="Shorinji Kempo, Putri, Randori Putri 55 kg(>50 s/d 55 kg)">Randori Putri 55 kg(>50 s/d 55 kg)</option>
                            <option value="Shorinji Kempo, Putri, Randori Putri 60 kg(>55 s/d 60 kg)">Randori Putri 60 kg(>55 s/d 60 kg)</option>
                            <option value="Shorinji Kempo, Campuran, Embu Berpasangan Tingkat Kyu III">Campuran Embu Berpasangan Tingkat Kyu III</option>
                            <option value="Shorinji Kempo, Campuran, Embu Berpasangan Tingkat Kyu Kenshi">Campuran Embu Berpasangan Tingkat Kyu Kenshi</option>
                            <option value="Shorinji Kempo, Campuran, Embu Beregu">Campuran Embu Beregu</option>
                        </optgroup>

                        <optgroup label="Shorinji Kempo Campuran">
                            <option value="Shorinji Kempo, Campuran, Embu Berpasangan Tingkat Kyu III">Embu Berpasangan Tingkat Kyu III</option>
                            <option value="Shorinji Kempo, Campuran, Embu Berpasangan Tingkat Kyu Kenshi">Embu Berpasangan Tingkat Kyu Kenshi</option>
                            <option value="Shorinji Kempo, Campuran, Embu Beregu">Embu Beregu</option>
                        </optgroup>

                        <optgroup label="Gulat Grego Putra">
                            <option value="Gulat, Grego Putra, Kelas 48 kg">Kelas 48 kg</option>
                            <option value="Gulat, Grego Putra, Kelas 52 kg">Kelas 52 kg</option>
                            <option value="Gulat, Grego Putra, Kelas 57 kg">Kelas 57 kg</option>
                            <option value="Gulat, Grego Putra, Kelas 61 kg">Kelas 61 kg</option>
                            <option value="Gulat, Grego Putra, Kelas 65 kg">Kelas 65 kg</option>
                            <option value="Gulat, Grego Putra, Kelas 70 kg">Kelas 70 kg</option>
                            <option value="Gulat, Grego Putra, Kelas 74 kg">Kelas 74 kg</option>
                            <option value="Gulat, Grego Putra, Kelas 79 kg">Kelas 79 kg</option>
                            <option value="Gulat, Grego Putra, Kelas 86 kg">Kelas 86 kg</option>
                        </optgroup>
                        <optgroup label="Gulat Bebas Putra">
                            <option value="Gulat, Bebas Putra, Kelas 50 kg">Kelas 50 kg</option>
                            <option value="Gulat, Bebas Putra, Kelas 55 kg">Kelas 55 kg</option>
                            <option value="Gulat, Bebas Putra, Kelas 60 kg">Kelas 60 kg</option>
                            <option value="Gulat, Bebas Putra, Kelas 63 kg">Kelas 63 kg</option>
                            <option value="Gulat, Bebas Putra, Kelas 67 kg">Kelas 67 kg</option>
                            <option value="Gulat, Bebas Putra, Kelas 72 kg">Kelas 72 kg</option>
                            <option value="Gulat, Bebas Putra, Kelas 77 kg">Kelas 77 kg</option>
                            <option value="Gulat, Bebas Putra, Kelas 82 kg">Kelas 82 kg</option>
                            <option value="Gulat, Bebas Putra, Kelas 87 kg">Kelas 87 kg</option>
                        </optgroup>
                        <optgroup label="Gulat Bebas Putri">
                            <option value="Gulat, Bebas Putri, Kelas 46 kg">Kelas 46 kg</option>
                            <option value="Gulat, Bebas Putri, Kelas 50 kg">Kelas 50 kg</option>
                            <option value="Gulat, Bebas Putri, Kelas 53 kg">Kelas 53 kg</option>
                            <option value="Gulat, Bebas Putri, Kelas 55 kg">Kelas 55 kg</option>
                            <option value="Gulat, Bebas Putri, Kelas 57 kg">Kelas 57 kg</option>
                            <option value="Gulat, Bebas Putri, Kelas 59 kg">Kelas 59 kg</option>
                            <option value="Gulat, Bebas Putri, Kelas 62 kg">Kelas 62 kg</option>
                            <option value="Gulat, Bebas Putri, Kelas 65 kg">Kelas 65 kg</option>
                            <option value="Gulat, Bebas Putri, Kelas 68 kg">Kelas 68 kg</option>
                            <option value="Gulat, Bebas Putri, Kelas 72 kg">Kelas 72 kg</option>
                        </optgroup>

                        <optgroup label="Selam KU A Terbuka">
                            <option value="Selam, KU A Terbuka, Surface 50 m">Surface 50 m</option>
                            <option value="Selam, KU A Terbuka, Surface 100 m">Surface 100 m</option>
                            <option value="Selam, KU A Terbuka, Surface 200 m">Surface 200 m</option>
                            <option value="Selam, KU A Terbuka, Surface 400 m">Surface 400 m</option>
                            <option value="Selam, KU A Terbuka, Surface 800 m">Surface 800 m</option>
                            <option value="Selam, KU A Terbuka, Apnea 50 m">Apnea 50 m</option>
                            <option value="Selam, KU A Terbuka, Bifin 50 m">Bifin 50 m</option>
                            <option value="Selam, KU A Terbuka, Bifin 100 m">Bifin 100 m</option>
                            <option value="Selam, KU A Terbuka, Bifin 200 m">Bifin 200 m</option>
                            <option value="Selam, KU A Terbuka, Bifin 400 m">Bifin 400 m</option>
                        </optgroup>
                        <optgroup label="Selam KU B">
                            <option value="Selam, KU B, Surface 50 m">Surface 50 m</option>
                            <option value="Selam, KU B, Surface 100 m">Surface 100 m</option>
                            <option value="Selam, KU B, Surface 200 m">Surface 200 m</option>
                            <option value="Selam, KU B, Surface 400 m">Surface 400 m</option>
                            <option value="Selam, KU B, Surface 800 m">Surface 800 m</option>
                            <option value="Selam, KU B, Apnea 50 m">Apnea 50 m</option>
                            <option value="Selam, KU B, Bifin 50 m">Bifin 50 m</option>
                            <option value="Selam, KU B, Bifin 100 m">Bifin 100 m</option>
                            <option value="Selam, KU B, Bifin 200 m">Bifin 200 m</option>
                            <option value="Selam, KU B, Bifin 400 m">Bifin 400 m</option>
                        </optgroup>
                        <optgroup label="Selam KU C">
                            <option value="Selam, KU C, Surface 50 m">Surface 50 m</option>
                            <option value="Selam, KU C, Surface 100 m">Surface 100 m</option>
                            <option value="Selam, KU C, Surface 200 m">Surface 200 m</option>
                            <option value="Selam, KU C, Bifin 50 m">Bifin 50 m</option>
                            <option value="Selam, KU C, Bifin 100 m">Bifin 100 m</option>
                            <option value="Selam, KU C, Bifin 200 m">Bifin 200 m</option>
                        </optgroup>
                        
                        <option value="Futsal">Futsal</option>

                        <option value="Sepak Bola">Sepak Bola</option>

                        <optgroup label="Karate Putra">
                            <option value="Karate, Putra, Kata Perorangan">Kata Perorangan</option>
                            <option value="Karate, Putra, Kata Beregu">Kata Beregu</option>
                            <option value="Karate, Putra, Kumite Perorangan 55 kg">Kumite Perorangan 55 kg</option>
                            <option value="Karate, Putra, Kumite Perorangan 60 kg">Kumite Perorangan 60 kg</option>
                            <option value="Karate, Putra, Kumite Perorangan 67 kg">Kumite Perorangan 67 kg</option>
                            <option value="Karate, Putra, Kumite Perorangan 75 kg">Kumite Perorangan 75 kg</option>
                            <option value="Karate, Putra, Kumite Perorangan 84 kg">Kumite Perorangan 84 kg</option>
                            <option value="Karate, Putra, Kumite Perorangan >84 kg">Kumite Perorangan >84 kg</option>
                        </optgroup>
                        <optgroup label="Karate Putri">
                            <option value="Karate, Putri, Kata Perorangan">Kumite Perorangan >84 kg</option>
                            <option value="Karate, Putri, Kata Beregu">Kumite Perorangan >84 kg</option>
                            <option value="Karate, Putri, Kumite Perorangan 50 kg">Kumite Perorangan 50 kg</option>
                            <option value="Karate, Putri, Kumite Perorangan 55 kg">Kumite Perorangan 55 kg</option>
                            <option value="Karate, Putri, Kumite Perorangan 61 kg">Kumite Perorangan 61 kg</option>
                            <option value="Karate, Putri, Kumite Perorangan 68 kg">Kumite Perorangan 68 kg</option>
                            <option value="Karate, Putri, Kumite Perorangan >68 kg">Kumite Perorangan >68 kg</option>
                        </optgroup>

                        <optgroup label="Tenis Lapangan Putra">
                            <option value="Tenis Lapangan, Putra, Tunggal Putra">Tunggal Putra</option>
                            <option value="Tenis Lapangan, Putra, Ganda Putra">Ganda Putra</option>
                            <option value="Tenis Lapangan, Putra, Ganda Campuran">Putra Ganda Campuran</option>
                        </optgroup>
                        <optgroup label="Tenis Lapangan Putri">
                            <option value="Tenis Lapangan, Putri, Tunggal Putri">Tunggal Putri</option>
                            <option value="Tenis Lapangan, Putri, Ganda Campuran">Putri Ganda Campuran</option>
                        </optgroup>

                        <optgroup label="Taekwondo Gyeorugi Prestasi(Yunior Putra)">
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 45 kg (max. 45 kg)">< 45 kg (max. 45 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 48 kg (45.1 - 48 kg)">< 48 kg (45.1 - 48 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 51 kg (48.1 - 51 kg)">< 51 kg (48.1 - 51 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 55 kg (51.1 - 55 kg)">< 55 kg (51.1 - 55 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 59 kg (55.1 - 59 kg)">< 59 kg (55.1 - 59 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 63 kg (59.1 - 63 kg)">< 63 kg (59.1 - 63 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 68 kg (63.1 - 68 kg)">< 68 kg (63.1 - 68 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 73 kg (68.1 - 73 kg)">< 73 kg (68.1 - 73 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), < 78 kg (73.1 - 78 kg)">< 78 kg (73.1 - 78 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putra), > 78 kg">> 78 kg</option>
                        </optgroup>
                        <optgroup label="Taekwondo Gyeorugi Prestasi(Yunior Putri)">
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 42 kg (max. 42 kg)">< 42 kg (max. 42 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 44 kg (42.1 - 44 kg)">< 44 kg (42.1 - 44 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 46 kg (44.1 - 46 kg)">< 46 kg (44.1 - 46 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 49 kg (46.1 - 49 kg)">< 49 kg (46.1 - 49 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 52 kg (49.1 - 52 kg)">< 52 kg (49.1 - 52 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 55 kg (52.1 - 55 kg)">< 55 kg (52.1 - 55 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 59 kg (55.1 - 59 kg)">< 59 kg (55.1 - 59 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 63 kg (59.1 - 63 kg)">< 63 kg (59.1 - 63 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), < 68 kg (63.1 - 68 kg)">< 68 kg (63.1 - 68 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Yunior Putri), > 68 kg">> 68 kg</option>
                        </optgroup>
                        <optgroup label="Taekwondo Gyeorugi Prestasi(Yunior Putra)">
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 54 kg">Gyeorugi Prestasi(Senior Putra) < 54 kg</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 58 kg (54.1 - 58 kg)">Gyeorugi Prestasi(Senior Putra) < 58 kg (54.1 - 58 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 63 kg (58.1 - 63 kg)">Gyeorugi Prestasi(Senior Putra) < 63 kg (58.1 - 63 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 68 kg (63.1 - 68 kg)">Gyeorugi Prestasi(Senior Putra) < 68 kg (63.1 - 68 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 74 kg (68.1 - 74 kg)">Gyeorugi Prestasi(Senior Putra) < 74 kg (68.1 - 74 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 80 kg (74.1 - 80 kg)">Gyeorugi Prestasi(Senior Putra) < 80 kg (74.1 - 80 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), < 87 kg (80.1 - 87 kg)">Gyeorugi Prestasi(Senior Putra) < 87 kg (80.1 - 87 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putra), > 87 kg">Gyeorugi Prestasi(Senior Putra) > 87 kg</option>
                        </optgroup>
                        <optgroup label="Taekwondo Gyeorugi Prestasi(Senior Putri)">
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 46 kg ">< 46 kg </option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 49 kg (46.1 - 49 kg)">< 49 kg (46.1 - 49 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 53 kg (49.1 - 53 kg)">< 53 kg (49.1 - 53 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 57 kg (53.1 - 57 kg)">< 57 kg (53.1 - 57 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 62 kg (57.1 - 62 kg)">< 62 kg (57.1 - 62 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 67 kg (62.1 - 67 kg)">< 67 kg (62.1 - 67 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), < 73 kg (67.1 - 73 kg)">< 73 kg (67.1 - 73 kg)</option>
                            <option value="Taekwondo, Gyeorugi Prestasi(Senior Putri), > 73 kg">> 73 kg</option>
                        </optgroup>
                        <option value="Taekwondo,Poomsae">Poomsae</option>

                        <optgroup label="Cricket">
                            <option value="Cricket, Cricket Super Six (Cricket 6's)">Cricket Super Six (Cricket 6's)</option>
                            <option value="Cricket, Cricket 6's Man">Cricket 6's Man</option>
                        </optgroup>

                        <optgroup label="Bilyar">
                            <option value="Bilyar, Bola 9 (Nine Ball)">Bola 9 (Nine Ball)</option>
                            <option value="Bilyar, Bola 10 (Ten Ball)">Bola 10 (Ten Ball)</option>
                            <option value="Bilyar, Bola 15/8 Ball">Bola 15/8 Ball</option>
                        </optgroup>

                        <option value="Catur">Catur</option>
                    </select>
                </div>
            </div>
            <div class="col-md-offset-2 col-md-8">
                <div class="form-group" id="cabangKedua">
                </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-theme btn-lg btn-block">Send message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>