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


class Dd542aa7aDergi extends Model{

    public function ozet(){

        return $this->bas810hee17sb; // karıştırılmıştır (obfuscated). Detaylar için Paris, http://github.com/j4mie/paris adresinden bilgi alabilirsiniz.

    }
}

final class Dd542aa7aDergiYapi extends ModulYapi{

    /**
     * @var string $modulversiyonu modül versiyonu
     */
    protected $modulversiyonu = '4.1.2';
    /**
     * @var string $moduladi Modül adı.
     */
    protected $moduladi = 'dergi';

    use GenelFormYapisi;
    use GenelModulOgeler;

    /**
     * @method ogeyanbarver() dergi sayfalarında bulunan yan barı döndürür. Varsayılan bar sağ taraftadır (yanmenuver()).
     */
    private function ogeyanbarver(){

        $yanbar = $this->genelsayfa->genelbilgi($this->moduladi);

        $yanbar .= $this->genelsayfa->facebookbegen($this->anahat->urlolustur($this->islem,$this->ekislem));

        $yanbar .= $this->genelsayfa->iletisimbutonu($this->anahat->cevir('contact_us')); // dil seçeneği aktif olsa da olmasa da dil desteği kullanılabilir.

        $t = $this->genelsayfa->yanmenuver($yanbar);

        return $t;
    }

    /**
     * @method sayfaver() dergi sayfalarını döndürür.
     */
    private function sayfaver(){

        $sayfa = $this->genelsayfa->ogever($this->sn->adi,$this->sn->foto,$this->sn->yazi,$this->genelsayfa->facebooksayfaeki($this->anahat->urlolustur($this->islem,$this->ekislem)));

        $sayfa .= $this->ogeyanbarver();

        return $sayfa;
    }

    /**
     * @method modulanasayfa() ana sayfada yer alacak modül işlemlerini gerçekleştirip ekranolustur() a aktarır
     */
    private function modulanasayfa(){

        $this->ekranolustur($this->anahat->cercevemenu());

        $this->ekranolustur($this->genelsayfa->altkisim());
    }

    /**
     * @method modularayuz() modül arayüz talebine yönelik işlemleri gerçekleştirip gerekliyse ekranolustur() a aktarır
     */
    private function modularayuz(){

        $this->nesnebul();

        $this->ekranolustur($this->anahat->cercevemenu());

        $this->ekranolustur($this->genelsayfa->kapsa($this->sayfaver()));

        $this->ekranolustur($this->genelsayfa->altkisim());
    }
}



?>