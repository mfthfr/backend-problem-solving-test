# Balanced Bracket (Penjelasan jawaban soal ketiga)

## Deskripsi Masalah

Program ini dirancang untuk memeriksa apakah sebuah string yang mengandung tanda kurung (bracket) seimbang atau tidak. Sebuah string disebut seimbang jika setiap bracket buka memiliki pasangan bracket tutup yang benar, sesuai dengan aturan berikut:

1. **Karakter Valid:** Tanda kurung yang diperbolehkan adalah `(`, `)`, `{`, `}`, `[`, dan `]`.
2. **Aturan Penutupan:** Bracket buka harus ditutup dengan bracket tutup yang sesuai dalam urutan yang benar.
3. **Tidak Ada Karakter Tersisa:** Setelah proses pemeriksaan selesai, tidak boleh ada bracket buka yang belum ditutup.

## Kompleksitas Algoritma

1. **Waktu (Time Complexity):**
   - Setiap karakter dalam string diperiksa satu kali.
   - Operasi `push` dan `pop` pada stack adalah O(1).
   - Kompleksitas total:  
     ✪ **O(n)**, dengan `n` adalah panjang string input.

2. **Ruang (Space Complexity):**
   - Dalam kasus terburuk, stack menyimpan hingga `n` elemen (jika semua karakter adalah bracket buka).
   - Kompleksitas total:  
     ✪ **O(n)**.

---

## Penjelasan Hasil

- **Input:** `{[()]}`
  - Semua bracket memiliki pasangan yang sesuai: `{}` → `[]` → `()`.
  - **Output:** `YES`

- **Input:** `{[(])}`
  - Bracket `[ ]` tidak cocok karena diapit oleh `(` dan `)`.
  - **Output:** `NO`

- **Input:** `{(([])[])[]}`
  - Semua bracket memiliki pasangan yang sesuai meskipun strukturnya kompleks.
  - **Output:** `YES`

---

## Kontributor
**Miftah Farid Ramdhani**

