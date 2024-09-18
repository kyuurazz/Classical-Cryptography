# Electronic Code Book (ECB) Encryption

## Pendahuluan

Program Python ini merupakan implementasi sederhana dari Enkripsi Electronic Code Book (ECB). ECB adalah metode blok dasar yang mengenkripsi setiap blok plaintext secara independen, membuatnya sederhana namun kurang aman dibandingkan dengan metode lain. Program ini menerima input atau masukan berupa teks heksadesimal dan kunci biner, melakukan enkripsi ECB, dan menghasilkan output terenkripsi.

## Penggunaan

1. Clone repositori:

    ```bash
    git clone https://github.com/kyuurazz/Encryption-Electronic-Code-Book.git
    ```

2. Masuk ke direktori proyek:

    ```bash
    cd Encryption-Electronic-Code-Book
    ```

3. Jalankan program:

    ```bash
    python main.py
    ```

4. Masukkan teks heksadesimal dan kunci biner seperti yang diminta.

## Format Masukan

- **Plaintext (Heksadesimal):** Plaintext harus disediakan dalam format heksadesimal.
- **Kunci (Biner):** Kunci enkripsi harus disediakan dalam format biner.

## Fungsi-fungsi

- `text_ke_biner(text)`: Mengonversi string heksadesimal ke biner.
- `validasi_key(key)`: Memvalidasi dan mengonversi kunci biner.
- `biner_ke_text(binary)`: Mengonversi string biner ke heksadesimal.
- `ecb_encrypt(plaintext_hex, key_bin)`: Melakukan enkripsi ECB pada plaintext dan kunci yang diberikan.

## Example

![Example](https://github.com/kyuurazz/Encryption-Electronic-Code-Book/assets/91085882/e422a576-03ec-4f44-a306-a20cd3169742)

### Selamat mengenkripsi! 🚀
