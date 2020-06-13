<?php
/**
* Verisanat v.4 https://onurgunescomtr@bitbucket.org/onurgunescomtr/verisanat-v.4.git, Onur Güneş.
* facebook: https://www.facebook.com/onur.gunes.developer
* twitter: https://twitter.com/onurgunescomtr
* verisanat: https://www.verisanat.com/iletisim
* kişisel: https://www.onurgunes.com.tr
* email: onurgunes@verisanat.com

 * @package		Verisanat v.4.1.2 - Açık Kaynak Kodlu Modüller v.4.1.2 ve sonrası ( repo: https://github.com/onurgunescomtr/verisanat-v.4-modul )
 * @author		Onur Güneş - https://www.facebook.com/onur.gunes.developer - https://www.twitter.com/onurgunescomtr
 * @copyright	Copyright (c) 2012 - 2020, Onur Güneş (https://www.verisanat.com, https://www.onurgunes.com.tr)
 * @license		AGPL-3.0 License
 * @link		https://www.verisanat.com
*/

final class MerhabaDunyaYapi extends ModulYapi{

    /**
     * @var string $modulversiyonu modül versiyonu. // Zorunlu.
     */
    protected $modulversiyonu = '4.1.2';
    /**
     * @var string $moduladi Modül adı. // Zorunlu.
     */
    protected $moduladi = 'merhabadunya';

    use GenelFormYapisi;
    use GenelModulOgeler;


    /*  __construct() çalışma prensibini belirtmek için eklenmiştir. Modül oluştururken eklenmesine gerek yoktur.

    1- Aktifleştirilmiş modüllerin varsa gerekli işlemlerini yapabilmeleri için,
    2- Veri paylaşım izni bulunuyorsa diğer modüller ile veri değişimi yapabilmeleri için,
    3- Ana modül öğesi (kendisi değilse) ile etkileşime girebilmesi için,

    her modülde vardır.

    */
    /* public function __construct($up = null,$sabit = null){


        $this->islemal($up); URL kontrol objesinden iletilen array i işler.

        $this->sabital($sabit); Uygulama kontrol objesinden iletilen array i işler.

        $this->aktifmoduller(); Diğer modüller ile olan etkileşimi başlatır ve modül objesine dahil eder.

    } */

    /**
     * @method mdislem()
     * @param string $as ana-sayfa istegi yada normal modul işlevi
     * @param array $msabit uygulama kontrolden iletilen sabitler
     */
    /*  Çalışma prensibini belirtmek için eklenmiştir. Modül oluştururken eklenmesine gerek yoktur.

        Obje içinde
        "anahat" her zaman çerçeve objesini,
        "genelsayfa" her zaman temel sayfa objesini
        barındırır.

    public function mdislem($as = null,$msabit = null){

        $this->temel = new TemelYapi304f582;
        $this->anahat = new UygulamaCerceve304f582(gx304f582('d'));
        $this->genelsayfa = new TemelSayfaYapisi304f582;

        $this->modulbilgiver();
        $this->ekrandegistir();
        $this->istekisle($as);
        $this->basla();

        $this->anaislem();


    } */


    /**
     * @method basla() html öğeleri uygulama seçeneklerine göre hazırlar ve ekranolustur() a iletir.
     */

    /*  basla()
        Çalışma prensibini belirtmek için eklenmiştir. Modül oluştururken eklenmesine gerek yoktur.

        basla() fonksiyonu eğer web sitesi yani html döküman özelliği taşınması gerekli ise zorunludur.

        Uygulama çerçevesine modülün işlem ve varsa ekişlem öğelerini iletir.
        Modüle özgü ana menü kullanılmak istenirse çerçeveye iletebilir.
        Modülde <head> 'te yer alması gereken farklı referanslar varsa çerçeveye iletebilir. "<", "/" gibi karakterleri kabul eder. İlgili array yapısı genel dokümantasyonda bulunmaktadır.

        bodybasla() fonksiyonu iki string değişkeni div id ve div class kabul edebilir. örn. <body id="vuejs" class="demoBoilerPlate">
        modulgoster() fonksiyonu display:none özelliğinde bir div ile modülün adını ve nerede (ana sayfada / işlemde) çalıştığını gösterir, isteğe bağlıdır.
        iletiver() fonksiyonu ve bilgi kutuları uygulama yapısından gelen hata / başarılı / uyarı mesajlarını html öğelerle sayfanın en üstünde (toast / statik) gösterir.

    */

    /* private function basla(){

        $this->anahat->cercevedestek($this->islem,$this->ekislem);

        // $this->anahat->modulmenu($this->anamenu); // Modüle özgü ana menü, private array $anamenu

        $this->temel->istekkayit(http_response_code(),'Istek kaydi', $this->kullanici,8,8,$this->islem,$this->ekislem,$this->tamsorgu);

        $this->ekranolustur($this->anahat->headver($this->headekle));

        $this->ekranolustur($this->genelsayfa->bodybasla()); // govdeid - govdesinif

        $this->ekranolustur($this->modulgoster($this->moduladi));

        $this->ekranolustur($this->modulbilgikutulari);

        $this->ekranolustur($this->iletiver());


    } */

