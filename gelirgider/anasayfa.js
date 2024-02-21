function tablogetir(tarih) 
{
    $.ajax({
        type: "POST",
        url: "tablo.php",
        data: {
            tarih: tarih
        },
        success: function(donen_deger) 
        {
            $("#tablo").html(donen_deger);

            $('.sil-link').click(function() 
            {
                var id = $(this).data('id');
                sil(id);
            });
        }
    });
}

$(document).ready(function () 
{
   
    $("#Form").submit(function (event) 
    {
        event.preventDefault(); 
        ekle();
    });

    $(document).on('click', '.sil-link', function() 
    {
        var id = $(this).data('id');
        sil(id);
    });

    function ekle() 
    {
        $.ajax({
            type: "POST",
            url: "kayit.php",
            data: {
                tarih: $("#tarih").val(),
                aciklama: $("#aciklama").val(),
                gelir: $("#gelir").val(),
                gider: $("#gider").val(),
            },
            success: function (donen_deger) 
            {
                if (donen_deger === "success") 
                {
                    Swal.fire({
                        icon: 'success',
                        title: 'Kayıt Başarılı!',
                        text: 'Veriler başarıyla kaydedildi.',
                    });
                    tablogetir($('#tarih').val());
                    tutar($('#tarih').val());
                } 
                else
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Kayıt Başarısız!',
                        text: 'Veriler kaydedilemedi.',
                    });
                }
                document.getElementById("aciklama").value="";
                document.getElementById("gelir").value=0;
                document.getElementById("gider").value=0;
            }
        });
    }

    function sil(id)
    {
        $.ajax({
            type:'POST',
            url:'kayitsil.php',
            data:{
                'id':id,
            },
            success:function(donen_deger)
            {
                if(donen_deger==="success")
                {
                    Swal.fire({
                        icon:'success',
                        title:'Silme Başarılı!',
                        text:'Veriler başarıyla silindi',
                    });
                    tablogetir($('#tarih').val());
                    tutar($('#tarih').val());
                }
                else{
                    Swal.fire({
                        icon:'error',
                        title:'Silme Başarısız!',
                        text:'Veriler silinemedi',
                    });
                }
            }
        });
    };
    
    function tarihgetir() 
    {
        $.ajax({
            type: "POST",
            url: "tarih.php",
            success: function (donen_deger) 
            {
                document.getElementById("tarih").value = donen_deger;
                tablogetir($("#tarih").val()); 
                //Bugünün tarihine göre tablogetir fonksiyonunu çalıştırır.
                
                $('#tarih').change(function() {
                    tablogetir($(this).val()); 
                }); 
                //Tarih değiştiğinde değişen tarihe göre tablogetir fonksiyonunu çalıştırır.

                tutar($("#tarih").val());

                $('#tarih').change(function() {
                    tutar($(this).val()); 
                });
                

                devir($("#tarih").val());

                $('#tarih').change(function() {
                    devir($(this).val()); 
                });
            }
        });
    }
    tarihgetir();
})

$("#gelir").click(function (e) 
{
    if(document.getElementById("gider").value>0)
    {
        document.getElementById("gider").value=0;
    }
    document.getElementById("gelir").value="";
    document.getElementById("gider").value=0;
});


$("#gider").click(function (e) 
{
    if(document.getElementById("gelir").value>0)
    {
        document.getElementById("gelir").value=0;
    }

    document.getElementById("gider").value="";
    document.getElementById("gelir").value=0;
});

$("#aciklama").click(function(e)
{
    if(!document.getElementById("gelir").value>=0 || !document.getElementById(gider).value>=0)
    {
        document.getElementById("gelir").value=0;
        document.getElementById("gider").value=0;
    }
});


$("#tarih").click(function(e){
    if(!document.getElementById("gelir").value>=0 || !document.getElementById("gider")>=0)
    {
        document.getElementById("gelir").value=0;
        document.getElementById("gider").value=0;
    }
});

function devir(tarih)
{
    $.ajax({
        type:'POST',
        url:'devir.php',
        data:{
            tarih:tarih,
        },
        success:function(donen_deger)
        {
            $('#devir').html(donen_deger);
        }
    });
}


function tutar(tarih)
{
    $.ajax({
        type:'POST',
        url:'kalan.php',
        data:{
            tarih:tarih,
        },
        success:function(donen_deger)
        {
            $('#tutar').html(donen_deger);
        }
    });
}