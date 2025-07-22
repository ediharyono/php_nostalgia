<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Daftar Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 20px;
            color: #000;
        }
        .header, .footer {
            width: 100%;
            margin-bottom: 10px;
        }
        .header .left, .header .right {
            display: inline-block;
            vertical-align: top;
        }
        .header .left {
            width: 65%;
        }
        .header .right {
            width: 33%;
            text-align: right;
            font-weight: bold;
            font-size: 14px;
            border: 1px solid #000;
            padding: 5px 10px;
            box-sizing: border-box;
        }
        .header h1 {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }
        .header h2 {
            margin: 0;
            font-size: 14px;
            font-weight: normal;
        }
        .header p {
            margin: 2px 0;
            font-size: 11px;
        }
        .info-table {
            width: 100%;
            margin-bottom: 15px;
            font-size: 12px;
        }
        .info-table td {
            padding: 2px 5px;
            vertical-align: top;
        }
        .info-table .title {
            font-weight: bold;
            font-size: 14px;
            text-align: right;
            border: 1px solid #000;
            padding: 5px 10px;
            width: 33%;
        }
        table.data-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        table.data-table th, table.data-table td {
            border: 1px solid #000;
            padding: 4px 6px;
            text-align: left;
        }
        table.data-table th {
            background-color: #f0f0f0;
            font-weight: bold;
            text-align: center;
        }
        table.data-table td.center {
            text-align: center;
        }
        .footer {
            margin-top: 30px;
            font-size: 11px;
        }
        .signature {
            width: 200px;
            text-align: center;
            float: left;
            margin-top: 40px;
            border-top: 1px solid #000;
            padding-top: 5px;
            font-weight: bold;
        }
        .stamp {
            width: 100px;
            height: 100px;
            border: 2px solid #000;
            border-radius: 50%;
            text-align: center;
            line-height: 100px;
            font-weight: bold;
            font-size: 10px;
            margin-top: 10px;
            margin-left: 10px;
            float: left;
        }
        .clear {
            clear: both;
        }
        .footer-bottom {
            margin-top: 60px;
            font-size: 10px;
            text-align: left;
            border-top: 1px solid #000;
            padding-top: 5px;
        }
        .footer-bottom .right {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="left">
            <h1>UNIVERSITAS WIDYA MATARAM</h1>
            <h2>FAKULTAS EKONOMI</h2>
            <p>DALEM MANGKUBUMEN KT III/237</p>
            <p>YOGYAKARTA 55132</p>
        </div>
        <div class="right">
            DAFTAR NILAI MAHASISWA
        </div>
    </div>


    <table class="info-table">
        <tr>
            <td><strong>Mata Kuliah :</strong> MANAJEMEN PEMASARAN II</td>
            <td class="title" rowspan="4">MANAJEMEN/S-1<br>2024/2025 - Gasal</td>
        </tr>
        <tr>
            <td><strong>Kode M.K. :</strong> MNJ302 / 3 SKS</td>
        </tr>
        <tr>
            <td><strong>Dosen :</strong> ASCASAPUTRA ADITYA</td>
        </tr>
        <tr>
            <td><strong>Kelas :</strong> MNJ31</td>
        </tr>
    </table>


    <table class="data-table">
        <thead>
            <tr>
                <th style="width: 30px;">NO.</th>
                <th style="width: 300px;">NAMA MAHASISWA</th>
                <th style="width: 120px;">N.I.M.</th>
                <th style="width: 100px;">NILAI HURUF</th>
            </tr>
        </thead>
        <tbody>
            <tr><td class="center">1</td><td>ARMAND MAULANA MALIK</td><td class="center">181113525</td><td class="center">B+</td></tr>
            <tr><td class="center">2</td><td>EZRA JUNI ANWAR SAGARA-GARA</td><td class="center">201113762</td><td class="center">B-</td></tr>
            <tr><td class="center">3</td><td>AMIRUL ANAS</td><td class="center">221113918</td><td class="center">D</td></tr>
            <tr><td class="center">4</td><td>ELZA FIRA RAHMAWATI</td><td class="center">231114044</td><td class="center">A-</td></tr>
            <tr><td class="center">5</td><td>CLARABELLA IVENA CAHYANINGRUM</td><td class="center">231114045</td><td class="center">A/B</td></tr>
            <tr><td class="center">6</td><td>PUTRI LOISSE AYU SETIA NINGRUM</td><td class="center">231114047</td><td class="center">B+</td></tr>
            <tr><td class="center">7</td><td>NOVITA SARI</td><td class="center">231114048</td><td class="center">A</td></tr>
            <tr><td class="center">8</td><td>DESTALIA NORMA ANGELIKA</td><td class="center">231114049</td><td class="center">B</td></tr>
            <tr><td class="center">9</td><td>BINNDITO ALIFIAN SAPUTRA</td><td class="center">231114050</td><td class="center">B/C</td></tr>
            <tr><td class="center">10</td><td>ESTRI NURAHAYU</td><td class="center">231114051</td><td class="center">A</td></tr>
            <tr><td class="center">11</td><td>FARA CANNIA SHALSABILA</td><td class="center">231114052</td><td class="center">B+</td></tr>
            <tr><td class="center">12</td><td>NIKMATUL SALMA CINTA NURUL IMAN</td><td class="center">231114053</td><td class="center">A/B</td></tr>
            <tr><td class="center">13</td><td>VINA RANTIKA</td><td class="center">231114062</td><td class="center">A/B</td></tr>
            <tr><td class="center">14</td><td>RIA UTAMI</td><td class="center">231114063</td><td class="center">B+</td></tr>
            <tr><td class="center">15</td><td>FARA ELIYA RAHMA</td><td class="center">231114067</td><td class="center">B+</td></tr>
            <tr><td class="center">16</td><td>GRANDISSYA SATIA</td><td class="center">231114068</td><td class="center">B</td></tr>
            <tr><td class="center">17</td><td>AGUSTINA YOHANA TAA</td><td class="center">231114069</td><td class="center">B</td></tr>
            <tr><td class="center">18</td><td>YULIAN JARFI</td><td class="center">231114070</td><td class="center">B+</td></tr>
            <tr><td class="center">19</td><td>NURUL SHAKIRAH</td><td class="center">231114072</td><td class="center">B+</td></tr>
            <tr><td class="center">20</td><td>GREGORIO S. C. RUMBEWAS</td><td class="center">231114073</td><td class="center">C+</td></tr>
            <tr><td class="center">21</td><td>NATALIS KURISI</td><td class="center">231114074</td><td class="center">D</td></tr>
            <tr><td class="center">22</td><td>RENI BEATRIX FATIE</td><td class="center">231114075</td><td class="center">A/B</td></tr>
            <tr><td class="center">23</td><td>ELSINA YULIANCE NUNAKI</td><td class="center">231114076</td><td class="center">D</td></tr>
            <tr><td class="center">24</td><td>JEANNE LAETICIA BONAI</td><td class="center">231114078</td><td class="center">D</td></tr>
            <tr><td class="center">25</td><td>DINDA KAIKATUI</td><td class="center">231114079</td><td class="center">B-</td></tr>
            <tr><td class="center">26</td><td>INE MARGARITA NUNAKI</td><td class="center">231114080</td><td class="center">D</td></tr>
            <tr><td class="center">27</td><td>EKARIA DASEM</td><td class="center">231114081</td><td class="center">A-</td></tr>
            <tr><td class="center">28</td><td>LOREL BRITANIA TANJUNG</td><td class="center">231114102</td><td class="center">D</td></tr>
            <tr><td class="center">29</td><td>MAKSON MAUDOW DOWANSIBA</td><td class="center">231114105</td><td class="center">C+</td></tr>
        </tbody>
    </table>


    <div class="footer">
        <div class="signature">
            Dosen<br><br><br><br>
            ASCASAPUTRA ADITYA
        </div>
        <div class="stamp">
            FAKULTAS<br>EKONOMI<br>UNIVERSITAS<br>WIDYA<br>MATARAM
        </div>
        <div class="clear"></div>
    </div>


    <div class="footer-bottom">
        dicetak : 21/02/2025 11:27:10
        <span class="right">MANAJEMEN</span>
    </div>
</body>
</html>
