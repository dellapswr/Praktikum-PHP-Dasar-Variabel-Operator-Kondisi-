<?php
// menu_result.php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: menu_form.php'); exit; }

// definisi menu sama seperti form (penting: server-side harus punya sumber kebenaran)
$menu = [
  'nasi_goreng' => ['label'=>'Nasi Goreng', 'price'=>20000, 'stock'=>5],
  'mie_ayam'    => ['label'=>'Mie Ayam', 'price'=>15000, 'stock'=>1],
  'sate'        => ['label'=>'Sate Ayam', 'price'=>25000, 'stock'=>3],
  'bakso'       => ['label'=>'Bakso', 'price'=>18000, 'stock'=>4]
];

$dish = filter_input(INPUT_POST, 'dish', FILTER_SANITIZE_STRING);
$qty_raw = filter_input(INPUT_POST, 'qty', FILTER_VALIDATE_INT);

if (!$dish || !isset($menu[$dish])) {
    $error = "Pilihan menu tidak valid.";
} elseif ($qty_raw === false || $qty_raw === null || $qty_raw < 1) {
    $error = "Jumlah harus bilangan bulat positif.";
} else {
    $qty = (int)$qty_raw;
    $item = $menu[$dish];
    if ($qty > $item['stock']) {
        $error = "Maaf, stok {$item['label']} hanya {$item['stock']}.";
    } else {
        // contoh menggunakan switch-case (sesuai permintaan)
        switch ($dish) {
            case 'nasi_goreng': $price = $item['price']; $name = $item['label']; break;
            case 'mie_ayam':    $price = $item['price']; $name = $item['label']; break;
            case 'sate':        $price = $item['price']; $name = $item['label']; break;
            case 'bakso':       $price = $item['price']; $name = $item['label']; break;
            default: $error = "Menu tidak dikenali."; break;
        }
        if (!isset($error)) {
            $subtotal = $price * $qty;
        }
    }
}
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><title>Pesanan</title><link rel="stylesheet" href="style.css"></head>
<body>
  <div class="container form-container">
    <h2>Detail Pesanan</h2>
    <?php if (!empty($error)): ?>
      <div class="error"><?=htmlspecialchars($error)?></div>
      <a class="back" href="menu_form.php">← Kembali</a>
    <?php else: ?>
      <div class="result">
        <p>Menu: <strong><?=htmlspecialchars($name)?></strong></p>
        <p>Harga satuan: <strong>Rp <?=number_format($price,0,',','.')?></strong></p>
        <p>Jumlah: <strong><?=htmlspecialchars((string)$qty)?></strong></p>
        <p>Total: <strong>Rp <?=number_format($subtotal,0,',','.')?></strong></p>
      </div>
      <a class="back" href="menu_form.php">← Pesan lagi</a>
    <?php endif; ?>
  </div>
</body></html>
