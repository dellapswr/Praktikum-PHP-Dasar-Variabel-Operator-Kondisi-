<?php
// menu_form.php
// Definisi menu (jika ingin, simpan di DB; sekarang array saja)
$menu = [
  'nasi_goreng' => [
    'label' => 'Nasi Goreng',
    'price' => 20000,
    'stock' => 5,
    'img'   => 'img/nasi_goreng.jpg'
  ],
  'mie_ayam' => [
    'label' => 'Mie Ayam',
    'price' => 15000,
    'stock' => 1,
    'img'   => 'img/mie_ayam.jpg'
  ],
  'sate' => [
    'label' => 'Sate Ayam',
    'price' => 25000,
    'stock' => 3,
    'img'   => 'img/sate.jpg'
  ],
  'bakso' => [
    'label' => 'Bakso',
    'price' => 18000,
    'stock' => 4,
    'img'   => 'img/bakso.jpg'
  ]
];

?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><title>Menu Makanan</title><link rel="stylesheet" href="style.css">
<script>
const menu = <?php echo json_encode($menu, JSON_HEX_TAG|JSON_HEX_AMP); ?>;
function updateInfo() {
  const sel = document.getElementById('dish').value;
  const info = document.getElementById('menu-info');
  if (!sel) { info.innerHTML = ''; document.getElementById('qty').max = 1; return; }
  const m = menu[sel];
  info.innerHTML = `<p><strong>${m.label}</strong> — Harga: Rp ${m.price.toLocaleString()} — Stok: ${m.stock}</p><img src="${m.img}" alt="${m.label}" style="max-width:150px;border-radius:8px">`;
  document.getElementById('qty').max = m.stock;
  document.getElementById('qty').min = 1;
  if (document.getElementById('qty').value > m.stock) document.getElementById('qty').value = m.stock;
}
</script>
</head>
<body>
  <div class="container form-container">
    <h2>Menu Makanan</h2>
    <form action="menu_result.php" method="post">
      <label for="dish">Pilih menu</label>
      <select id="dish" name="dish" onchange="updateInfo()" required>
        <option value="">--Pilih menu--</option>
        <?php foreach($menu as $key=>$m): ?>
          <option value="<?=htmlspecialchars($key)?>"><?=htmlspecialchars($m['label'])?></option>
        <?php endforeach; ?>
      </select>
      <div id="menu-info" class="small" style="margin-top:8px"></div>
      <label for="qty">Jumlah</label>
      <input id="qty" name="qty" type="number" value="1" min="1" required />
      <button type="submit">Pesan</button>
    </form>
    <a class="back" href="index.php">← Kembali ke Menu</a>
  </div>
</body></html>