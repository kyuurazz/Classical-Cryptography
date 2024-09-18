# Tugas Kriptografi
## Profil
| #               | Biodata           |
| --------------- | ----------------- |
| **Nama**        | Bilal AlHafidz    |
| **NIM**         | 312110397         |
| **Kelas**       | TI.21.A.1         |
| **Mata Kuliah** | Kriptografi       |

## Encryption Polyalphabetic Cipher
<p>Polyalphabetic Cipher adalah sebuah metode enkripsi yang digunakan untuk mengamankan pesan atau teks dengan mengganti karakter-karakter dalam teks asli dengan karakter-karakter lain berdasarkan suatu kunci. <br>Dalam sejarah, sandi polialfabet telah digunakan dalam berbagai konteks untuk menjaga kerahasiaan pesan, termasuk selama Perang Dunia dan masa lalu. Saat ini, teknik enkripsi yang jauh lebih canggih digunakan untuk melindungi komunikasi digital, tetapi pemahaman tentang konsep sandi polialfabet masih penting untuk belajar dasar-dasar kriptografi.</p>

### Cara Kerja

![cara_kerja](https://github.com/kyuurazz/Encryption-Caesar-Cipher/assets/91085882/103b209a-0089-4c76-9f05-828fb65b1748)

<p>Enkripsi Polyalphabetic Cipher bekerja dengan cara menggantikan setiap karakter dalam teks asli (plaintext) dengan karakter terenkripsi yang mungkin berbeda berdasarkan aturan yang ditentukan oleh sebuah kunci. Saya akan jelaskan setiap fungsi dan bagian dari program tersebut.</p>

1. Fungsi `polyalphabet_cipher_encrypt(plaintext, key)`: 
   - Ini adalah fungsi yang digunakan untuk mengenkripsi teks (plaintext) menggunakan sandi polialfabet. Fungsi ini memiliki dua parameter: `plaintext`, yang adalah teks yang akan dienkripsi, dan `key`, yang merupakan kunci yang digunakan untuk enkripsi.
   - Di dalam fungsi ini, ada sebuah variabel `alphabet` yang berisi alfabet kecil (a sampai z), dan variabel `encrypted_text` yang akan digunakan untuk menyimpan teks terenkripsi.
   - Fungsi ini kemudian mengiterasi melalui setiap karakter dalam `plaintext`. Jika karakter tersebut adalah huruf kecil dan terdapat dalam `alphabet`, maka karakter tersebut akan dienkripsi.
   - Enkripsi dilakukan dengan mencari indeks karakter dalam `alphabet`, kemudian mengambil karakter yang sesuai dari `key` (sesuai dengan indeks karakter dalam `alphabet`).
   - Hasil enkripsi disimpan dalam variabel `encrypted_text`, dan akhirnya, teks terenkripsi akan dikembalikan.

2. Fungsi `polyalphabet_cipher_decrypt(ciphertext, key)`:
   - Ini adalah fungsi yang digunakan untuk mendekripsi teks terenkripsi (ciphertext) yang telah dihasilkan sebelumnya menggunakan kunci yang sama. Fungsi ini memiliki dua parameter: `ciphertext`, yang merupakan teks terenkripsi, dan `key`, yang merupakan kunci yang sama yang digunakan untuk enkripsi.
   - Fungsi ini juga menggunakan variabel `alphabet` yang berisi alfabet kecil dan variabel `decrypted_text` yang akan menyimpan teks hasil dekripsi.
   - Fungsi ini mengiterasi melalui setiap karakter dalam `ciphertext`. Jika karakter tersebut adalah huruf kecil dan terdapat dalam `alphabet`, maka karakter tersebut akan didekripsi.
   - Dekripsi dilakukan dengan mencari indeks karakter dalam `key`, kemudian mengambil karakter yang sesuai dari `alphabet` (sesuai dengan indeks dalam `key`).
   - Hasil dekripsi disimpan dalam variabel `decrypted_text`, dan akhirnya, teks hasil dekripsi akan dikembalikan.

Setelah mendefinisikan kedua fungsi tersebut, program utama dimulai. Program utama meminta pengguna untuk memasukkan sebuah kunci, kemudian menggabungkan kunci tersebut dengan alfabet kecil. Ini dilakukan untuk membuat kunci yang unik, sehingga setiap karakter dalam alfabet akan dienkripsi ke karakter yang berbeda.

Selanjutnya, program utama adalah sebuah loop tak terbatas (while True) yang memberikan opsi kepada pengguna untuk melakukan enkripsi, dekripsi, atau keluar dari program. Pilihan pengguna ditangani oleh variabel `choice`.

- Jika pengguna memilih '1', program akan meminta pengguna untuk memasukkan teks plaintext dan kemudian menggunakan fungsi `polyalphabet_cipher_encrypt` untuk mengenkripsinya.
- Jika pengguna memilih '2', program akan meminta pengguna untuk memasukkan teks terenkripsi (ciphertext) dan kemudian menggunakan fungsi `polyalphabet_cipher_decrypt` untuk mendekripsinya.
- Jika pengguna memilih '3', program akan keluar dari loop dan program selesai.

Seluruh program ini memberikan pengguna kemampuan untuk mengenkripsi dan mendekripsi teks menggunakan sandi polialfabet dengan kunci yang telah diinputkan.

## Output

- Encrypt

![encryption](https://github.com/kyuurazz/Encryption-Caesar-Cipher/assets/91085882/a58886c6-e6f5-4b83-a3a7-bb1769dc89e0)

- Decrypt

![decryption](https://github.com/kyuurazz/Encryption-Caesar-Cipher/assets/91085882/4d37f18c-8569-44bf-80da-87d9260abd7d)

## Terima Kasih!