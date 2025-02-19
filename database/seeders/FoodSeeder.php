<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'category_id' => 1,
            'Province_id' => 1,
            'Food_Name' => 'Sayur Babanci',
            'slug' => 'sayur-babanci',
            'Food_Excerpt' => 'Sayur Babanci adalah salah satu hidangan ikonik khas Betawi yang kini mulai langka. Kelangkaan ini disebabkan karena bahan dan rempah-rempah untuk membuat hidangan ini sudah sulit ditemukan di Jakarta.',
            'Recipes_Excerpt' => '1 ikat daun melinjo',
            'Recipes' => '
            1 buah bawang merah
            1 buah bawang putih
            2 sendok ketumbar
            2 buah bunga lawang
            3 buah cabe merah
            2 buah kemiri
            1 buah kunyit
            ',
            'Cook' => '
            <p>1. Rebus daging tetelan bersama air hingga matang dan empuk. Angkat, saring. Sisihkan kaldunya.
            Panaskan minyak. Tumis bumbu 1, daun salam, dan serai hingga harum. Tambahkan gula merah dan garam. Aduk rata. Angkat.
            </p><p>2. Masukkan bumbu ke dalam kaldu. Panaskan kembali kaldu di atas api kecil. Tuang air kelapa muda dan santan. Masukkan daging dan tetelan.
            </p><p>3. Masak sambil diaduk perlahan hingga mendidih (jaga agar santan tidak pecah). Masukkan bumbu 2 dan kelapa sangrai.
            </p><p>4. Masak hingga bumbu meresap. Masukkan daging kelapa muda, aduk rata. Angkat.
            </p><p>5. Resep Masakan Sayur Babanci Asli Betawi yang Lezat siap disajikan dengan bahan pelengkap.</p>',
            'image' => 'food-1.png',
            'Cooking_Level' => 'Hard',
            'Cooking_Image' => 'Sayur-Babanci.jpg',
            'Cooking_Image2' => 'sayur-babanci.png',
            'Cooking_Time' => 85,
            'Rating' => 4,
            'Total_Rating' => '178',
        ]);
        Food::create([
            'category_id' => 2,
            'Food_Name' => 'Soto Padang',
            'slug' => 'soto-paddang',
            'Province_id' => 2,
            'Food_Excerpt' => 'Soto Padang adalah hidangan berkuah kaldu sapi dengan bahan irisan daging sapi yang sudah digoreng kering, bihun (mie dari tepung beras), ditambah perkedel kentang dan dihidangkan panas-panas. ',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => 'Bahan :
            - 500 gram daging sapi (campur dengan tulang supaya kaldunya lebih kerasa).
            - 2 liter air.
            - minyak goreng untuk menumis.
            Bahan cemplung :
            - 2 batang sereh digeprek.
            - 3 lembar daun salam.
            - 4 lembar daun jeruk.
            - 5 buah kapulaga.
            - 8 kelopak bunga lawang.
            - 5 buah cengkeh.
            - 4 cm kayu manis.
            - 2 batang daun bawang diiris.
            Bumbu halus :
            - 10 siung bawang putih.
            - 6 buah bawang merah.
            - 3 ruas lengkuas.
            - 2 ruas jahe.
            - 1 ruas kunyi.
            - 1 sdt pala bubuk.
            - 1 sdm ketumbar bubuk.
            - 2 sdt lada bubuk.
            - garam.
            Bumbu pelengkap :
            - sohun siram dengan air panas, rendam sebentar, angkat dan tiriskan.
            - perkedel kentang.
            - kerupuk merah.
            - sambal.
            - seledri diiris halus.
            - bawang goreng.
            - kecap.
            - cuka.',
            'Cook' => '
            <p>1. Rebus daging sampai mendidih keluar buihnya, buah buih yang mengapung, masukkan semua bahan cemplung, lanjutkan merebus sampai daging empuk, masukan daun bawang, tunggu layu, matikan kompor, angkat daging, dan tunggu dingin.
            </p><p>2. Panaskan minyak goreng, tumis bumbu halus sampai wangi, campur bumbu yang sudah ditumis ke dalam air rebusan daging, masak sebentar sampai bumbu dan kaldu menyatu. koreksi rasa.
            </p><p>3. Iris tipis daging yang sudah direbus, kemudian goreng sampai garing.
            </p><p>4. Tata sohun, daging didalam mangkok, siram dengan kuah soto, beri kerupuk, perkedel, seledri dan sambal.
            </p><p>5. Sajikan.',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Medium',
            'Cooking_Image' => 'Soto-Padang.jpg',
            'Cooking_Image2' => 'soto-padang.png',
            'Cooking_Time' => 90,
            'Rating' => 5,
            'Total_Rating' => '2',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Bubur Manado',
            'slug' => 'bubur-manado',
            'Province_id' => '3',
            'Food_Excerpt' => 'Bubur Manado adalah salah satu kuliner khas dari Manado (Sulawesi Utara). Bahan dasar masakan ini adalah beras yang dicampur sayuran seperti kangkung, daun kemangi, ubi merah/ kuning, dan jagung pipil. Disantap dengan hidangan pelengkap seperti ikan tongkol atau ikan asin bersama sambal dabu-dabu.',
            'Recipes_Excerpt' => '
            Bahan:
            - 200 gram beras.
            - 2 buah jagung manis dipipil.
            - 150 gram singkong potong dadu.
            - 100 gram ubi kuning, potong dadu.
            ...
            ',
            'Recipes' => '
            Bahan:
            - 200 gram beras.
            - 2 buah jagung manis dipipil.
            - 150 gram singkong potong dadu.
            - 100 gram ubi kuning, potong dadu .
            - 1 kg labu kuning, kukus dan lumatkan dengan garpu.
            - 4 liter air atau tambahkan sesuai kebutuhan.
            Bahan sayur:
            - 5 lembar daun gedi,rajang halus .
            - 1 lembar daun kunyit,rajang sehalus mungkin.
            - 2 batang daun bawang, rajang halus.
            - 1 ikat kangkung, ambil daun dan pucuk mudanya, rajang kasar
            - 1 ikat kecil bayam, ambil daun.
            - 1 mangkuk kemangi, dari 5 ikat kecil kemangi, ambil daun dan pucuk mudanya saja.',
            'Cook' => '<p>1. Cuci bersih beras,lalu di panci masukkan air, beras, singkong, ubi masak dengan api kecil sampai singkong dan ubi lembut.
            </p><p>2. Masukkan bawang putih, bawang merah, daun salam dan serai sambil terus diaduk, masukkan jagung dan labu kuning.
            </p><p>3. Tambahkan air bila diperlukan, masukkan garam lada dan kaldu jamur aduk rata lagi. </p>
            <p>4. Setelah beras sudah menjadi bubur terakhir masukan semua sayuran aduk rata, koreksi rasa, angkat.</p>',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'Bubur-Manado.jpg',
            'Cooking_Image2' => 'bubur-manado.png',
            'Cooking_Time' => 90,
            'Rating' => 4,
            'Total_Rating' => '3',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Sop Konro',
            'slug' => 'sup-konro',
            'Province_id' => '1',
            'Food_Excerpt' => 'Sup konro adalah masakan sup iga sapi khas Indonesia yang berasal dari tradisi Bugis dan Makassar.[1] Sup ini biasanya dibuat dengan bahan iga sapi atau daging sapi.[1][2] Masakan berkuah warna coklat kehitaman ini biasa dimakan dengan burasa dan ketupat yang dipotong-potong terlebih dahulu.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => 'Bahan :
            - 1 kg iga sapi.
            - 1700 ml air.
            - 1/2 butir kelapa parut kemudian disangrai hingga kering lalu dihaluskan.
            - 1 lembar daun salam.
            - 2 lembar daun jeruk.
            - 2 cm kayu manis.
            - Daun bawang dan Daun Seledri secukupnya.
            - Minyak secukupnya untuk menumis.
            - Gula pasir,garam,kaldu sapi bubuk secukupnya.
            Bumbu halus :
            - 10 siung bawang merah.
            - 6 siung bawang putih.
            - 4 butir kemiri.
            - 1 buah kluwak.
            - 5 batang sereh.
            - Serimpang lengkuas.
            - 2 cm kunyit.
            - 1/2 sdt merica bubuk.
            - 1 sdt jinten bubuk.
            - 1 sdt ketumbar bubuk.
            - 1/4 pala bubuk.
            Bahan pelengkap :
            - Nasi putih atau buras.
            - Bawang goreng.
            - Sambel & jeruk nipis.
            ',
            'Cook' => '<p>1. Presto iga sapi hingga empuk dengan air secukupnya,saring ambil kaldunya 1 liter.
            </p><p>2. Pindahkan kepanci biasa,masukan iga dan kaldunya lalu tambah air biasa 700 ml atau secukupnya.
            </p><p>3. Tumis bumbu halus dengan minyak secukupnya hingga wangi,lalu masukan kedalam panci iga,masukan juga daun salam,daun jeruk,kayu manis dan kelapa sangrai yang dihaluskan,aduk rata,beri gula garam dan kaldu sapi bubuk,didihkan cek rasa.
            </p><p>4. Masukan potongan daun seledri dan daun bawang secukupnya didihkan sebentar matikan api.
            </p><p>5. Sajikan dimangkok saji lalu taburi bawang goreng.</p>',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'Sop-Konro.jpg',
            'Cooking_Image2' => 'sop-konro.png',
            'Cooking_Time' => 90,
            'Rating' => 5,
            'Total_Rating' => '1',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Sate lilit khas Bali',
            'slug' => 'sate-lilit-ayam-khas-bali',
            'Province_id' => '1',
            'Food_Excerpt' => 'Sate lilit merupakan salah satu kuliner yang dapat kita temukan di Bali dan memiliki cita rasa luar biasa sedap. Seperti namanya, sate lilit adalah sate yang dibuat dengan cara melilitkan bahan baku pada tusuk sate.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => 'Bahan :
            - 300 gr daging ayam (giling).
            - 100 gr kelapa parut.
            - 1 butir telur ayam.
            - 2 sdm tapioka.
            - 5 siung bawang merah.
            - 4 siung bawang putih.
            - 3 biji kemiri (sangrai).
            - 1 cm kunyit (bakar).
            - 2 cm kencur.
            - 1 cm lengkuas.
            - 1 cm jahe.
            - 5 buah cabe rawit (boleh lebih).
            - 1 cm terasi (bakar).
            - secukupnya garam & merica.
            - 20 batang bambu atau serai.',
            'Cook' => '<p>1. Haluskan bawang merah,bawang putih, kunyit, cabai, kemiri, jahe, kencur, lengkuas dan terasi
            </p><p>2. Campurkan ayam giling,telur,tapioka,dan kelapa. Beri garam dan merica secukupnya.
            </p><p>3. Tumis bumbu halus hingga harum lalu campurkan kedalam adonan daging ayam. Aduk rata.
            </p><p>4. Panaskan Grill Pan dengan api sedang. Ambil sedikit adonan. Masak hingga matang. Lalu cicipi rasanya hingga pas.
            </p><p>5. Jika rasa sudah pas. Ambil adonan secukupnya dan lilitkan pada batang Bambu atau Batang serai. Lalu panggang di Grill Pan hingga matang.
            </p><p>6. Untuk Sambal matah : iris bawang merah,daun jeruk,cabai,dan batang serai bagian putihnya saja. Beri sejumput garam. panaskan 2 sdm minyak masukkan terasi. goreng hingga terasi hancur bercampur minyak. lalu campurkan pada bahan irisan. Aduk rata, siap dihidangkan.</p>',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'Sate-lilit.jpg',
            'Cooking_Image2' => 'sate-lilit.png',
            'Cooking_Time' => 90,
            'Rating' => 4,
            'Total_Rating' => '278',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Candil ketan',
            'slug' => 'candil-ketan',
            'Province_id' => '1',
            'Food_Excerpt' => 'Candil adalah makanan berupa bubur yang terbuat dari tepung ketan, gula merah dan santan. Tepung ketan ditambahkan sedikit tepung kanji dan air dingin dibentuk bulat dan direbus di dalam air gula dan dihidangkan dengan disiram kuah santan.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => '
            Bahan :
            - 200 gr tepung ketan.
            - 30 g tepung tapioka. Tepung beras atau boleh tepung ketan saja.
            - 1/3 sdt garam.
            - secukupnya air hangat sampai adonan bisa dipulung.
            Bahan kuah :
            - 150 gula merah, disisir.
            - 800 ml air.
            - 2 lembar daun pandan ditali simpul.
            Bahan larutan pengental :
            - 1 sdm tepung ketan atau boleh lebih jika suka kuah yang kental.
            - 1 sdm tepung beras atau boleh lebih jika suka kuah yang kental.
            - Campur semua bahan dan tambahkan sedikit air, aduk hingga larut dan tidak ada yang bergerindil.
            Bahan kuah santan :
            - 400 ml santan kental.
            - 1/4 sdt garam.
            - Secukupnya buah nangka dipotong kotak kecil2 ( opsional).
            Rebus kuah santan hingga mendidih bersama garam dan daun pandan. Matikan api. Masukan potongan nangka.',
            'Cook' => '
            <p>1. Campur tepung ketan, tepung tapioka dan garam, tuangi air hangat secukupnya sampai adonan lembut dan enak buat dipulung ( kalau terlalu lembek boleh ditambahi tepung ketan lagi).
            </p><p>2. Siapkan nampan, taburi tipis2 dengan tepung kanji.
            </p><p>3. Ambil secuil adonan bentuk bulat sebesar kelereng. Susun di atas nampan. Lakukan sampai adonan habis
            </p><p>4. Masak semua bahan kuah kuah gula merah hingga gula larut dan mendidih.
            </p><p>5. Saring lalu masak lagi sampai mendidih.
            </p><p>6. Masukkan bola bola ketan. Masak dengan api kecil hingga gula meresap dan warna bola bola ketan berubah kecoklatan.
            </p><p>7. Masukkan larutan tepung , aduk pelan sampai kental dan meletup2.
            </p><p>8. Jika kurang kental bisa ditambahkan tepung ketan/ tepung beras yang dicairkan lalu dimasak lagi sampai kental.
            </p><p>9. Sajikan dengan kuah santan.</p>',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'Candil-ketan.jpg',
            'Cooking_Image2' => 'candil.ketan.png',
            'Cooking_Time' => 90,
            'Rating' => 0,
            'Total_Rating' => '0',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Krengsengan koyo',
            'slug' => 'krengsengan-koyo',
            'Province_id' => '1',
            'Food_Excerpt' => 'Krengsengan juga merupakan makanan yang sangat populer di daerah Jawa, mulai dari Jawa Timur, Jawa Tengah, hingga Jogjakarta. Bahan utama dari krengsengan ini adalah daging.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => 'Bahan:
            - 300gr daging campur (koyor,urat,tetelan) rebus hingga empuk, potong-potong
            - 1buah bawang bombay,rajang
            - 1batang daun bawang,rajang
            Bumbu:
            - 1sdm margarin
            - 2sdm baceman bawang
            - 1ruas kecil jahe,geprek
            - 1sdt lada hitam (pakai lada putih boleh)
            - 15cabe rawit (sesuai selera),rebus,lalu haluskan
            - 1sdm kecap inggris
            - 1sdt kecap asin
            - 4sdm kecap manis (sesuai selera)
            - 1sdt minyak wijen
            - Gula,garam,kaldu bubuk secukupnya.',
            'Cook' => '
            <p>1. Panaskan wajan,tumis baceman bawang bersama margarin,bawang bombay dan jahe hingga harum
            </p><p>2. Beri air secukupnya,masukkan potongan daging yang telah direbus
            </p><p>3. Masukkan ulekan cabe dan bumbui dengan kecap inggris,kecap asin,kecap manis,gula,garam,lada hitam dan juga kaldu bubuk aduk-aduk hingga rata
            </p><p>4. Kecilkan api,tunggu hingga bumbu meresap
            </p><p>5. Terakhir koreksi rasa,taburi dengan irisan daun bawang dan juga minyak wijen,aduk sebentar lalu angkat dan sajikan bersama nasi panas</p>',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'Kresengan-Sapi.jpg',
            'Cooking_Image2' => 'kresengan-sapi.png',
            'Cooking_Time' => 90,
            'Rating' => 0,
            'Total_Rating' => '0',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Rawon Surabaya',
            'slug' => 'rawon-surabaya',
            'Province_id' => '4',
            'Food_Excerpt' => 'Rawon merupakan salah satu masakan khas Jawa Timur khususnya Surabaya. Masakan berkuah ini menggunakan keluak sehingga warnanya hitam. Bagian daging sapi yang biasa untuk masak rawon adalah sengkel dan sadung lamur.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => 'Bahan:
            - 500 gram daging sapi, bagian sandung lumur
            - Air untuk merebus daging
            - 1.500 ml air kaldu sapi
            - 3 sdm minyak goreng, untuk menumis
            - 1 sdm garam
            Haluskan:
            - 6 siung bawang putih
            - 4 biji keluak (ambil isinya, lalu rendam dalam air)
            - 8 buah cabai merah
            - 2 ibu jari lengkuas
            - 3 cm kunyit
            - 2 cm kencur
            - 2 cm jahe
            - 2 sdm ketumbar
            - 1/4 sdt jintan
            - 1/2 sdt merica butir
            - 4 lembar daun salam
            - 2 batang serai, memarkan
            - 2 mata asam jawa, larutkan dengan 1 sdm air
            - 5 lembar daun jeruk purut
            Pelengkap:
            - Tauge pendek/kecambah
            - Telur bebek asin
            - Sambal terasi
            - Kerupuk ikan',
            'Cook' => '
            <p>1. Cuci daging sampai bersih, rebus sampai matang. Angkat dan tiriskan daging, lalu potong ukuran dadu. Sisihkan daging dan air kaldunya.
            </p><p>2. Panaskan minyak, tumis bumbu halus sampai harum dan matang. Masukkan daging, serai, daun jeruk, air asam, dan garam. Aduk sampai rata dan beraroma.
            </p><p>3. Pukul-pukul daging sampai melebar. Goreng dalam minyak panas sebentar, angkat. Taburi dengan bawang goreng </p>',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'Rawon-Surabaya.jpg',
            'Cooking_Time' => 90,
            'Rating' => 3.5,
            'Total_Rating' => '2',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Urap khas Lombok Timur',
            'slug' => 'urap-khas-lombok-timur',
            'Province_id' => '5',
            'Food_Excerpt' => 'Urap (kadang dieja urab atau disebut jamak urap-urap) (bahasa Jawa: ꦈꦫꦥ꧀) adalah hidangan selada berupa sayuran yang dimasak (direbus) yang dicampur kelapa parut yang dibumbui sebagai pemberi citarasa.[1] Urap lazim ditemukan dalam masakan Indonesia, akan tetapi jika ditelusuri, urap berasal dari khazanah masakan Jawa.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => 'Bahan :
            - 1 ikat daun singkong
            - 5 biji kacang panjang
            - 1 genggam toge
            - 3 buah kecipir
            - 1/2 buah kelapa
            - 10 buah cabe rawit
            - 1 sdt Terasi bakar khas lombok
            - Jeruk purut diambil kulitnya
            - 2 siung bawang putih
            - Garam
            - Gula',
            'Cook' => '
            <p>1. Rebus semua sayuran, sisihkan
            </p><p>2. Bakar kelapa hingga kecoklatan dan mengeluarkan aroma
            </p><p>3. Untuk bumbu giling cabe, terasi, garam, gula hingga lembut
            </p><p>4. Parut bawang putih, kulit jeruk purut, dan kelapa diatas bumbu kemudian aduk jd 1 dengan sayuran
            </p><p>5. Sertakan bawang goreng diatasnya jika ada </p>',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'Urap-Lombok.jpg',
            'Cooking_Time' => 90,
            'Rating' => 3,
            'Total_Rating' => '2',
        ]);
    }
}
