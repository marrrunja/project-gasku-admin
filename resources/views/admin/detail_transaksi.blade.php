@extends('layout.layout')

@section('title', 'Detail Transaksi')
@section('body')




    <section class="d-flex align-items-center" style="min-height:79vh;">
        <div class="container d-flex justify-content-center  mt-4 mb-5">

            <div class="p-4"
                style=" width: 380px; background: white; border: 2px solid #7bc88f; border-radius: 12px; box-shadow: 0px 2px 6px rgba(0,0,0,0.1); ">

                <!-- Judul -->
                <h5 class="text-center fw-bold mb-1">Detail Pembayaran</h5>
                <hr style="margin-top:4px; border:1px solid #222; ">

                <!-- Isi -->
                <table style="width:100%; font-size:15px; line-height:1.8; margin-top:10px;">
                    <tr>
                        <td style="width:45%;">ID_TRANSAKSI</td>
                        <td style="width:5%;">:</td>
                        <td>T01</td>
                    </tr>
                    <tr>
                        <td>NAMA_PEMBELI</td>
                        <td>:</td>
                        <td>PEOPLE +62</td>
                    </tr>
                    <tr>
                        <td>TANGGAL_TRANSAKSI</td>
                        <td>:</td>
                        <td>28 AGUSTUS 2024</td>
                    </tr>
                    <tr>
                        <td>PRODUK</td>
                        <td>:</td>
                        <td>GAS LPG 3KG</td>
                    </tr>
                    <tr>
                        <td>KUANTITAS</td>
                        <td>:</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>BIAYA AMIN</td>
                        <td>:</td>
                        <td>RP. 2.500</td>
                    </tr>
                    <tr style="font-weight:bold;">
                        <td>TOTAL</td>
                        <td>:</td>
                        <td>RP. 30.500</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
@endsection