    /**
     * @method modulanasayfa() ana sayfada yer alacak modül işlemlerini gerçekleştirip ekranolustur() a aktarır
     */
    /*
        Web sitesi yani html döküman özelliği taşıması gerekli olan uygulamalarda ana sayfada yer alacak öğelerin oluşturulması için zorunludur.

        Tek bir modül kullanılıyorsa yada ana modul olarak belirlenmişse zorunludur.

        Eğer modülün ana sayfa öğesi bulunmuyorsa, işlevi başka bir modüle destek olmak ise (helper) tanımlanmayabilir.


    */

    private function modulanasayfa(){

        $this->ekranolustur($this->anahat->cercevemenu());

        $this->genelsayfa->anasayfaverisi = $this->modulverisial('tomar');

        // tomar: dergi modul "yapi"sının adıdır.

        // Bu örnekteki adıyla:
        // $this->genelsayfa->anasayfaverisi = $this->modulverisial('ilkmodul');


        $this->ekranolustur($this->genelsayfa->kapsa($this->genelsayfa->yerlestir(6)));

        // 6 sayısı ana sayfada bulunacak toplam öğe adedi olan değişkenin karşılığıdır. Örnek amaçlı int olarak verilmiştir.

        // kapsa() fonksiyonu sayfa objesinde ön tanımlıdır. Emmet Abbreviation örneğiyle div.container>div.row oluşturur.

        // yerlestir() fonksiyonu sayfa objesinde ön tanımlıdır. Her bir modül öğesini kendi düzeninde (kutusunda), ve hepsini birlikte toplar.
        // kutular ve toplayıcı html öğeler, modül içinde değiştirilebilir. Bu yüzden bir şablona (template - tema) ihtiyaç yoktur.

        // Örn, $this->genelsayfa->kucukparca = '<div class="yeni-html-class-adi baska-class-adi">_VS_</div>';

        /*  Kolay okunabilir örnek:

            $this->ekranolustur(                        ekrana (browser'a - request'e) gönderilecek öğe

                $this->genelsayfa->kapsa(               html css kapsayıcı

                    $this->genelsayfa->yerlestir(6)     html css düzenlenmiş, toparlanmış öğeler.

                )
            );

        */

        $this->ekranolustur($this->genelsayfa->altkisim());

        // altkisim() fonksiyonu ön tanımlı fakat uygulama adına göre düzenlenmiş footer html öğesini verir.
    }

    /**
     * @method modularayuz() modül arayüz talebine yönelik işlemleri gerçekleştirip gerekliyse ekranolustur() a aktarır
     */
    /*
        modularayuz() her modul için zorunludur. Uygulama içinde işlem olarak barınır.

        Gelen taleplere (Örn, https://www.domain.com/modul-yaratiyorum/merhaba?RASTGELESTRINGBLOGU=yeni-merhaba-ogesi) modül karşılayıcısıdır.

        Karşılayıcı: modül özelliklerinin tanımlandığı json dosyasında "arayuz" olarak tanımlanır. Örn, domain.com/modul-yaratiyorum

        Verisanat v.4'te, bazı uygulama yapılarında ve modül yapılarında sabit değişken adı bulunmaz.
        Yukarıdaki örnekte yer alan "yeni-merhaba-ogesi" ne $this->bir ile erişebilirsiniz.

        Modül yetkinliklerine dokümantasyonda yer vereceğim.

    */
    private function modularayuz(){

        // Ana menüyü kaldıralım.
        // $this->ekranolustur($this->anahat->cercevemenu());


        // html-düzensiz text bir karşılama hazırlayalım.
        $this->ekranolustur('Merhaba Türkiye!');


        // bir html öbeği ekleyelim.
        $this->ekranolustur(

            $this->htmltest('merhaba-dosyasi.html')
            // Verisanat v.4 Yönetim panelinden de salt html (body - head içermeyen) dosyalarını test etmenize olanak verir.

        );


        // html-düzenli, mobil ekranlar için kaydırdıkça ekranın üstüne sabitlenen bir başka karşılama yazalım.
        $this->ekranolustur(

            $this->genelsayfa->mobilsayfabasligi('Merhaba Türkiye !')

        );


        // footer ı da kaldıralım.
        // $this->ekranolustur($this->genelsayfa->altkisim());

        /*
            domain.com/modul-yaratiyorum adresinde görüntülenebilir.

            Verisanat hesabı ile kendi sub domain'inizde de deneyebilirsiniz. 13.06.2020 tarihi itibarıyla bu özellik dokümantasyonla birlikte hazırlanmaktadır.
        */
    }
}





















?>