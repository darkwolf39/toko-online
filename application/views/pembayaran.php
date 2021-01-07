<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "<h4>Total Belanja Anda : Rp. ".number_format($grand_total, 0,',','.');
                } ?>

            </div><br><br>

            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?php echo base_url() ?> dashboard/proses_pesanan" method="POST">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomer Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select name="" id="" class="form-control">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">POS Indonesia</option>
                        <option value="">J&T</option>
                        <option value="">GOJEK</option>
                        <option value="">GRAB</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Pembayaran</label>
                    <select name="" id="" class="form-control">
                        <option value="">BCA - 2490503113</option>
                        <option value="">BNI - 0489363127</option>
                        <option value="">OVO - 085747561726</option>
                        <option value="">GOPAY - 085747561726</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mt-3">Pesan</button>
            
            </form>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>
