@extends('layout.layout')

@section('title', 'Detail Akun')
@section('body')




    <section class="d-flex align-items-center" style="min-height:79vh;">
        <div class="container d-flex justify-content-center  mt-4 mb-5">

            <div class="p-4"
                style=" width: 380px; background: white; border: 2px solid #7bc88f; border-radius: 12px; box-shadow: 0px 2px 6px rgba(0,0,0,0.1); ">

                <!-- Judul -->
                <h5 class="text-center fw-bold mb-1">Detail Pembayaran</h5>
                <hr style="margin-top:4px; border:1px solid #222; ">

                <!-- Isi -->
                <div class=" d-flex flex-column align-items-center">
                    <table class="mb-4" style="width:100%; font-size:15px; line-height:1.8; margin-top:10px;">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>T01</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>PEOPLE +62</td>
                        </tr>
                        <tr>
                            <td>Nomor KK</td>
                            <td>:</td>
                            <td>28 AGUSTUS 2024</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>GAS LPG 3KG</td>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td>:</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>RP. 2.500</td>
                        </tr>
                    </table>
                    <button class="btn btn-danger px-4 fw-bold">blokir</button>
                </div>

            </div>
        </div>
    </section>
@endsection