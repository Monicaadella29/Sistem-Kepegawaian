<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Data Diri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Riwayat Data Diri">
        <div class="wrap mb-[10px] md:mb-[35px] flex flex-col md:flex-row justify-start md:justify-between items-start md:items-center">
            <p class="text-[14px] md:text-[16px]">Berikut tampilan Data Diri anda</p>
            <div class="btnn flex items-center gap-2">
                <a href="/dashboard/riwayat-diri/pengajuan-diri"
                    class="bt1 hover:bg-[#4F8EA5] bg-[#2F5B6B] text-white flex items-center gap-2 p-1 px-2 text-center rounded">
                    <div class="ic">
                        <img src="../Assets/pengajuan2.svg" alt="">
                    </div>
                    <div class="text-[14px]">Riwayat Pengajuan</div>
                </a>
                <a href="/dashboard/riwayat-diri/tambah-diri"
                    class="bt1 hover:bg-[#4F8EA5] bg-[#2F5B6B] text-white flex items-center gap-2 p-1 px-2 text-center rounded">
                    <div class="ic">
                        <img src="../Assets/tambah.svg" alt="">
                    </div>
                    <div class="text-[14px]">Tambah Data</div>
                </a>
            </div>
        </div>

        <div class="wrap-content">
            <div class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                <div class="wrap">
                    <div class="text-[18px] font-medium">Kartu Tanda Pengenal</div>
                </div>
                <a href="/dashboard/riwayat-diri/lihat-diri" class="link">
                    <img src="../Assets/book.svg" alt="">
                </a>
            </div>
            <div class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                <div class="wrap">
                    <div class="text-[18px] font-medium">Nomor Pokok Wajib Pajak</div>
                </div>
                <a href="/dashboard/riwayat-diri/lihat-diri" class="link">
                    <img src="../Assets/book.svg" alt="">
                </a>
            </div>
            <div class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                <div class="wrap">
                    <div class="text-[18px] font-medium">BPJS Kesehatan</div>
                </div>
                <a href="/dashboard/riwayat-diri/lihat-diri" class="link">
                    <img src="../Assets/book.svg" alt="">
                </a>
            </div>
        </div>
    </x-sidebar-user>
</body>

</html>