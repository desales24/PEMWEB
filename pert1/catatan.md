## Penjelasan HTML
html merupakan bahasa general yang digunakan untuk develops website

## Penjelasan docker 
### **Struktur File**
```yaml
version: '3'
```
Bagian ini menentukan versi *Docker Compose* yang digunakan. 
### **Definisi Layanan (Services)**
#### **1. Layanan `web` (Nginx)**
```yaml
services:
  web:
    image: nginx:latest
```
- Mendefinisikan layanan bernama **`web`**.
- Menggunakan *image* **Nginx versi terbaru** (`nginx:latest`) dari *Docker Hub*.

#### **2. Konfigurasi Port**
```yaml
    ports:
      - 80:80
```
- *Mapping* **port 80 pada host/os** ke **port 80 dalam container**.
- Artinya, aplikasi dalam container dapat diakses melalui **http://localhost:80**.

#### **3. Volumes**
```yaml
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
      - ./src:/usr/share/nginx/html
```
- **`./nginx/nginx.conf:/etc/nginx/conf.d/default.conf`**  
  - Menghubungkan file konfigurasi **nginx.conf** dari folder lokal `./nginx/` ke dalam container di lokasi `/etc/nginx/conf.d/default.conf`.
  - Ini memungkinkan Anda untuk menyesuaikan konfigurasi Nginx tanpa perlu membangun ulang container.

- **`./src:/usr/share/nginx/html`**  
  - Menghubungkan folder `./src` dari sistem lokal ke dalam container di lokasi `/usr/share/nginx/html`.
  - Folder ini adalah tempat menyimpan file HTML atau aplikasi web statis yang akan dilayani oleh Nginx.

## Penjelasan .env
- COMPOSE_PROJECT_NAME untuk menamakan projek kita 
- REPOSITORY_NAME di gunakan untuk menamakan repository 
- IMAGE_TAG untuk memberi nama versi projek (sewaktu bisa berubah)

## penjelasan Nginx.conf
### **Struktur Konfigurasi**
```nginx
server {
    listen 80;
    server_name localhost;
```
- **`listen 80;`**  
  - Nginx akan mendengarkan *request* pada **port 80** (HTTP).  
- **`server_name localhost;`**  
  - Nama server yang digunakan adalah **localhost**, sehingga hanya bisa diakses secara lokal atau melalui domain yang diarahkan ke **127.0.0.1**.

---

```nginx
    root /usr/share/nginx/html;
    index index.html;
```
- **`root /usr/share/nginx/html;`**  
  - Direktori utama (*document root*) untuk menyimpan file yang akan ditampilkan.  
  - Semua file HTML akan diambil dari folder **`/usr/share/nginx/html`** (sesuai dengan pengaturan volume di `docker-compose.yml`).  
- **`index index.html;`**  
  - Jika ada permintaan ke **`/`** (halaman utama), maka Nginx akan menampilkan **index.html**.

---

```nginx
    location / {
        try_files $uri $uri/ =404;
    }
```
- **`location /`**  
  - Mengatur aturan untuk menangani permintaan ke **root path (`/`)**.  
- **`try_files $uri $uri/ =404;`**  
  - Mencoba mencocokkan permintaan dengan:  
    1. **File yang sesuai dengan path** (`$uri`).  
    2. **Folder yang sesuai dengan path** (`$uri/`).  
    3. **Jika tidak ditemukan, akan mengembalikan error 404** (`=404`).  

---

### **Cara Kerja**
1. Jika pengguna mengakses **`http://localhost`**, maka:
   - Nginx akan mencari file **index.html** di dalam **`/usr/share/nginx/html`**.
   - Jika **index.html** ada, maka akan ditampilkan.
   - Jika file tidak ditemukan, Nginx akan mengembalikan **error 404**.

2. Jika pengguna mengakses file lain, misalnya **`http://localhost/about.html`**:
   - Nginx akan mengecek apakah **about.html** ada di `/usr/share/nginx/html/`.
   - Jika ada, file akan ditampilkan.
   - Jika tidak ada, akan mengembalikan **error 404**.
