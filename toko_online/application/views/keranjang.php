<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Sub-total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) : ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $items['name'] ?></td>
                    <td><?= $items['qty'] ?></td>
                    <td align="right">Rp. <?= number_format($items['price'], 0, ",", ".") ?></td>
                    <td align="right">Rp. <?= number_format($items['subtotal'], 0, ",", ".") ?></td>
                </tr>

            <?php endforeach; ?>
            <tr>
                <td colspan="4">
                <td align="right">Rp. <?= number_format($this->cart->total(), 0, ",", ".") ?></td>
                </td>
            </tr>
        </tbody>
    </table>

    <div align="right">
        <a href="<?php echo base_url('Dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
        <a href="<?php echo base_url('Dashboard/index') ?>"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
        <a href="<?php echo base_url('Dashboard/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
    </div>
</div>