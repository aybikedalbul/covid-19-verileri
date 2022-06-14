<?php
  include("covid.php");
  $veri = json_decode(covid());
  
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Türkiye Covid-19 Verileri | Aybike Dalbul</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Nufus, Aktif Vaka, Total Hasta, İyileşen Hasta,Yoğunbakım sayısı, toplam ölüm, bugünkü ölüm sayısı -->
    <div class="container">
        <div class="row baslik">
            <h1>Türkiye Covid-19 Verileri</h1>
        </div>

        <div class="row tablo">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Veriler</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Nüfus</th>
                    <td><?php echo $veri->response[0]->population; ?></td>
                  </tr>

                  <tr>
                    <th scope="row">Aktif Vaka Sayısı</th>
                    <td><?php echo $veri->response[0]->cases->active; ?></td>
                  </tr>

                  <tr>
                    <th scope="row">Toplam Hasta Sayısı</th>
                    <td><?php echo $veri->response[0]->cases->total; ?></td>
                  </tr>

                  <tr>
                    <th scope="row">İyileşen Hasta Sayısı</th>
                    <td><?php echo $veri->response[0]->cases->recovered; ?></td>
                  </tr>

                  <tr>
                    <th scope="row">Yoğun bakımdaki Hasta Sayısı</th>
                    <td><?php echo $veri->response[0]->cases->critical; ?></td>
                    </tr>
                  <tr>
                    <th scope="row">Bugünkü Ölüm Sayısı</th>
                    <td><?php $bugun= $veri->response[0]->deaths->new; if($bugun==null){echo 0;}else{echo $bugun;} ?></td>

                  </tr>

                  <tr>
                    <th scope="row">Toplam Ölüm Sayısı</th>
                    <td><?php echo $veri->response[0]->deaths->total; ?></td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
        

    </div>
    <div class="isim">Code by&nbsp;<a href="https://aybikedalbul.me/" target="_blank"s>Aybike DALBUL</a></div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>