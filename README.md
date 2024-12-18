
## Kelas D Kelompok 10

### Anggota Kelompok:
- Atanasius Fiko Primawardana (220711652) - Backend & Autentikasi Middleware dan Integrasi
- Lana Marcel Argya N. (220711681) - Frontend & Integrasi
- Taura Fransiskus Darsono (210711410) - Frontend

### Username & Password Login:
- Login User:
    - Email       : lana@gmail.com
    - Password    : lana1234
    - Email       : rafael@gmail.com
    - Password    : 12345678
- Login Admin:
    - Email       : adminsmak@sch.co.id
    - Password    : adminsmak    

## Informasi Penting
Setelah melakukan composer install harap untuk
Menambahkan autentikasi untuk Admin dan Siswa agar dapat melakukan login, ke dalam directory berikut :
PW_D_10_Laravel\vendor\laravel\framework\src\Illuminate\Foundation\Http 
pada $routeMiddleware
'admin.auth' => \App\Http\Middleware\AdminAuthenticated::class,
'siswa.auth' => \App\Http\Middleware\SiswaAuthenticated::class


