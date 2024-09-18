import os

os.system('cls')
nama = "Bilal AlHafidz"
nim = "312110397"
kelas = "TI.21.A1"

print("=" *42)
print(f"| Nama \t\t|  {nama} \t |")
print(f"| NIM \t\t|  {nim} \t\t |")
print(f"| Kelas \t|  {kelas} \t\t |")
print("=" *42)

def text_ke_biner(text):
    try:
        hasil_biner = ""
        for char in text:
            hasil_biner += format(int(char, 16), '04b')
        return hasil_biner
    except ValueError:
        raise ValueError("Input Harus Berupa String Hexadecimal!")

def validasi_key(key):
    try:
        key_int = int(key, 2)
        return format(key_int, '0' + str(len(key)) + 'b')
    except ValueError:
        raise ValueError("Key Harus Berupa Angka Biner!")

def biner_ke_text(binary):
    hasil_hexadecimal = ""
    for i in range(0, len(binary), 4):
        hasil_hexadecimal += hex(int(binary[i:i+4], 2))[2:]
    return hasil_hexadecimal.upper()

def ecb_encrypt(plaintext_hex, key_bin):
    try:
        plaintext_bin = text_ke_biner(plaintext_hex)
        key_bin = validasi_key(key_bin)
        key_len = len(key_bin)
        encrypt_blocks = []

        for i in range(0, len(plaintext_bin), key_len):
            block = plaintext_bin[i:i+key_len]
            hasil_xor = ''.join(str(int(x) ^ int(y)) for x, y in zip(block, key_bin))
            shift_block = hasil_xor[1:] + hasil_xor[0]
            encrypt_blocks.append(shift_block)

        encrypt_hexadecimal = biner_ke_text(''.join(encrypt_blocks))
        return list(encrypt_hexadecimal)
    except ValueError as e:
        print("Error:", e)

plaintext_hex = input("Masukan Plaintext (Heksadesimal) : ")
key_bin = input("Masukan Key (Biner) : ")
result = ecb_encrypt(plaintext_hex, key_bin)
if result:
    print("Hasil Enkripsi :", result)
    print()
