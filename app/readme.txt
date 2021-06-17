Folder app ini akan berisi file-file dan folder-folder utama dari aplikasi berbasis MVC ini.

Folder app ini tidak akan bisa diakses oleh user.

Folder app ini akan berisi folder dan file seperti:
   - core 
      -> folder yang berisi file-file utama aplikasi seperti untuk pengaturan routing, controller utama yang mengatur folder-folder controller dalam aplikasi, folder database, dsb.

   - models
     -> folder yang berisi file-file yang berkaitan dengan data atau business logic dari aplikasi. Misalkan contoh sederhana, pada folder models ini, nantinya akan ada banyak file yang isinya itu bagaimana untuk mendapatkan data / mengambil data dari database. Atau yang paling sederhananya lagi, kita ingin mengambil data array, nah data array ini disimpan dalam file yang yang ada di dalam folder model.

   - views
      -> folder yang isinya itu mengatur tampilan dari aplikasi. Dalam folder view ini akan berisi folder-folder, yang mana tiap folder merupakan representasi dari 1 file di dalam folder controllers. Kemudian nanti di dalam folder view, akan terdapat beberapa file yang sebenarnya merupakan representasi dari method yang ada di dalam file controller.
      
      Jadi, 1 file controller yang ada di dalam folder controllers, direpresentasikan dengan 1 folder view. Lalu tiap method yang ada di dalam file controller tersebut, akan direpresentasikan dengan 1 file di dalam folder view controller yang bersangkutan.

      Isi dari file view seputar bagaimana tampilan dari halaman website seharusnya.

   - controllers
      -> folder berisi halaman dari website. Controllers ini akan berisi banyak file, dimana tiap file ini merepresentasikan 1 halaman dari website kita. Jadi tiap file yang ada di controller, mewakili fitur dari website kita. 

   - init.php
      -> file ini berfungsi untuk memanggil file-file lain, karena nantinya file init ini akan dipanggil oleh file index di folder public sebagai jembatan komunikasi antar file atau bisa dikenal dengan teknik bootstraping.

      Teknik bootstraping adalah teknik dimana, kita hanya memanggil 1 file, kemudian 1 file yang dipanggil ini lah yang akan memanggil file-file lain dari aplikasi kita, sehingga kita bisa terhubung dengan semua file yang ada di aplikasi kita hanya melalui 1 panggilan file (init).

   - file App.php
      file ini dalam project ini berfungsi sebagai konfigurasi routing URL.

   - file Controller.php
      file ini berfungsi sebagai parent yang mengatur semua file-file controller yang ada di dalam folder controllers. 

   - file htaccess
      file htaccess yang dibuat dalam folder app ini berfungsi sebagai blocking, agar user tidak bisa mengakses folder app ini.

      Dalam file htaccess ini berisi sintaks:
         
         Options -Indexes

      yang artinya, jika tidak ada file index di dalam seluruh folder yang ada di dalam folder app ini, maka berarti folder app ini tidak boleh diakses oleh user.
   
