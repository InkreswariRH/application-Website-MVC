- Folder public ini akan berisi folder dan file yang dapat diakses oleh user karena sifatnya bersifat umum.

- Dalam folder public ini akan berisi folder:
   - css
   - js
   - img
   - index
   - htaccess

- Karena folder ini merupakan folder yang berisi file index.php, maka folder public ini lah yang menjadi folder utama saat website diakses. 

- File htacces yang ada di dalam folder public ini berisi sintaks berikut:

      Options -Multiviews

      RewriteEngine On
      RewriteCond %{REQUEST_FILENAME} !-d
      RewriteCond %{REQUEST_FILENAME} !-f
      RewriteRule ^(.*)$ index.php?url=$1 [L]

   maksud dari sintaks tersebut adalah untuk mengambil string yang diketikkan di url oleh user. Nantinya string tersebut akan ditangkap untuk kemudian masuk ke proses routing.

   
   Maksud dari sintaks Options -Multiviews adalah untuk menghindari kesalahan atau ambiguitas saat kita memanggil file/folder di dalam folder public ini.

   Maksud dari sintaks RewriteEngine On adalah memulai proses penulisan ulang url.

   Maksud dari kedua sintaks RewriteCond %{REQUEST_FILENAME} !-d dan RewriteCond %{REQUEST_FILENAME} !-f adalah untuk mencegah atau menghindari apabila nantinya terdapat nama folder (d) atau file (f) yang sama dengan nama controller dan atau method kita.

    RewriteRule ^(.*)$ index.php?url=$1 [L]

      - arti sintaks tersebut ditujukan untuk mengatur penulisan ulang URL.
      - maksud dari ^ adalah setelah kata kunci 'public/' yang ada di dalam URL, mulai diambil stringnya.
      - maksud dari (.*) adalah ambil satu per satu karakter (.) kecuali karakter enter, yang diambil adalah semua karakter (*).
      - maksud dari $ adalah sampai karakter habis.

      - Lalu string url yang telah diambil, diletakkan di setelah 'index.php?url=' melalui $1 (tanda dolar lalu angka 1).
      - maksud dari [L] adalah jika rule sudah selesai dikerjakan, maka berhenti. Jangan memproses rule baru lagi. Hanya sekali dalam satu waktu proses.

- Karena file .htaccess yang berisi konfigurasi penulisan ulang URL nya berada di dalam folder public, maka url defaultnya akan menjadi localhost/phpmvc/public/ 
Kalo konfigurasi .htaccess nya ditaruh di dalam folder lain, maka url defaultnya juga beda lagi.





