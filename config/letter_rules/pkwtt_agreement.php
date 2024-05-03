<?php

return [
    "data" => [
        /**
         * @param string
         * ? Nama pihak pertama
         * cara akses data : $variable["first_name"]
         * atribut name di html : first_name
         */
        "first_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Jabatan pihak pertama
         * cara akses data : $variable["first_position"]
         * atribut name di html : first_position
         */
        "first_position" => [
            "validate" => "nullable|string",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Alamat pihak pertama
         * cara akses data : $variable["first_address"]
         * atribut name di html : first_address
         */
        "first_address" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Nama pihak kedua
         * cara akses data : $variable["second_name"]
         * atribut name di html : second_name
         */
        "second_name" => [
            "validate" => "nullable|string|min:3",
            "cast" => "string",
        ],

        /**
         * @param string
         * ? Tempat lahir pihak kedua
         * cara akses data : $variable["second_place_of_birth"]
         * atribut name di html : second_place_of_birth
         */
        "second_place_of_birth" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],

        /**
         * @param date
         * ? Tanggal lahir pihak kedua
         * cara akses data : $variable["second_date_of_birth"]
         * atribut name di html : second_date_of_birth
         */
        "second_date_of_birth" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],

        /**
         * @param string
         * ? Alamat pihak kedua
         * cara akses data : $variable["second_address"]
         * atribut name di html : second_address
         */
        "second_address" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],

        /**
         * @param array
         * ? Pasal-pasal
         * cara akses data : lakukan foreach dari data $variable["sections"]
         */
        "sections" => [
            "validate" => "nullable|array",
            "cast" => "array",
            "items" => [
                /**
                 * @param string
                 * ? Judul pasal
                 * cara akses data : $item["title"]
                 * atribut name di html : sections[$index]["title"]
                 */
                "title" => [
                    "validate" => "required_with:sections.*.contents|string|min:3",
                    "cast" => "string"
                ],

                /**
                 * @param string
                 * ? Isi pasal
                 * cara akses data : $item["contents"]
                 * atribut name di html : sections[$index]["contents"]
                 */
                "contents" => [
                    "validate" => "required_with:sections.*.title|string",
                    "cast" => "string",
                ],
            ]
        ],

        /**
         * @param string
         * ? Tempat tanda tangan surat
         * cara akses data : $variable["signed_place"]
         * atribut name di html : signed_place
         */
        "signed_place" => [
            "validate" => "nullable|string|min:5",
            "cast" => "string",
        ],

        /**
         * @param date
         * ? Tanggal tanda tangan surat
         * cara akses data : $variable["signed_date"]
         * atribut name di html : signed_date
         */
        "signed_date" => [
            "validate" => "nullable|date",
            "cast" => "date",
        ],
    ],

    "errorKey" => [
        "first_name" => "Nama pihak pertama",
        "first_position" => "Jabatan pihak pertama",
        "first_address" => "Alamat pihak pertama",
        "second_name" => "Nama pihak kedua",
        "second_place_of_birth" => "Tempat lahir pihak kedua",
        "second_date_of_birth" => "Tanggal lahir pihak kedua",
        "second_address" => "Alamat pihak kedua",
        "effective_date" => "Tanggal berlaku",
        "sections" => "Pasal",
        "signed_place" => "Tempat tanda tangan surat",
        "signed_date" => "Tanggal tanda tangan surat",

        // detail
        "sections.*.title" => "Judul pasal",
        "sections.*.contents" => "Isi pasal",
    ],

    "defaultValue" => [
        "sections" => [
            [
                "title" => "Waktu Perjanjian",
                "contents" => [
                    "<p>Perjanjian kerja ini dibuat terhitung mulai tanggal...............bulan......................... tahun...................</p>",
                ],
            ],
            [
                "title" => "Masa Percobaan",
                "contents" => [
                    "<ol><li><strong>PIHAK KEDUA</strong> akan menjalani masa percobaan selama masa [n-bulan] dan dalam masa percobaan <strong>PIHAK PERTAMA atau Perusahaan</strong> berhak melakukan evaluasi sikap kerja dan tingkat kompetensi <strong>PIHAK KEDUA</strong> dan bilamana <strong>PIHAK KEDUA</strong><strong> </strong>dinilai tidak menunjukkan kinerja yang baik maka <strong>PIHAK PERTAMA</strong> berhak untuk memutuskan hubungan kerja tanpa pembayaran pesangon atau ganti rugi berupa apapun juga.</li><li>Selama masa percobaan, maka <strong>PIHAK KEDUA</strong> tidak berhak atas Tunjangan Hari Raya (THR).</li><li>Setelah menyelesaikan masa percobaan dengan baik maka <strong>PIHAK PERTAMA </strong>akan mengangkat <strong>PIHAK KEDUA </strong>sebagai karyawan dengan perjanjian kerja waktu tidak tertentu (pekerja tetap).</li></ol>",
                ],
            ],
            [
                "title" => "Tugas dan Penempatan",
                "contents" => [
                    "<p><strong>PIHAK PERTAMA</strong> mempekerjakan <strong>PIHAK KEDUA</strong> sebagai <strong>[posisi pekerjaan]</strong> di <strong>[Instansi/Departemen/Perusahaan Terkait]</strong> atau afiliasinya di <strong>[Instansi/Departemen/Perusahaan]</strong> dalam lingkungan kerja <strong>[Perusahaan Induk]</strong>.</p>",
                ],
            ],
            [
                "title" => "Upah",
                "contents" => [
                    '<ol><li id="isPasted"><strong>PIHAK PERTAMA</strong> membayarkan upah kepada<strong>&nbsp;PIHAK KEDUA </strong>sebesar Rp. ..................... ( ..............) setiap bulan yang akan dibayar sebelum tanggal terakhir setiap bulan ke dalam Bank yang dirujuk <strong>PIHAK KEDUA</strong>. Gaji bersih akan diterima <strong>PIHAK KEDUA </strong>setelah dipotong Pajak Penghasilan Perseorangan (PPH 21).</li><li><strong>PIHAK PERTAMA</strong> membayar uang transportasi kepada<strong>&nbsp;PIHAK KEDUA</strong> sebesar Rp.............. (..............) /hari.</li></ol>',
                ],
            ],
            [
                "title" => "Hari Kerja, Jam Kerja dan Lembur",
                "contents" => [
                    '<ol><li>Hari kerja dan jam kerja adalah sebagai berikut :<ol style="list-style-type: lower-alpha;"><li>Hari Kerja &nbsp; &nbsp; &nbsp; :</li><li>Jam Kerja&nbsp; &nbsp; &nbsp; &nbsp;:</li><li>Jam Istirahat &nbsp; :</li></ol></li><li><strong>PIHAK KEDUA</strong> wajib mentaati ketentuan waktu kerja yang ditetapkan oleh perusahaan yaitu [5 (lima) hari kerja, 8 (delapan) jam sehari dan 40 ( empat puluh) jam] seminggu.</li><li><strong>PIHAK KEDUA</strong> bersedia bekerja lembur karena tuntutan tugas dan tanggung jawab, atau diperlukan/diminta oleh perusahaan dan untuk kepentingan perusahaan melalui atasan <strong>PIHAK KEDUA</strong>. Uang lembur akan dihitung menurut ketentuan perundang-undangan yang berlaku dan akan dibayarkan bersama- sama dengan gaji pada bulan berikutnya. Lembur yang dibayarkan adalah lembur efektif yang direncanakan sebelumnya dan disetujui oleh atasan melalui formulir timesheet yang dikeluarkan departemen HRD.</li></ol>',
                ],
            ],
            [
                "title" => "Hak dan Kewajiban Karyawan",
                "contents" => [
                    '<ol><li id="isPasted"><strong>PIHAK PERTAMA</strong> berkewajiban untuk memenuhi setiap hak dari <strong>PIHAK KEDUA</strong> yang berupa pembayaran gaji sesuai dalam pasal 4 perjanjian kerja ini.</li><li><strong>PIHAK PERTAMA</strong> berhak untuk memberikan Surat Peringatan Tertulis kepada <strong>PIHAK KEDUA</strong> apabila <strong>PIHAK KEDUA </strong>diketahui telah melanggar Tata Tertib dan Peraturan Kerja/Peraturan Perusahaan.</li></ol>',
                ],
            ],
            [
                "title" => "Tanggung Jawab Pihak Kedua",
                "contents" => [
                    '<ol><li id="isPasted"><strong>PIHAK KEDUA</strong> bertanggungjawab mengembalikan semua barang hak milik perusahaan dan/atau klien yang digunakan oleh <strong>PIHAK KEDUA</strong> dan diserahkan kepada perusahaan dalam keadaan baik dan terpelihara.</li><li><strong>PIHAK KEDUA </strong>akan terikat dengan setiap persyaratan dan kondisi, kebijaksanaan, peraturan dan aturan perusahaan dan/atau klien yang berlaku diperusahaan.</li><li><strong>PIHAK KEDUA</strong> wajib memahami peraturan perusahaan dan sepakat untuk tunduk pada semua ketentuan-ketentuan dalam peraturan perusahaan. Apabila karyawan tidak mentaati/melanggar peraturan &nbsp;perusahaan, akan mendapat sanksi mulai dari teguran, warning, skorsing, sampai dengan pemutusan hubungan kerja.</li><li><strong>PIHAK KEDUA </strong>wajib mengisi dan menyerahkan time sheet yang sudah ditanda tangani supervisor di klien [sebelum tanggal 30 (tiga puluh) setiap bulan]</li></ol>',
                ],
            ],
            [
                "title" => "Fasilitas",
                "contents" => [
                    '<ol><li><strong>PIHAK PERTAMA</strong> akan mengatur pelaksanaan Medical Check Up untuk <strong>PIHAK KEDUA</strong> pada saat mulai bergabung dengan Perusahaan dan setiap 1 (satu) tahun sekali selama&nbsp;<strong>PIHAK KEDUA</strong> bekerja pada Perusahaan.<br><br><strong>Perusahaan&nbsp;</strong>akan menyediakan fasilitas kesehatan rawat jalan dan rawat inap bagi <strong>PIHAK KEDUA</strong> dan keluarganya maksimum 1 orang pasangan dan 3 orang anak yang masih dibawah umur 25 tahun, (belum pernah menikah dan tidak bekerja tetapi masih sekolah) &nbsp;sesuai pada lampiran jaminan kesehatan.</li><li id="isPasted"><strong>PIHAK PERTAMA</strong> akan mengatur pendaftaran serta pembayaran Asuransi Kecelakaan serta pensiun pada program JAMSOSTEK terhitung sejak tanggal dimulainya perjanjian kerja ini. <strong>PIHAK KEDUA</strong>berhak untuk diikut sertakan dalam program Jamsostek &nbsp;sebesar 6,24% dari gaji pokok yang terdiri dari :<ul style="list-style-type: disc;"><li>4,24 % ditanggung oleh <strong>PIHAK PERTAMA</strong></li><li>2 % ditanggung oleh <strong>PIHAK KEDUA&nbsp;</strong>sebagai peserta</li></ul></li><li id="isPasted">Jaminan Sosial Tenaga Kerja yang diikutsertakan untuk <strong>PIHAK KEDUA</strong>adalah sebagai berikut :<ul style="list-style-type: disc;"><li>Jaminan Keselakaan Kerja (JKK)</li><li>Jaminan Hari Tua (JHT)</li><li>Jaminan Kematian (JK)</li><li>Jaminan Pemeliharaan Kesehatan (JPK)</li></ul></li><li id="isPasted"><strong>PIHAK PERTAMA</strong> akan memberikan seragam kerja sejumlah 2 (dua) stel beserta 1 (satu) pasang sepatu untuk periode 6 (enam) bulan, dan wajib dipakai pada saat bekerja. Bila karyawan berhenti bekerja maka seragam kerja beserta sepatu tersebut harus dikembalikan ke Perusahaan.</li><li><strong>PIHAK PERTAMA</strong> akan memberikan Tunjangan Hari Raya (THR) sebesar 1 (satu) bulan gaji pokok, apabila<strong>&nbsp;PIHAK KEDUA</strong> telah bekerja selama 12 (dua belas) bulan, atau disesuaikan dengan masa kerja <strong>PIHAK KEDUA</strong> secara pro rata apabila masa kerja karyawan belum mencapai 12 (dua belas) bulan. Tunjangan Hari Raya (THR) tersebut akan dibayarkan selambat-lambatnya 14 (empatbelas) hari sebelum Hari Raya Idul Fitri.</li></ol>',
                ],
            ],
            [
                "title" => "Cuti",
                "contents" => [
                    '<ol><li id="isPasted"><strong>PIHAK KEDUA</strong> berhak mengambil cuti tahunan selama 12 (dua belas) hari kerja dengan persetujuan HRD Perusahaan &amp; atasan <strong>PIHAK KEDUA</strong> dimana hak cuti akan timbul setelah bekerja selama 12 (dua belas) bulan berturut-turut. <strong>PIHAK KEDUA</strong> dapat mengambil cuti jika cuti tersebut diajukan dan disetujui paling lambat 5 (hari) kerja sebelumnya. Cuti dilaksanakan dan mendapatkan uang bantuan cuti.</li><li>Cuti tahunan gugur apabila dalam waktu 6 (enam) bulan setelah lahirnya hak cuti tersebut tidak dipergunakan oleh <strong>PIHAK KEDUA</strong>.</li><li><strong>PIHAK KEDUA</strong> juga berhak terhadap hari libur nasional yang diakui dan disetujui oleh Perusahaan dengan mempertimbangkan libur yang diberlakukan di klien.</li></ol>',
                ],
            ],
            [
                "title" => "Izin Tidak Masuk Kerja",
                "contents" => [
                    '<ol><li id="isPasted">Apabila <strong>PIHAK KEDUA</strong> tidak masuk kerja dikarenakan sakit diwajibkan untuk menyerahkan surat keterangan sakit dari Dokter/Puskesmas/Rumah Sakit yang merawatnya kepada Perusahaan melalui HRD.</li><li>Apabila <strong>PIHAK KEDUA</strong> tidak masuk kerja karena meninggalnya anak/istri/suami/orang tua menantu, pernikahan <strong>PIHAK KEDUA</strong>/Anak, Persalinan <strong>PIHAK KEDUA</strong>/Istri <strong>PIHAK KEDUA</strong>, Khitanan/Pembastisan anak <strong>PIHAK KEDUA</strong> dapat diberikan izin khusus sesuai ketentuan yang berlaku pada Perusahaan.</li><li>Dalam hal <strong>PIHAK KEDUA </strong>berencana untuk tidak masuk kerja selain alasan sebagaimana tercantum dalam ayat (1) dan ayat (2) pasal ini, maka <strong>PIHAK KEDUA</strong> harus menyampaikan surat permohonan kepada Perusahaan selambat-lambatanya 2 (dua) hari sebelum <strong>PIHAK KEDUA</strong> tidak masuk kerja.</li></ol>',
                ],
            ],
            [
                "title" => "Rahasia Perusahaan",
                "contents" => [
                    '<ol><li id="isPasted"><strong>PIHAK KEDUA</strong> wajib untuk tidak memberikan dan/atau melakukan duplikasi seluruh atau sebagian data teknis dan/atau informasi yang diterima dari klien kepada pihak lain.</li><li>Dalam hal <strong>PIHAK KEDUA</strong> terbukti tidak menjaga seluruh atau sebagian hal-hal yang seluruhnya dirahasiakan sebagaimana dimaksud dalam ayat 1 diatas dengan cara apapun maka karyawan bersedia dikenakan Pemutusan Hubungan Kerja (PHK) seketika tanpa uang imbalan atau uang jasa berupa apapun dan bersedia mempertanggungjawabkan perbuatannya tersebut secara hukum.</li></ol>',
                ],
            ],
            [
                "title" => "Perencanaan/Evaluasi Kinerja dan Pelatihan",
                "contents" => [
                    '<ol><li id="isPasted">Perencanaan &amp; Evaluasi Kinerja<br>&nbsp; &nbsp; Setiap karyawan wajib melaksanakan proses perencanaan kinerja setelah melewati masa percobaan 3 (tiga) bulan serta melaksanakan proses evaluasi kinerja pada jadwal yang ditentukan oleh perusahaan. Karyawan yang tidak melaksanakan proses ini sesuai dengan peraturan perusahaan, maka karyawan tidak berhak atas kenaikan gaji tahunan serta akan ditindak sesuai dengan peraturan perusahaaan yang berlaku.</li><li>Pengembangan &amp; Pelatihan<br>&nbsp; &nbsp; Karyawan yang telah menyelesaikan proses perencanaan kinerja, diperbolehkan mengajukan pelatihan berdasarkan kebutuhan dengan mengisi &amp; menyerahkan formulir yang dikeluarkan oleh HRD Perusahaan.<br>&nbsp; &nbsp; Jika pelatihan tersebut di setujui HRD klien &amp; Perusahaan, maka karyawan wajib mengikuti pelatihan tersebut dan wajib membuat laporan pelatihan.</li></ol>',
                ],
            ],
            [
                "title" => "Pemutusan Hubungan Kerja",
                "contents" => [
                    '<ol><li id="isPasted">Jika kontrak antara <strong>Perusahaan &amp; YYYYYY</strong> berakhir dan/atau terjadi pengurangan tenaga kerja atas permintaan<strong>&nbsp;YYYYYY</strong>, maka hubungan kerja antara <strong>PIHAK KEDUA</strong> dan <strong>PIHAK PERTAMA</strong> akan berakhir. Uang pesangon akan diperhitungkan sesuai dengan peraturan perundang-undangan ketenagakerjaan yang berlaku.</li><li>Apabila <strong>PIHAK KEDUA</strong> mengundurkan diri sebelum berakhirnya periode perjanjian kerja, <strong>PIHAK KEDUA</strong> diwajibkan memberitahukan secara tertulis 30 (tiga puluh) hari sebelumnya kepada <strong>PIHAK PERTAMA</strong>. Dalam hal ini karyawan tidak berhak atas uang pesangon atau uang imbalan atau uang jasa berupa apapun.</li><li><strong>PIHAK PERTAMA&nbsp;</strong>dapat melakukan pemutusan hubungan kerja sewaktu-waktu terhadap <strong>PIHAK KEDUA</strong> tanpa kompensasi dalam bentuk apapun, apabila <strong>PIHAK KEDUA</strong>melakukan kelalaian, kesalahan, dan pelanggaran disiplin, antara lain :<ol style="list-style-type: lower-alpha;"><li>Melakukan pelanggaran berat seperti yang tercantum dalam Peraturan Perusahaan dan atau Peraturan Ketenagakerjaan yang berlaku pada <strong>PIHAK PERTAMA</strong>.</li><li>Melakukan pelanggaran terhadap Perjanjian Kerja Waktu Tertentu dan telah mendapat Surat Peringatan terakhir yang masih berlaku.</li><li>Mangkir 5 (lima) hari secara berturut-turut tanpa memberikan alasan dan keterangan secara tertulis yang dilengkapi dengan bukti yang sah kepada <strong>PIHAK PERTAMA</strong> dan <strong>PIHAK PERTAMA</strong> telah melakukan pemanggilan secara patut dan tertulis sebanyak 2 (dua) kali, maka <strong>PIHAK KEDUA</strong> dapat diputus hubungan kerjanya karena dikualifikasikan mengundurkan diri.</li><li>Penipuan, pencurian dan penggelapan barang/uang milik pihak perusahaan atau milik teman pihak perusahaan dimana <strong>PIHAK KEDUA</strong> dipekerjakan.</li><li>Mabok atau minum minuman keras yang memabokkan, memakan obat bius atau menyalahgunakan obat-obatan terlarang atau obat-obatan perangsang lainnya ditempat kerja yang dilarang oleh peraturan perundang-undangan</li><li>Melakukan perbuatan asusila ataupun melakukan perjudian dilingkungan kerja</li><li>Melakukan tindakan kejahatan misalnya menyerang, mengintimidasi atau menipu <strong>PIHAK PERTAMA</strong>, atau teman sekerja atau perusahaan dimana <strong>PIHAK KEDUA</strong> dipekerjakan dan memperdagangkan barang terlarang baik dalam lingkungan perusahaan maupun diluar lingkungan klien perusahaan.</li><li>Menganiaya, mengancam secara physik atau mental, menghina secara kasar <strong>PIHAK PERTAMA</strong>, keluarga <strong>PIHAK PERTAMA</strong> atau teman sekerja atau pihak perusahaan dimana <strong>PIHAK KEDUA&nbsp;</strong>dipekerjakan.</li><li>Membujuk <strong>PIHAK PERTAMA</strong>, atau teman sekerja untuk melakukan sesuatu perbuatan yang bertentangan dengan hukum atau kesusilaan serta peraturan perundang-undangan yang berlaku.</li><li>Dengan ceroboh atau sengaja merusak, merugikan atau membiarkan dirinya atau teman sekerjanya dalam bahaya.</li><li><strong>PIHAK KEDUA</strong> ternyata tidak mampu melaksanakan pekerjaan yang ditugaskan sesuai standard prestasi yang ditetapkan oleh Penanggungjawab yang ditunjuk oleh<strong>&nbsp;PIHAK PERTAMA</strong> dimana <strong>PIHAK KEDUA</strong> dipekerjakan dan telah diberikan waktu yang cukup.</li><li><strong>PIHAK KEDUA</strong> melanggar peraturan mengenai Etika Bisnis dan atau conflict of interest yang berlaku diperusahaan tempat dimana<strong>&nbsp;PIHAK KEDUA</strong> dipekerjakan</li><li>Berlaku tidak sopan, tidak berdisiplin dalam tugas, tidak jujur, melawan atasan, tidak bisa menjaga kebersihan, berpakaian tidak sesuai dengan ketentuan yang berlaku diperusahaan dimana<strong>&nbsp;PIHAK KEDUA</strong> ditempatkan, membawa pulang kendaraan <strong>PIHAK PERTAMA</strong> atau perusahaan dimana <strong>PIHAK KEDUA</strong> dipekerjakan tanpa izin atasan atau penanggungjawab perusahaan.</li><li>Memalsukan / memanipulasi jam kerja absensi laporan kehadiran / daftar hadir yang telah disahkan.</li><li>Menyalahgunakan statusnya sebagai jabatan tersebut pada Pasal 1 ayat (1) untuk kepentingan pribadi baik disengaja maupun tidak sengaja, termasuk menggunakan fasilitas perusahaan untuk pribadi tanpa izin dari pihak penanggungjawab unit kerja.</li><li>Masih melakukan kesalahan apapun juga, setelah diberikan Surat Peringatan terakhir dan masih berlaku.</li></ol></li></ol>',
                ],
            ],
            [
                "title" => "Perjalanan Dinas",
                "contents" => [
                    '<ol><li id="isPasted"><strong>PIHAK KEDUA&nbsp;</strong>yang melakukan perjalanan dinas dan telah disetujui oleh wakil/supervisor di klien, diwajibkan memesan akomodasi/hotel &amp; tiket pesawat melalui&nbsp;Perusahaan.</li><li>Biaya lain yang dikeluarkan seperti misalnya per-diem, pajak bandara, transportasi dalam kota &amp; laundry dapat ditagihkan ke Perusahaan dengan menyerahkan bukti-bukti pendukung selambat-lambatnya 5 (lima) hari kerja setelah kembali ke Jakarta.</li><li>Bagi karyawan yang berniat mengambil biaya tersebut dimuka, maka diwajibkan untuk mengisi &amp; menyerahkan formulir yang disediakan dan telah disetujui oleh klien selambat-lambatnya 5 (lima) hari kerja sebelum keberangkatan.</li></ol>',
                ],
            ],
            [
                "title" => "Penyelesaian Perselisihan dan Domisili Hukum",
                "contents" => [
                    '<ol><li id="isPasted">Perjanjian ini dan segala akibat hukumnya tunduk dan berlaku Hukum Negara Republik Indonesia.</li><li>Apabila terjadi perselisihan atas penafsiran dan atau pelaksanaan atas Perjanjian ini diselesaikan secara musyawarah dan untuk mufakat.</li><li>Apabila setelah dilakukan musyawarah belum tercapai kesepakatan maka kedua belah pihak sepakat untuk menyelesaikan permasalahan ini sesuai mekanisme ketentuan peraturan perundangan ketenagakerjaan.</li></ol>',
                ],
            ],
        ],
    ],
];
