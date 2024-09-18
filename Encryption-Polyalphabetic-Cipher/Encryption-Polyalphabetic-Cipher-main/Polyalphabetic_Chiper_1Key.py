import os
from termcolor import colored

def polyalphabet_cipher_encrypt(plaintext, key):
    alphabet = 'abcdefghijklmnopqrstuvwxyz'
    encrypted_text = ''

    for char in plaintext:
        if char in alphabet:
            char_index = alphabet.index(char)
            key_char = key[char_index % len(key)]
            encrypted_text += key_char

    return encrypted_text

def polyalphabet_cipher_decrypt(ciphertext, key):
    alphabet = 'abcdefghijklmnopqrstuvwxyz'
    decrypted_text = ''

    for char in ciphertext:
        if char in alphabet:
            char_index = key.index(char)
            decrypted_text += alphabet[char_index]

    return decrypted_text

os.system('cls')

abjad = "abcdefghijklmnopqrstuvwxyz"
kunci = input("Masukkan kunci: ").lower()
hasil = kunci + abjad
key = "".join(dict.fromkeys(hasil))

while True:
    print()
    print("Pilihan:")
    print("1. Enkripsi")
    print("2. Dekripsi")
    print("3. Keluar")

    choice = input("Masukkan pilihan (1/2/3): ")

    if choice == '1':
        plainteks = input("Masukkan plaintext: ").lower()
        hasil_enkripsi = polyalphabet_cipher_encrypt(plainteks.replace(" ", ""), key) 
        print(colored(f"Hasil Enkripsi: {str(hasil_enkripsi)}", 'green'))
    elif choice == '2':
        ciphertext = input("Masukkan ciphertext: ").lower()
        hasil_dekripsi = polyalphabet_cipher_decrypt(ciphertext, key) 
        print(colored(f"Hasil Dekripsi: {str(hasil_dekripsi)}", 'green'))
    elif choice == '3':
        print("Terima Kasih!")
        break
    else:
        print("Pilihan tidak valid. Silakan pilih 1, 2, atau 3.")
