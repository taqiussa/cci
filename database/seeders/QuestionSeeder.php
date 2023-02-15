<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions =
            [
                [
                    'priority' => 1,
                    'body' => 'Langit dan bumi diciptakan pada 6 masa (periode). Enam masa penciptaan keduanya meliputi penciptaan langit dan bumi setelah langit terbentuk. Hal ini sesuai dengan ….',
                    'answers' => json_encode([
                        "Q.S. al-A'raf/7: 44",
                        "Q.S. al-A'raf/7: 54",
                        "Q.S. al-Anbiya;'/21: 30",
                        "Q.S. al-Anbiya'/21: 40"
                    ]),
                    'correct' => 1,
                    'foto' => '',
                ],
                [
                    'priority' => 2,
                    'body' => '...',
                    'answers' => json_encode(['Suatu yang padu', 'Sebagai suatu kesatuan', 'Sesuatu yang melengkapi', 'Suatu yang tidak dapat dipisahkan']),
                    'foto' => 'no2.png',
                    'correct' => 0
                ],
                [
                    'priority' => 3,
                    'body' => "Makna Q.S. al-A'raf/7: 54 menjelaskan penciptaan langit dan bumi terjadi pada….",
                    'answers' => json_encode(['3 masa', '6 masa', '9 masa', '11 masa']),
                    'foto' => '',
                    'correct' => 1
                ],
                [
                    'priority' => 4,
                    'body' => '...',
                    'answers' => json_encode([1, 2, 3, 4]),
                    'correct' => 1,
                    'foto' => 'no4.png'
                ],
                [
                    'priority' => 5,
                    'body' => '	Islam merupakan agama yang sangat menghargai ilmu pengetahuan dan memerintahkan penganutnya untuk memiliki ilmu pengetahuan. Hal ini dibuktikan…',
                    'answers' => json_encode([
                        'Perintah menuntut ilmu bagi setiap muslim',
                        'Wahyu yang pertama kali turun berisi perintah untuk belajar',
                        'Pentingnya ilmu pengetahuan dalam upaya mengarungi kehidupan dunia',
                        'Adanya ayat yang menjelaskan tentang ilmu pengetahuan dan alam semesta'
                    ]),
                    'correct' => 0,
                    'foto' => ''
                ],
                [
                    'priority' => 6,
                    'body' => '	Alam beserta seluruh isinya merupakan bukti kekuasaan Allah Swt. Salah satu syarat penting bagi seseorang untuk memahami hal ini, yaitu….',
                    'answers' => json_encode([
                        'Memiliki guru yang tepat untuk memberikan pelajaran',
                        'Memiliki kapasitas keilmuan yang cukup',
                        'Dapat mengakses fasilitas ilmu',
                        'Beriman kepada Allah Swt.'
                    ]),
                    'correct' => 3,
                    'foto' => ''
                ],
                [
                    'priority' => 7,
                    'body' => '	Alam semesta yang dipelajari oleh manusia memiliki tujuan utama yaitu untuk memperbaiki kualitas hidupnya sebagai khalifah di bumi dan….',
                    'answers' => json_encode([
                        'Mendorong kesadaran untuk beriman dan semakin dekat kepada Allah Swt.',
                        'Menyediakan jalan menuju pencapaian manusia sempurna sebagai khalifah Allah',
                        'Menyediakan informasi untuk memanfaatkan kepercayaan Allah Swt.',
                        'Menjadi tanda bahwa manusia adalah makhluk yang berakal'
                    ]),
                    'correct' => 0,
                    'foto' => ''
                ],
                [
                    'priority' => 8,
                    'body' => '	Beriman kepada malaikat dapat mendatangkan hikmah, diantaranta mendorong untuk…',
                    'answers' => json_encode(['Senang membantu', 'Rajin belajar', 'Beribadah terus menerus', 'Bekerja siang dan malam']),
                    'correct' => 2,
                    'foto' => ''
                ],
                [
                    'priority' => 9,
                    'body' => '	Ciri - ciri yang benar tentang malaikat adalah...',
                    'answers' => json_encode(['Memiliki sifat-sifat tuhan', 'diciptakan dari cahaya', 'Memiliki sifat pemberontak', 'Dapat berkembang biak']),
                    'foto' => '',
                    'correct' => 1
                ],
                [
                    'priority' => 10,
                    'body' => 'Berikut yang bukan merupakan sifat malaikat adalah…',
                    'answers' => json_encode(['Melaksanakan perintah Allah Swt.', 'Tidak mempunyai nafsu', 'Senantiasa bertasbih kepada Allah Swt.', 'Senantiasa Takabur']),
                    'foto' => '', 'correct' => 3

                ],
                [
                    'priority' => 11,
                    'body' => '	Salah satu tanda beriman kepada malaikat Allah Swt. adalah…',
                    'answers' => json_encode(['Memohon perlindungan kepada malaikat karena kesuciannya', 'Malaikat akan menolong manusia yang taat beribadah', 'Karena malaikat makhluk gaib bisa menyerupai apa saja', 'Membiasakan perilaku terpuji karena seluruh amal dicatat oleh malaikat']),
                    'foto' => '',
                    'correct' => 3
                ],
                [
                    'priority' => 12,
                    'body' => '	Malaikat yang bertugas menurunkan air hujan adalah…',
                    'answers' => json_encode(['Malaikat Jibril', 'Malaikat Mikail', 'Malaikat Israfil','Malaikat Izrail']),
                    'correct' => 1,
                    'foto' => ''
                ],
                [
                    'priority' => 13,
                    'body' => 'Percaya kepada malaikat termasuk rukun...',
                    'answers' => json_encode(['Islam', 'Iman', 'Shalat', 'Haji']),
                    'foto' => '',
                    'correct' => 1
                ],
                [
                    'priority' => 14,
                    'body' => '	Percaya kepada malaikat termasuk rukun iman yang ke..',
                    'answers' => json_encode([1,2,3,4]),
                    'correct' => 1,
                    'foto' => ''
                ],
                [
                    'priority' => 15,
                    'body' => '	Dalam surah Fatir ayat 1, Allah swt. Menjelaskan salah satu bentuk malaikat, yaitu…',
                    'answers' => json_encode(['Memiliki taring', 'Memiliki sayap', 'Memiliki lingkaran putih diatas kepala' ,'Jumlahnya sangat banyak']),
                    'correct' => 1,
                    'foto' => ''
                ],
                [
                    'priority' => 16,
                    'body' => '	Orang yang menerima wahyu dari Allah untuk dirinya sendiri dan orang lain dinamakan ....',
                    'answers' => json_encode(['Nabi', 'Rosul', 'Malaikat', 'Kyai']),
                    'foto' => '',
                    'correct' => 1
                ],
                [
                    'priority' => 17,
                    'body' => '	Jumlah nabi yang wajib diimani umat islam ada ....',
                    'answers' => json_encode([10, 5, 25, 114]),
                    'foto' => '',
                    'correct' => 2
                ],
                [
                    'priority' => 18,
                    'body' => '	Sifat fatonah yang dimiliki seorang rosul berarti ....',
                    'answers' => json_encode(['Jujur', 'Menyampaikan', 'Pintar', 'Dapat dipercaya']),
                    'correct' => 2,
                    'foto' => ''
                ],
                [
                    'priority' => 19,
                    'body' => "Nabi yang mempunyai mu'jizat bisa berbahasa binatang adalah nabi ....",
                    'answers' => json_encode(['Muhammad', 'Isa', 'Sulaiman', 'Musa']),
                    'correct' => 2,
                    'foto' => ''
                ],
                [
                    'priority' => 20,
                    'body' => "Kegunaan mu'jizat yang dimiliki seorang nabi adalah sebagai berikut ....",
                    'answers' => json_encode(['Menyiksa kamu kafir', 'Berlaku sombong kepada musuh Allah', 'Mengalahkan musuh-musuh Allah', 'Menjadikan nabi bisa semena-mena karena kuat']),
                    'foto' => '',
                    'correct' => 2
                ],
                [
                    'priority' => 21,
                    'body' => "Nabi yang tidak mempan terbakar oleh api adalah ....",
                    'answers' => json_encode(['Nabi Muhammad', 'Nabi Isa', 'Nabi Luth', 'Nabi Ibrahim']),
                    'foto' => '',
                    'correct' => 3
                ],
                [
                    'priority' => 22,
                    'body' => "Nabi Nuh diperintahkan oleh Allah untuk membuat ....",
                    'answers' => json_encode(['Kapal', 'Tongkat', 'Gedung', 'Pedang']),
                    'foto' => '',
                    'correct' => 0
                ],
                [
                    'priority' => 23,
                    'body' => "Semua nabi menyebarkan ajaran yang sama yaitu berupa ajaran ....",
                    'answers' => json_encode(["Sufi", "Mu'jizat", "Takbir", "Tauhid"]),
                    'foto' => '',
                    'correct' => 3
                ],
                [
                    'priority' => 24,
                    'body' => "Orang tua yang harus dihormati terlebih dahulu adalah..",
                    'answers' => json_encode(['Paman', 'Nenek', 'Ibu', 'Bapak']),
                    'foto' => '',
                    'correct' => 2
                ],
                [
                    'priority' => 25,
                    'body' => "Ridha Allah SWT ada pada Ridha orang tua, dan murkanya Allah SWT ada pada murka orang tua, maksud hadits tersebut.. ",
                    'answers' => json_encode(['Kalau ingin masuk surga, cium kaki ibu', 'Kalau ingin dicintai Allah SWT, jauhilah orang tua', 'Kalau ingin mendapat ridha Allah, hormati orang tua ', 'Kalau ingin mendapat murka Allah SWT, sayangi orang tua']),
                    'foto' => '',
                    'correct' => 2
                ],
                [
                    'priority' => 26,
                    'body' => "Sering seorang siswa membeda-bedakan fungsi antara orang tua dan guru, padahal fungsi keduanya hampir sama. Di bawah ini adalah fungsi orang tua dan guru yang sama, kecuali..",
                    'answers' => json_encode(['Menjadi tempat mengadu', 'Merawat sehingga ia mandiri', 'Membina dan merawat', 'Memberi makan untuk pertumbuhan ']),
                    'foto' => '',
                    'correct' => 3
                ],
                [
                    'priority' => 27,
                    'body' => "Yang termasuk cara berbakti kepada orang tua dan guru adalah..",
                    'answers' => json_encode(['Meminta agar keduanya memberi hadiah', 'Meminta agar keduanya selalu membimbingnya ', 'Mendengarkan nasihatnya', 'Menceritakan keburukannya ']),
                    'foto' => '',
                    'correct' => 1
                ],
                [
                    'priority' => 28,
                    'body' => "Berikut ini hikmah yang bisa diambil dari berbakti kepada kedua orang tua adalah..",
                    'answers' => json_encode(['Hidup terasa sulit dan rumit', 'Diluaskan rezeki dan dipanjangkan umur', 'Allah akan murka terhadap kita', 'Menjadikan kita masuk neraka']),
                    'foto' => '',
                    'correct' => 1
                ],
                [
                    'priority' => 29,
                    'body' => "Guru adalah..",
                    'answers' => json_encode(['Orang yang mengajarkan kita melalaikan perintah Allah dan mendidik kita untuk mendurhakai orang tua', 'Orang yang mengajarkan kita dalam keburukan dan mendidik kita sehingga menjadi orang yang mengerti dan dewasa', 'Orang yang mengajarkan kita dengan berbagai ilmu pengetahuan dan mendidik kita sehingga menjadi orang yang mengerti dan dewasa ', 'Orang yang mencari uang untuk kebutuhan kita sehari hari ']),
                    'foto' => '',
                    'correct' => 2
                ],
                [
                    'priority' => 30,
                    'body' => "Dalam kajian akhlak Islam berbakti kepada orang tua dikenal dengan istilah...",
                    'answers' => json_encode(['Ihsanul-walidain', 'Uququl-walidain', 'Hurmatul-walidain', 'Birrul-walidain']),
                    'foto' => '',
                    'correct' => 3
                ],
                
            ];
        foreach ($questions as $item) {
            Question::create([
                'priority' => $item['priority'],
                'body' => $item['body'],
                'answers' => $item['answers'],
                'correct' => $item['correct'],
                'foto' => $item['foto']
            ]);
        }
    }
}
