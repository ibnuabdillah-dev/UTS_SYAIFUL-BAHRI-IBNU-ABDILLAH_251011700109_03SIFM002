<?php

namespace Database\Seeders;

use App\Models\Snack;
use Illuminate\Database\Seeder;

class SnackSeeder extends Seeder
{
    public function run(): void
    {
        Snack::truncate();

        $data = [
            ['Keripik Singkong Original', 'Gurih original', 12000, 150, 'ori.png',
             'Keripik singkong tipis yang digoreng renyah dengan sentuhan garam yang pas. Rasanya gurih sederhana, cocok untuk semua kalangan dan enak dimakan kapan saja. Dibuat dari singkong pilihan dan diolah dengan proses yang higienis.'],
            ['Keripik Singkong Balado', 'Pedas manis', 13000, 150, 'balado.png',
             'Keripik singkong tipis yang digoreng renyah lalu dibalut bumbu balado pedas manis. Setiap gigitan terasa gurih, sedikit pedas, dan manis di akhir, sehingga susah berhenti di satu genggam.'],
            ['Keripik Pisang', 'Manis legit', 12000, 150, 'kripik-pisang.png',
             'Irisan pisang pilihan yang digoreng garing hingga berwarna keemasan. Rasa manis alami pisangnya terasa legit dan renyah, pas jadi teman minum teh atau kopi di sore hari.'],
            ['Makaroni Pedas', 'Pedas', 10000, 100, 'makaroni-pedas.png',
             'Makaroni goreng yang dilumuri bumbu pedas gurih. Teksturnya garing dan bumbunya meresap sampai ke dalam, cocok untuk kamu yang suka camilan dengan sensasi pedas.'],
            ['Makaroni Keju', 'Keju gurih', 11000, 100, 'makaroni-keju.png',
             'Makaroni renyah dengan taburan bumbu keju yang gurih dan sedikit asin. Camilan favorit anak-anak maupun dewasa yang enak dinikmati saat santai atau kumpul keluarga.'],
            ['Kacang Atom', 'Gurih renyah', 15000, 200, 'kacang-atom.png',
             'Kacang tanah yang dibalut adonan tepung bumbu lalu digoreng hingga garing. Lapisan luarnya renyah dan gurih, sementara bagian dalamnya tetap kacang yang legit dan wangi.'],
            ['Kacang Bawang', 'Bawang gurih', 14000, 200, 'kacang-bawang.png',
             'Kacang tanah gurih yang digoreng bersama bawang putih sehingga aromanya harum. Rasanya sederhana tapi bikin nagih, cocok jadi teman nonton atau bekerja.'],
            ['Basreng Pedas', 'Pedas daun jeruk', 16000, 100, 'basreng-pedas.png',
             'Bakso goreng yang diiris tipis dan digoreng kering, lalu diberi bumbu pedas dengan aroma daun jeruk yang segar. Teksturnya garing dan bumbunya kuat di setiap potongan.'],
            ['Keripik Kentang', 'Barbeque', 13000, 120, 'keripik-kentang.png',
             'Irisan kentang tipis yang digoreng garing dengan bumbu barbeque yang gurih dan sedikit manis berasap. Renyah di setiap gigitan dan pas untuk dibawa bepergian.'],
            ['Stik Keju', 'Keju', 12000, 100, 'stik-keju.png',
             'Stik renyah berbentuk panjang yang dipanggang dan digoreng dengan campuran keju asli. Aromanya gurih, teksturnya garing, dan mudah dinikmati kapan saja.'],
        ];

        foreach ($data as [$name, $flavor, $price, $weight, $image, $description]) {
            Snack::create(compact('name', 'flavor', 'price', 'weight', 'image', 'description'));
        }
    }
}
