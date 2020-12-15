<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\Workers\WorkerCategoryRepository;
use App\Services\Workers\WorkerService;
use App\Models\Workers\WorkerCategory;
use App\Http\Requests\Workers\Worker\StoreWorkerRequest;

class WorkerSeeder extends Seeder
{
    /**
     * @var array
     */
    private array $worker = [
        'name' => [
            'ru' => 'ALEXANDRU GRECU',
            'ro' => 'ALEXANDRU GRECU',
            'en' => 'ALEXANDRU GRECU',
        ],
        'title' => [
            'ru' => 'Artist Emerit',
            'ro' => 'Artist Emerit',
            'en' => 'Artist Emerit',
        ],
        'text_1' => [
            'ru' => '<p class="block-text block-text-bold">
                        Este o instituție publică, de interes național, subordonată Consiliului Municipal Chișinău; unul
                        dintre
                        cele patru teatre dramatice naționale din Republica Moldova.
                    </p>
                    <p class="block-text">
                        SATIRICUS este un teatru de rezistență, militant, care a apărut într-un moment istoric de
                        cotitură, în
                        etapa furtunoasă de emancipare a conştiinţei naţionale, de demascare şi repudiere a ideologiei
                        comuniste,
                        proces care a avut drept finalitate istorică destrămarea imperiului sovietic şi proclamarea
                        independenţei
                        de stat a Republicii Moldova.
                    </p>
                    <p class="block-text">
                        Cu certitudine, SATIRICUS, primul teatru de satiră din republică, a luat naştere şi dintr-o
                        necesitate
                        cultural-istorică, manifestând în mod consecvent, prin tot ce a realizat ulterior, un spirit
                        novator şi
                        combativ. Noile realități istorice și sociale reclamau în mod imperios un alt gen de teatru.
                        Mulţi
                        regizori, sensibilizaţi de noile realităţi cultural-istorice şi influenţaţi, mai mult sau mai
                        puţin, de
                        cultura occidentală, abordează tot mai frecvent modalităţi inedite de exprimare artistică,
                        propunându-şi
                        să incite şi chiar să şocheze publicul.
                    </p>
                    <p class="block-text">
                        Printre aceşti regizori se numără şi Sandu Grecu, fondatorul de facto al Teatrului SATIRICUS,
                        care, după o
                        stagiatură de doi ani la Teatrul lui Constantin Raikin, „Satiricon”, din Moscova, marcat într-o
                        oarecare
                        măsură de estetica acestui teatru, concepe într-o manieră regizorală inedită, primele spectacole
                        ale
                        tinerei trupe SATIRICUS. Astfel, de la o montare la alta, de la un experiment artistic la o
                        înscenare mai
                        în spiritul tradiţiei se cristalizează stilul regizoral al lui Grecu şi, la modul general,
                        maniera
                        distinctă de joc a actorilor de la SATIRICUS.
                    </p>',
            'ro' => '<p class="block-text block-text-bold">
                        Este o instituție publică, de interes național, subordonată Consiliului Municipal Chișinău; unul
                        dintre
                        cele patru teatre dramatice naționale din Republica Moldova.
                    </p>
                    <p class="block-text">
                        SATIRICUS este un teatru de rezistență, militant, care a apărut într-un moment istoric de
                        cotitură, în
                        etapa furtunoasă de emancipare a conştiinţei naţionale, de demascare şi repudiere a ideologiei
                        comuniste,
                        proces care a avut drept finalitate istorică destrămarea imperiului sovietic şi proclamarea
                        independenţei
                        de stat a Republicii Moldova.
                    </p>
                    <p class="block-text">
                        Cu certitudine, SATIRICUS, primul teatru de satiră din republică, a luat naştere şi dintr-o
                        necesitate
                        cultural-istorică, manifestând în mod consecvent, prin tot ce a realizat ulterior, un spirit
                        novator şi
                        combativ. Noile realități istorice și sociale reclamau în mod imperios un alt gen de teatru.
                        Mulţi
                        regizori, sensibilizaţi de noile realităţi cultural-istorice şi influenţaţi, mai mult sau mai
                        puţin, de
                        cultura occidentală, abordează tot mai frecvent modalităţi inedite de exprimare artistică,
                        propunându-şi
                        să incite şi chiar să şocheze publicul.
                    </p>
                    <p class="block-text">
                        Printre aceşti regizori se numără şi Sandu Grecu, fondatorul de facto al Teatrului SATIRICUS,
                        care, după o
                        stagiatură de doi ani la Teatrul lui Constantin Raikin, „Satiricon”, din Moscova, marcat într-o
                        oarecare
                        măsură de estetica acestui teatru, concepe într-o manieră regizorală inedită, primele spectacole
                        ale
                        tinerei trupe SATIRICUS. Astfel, de la o montare la alta, de la un experiment artistic la o
                        înscenare mai
                        în spiritul tradiţiei se cristalizează stilul regizoral al lui Grecu şi, la modul general,
                        maniera
                        distinctă de joc a actorilor de la SATIRICUS.
                    </p>',
            'en' => '<p class="block-text block-text-bold">
                        Este o instituție publică, de interes național, subordonată Consiliului Municipal Chișinău; unul
                        dintre
                        cele patru teatre dramatice naționale din Republica Moldova.
                    </p>
                    <p class="block-text">
                        SATIRICUS este un teatru de rezistență, militant, care a apărut într-un moment istoric de
                        cotitură, în
                        etapa furtunoasă de emancipare a conştiinţei naţionale, de demascare şi repudiere a ideologiei
                        comuniste,
                        proces care a avut drept finalitate istorică destrămarea imperiului sovietic şi proclamarea
                        independenţei
                        de stat a Republicii Moldova.
                    </p>
                    <p class="block-text">
                        Cu certitudine, SATIRICUS, primul teatru de satiră din republică, a luat naştere şi dintr-o
                        necesitate
                        cultural-istorică, manifestând în mod consecvent, prin tot ce a realizat ulterior, un spirit
                        novator şi
                        combativ. Noile realități istorice și sociale reclamau în mod imperios un alt gen de teatru.
                        Mulţi
                        regizori, sensibilizaţi de noile realităţi cultural-istorice şi influenţaţi, mai mult sau mai
                        puţin, de
                        cultura occidentală, abordează tot mai frecvent modalităţi inedite de exprimare artistică,
                        propunându-şi
                        să incite şi chiar să şocheze publicul.
                    </p>
                    <p class="block-text">
                        Printre aceşti regizori se numără şi Sandu Grecu, fondatorul de facto al Teatrului SATIRICUS,
                        care, după o
                        stagiatură de doi ani la Teatrul lui Constantin Raikin, „Satiricon”, din Moscova, marcat într-o
                        oarecare
                        măsură de estetica acestui teatru, concepe într-o manieră regizorală inedită, primele spectacole
                        ale
                        tinerei trupe SATIRICUS. Astfel, de la o montare la alta, de la un experiment artistic la o
                        înscenare mai
                        în spiritul tradiţiei se cristalizează stilul regizoral al lui Grecu şi, la modul general,
                        maniera
                        distinctă de joc a actorilor de la SATIRICUS.
                    </p>',
        ],
        'text_2' => [
            'ru' => '<p class="block-text block-text-bold">
                        Sintetizând cu multă ingeniozitate în spectacolele sale plastica, dansul, gestica, muzica,
                        vocalul, toate
                        acestea conjugate armonios cu jocul actoricesc propriu-zis şi axate pe o dramaturgie vivace,
                        variată ca
                        gen, stil, tematică, epocă etc., SATIRICUS reuşeşte să-şi croiască un făgaş propriu în contextul
                        mişcării
                        teatrale din Moldova.
                    </p>
                    <p class="block-text">
                        Limbajul plasticii, gesturilor, expresiei corporale şi a dansului, simţul ritmurilor moderne şi
                        al muzicii
                        în general au un caracter poli funcțional. Ele constituie manifestarea unor stări sufleteşti
                        latente, dar
                        şi o modalitate indispensabilă de trezire a emoţiei în cuprinsul reprezentaţiei teatrale.
                    </p>
                    <p class="block-text">
                        Pentru realizarea unor sarcini artistice atât de dificile era nevoie de actori înzestraţi
                        multilateral. Ei
                        au fost cooptaţi în trupă de-a lungul anilor, nucleul ei însă a fost constituit chiar de la
                        fondare şi a
                        rămas mereu constant. Astăzi trupa numără peste 30 de actori, inclusiv 5 Artiști ai Poporului,
                        10 Artiști
                        Emeriți şi 2 Maeştri ai Artei.
                    </p>
                    <p class="block-text">
                        În pofida faptului că de-a lungul celor aproape 30 de ani de existenţă teatrul a fost impus de
                        împrejurări
                        să-şi schimbe de 4 ori (!) sediul, reconstruindu-l şi reamenajându-l de fiecare dată, trupa a
                        realizat
                        circa 70 de spectacole, unele dintre ele menţinându-se în repertoriu pe tot parcursul acestor
                        ani.
                        SATIRICUS este unicul teatru din spațiul românesc care a montat și are în repertoriul său activ
                        toate
                        piesele lui Ion Luca Caragiale.
                    </p>
                    <p class="block-text">
                        De asemenea, SATIRICUS organizează un Festival Internațional de Teatru, ultima ediție, a III-a,
                        fiind
                        desfășurată în anul 2018 sub genericul „DE LA NAȚIONAL LA UNIVERSAL. Amfitrionul ediției – MATEI
                        VIȘNIEC”
                    </p>',
            'ro' => '<p class="block-text block-text-bold">
                        Sintetizând cu multă ingeniozitate în spectacolele sale plastica, dansul, gestica, muzica,
                        vocalul, toate
                        acestea conjugate armonios cu jocul actoricesc propriu-zis şi axate pe o dramaturgie vivace,
                        variată ca
                        gen, stil, tematică, epocă etc., SATIRICUS reuşeşte să-şi croiască un făgaş propriu în contextul
                        mişcării
                        teatrale din Moldova.
                    </p>
                    <p class="block-text">
                        Limbajul plasticii, gesturilor, expresiei corporale şi a dansului, simţul ritmurilor moderne şi
                        al muzicii
                        în general au un caracter poli funcțional. Ele constituie manifestarea unor stări sufleteşti
                        latente, dar
                        şi o modalitate indispensabilă de trezire a emoţiei în cuprinsul reprezentaţiei teatrale.
                    </p>
                    <p class="block-text">
                        Pentru realizarea unor sarcini artistice atât de dificile era nevoie de actori înzestraţi
                        multilateral. Ei
                        au fost cooptaţi în trupă de-a lungul anilor, nucleul ei însă a fost constituit chiar de la
                        fondare şi a
                        rămas mereu constant. Astăzi trupa numără peste 30 de actori, inclusiv 5 Artiști ai Poporului,
                        10 Artiști
                        Emeriți şi 2 Maeştri ai Artei.
                    </p>
                    <p class="block-text">
                        În pofida faptului că de-a lungul celor aproape 30 de ani de existenţă teatrul a fost impus de
                        împrejurări
                        să-şi schimbe de 4 ori (!) sediul, reconstruindu-l şi reamenajându-l de fiecare dată, trupa a
                        realizat
                        circa 70 de spectacole, unele dintre ele menţinându-se în repertoriu pe tot parcursul acestor
                        ani.
                        SATIRICUS este unicul teatru din spațiul românesc care a montat și are în repertoriul său activ
                        toate
                        piesele lui Ion Luca Caragiale.
                    </p>
                    <p class="block-text">
                        De asemenea, SATIRICUS organizează un Festival Internațional de Teatru, ultima ediție, a III-a,
                        fiind
                        desfășurată în anul 2018 sub genericul „DE LA NAȚIONAL LA UNIVERSAL. Amfitrionul ediției – MATEI
                        VIȘNIEC”
                    </p>',
            'en' => '<p class="block-text block-text-bold">
                        Sintetizând cu multă ingeniozitate în spectacolele sale plastica, dansul, gestica, muzica,
                        vocalul, toate
                        acestea conjugate armonios cu jocul actoricesc propriu-zis şi axate pe o dramaturgie vivace,
                        variată ca
                        gen, stil, tematică, epocă etc., SATIRICUS reuşeşte să-şi croiască un făgaş propriu în contextul
                        mişcării
                        teatrale din Moldova.
                    </p>
                    <p class="block-text">
                        Limbajul plasticii, gesturilor, expresiei corporale şi a dansului, simţul ritmurilor moderne şi
                        al muzicii
                        în general au un caracter poli funcțional. Ele constituie manifestarea unor stări sufleteşti
                        latente, dar
                        şi o modalitate indispensabilă de trezire a emoţiei în cuprinsul reprezentaţiei teatrale.
                    </p>
                    <p class="block-text">
                        Pentru realizarea unor sarcini artistice atât de dificile era nevoie de actori înzestraţi
                        multilateral. Ei
                        au fost cooptaţi în trupă de-a lungul anilor, nucleul ei însă a fost constituit chiar de la
                        fondare şi a
                        rămas mereu constant. Astăzi trupa numără peste 30 de actori, inclusiv 5 Artiști ai Poporului,
                        10 Artiști
                        Emeriți şi 2 Maeştri ai Artei.
                    </p>
                    <p class="block-text">
                        În pofida faptului că de-a lungul celor aproape 30 de ani de existenţă teatrul a fost impus de
                        împrejurări
                        să-şi schimbe de 4 ori (!) sediul, reconstruindu-l şi reamenajându-l de fiecare dată, trupa a
                        realizat
                        circa 70 de spectacole, unele dintre ele menţinându-se în repertoriu pe tot parcursul acestor
                        ani.
                        SATIRICUS este unicul teatru din spațiul românesc care a montat și are în repertoriul său activ
                        toate
                        piesele lui Ion Luca Caragiale.
                    </p>
                    <p class="block-text">
                        De asemenea, SATIRICUS organizează un Festival Internațional de Teatru, ultima ediție, a III-a,
                        fiind
                        desfășurată în anul 2018 sub genericul „DE LA NAȚIONAL LA UNIVERSAL. Amfitrionul ediției – MATEI
                        VIȘNIEC”
                    </p>',
        ],
        'text_3' => [
            'ru' => '<p class="block-text">
                        În ceea ce privește condițiile de muncă, în primul său deceniu de existență SATIRICUS a
                        peregrinat pe
                        patru scene mai puțin adecvate din Chișinău, adaptându-le și amenajându-le de fiecare dată, până
                        când,
                        în anul 1999, se stabilește în fostul cinematograf „Odeon”. Urmează apoi o perioadă de trei ani
                        (2012-2015) în care edificiul instituției a fost supus reconstrucției capitale, fiind reutilat
                        și
                        reamenajat conform cerințelor moderne. În urma reconstrucției a apărut și o a doua sală de
                        spectacole –
                        Sala mică, teatrul devenind astfel al doilea din republică după numărul total de locuri
                        disponibile
                        pentru spectatori (300 în Sala mare plus 70 în Sala mică). De asemenea, a fost schimbată
                        configurația și
                        capacitatea sălii principale de spectacole, unde s-au adăugat balconul și lojele. Scena, în
                        formă de
                        amfiteatru, s-a extins, bolta ei a fost înălțată considerabil, fiind instalate utilaje moderne
                        și
                        aparataj din cele mai performante.
                    </p>
                    <p class="block-text">
                        În anul 2020, SATIRICUS va aniversa 30 de ani de la fondare. În cele trei decenii de activitate,
                        Teatrul
                        Naţional „Satiricus Ion Luca Caragiale” s-a impus ca unul dintre principalii promotori ai artei
                        teatrale
                        și culturii române din Republica Moldova.
                    </p>',
            'ro' => '<p class="block-text">
                        În ceea ce privește condițiile de muncă, în primul său deceniu de existență SATIRICUS a
                        peregrinat pe
                        patru scene mai puțin adecvate din Chișinău, adaptându-le și amenajându-le de fiecare dată, până
                        când,
                        în anul 1999, se stabilește în fostul cinematograf „Odeon”. Urmează apoi o perioadă de trei ani
                        (2012-2015) în care edificiul instituției a fost supus reconstrucției capitale, fiind reutilat
                        și
                        reamenajat conform cerințelor moderne. În urma reconstrucției a apărut și o a doua sală de
                        spectacole –
                        Sala mică, teatrul devenind astfel al doilea din republică după numărul total de locuri
                        disponibile
                        pentru spectatori (300 în Sala mare plus 70 în Sala mică). De asemenea, a fost schimbată
                        configurația și
                        capacitatea sălii principale de spectacole, unde s-au adăugat balconul și lojele. Scena, în
                        formă de
                        amfiteatru, s-a extins, bolta ei a fost înălțată considerabil, fiind instalate utilaje moderne
                        și
                        aparataj din cele mai performante.
                    </p>
                    <p class="block-text">
                        În anul 2020, SATIRICUS va aniversa 30 de ani de la fondare. În cele trei decenii de activitate,
                        Teatrul
                        Naţional „Satiricus Ion Luca Caragiale” s-a impus ca unul dintre principalii promotori ai artei
                        teatrale
                        și culturii române din Republica Moldova.
                    </p>',
            'en' => '<p class="block-text">
                        În ceea ce privește condițiile de muncă, în primul său deceniu de existență SATIRICUS a
                        peregrinat pe
                        patru scene mai puțin adecvate din Chișinău, adaptându-le și amenajându-le de fiecare dată, până
                        când,
                        în anul 1999, se stabilește în fostul cinematograf „Odeon”. Urmează apoi o perioadă de trei ani
                        (2012-2015) în care edificiul instituției a fost supus reconstrucției capitale, fiind reutilat
                        și
                        reamenajat conform cerințelor moderne. În urma reconstrucției a apărut și o a doua sală de
                        spectacole –
                        Sala mică, teatrul devenind astfel al doilea din republică după numărul total de locuri
                        disponibile
                        pentru spectatori (300 în Sala mare plus 70 în Sala mică). De asemenea, a fost schimbată
                        configurația și
                        capacitatea sălii principale de spectacole, unde s-au adăugat balconul și lojele. Scena, în
                        formă de
                        amfiteatru, s-a extins, bolta ei a fost înălțată considerabil, fiind instalate utilaje moderne
                        și
                        aparataj din cele mai performante.
                    </p>
                    <p class="block-text">
                        În anul 2020, SATIRICUS va aniversa 30 de ani de la fondare. În cele trei decenii de activitate,
                        Teatrul
                        Naţional „Satiricus Ion Luca Caragiale” s-a impus ca unul dintre principalii promotori ai artei
                        teatrale
                        și culturii române din Republica Moldova.
                    </p>',
        ],
        'text_4' => [
            'ru' => '<div class="spectacles-row">
                <a href="#" class="spectacle-name">Ciuleandra</a>
                <span class="spectacle-author">de Liviu Rebreanu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Ce vrăji a mai făcut soția mea?</a>
                <span class="spectacle-author">de Liviu Rebreanu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Puștoaica de la etajul 13 sau dragă societate</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name"> Migraaaanți sau prea suntem mulți pe nenorocita asta de barcă </a>
                <span class="spectacle-author">Matei Vișniec</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Banii, banii sau „borsetka”</a>
                <span class="spectacle-author">de Ray Cooney</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Ce vrăji a mai făcut soția mea?</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Lorem ipsum dolor sit.</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Lorem ipsum dolor sit amet consectetur.</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>',
            'ro' => '<div class="spectacles-row">
                <a href="#" class="spectacle-name">Ciuleandra</a>
                <span class="spectacle-author">de Liviu Rebreanu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Ce vrăji a mai făcut soția mea?</a>
                <span class="spectacle-author">de Liviu Rebreanu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Puștoaica de la etajul 13 sau dragă societate</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name"> Migraaaanți sau prea suntem mulți pe nenorocita asta de barcă </a>
                <span class="spectacle-author">Matei Vișniec</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Banii, banii sau „borsetka”</a>
                <span class="spectacle-author">de Ray Cooney</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Ce vrăji a mai făcut soția mea?</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Lorem ipsum dolor sit.</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Lorem ipsum dolor sit amet consectetur.</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>',
            'en' => '<div class="spectacles-row">
                <a href="#" class="spectacle-name">Ciuleandra</a>
                <span class="spectacle-author">de Liviu Rebreanu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Ce vrăji a mai făcut soția mea?</a>
                <span class="spectacle-author">de Liviu Rebreanu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Puștoaica de la etajul 13 sau dragă societate</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name"> Migraaaanți sau prea suntem mulți pe nenorocita asta de barcă </a>
                <span class="spectacle-author">Matei Vișniec</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Banii, banii sau „borsetka”</a>
                <span class="spectacle-author">de Ray Cooney</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Ce vrăji a mai făcut soția mea?</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Lorem ipsum dolor sit.</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>
            <div class="spectacles-row">
                <a href="#" class="spectacle-name">Lorem ipsum dolor sit amet consectetur.</a>
                <span class="spectacle-author">de Mircea M. Ionescu</span>
            </div>',
        ],
        'text_5' => [
            'ru' => '
                <div class="history-block">
                    <h3 class="history-heading">
                        1993
                    </h3>
                    <p class="history-text">
                        Festivalul Veseliei – premiul pentru originalitate (Unde mergem, domnilor?), Bucureşti,
                        septembrie
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        1994
                    </h3>
                    <p class="history-text">
                        Festivalul „Umor la gura sobei” – marele premiu (Triunghiul păcatului), Câmpulung Moldovenesc,
                        mai 1994
                    </p>
                    <p class="history-text">
                        Gala Internaţională a Comediei – premiul pentru cel mai fructuos debut (Comediantul),
                        septembrie-octombrie
                        1994, Galaţi
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        1995
                    </h3>
                    <p class="history-text">
                        Festivalul Internaţional de Teatru Experimental – premiul pentru o formulă plastic inedită (Le
                        mariage
                        force), Sf. Gheorghe, septembrie 1995
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2000
                    </h3>
                    <p class="history-text">
                        Festivalul Internaţional al Teatrului Antic „Agonalele Bosforului” – titlul de laureat, statueta
                        Demetrei
                        şi amphora grecească (Metamorfozele), Kerci, Ucraina, iulie 2000
                    </p>
                    <p class="history-text">
                        Marele Trofeu „Thalia-2000” şi titlul „Cel mai bun spectacol al anului” în cadrul Galei
                        Premiilor UNITEM
                        (Maestrul şi Margarita)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2001
                    </h3>
                    <p class="history-text">
                        Premiul pentru originalitate (Irina Rusu) în cadrul Galei Premiilor UNITEM „Thalia-2001”
                        spectacolul
                        („Carmen”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2002
                    </h3>
                    <p class="history-text">
                        Marele Trofeu „Thalia-2002” şi titlul „Cel mai bun spectacol al anului” în cadrul Galei
                        Premiilor UNITEM
                        (O scrisoare pierdută)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2004
                    </h3>
                    <p class="history-text">
                        Premiul pentru cea mai bună regie (Sandu Grecu), coregrafie (Dumitru Tanmoşan), rol feminin
                        (Lilia
                        Cazacu), rol masculin (Mihai Curagau) şi titlul „Cel mai bun spectacol al anului” în cadrul
                        Galei
                        Premiilor UNITEM-2004 („D’ale carnavalului”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2006
                    </h3>
                    <p class="history-text">
                        Premiul pentru cea mai bună regie (Sandu Grecu), rol feminine (Irina Rusu), rol masculin
                        (Valeriu Cazacu)
                        şi titlul „Cel mai bun spectacol al anului” în cadrul Galei Premiilor UNITEM-2006 („O noapte
                        furtunoasă”
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol feminin (Ludmila Gheorghiţa), în cadrul Galei Premiilor
                        UNITEM-2006
                        („Năpasta”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2007
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol feminin secundar (Nina Toderico) în cadrul Galei Premiilor
                        UNITEM-2007
                        („Golanii revoluţiei moldave”)
                    </p>
                    <p class="history-text">
                        Premiul de excepţie pentru proiectele Promovarea dramaturgiei naţionale şi Integrala Ion Luca
                        Caragiale
                        (2007)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2010
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol după o piesă de un autor basarabean în cadrul Galei
                        Premiilor
                        UNITEM-2010 („Made in Moldova!”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2011
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol secundar masculin (Viorel Cornescu) în cadrul Galei Premiilor
                        UNITEM-2011
                        („Țara asta a uitat de noi…”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol în cadrul Galei Premiilor UNITEM-2011 („Țara asta a uitat
                        de noi…”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2016
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol secundar feminin (Lilia Cazacu) în cadrul Galei Premiilor
                        UNITEM-2016
                        („Hoțul”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol feminin (Irina Rusu) în cadrul Galei Premiilor UNITEM - 2016
                        („Bătrânii
                        noștri”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol în cadrul Galei Premiilor UNITEM - 2016 („Angajare de
                        clovn”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2017
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol secundar masculin (Viorel Cornescu) în cadrul Galei Premiilor
                        UNITEM - 2017
                        („Banii, banii sau „borsetka””)
                    </p>
                    <p class="history-text">
                        Premiul Special al Juriului în cadrul Galei Premiilor UNITEM - 2017 („Puștoaica de la etajul 13
                        sau Dragă
                        societate”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol în cadrul Galei Premiilor UNITEM - 2016 („Angajare de
                        clovn”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2018
                    </h3>
                    <p class="history-text">
                        Premiul pentru conceptul regizoral (Sandu Grecu), în cadrul Festivalului Internațional al
                        Teatrului de
                        Studio și Forme Noi, Pitești, România – 2018 („Hamlet”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2019
                    </h3>
                    <p class="history-text">
                        Premiul "Veniamin Apostol" în cadrul Galei Premiilor UNITEM - 2019 („Hamlet”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cele mai bune costume teatrale (Ecaterina Salimova) în cadrul Galei Premiilor
                        UNITEM - 2019
                        („Hamlet”)
                    </p>
                </div>',
            'ro' => '<div class="dot top"></div>
                <div class="dot bottom"></div>
                <div class="history-block">
                    <h3 class="history-heading">
                        1993
                    </h3>
                    <p class="history-text">
                        Festivalul Veseliei – premiul pentru originalitate (Unde mergem, domnilor?), Bucureşti,
                        septembrie
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        1994
                    </h3>
                    <p class="history-text">
                        Festivalul „Umor la gura sobei” – marele premiu (Triunghiul păcatului), Câmpulung Moldovenesc,
                        mai 1994
                    </p>
                    <p class="history-text">
                        Gala Internaţională a Comediei – premiul pentru cel mai fructuos debut (Comediantul),
                        septembrie-octombrie
                        1994, Galaţi
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        1995
                    </h3>
                    <p class="history-text">
                        Festivalul Internaţional de Teatru Experimental – premiul pentru o formulă plastic inedită (Le
                        mariage
                        force), Sf. Gheorghe, septembrie 1995
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2000
                    </h3>
                    <p class="history-text">
                        Festivalul Internaţional al Teatrului Antic „Agonalele Bosforului” – titlul de laureat, statueta
                        Demetrei
                        şi amphora grecească (Metamorfozele), Kerci, Ucraina, iulie 2000
                    </p>
                    <p class="history-text">
                        Marele Trofeu „Thalia-2000” şi titlul „Cel mai bun spectacol al anului” în cadrul Galei
                        Premiilor UNITEM
                        (Maestrul şi Margarita)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2001
                    </h3>
                    <p class="history-text">
                        Premiul pentru originalitate (Irina Rusu) în cadrul Galei Premiilor UNITEM „Thalia-2001”
                        spectacolul
                        („Carmen”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2002
                    </h3>
                    <p class="history-text">
                        Marele Trofeu „Thalia-2002” şi titlul „Cel mai bun spectacol al anului” în cadrul Galei
                        Premiilor UNITEM
                        (O scrisoare pierdută)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2004
                    </h3>
                    <p class="history-text">
                        Premiul pentru cea mai bună regie (Sandu Grecu), coregrafie (Dumitru Tanmoşan), rol feminin
                        (Lilia
                        Cazacu), rol masculin (Mihai Curagau) şi titlul „Cel mai bun spectacol al anului” în cadrul
                        Galei
                        Premiilor UNITEM-2004 („D’ale carnavalului”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2006
                    </h3>
                    <p class="history-text">
                        Premiul pentru cea mai bună regie (Sandu Grecu), rol feminine (Irina Rusu), rol masculin
                        (Valeriu Cazacu)
                        şi titlul „Cel mai bun spectacol al anului” în cadrul Galei Premiilor UNITEM-2006 („O noapte
                        furtunoasă”
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol feminin (Ludmila Gheorghiţa), în cadrul Galei Premiilor
                        UNITEM-2006
                        („Năpasta”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2007
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol feminin secundar (Nina Toderico) în cadrul Galei Premiilor
                        UNITEM-2007
                        („Golanii revoluţiei moldave”)
                    </p>
                    <p class="history-text">
                        Premiul de excepţie pentru proiectele Promovarea dramaturgiei naţionale şi Integrala Ion Luca
                        Caragiale
                        (2007)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2010
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol după o piesă de un autor basarabean în cadrul Galei
                        Premiilor
                        UNITEM-2010 („Made in Moldova!”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2011
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol secundar masculin (Viorel Cornescu) în cadrul Galei Premiilor
                        UNITEM-2011
                        („Țara asta a uitat de noi…”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol în cadrul Galei Premiilor UNITEM-2011 („Țara asta a uitat
                        de noi…”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2016
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol secundar feminin (Lilia Cazacu) în cadrul Galei Premiilor
                        UNITEM-2016
                        („Hoțul”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol feminin (Irina Rusu) în cadrul Galei Premiilor UNITEM - 2016
                        („Bătrânii
                        noștri”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol în cadrul Galei Premiilor UNITEM - 2016 („Angajare de
                        clovn”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2017
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol secundar masculin (Viorel Cornescu) în cadrul Galei Premiilor
                        UNITEM - 2017
                        („Banii, banii sau „borsetka””)
                    </p>
                    <p class="history-text">
                        Premiul Special al Juriului în cadrul Galei Premiilor UNITEM - 2017 („Puștoaica de la etajul 13
                        sau Dragă
                        societate”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol în cadrul Galei Premiilor UNITEM - 2016 („Angajare de
                        clovn”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2018
                    </h3>
                    <p class="history-text">
                        Premiul pentru conceptul regizoral (Sandu Grecu), în cadrul Festivalului Internațional al
                        Teatrului de
                        Studio și Forme Noi, Pitești, România – 2018 („Hamlet”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2019
                    </h3>
                    <p class="history-text">
                        Premiul "Veniamin Apostol" în cadrul Galei Premiilor UNITEM - 2019 („Hamlet”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cele mai bune costume teatrale (Ecaterina Salimova) în cadrul Galei Premiilor
                        UNITEM - 2019
                        („Hamlet”)
                    </p>
                </div>',
            'en' => '<div class="dot top"></div>
                <div class="dot bottom"></div>
                <div class="history-block">
                    <h3 class="history-heading">
                        1993
                    </h3>
                    <p class="history-text">
                        Festivalul Veseliei – premiul pentru originalitate (Unde mergem, domnilor?), Bucureşti,
                        septembrie
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        1994
                    </h3>
                    <p class="history-text">
                        Festivalul „Umor la gura sobei” – marele premiu (Triunghiul păcatului), Câmpulung Moldovenesc,
                        mai 1994
                    </p>
                    <p class="history-text">
                        Gala Internaţională a Comediei – premiul pentru cel mai fructuos debut (Comediantul),
                        septembrie-octombrie
                        1994, Galaţi
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        1995
                    </h3>
                    <p class="history-text">
                        Festivalul Internaţional de Teatru Experimental – premiul pentru o formulă plastic inedită (Le
                        mariage
                        force), Sf. Gheorghe, septembrie 1995
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2000
                    </h3>
                    <p class="history-text">
                        Festivalul Internaţional al Teatrului Antic „Agonalele Bosforului” – titlul de laureat, statueta
                        Demetrei
                        şi amphora grecească (Metamorfozele), Kerci, Ucraina, iulie 2000
                    </p>
                    <p class="history-text">
                        Marele Trofeu „Thalia-2000” şi titlul „Cel mai bun spectacol al anului” în cadrul Galei
                        Premiilor UNITEM
                        (Maestrul şi Margarita)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2001
                    </h3>
                    <p class="history-text">
                        Premiul pentru originalitate (Irina Rusu) în cadrul Galei Premiilor UNITEM „Thalia-2001”
                        spectacolul
                        („Carmen”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2002
                    </h3>
                    <p class="history-text">
                        Marele Trofeu „Thalia-2002” şi titlul „Cel mai bun spectacol al anului” în cadrul Galei
                        Premiilor UNITEM
                        (O scrisoare pierdută)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2004
                    </h3>
                    <p class="history-text">
                        Premiul pentru cea mai bună regie (Sandu Grecu), coregrafie (Dumitru Tanmoşan), rol feminin
                        (Lilia
                        Cazacu), rol masculin (Mihai Curagau) şi titlul „Cel mai bun spectacol al anului” în cadrul
                        Galei
                        Premiilor UNITEM-2004 („D’ale carnavalului”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2006
                    </h3>
                    <p class="history-text">
                        Premiul pentru cea mai bună regie (Sandu Grecu), rol feminine (Irina Rusu), rol masculin
                        (Valeriu Cazacu)
                        şi titlul „Cel mai bun spectacol al anului” în cadrul Galei Premiilor UNITEM-2006 („O noapte
                        furtunoasă”
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol feminin (Ludmila Gheorghiţa), în cadrul Galei Premiilor
                        UNITEM-2006
                        („Năpasta”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2007
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol feminin secundar (Nina Toderico) în cadrul Galei Premiilor
                        UNITEM-2007
                        („Golanii revoluţiei moldave”)
                    </p>
                    <p class="history-text">
                        Premiul de excepţie pentru proiectele Promovarea dramaturgiei naţionale şi Integrala Ion Luca
                        Caragiale
                        (2007)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2010
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol după o piesă de un autor basarabean în cadrul Galei
                        Premiilor
                        UNITEM-2010 („Made in Moldova!”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2011
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol secundar masculin (Viorel Cornescu) în cadrul Galei Premiilor
                        UNITEM-2011
                        („Țara asta a uitat de noi…”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol în cadrul Galei Premiilor UNITEM-2011 („Țara asta a uitat
                        de noi…”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2016
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol secundar feminin (Lilia Cazacu) în cadrul Galei Premiilor
                        UNITEM-2016
                        („Hoțul”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol feminin (Irina Rusu) în cadrul Galei Premiilor UNITEM - 2016
                        („Bătrânii
                        noștri”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol în cadrul Galei Premiilor UNITEM - 2016 („Angajare de
                        clovn”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2017
                    </h3>
                    <p class="history-text">
                        Premiul pentru cel mai bun rol secundar masculin (Viorel Cornescu) în cadrul Galei Premiilor
                        UNITEM - 2017
                        („Banii, banii sau „borsetka””)
                    </p>
                    <p class="history-text">
                        Premiul Special al Juriului în cadrul Galei Premiilor UNITEM - 2017 („Puștoaica de la etajul 13
                        sau Dragă
                        societate”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cel mai bun spectacol în cadrul Galei Premiilor UNITEM - 2016 („Angajare de
                        clovn”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2018
                    </h3>
                    <p class="history-text">
                        Premiul pentru conceptul regizoral (Sandu Grecu), în cadrul Festivalului Internațional al
                        Teatrului de
                        Studio și Forme Noi, Pitești, România – 2018 („Hamlet”)
                    </p>
                </div>
                <div class="history-block">
                    <h3 class="history-heading">
                        2019
                    </h3>
                    <p class="history-text">
                        Premiul "Veniamin Apostol" în cadrul Galei Premiilor UNITEM - 2019 („Hamlet”)
                    </p>
                    <p class="history-text">
                        Premiul pentru cele mai bune costume teatrale (Ecaterina Salimova) în cadrul Galei Premiilor
                        UNITEM - 2019
                        („Hamlet”)
                    </p>
                </div>',
        ],
        'text_6' => [
            'ru' => '<div class="tours-row">
                <a class="tour-name">
                    În România (octombrie 2019, Galați) - participă în cadrul Festivalului de Comedie, prezintă
                    spectacolul
                    "Doctor de femei" de Georges Feydeau.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (octombrie 2019, Tulcea) - participă în cadrul Festivalului de Teatru TRAGOS, prezintă
                    spectacolul "Happy End" de Jeroen Van Der Berg.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (septembrie 2019, Odorheiu Secuiesc) - participă în cadrul Festivalului de Teatru
                    Contemporan
                    draMA, prezintă spectacolul "Migraaaanți sau prea suntem mulți pe nenorocita asta de badrcă" de
                    Matei
                    Vișniec.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (mai 2019, București, Suceava, Rădăuți, Gura Humorului, România) - prezintă spectacolele
                    Made in
                    Moldova! de Constantin Cheianu, Hamlet de William Shakespeare, "Nunta" de A.P.Cehov, "Maestrul și
                    Margarita"
                    de Mihail Bulgakov.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (iunie 2019) - participă la Festivalul Internaţional de Teatru din Sibiu, România,
                    prezintă
                    spectacolele "Hamlet" de William Shakespeare și "100 de minute de libertate” de Bogdan Sărătean.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (mai 2019) - participă în cadrul Festivalului de Teatru-concurs „Elvira Godeanu”, Târgu
                    Jiu,
                    prezintă spectacolul “Angajare de clovn” de Matei Vișniec
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (mai 2019) - participă în cadrul ZILELOR TEATRULUI MATEI VIȘNIEC, Suceava, Rădăuți,
                    prezintă
                    spectacolul NUNTA de Anton P.Cehov
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (iunie 2018) - participă la Festivalul Internaţional de Teatru din Sibiu, România,
                    prezintă
                    spectacolele "Maestrul și Margarita" de Mihail Bulgakov și "Nunta" de A.P.Cehov.
                </a>
            </div>',
            'ro' => '<div class="tours-row">
                <a class="tour-name">
                    În România (octombrie 2019, Galați) - participă în cadrul Festivalului de Comedie, prezintă
                    spectacolul
                    "Doctor de femei" de Georges Feydeau.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (octombrie 2019, Tulcea) - participă în cadrul Festivalului de Teatru TRAGOS, prezintă
                    spectacolul "Happy End" de Jeroen Van Der Berg.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (septembrie 2019, Odorheiu Secuiesc) - participă în cadrul Festivalului de Teatru
                    Contemporan
                    draMA, prezintă spectacolul "Migraaaanți sau prea suntem mulți pe nenorocita asta de badrcă" de
                    Matei
                    Vișniec.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (mai 2019, București, Suceava, Rădăuți, Gura Humorului, România) - prezintă spectacolele
                    Made in
                    Moldova! de Constantin Cheianu, Hamlet de William Shakespeare, "Nunta" de A.P.Cehov, "Maestrul și
                    Margarita"
                    de Mihail Bulgakov.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (iunie 2019) - participă la Festivalul Internaţional de Teatru din Sibiu, România,
                    prezintă
                    spectacolele "Hamlet" de William Shakespeare și "100 de minute de libertate” de Bogdan Sărătean.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (mai 2019) - participă în cadrul Festivalului de Teatru-concurs „Elvira Godeanu”, Târgu
                    Jiu,
                    prezintă spectacolul “Angajare de clovn” de Matei Vișniec
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (mai 2019) - participă în cadrul ZILELOR TEATRULUI MATEI VIȘNIEC, Suceava, Rădăuți,
                    prezintă
                    spectacolul NUNTA de Anton P.Cehov
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (iunie 2018) - participă la Festivalul Internaţional de Teatru din Sibiu, România,
                    prezintă
                    spectacolele "Maestrul și Margarita" de Mihail Bulgakov și "Nunta" de A.P.Cehov.
                </a>
            </div>',
            'en' => '<div class="tours-row">
                <a class="tour-name">
                    În România (octombrie 2019, Galați) - participă în cadrul Festivalului de Comedie, prezintă
                    spectacolul
                    "Doctor de femei" de Georges Feydeau.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (octombrie 2019, Tulcea) - participă în cadrul Festivalului de Teatru TRAGOS, prezintă
                    spectacolul "Happy End" de Jeroen Van Der Berg.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (septembrie 2019, Odorheiu Secuiesc) - participă în cadrul Festivalului de Teatru
                    Contemporan
                    draMA, prezintă spectacolul "Migraaaanți sau prea suntem mulți pe nenorocita asta de badrcă" de
                    Matei
                    Vișniec.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (mai 2019, București, Suceava, Rădăuți, Gura Humorului, România) - prezintă spectacolele
                    Made in
                    Moldova! de Constantin Cheianu, Hamlet de William Shakespeare, "Nunta" de A.P.Cehov, "Maestrul și
                    Margarita"
                    de Mihail Bulgakov.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (iunie 2019) - participă la Festivalul Internaţional de Teatru din Sibiu, România,
                    prezintă
                    spectacolele "Hamlet" de William Shakespeare și "100 de minute de libertate” de Bogdan Sărătean.
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (mai 2019) - participă în cadrul Festivalului de Teatru-concurs „Elvira Godeanu”, Târgu
                    Jiu,
                    prezintă spectacolul “Angajare de clovn” de Matei Vișniec
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (mai 2019) - participă în cadrul ZILELOR TEATRULUI MATEI VIȘNIEC, Suceava, Rădăuți,
                    prezintă
                    spectacolul NUNTA de Anton P.Cehov
                </a>
            </div>
            <div class="tours-row">
                <a class="tour-name">
                    În România (iunie 2018) - participă la Festivalul Internaţional de Teatru din Sibiu, România,
                    prezintă
                    spectacolele "Maestrul și Margarita" de Mihail Bulgakov și "Nunta" de A.P.Cehov.
                </a>
            </div>',
        ]
    ];

    public function run()
    {
        $this->seedCategories();
        $this->seedWorkers();
    }

    private function seedCategories() : void
    {
        $repository = new WorkerCategoryRepository;

        $repository->saveWorkerCategory([
            'name' => [
                'ru' => 'Акторы',
                'ro' => 'Actorii',
                'en' => 'Actors',
            ],
            'active' => true
        ]);

        $repository->saveWorkerCategory([
            'name' => [
                'ru' => 'Администрацыя',
                'ro' => 'Administratia',
                'en' => 'Administration',
            ],
            'active' => true
        ]);
    }

    private function seedWorkers() : void
    {
        $service = app(WorkerService::class);
        $min = WorkerCategory::query()->min('id');
        $max = WorkerCategory::query()->max('id');

        $i = 0;
        while ($i < 4) {
            $this->worker['worker_category_id'] = rand($min, $max);
            $this->worker['active'] = true;
            $this->worker['on_home'] = true;
            if ($i === 0) {
                $this->worker['on_top'] = true;
            }
            $worker = $service->createWorker(new StoreWorkerRequest($this->worker));
            $i++;

            $worker
                ->addMediaFromUrl(asset($i % 2 == 0 ? 'front/img/actorii-team-member.jpg' : 'front/img/actorii-director.png'))
                ->toMediaCollection('image');

            $worker->addMediaFromUrl(asset("front/img/about-block-1.jpg"))->toMediaCollection('image_1');
            $worker->addMediaFromUrl(asset("front/img/about-block-2.jpg"))->toMediaCollection('image_2');
            $worker->addMediaFromUrl(asset("front/img/about-block-2-1.jpg"))->toMediaCollection('image_3');
            $worker->addMediaFromUrl(asset("front/img/about-block-3.jpg"))->toMediaCollection('image_4');
        }
    }
}
