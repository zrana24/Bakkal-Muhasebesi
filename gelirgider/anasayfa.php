<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="row">
        <div class="col-md-12 mb-3">     
            <?php include "nav.php"; ?>
        </div> 
    </div>

    <div class="container col-md-6">
        <p class="justify-content-end" style="text-align:right;" id="devir"></p>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">

            <form method="POST" id="Form">
            
            <div class="form-group w-70">
                <label>TARİH</label>
                <input type="date" class="form-control" id="tarih" name="tarih">
            </div>

            <div class="form-group w-70"> 
                <label>AÇIKLAMA</label>
                <input type="text" class="form-control" id="aciklama" name="aciklama" autocomplete="off" required>
                <!--  autocomplete="off" önerme yapmaz -->
                <!--<div id="tablo2"></div>-->
            </div>

            <div class="form-group w-70">
                <label>GELİR</label>
                <input type="number" class="form-control" id="gelir" name="gelir" value="0" step="0.001">
            </div>

            <div class="form-group w-70">
                <label>GİDER</label>
                <input type="number" class="form-control" id="gider" name="gider" value="0" step="0.001">
            </div>

            <button type="submit" class="btn btn-primary" id="ekle">EKLE</button>
            </form>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-6 offset-md-3 text-center" style="height:170px; overflow: auto;">
            <div id="tablo" class="mt-3"></div>  
        </div>
    </div>

    <div class="container col-md-6">
        <p class="justify-content-end" style="text-align:right;" id="tutar"></p>
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="anasayfa.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>