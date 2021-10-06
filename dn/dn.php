<?php
$id=$_GET['id_dn'];
include "../koneksi.php";
$query = mysqli_query($con, "SELECT * FROM tb_dn WHERE id_dn='$id'") or die(mysqli_connect_error());
$data = mysqli_fetch_assoc($query);
if ($data["sascm"]=="SCM")
{
$namaper = "SEMESTA CITRA MEDIA";
$alamat = "JL. MELAWAI XI NO. 61 JAKARTA 12160";
$telp = "7220222";
$fax = "7209222";
}
else
{
$namaper = "SELINDO ALPHA";
$alamat = "JL. MELAWAI XI NO. 62 JAKARTA 12160";
$telp = "72790001";
$fax = "72790002";
}
?>

<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="base.min.css"/>
<link rel="stylesheet" href="fancy.min.css"/>
<link rel="stylesheet" href="main.css"/>
<script src="compatibility.min.js"></script>
<script src="theViewer.min.js"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title></title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="bg1.png"/><div class="c x0 y1 w2 h2"><div class="t m0 x1 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">PT. <?=$namaper;?></div><div class="t m0 x1 h4 y3 ff2 fs0 fc0 sc0 ls0 ws0"><?=$alamat;?></div><div class="t m0 x1 h4 y4 ff2 fs0 fc0 sc0 ls0 ws0">Telp <span class="_ _0"> </span>: 62-21 <?=$telp?> (Hunting)</div><div class="t m0 x1 h4 y5 ff2 fs0 fc0 sc0 ls0 ws0">Fax<span class="_ _1"> </span>: 62-21 <?=$fax?></div></div><div class="c x2 y1 w3 h2"><div class="t m0 x3 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">DELIVERY NOTE</div><div class="t m0 x3 h4 y3 ff2 fs0 fc0 sc0 ls0 ws0">No. <span class="_ _2"> </span>: <?=$data['nodn']?></div><div class="t m0 x3 h4 y4 ff2 fs0 fc0 sc0 ls0 ws0">Date<span class="_ _3"> </span>: <?=$data['tanggal']?></div></div><div class="c x0 y6 w2 h5"><div class="t m0 x1 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">CUSTOMER</div><div class="t m0 x1 h4 y4 ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['cust']?></div></div><div class="c x2 y6 w3 h5"><div class="t m0 x3 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">DELIVER TO :</div><div class="t m0 x3 h4 y7 ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['kantor']?></div><div class="t m0 x3 h4 y4 ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['alamatkantor']?></div><div class="t m0 x3 h4 y5 ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['kotakantor']?></div></div><div class="c x0 y8 w4 h6"><div class="t m0 x4 h4 y9 ff2 fs0 fc0 sc0 ls0 ws0">No</div></div><div class="c x5 y8 w5 h6"><div class="t m0 x6 h4 y9 ff2 fs0 fc0 sc0 ls0 ws0">Description</div></div><div class="c x2 y8 w6 h6"><div class="t m0 x7 h4 y9 ff2 fs0 fc0 sc0 ls0 ws0">Unit</div></div><div class="c x8 y8 w7 h6"><div class="t m0 x9 h4 y9 ff2 fs0 fc0 sc0 ls0 ws0">Qty</div></div><div class="c xa y8 w8 h6"><div class="t m0 xb h4 y9 ff2 fs0 fc0 sc0 ls0 ws0">Remark</div></div><div class="c x0 ya w4 h2"><div class="t m0 xc h4 yb ff2 fs0 fc0 sc0 ls0 ws0">1</div></div><div class="c x5 ya w5 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['namabarang1']?></div><div class="t m0 x4 h4 y3 ff2 fs0 fc0 sc0 ls0 ws0">SN : <?=$data['sn1']?></div><div class="t m0 x4 h4 yc ff2 fs0 fc0 sc0 ls0 ws0">PN : <?=$data['pn1']?></div></div><div class="c x2 ya w6 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['unit1']?></div></div><div class="c x8 ya w7 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['qt1']?></div></div><div class="c xa ya w8 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['remark1']?></div></div><div class="c x0 yd w4 h2"><div class="t m0 xc h4 yb ff2 fs0 fc0 sc0 ls0 ws0">2</div></div><div class="c x5 yd w5 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['namabarang2']?></div><div class="t m0 x4 h4 y3 ff2 fs0 fc0 sc0 ls0 ws0">SN : <?=$data['sn2']?></div><div class="t m0 x4 h4 yc ff2 fs0 fc0 sc0 ls0 ws0">PN : <?=$data['pn2']?></div></div><div class="c x2 yd w6 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['unit2']?></div></div><div class="c x8 yd w7 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['qt2']?></div></div><div class="c xa yd w8 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['remark2']?></div></div><div class="c x0 ye w4 h2"><div class="t m0 xc h4 yb ff2 fs0 fc0 sc0 ls0 ws0">3</div></div><div class="c x5 ye w5 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['namabarang3']?></div><div class="t m0 x4 h4 y3 ff2 fs0 fc0 sc0 ls0 ws0">SN : <?=$data['sn3']?></div><div class="t m0 x4 h4 yc ff2 fs0 fc0 sc0 ls0 ws0">PN : <?=$data['pn3']?></div></div><div class="c x2 ye w6 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['unit3']?></div></div><div class="c x8 ye w7 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['qt3']?></div></div><div class="c xa ye w8 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['remark3']?></div></div><div class="c x0 yf w4 h2"><div class="t m0 xc h4 yb ff2 fs0 fc0 sc0 ls0 ws0">4</div></div><div class="c x5 yf w5 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['namabarang4']?></div><div class="t m0 x4 h4 y3 ff2 fs0 fc0 sc0 ls0 ws0">SN : <?=$data['sn4']?></div><div class="t m0 x4 h4 yc ff2 fs0 fc0 sc0 ls0 ws0">PN : <?=$data['pn4']?></div></div><div class="c x2 yf w6 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['unit4']?></div></div><div class="c x8 yf w7 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['qt4']?></div></div><div class="c xa yf w8 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['remark4']?></div></div><div class="c x0 y10 w4 h2"><div class="t m0 xc h4 yb ff2 fs0 fc0 sc0 ls0 ws0">5</div></div><div class="c x5 y10 w5 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['namabarang5']?></div><div class="t m0 x4 h4 y3 ff2 fs0 fc0 sc0 ls0 ws0">SN : <?=$data['sn5']?></div><div class="t m0 x4 h4 yc ff2 fs0 fc0 sc0 ls0 ws0">PN : <?=$data['pn5']?></div></div><div class="c x2 y10 w6 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['unit5']?></div></div><div class="c x8 y10 w7 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['qt5']?></div></div><div class="c xa y10 w8 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['remark5']?></div></div><div class="c x0 y11 w4 h2"><div class="t m0 xc h4 yb ff2 fs0 fc0 sc0 ls0 ws0">6</div></div><div class="c x5 y11 w5 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['namabarang6']?></div><div class="t m0 x4 h4 y3 ff2 fs0 fc0 sc0 ls0 ws0">SN : <?=$data['sn6']?></div><div class="t m0 x4 h4 yc ff2 fs0 fc0 sc0 ls0 ws0">PN : <?=$data['pn6']?></div></div><div class="c x2 y11 w6 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['unit6']?></div></div><div class="c x8 y11 w7 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['qt6']?></div></div><div class="c xa y11 w8 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['remark6']?></div></div><div class="c x0 y12 w4 h2"><div class="t m0 xc h4 yb ff2 fs0 fc0 sc0 ls0 ws0">7</div></div><div class="c x5 y12 w5 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['namabarang7']?></div><div class="t m0 x4 h4 y3 ff2 fs0 fc0 sc0 ls0 ws0">SN : <?=$data['sn7']?></div><div class="t m0 x4 h4 yc ff2 fs0 fc0 sc0 ls0 ws0">PN : <?=$data['pn7']?></div></div><div class="c x2 y12 w6 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['unit7']?></div></div><div class="c x8 y12 w7 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['qt7']?></div></div><div class="c xa y12 w8 h2"><div class="t m0 x4 h4 yb ff2 fs0 fc0 sc0 ls0 ws0"><?=$data['remark7']?></div></div><div class="c x0 y13 w9 h7"><div class="t m0 x7 h4 y14 ff2 fs0 fc0 sc0 ls0 ws0">No. PO<span class="_ _4"> </span>: </div><div class="t m0 x7 h4 y9 ff2 fs0 fc0 sc0 ls0 ws0">No. SI / MR<span class="_ _5"> </span>: </div></div><div class="c x2 y13 wa h7"><div class="t m0 x4 h4 y14 ff2 fs0 fc0 sc0 ls0 ws0">Date<span class="_ _6"> </span>:</div><div class="t m0 x4 h4 y9 ff2 fs0 fc0 sc0 ls0 ws0">Date<span class="_ _6"> </span>:</div></div><div class="c x0 y15 wb h8"><div class="t m0 xd h4 y16 ff2 fs0 fc0 sc0 ls0 ws0">Received By<span class="_ _7"> </span>Sender<span class="_ _8"> </span>Warehouse</div><div class="t m0 xe h4 y17 ff2 fs0 fc0 sc0 ls0 ws0">_________________<span class="_ _9"> </span><?=$data['sender']?><span class="_ _a"> </span><?=$data['warehouse']?></div></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
<div class="loading-indicator">

</div>
</body>
</html>
