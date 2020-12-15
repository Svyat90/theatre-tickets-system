<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Services\Blog\ArticleService;
use App\Http\Requests\Blog\Articles\StoreArticleRequest;
use App\Models\Blog\ArticleCategory;
use App\Repositories\Articles\ArticleCategoryRepository;

class ArticleSeeder extends Seeder
{
    /**
     * @var array
     */
    private array $article = [
        'name' => [
            'ru' => 'TEATRU TV TEATRU LA TINE ACASĂ CU TVR MOLDOVA ȘI TVR INTERNATIONAL',
            'ro' => 'TEATRU TV TEATRU LA TINE ACASĂ CU TVR MOLDOVA ȘI TVR INTERNATIONAL',
            'en' => 'TEATRU TV TEATRU LA TINE ACASĂ CU TVR MOLDOVA ȘI TVR INTERNATIONAL',
        ],
        'title' => [
            'ru' => 'Proiect de colaborare șI promovare a spectacolelor teatrului național satiricus la tv',
            'ro' => 'Proiect de colaborare șI promovare a spectacolelor teatrului național satiricus la tv',
            'en' => 'Proiect de colaborare șI promovare a spectacolelor teatrului național satiricus la tv',
        ],
        'content' => [
            'ru' => 'Un musical live, care evocă o crimă și reprezintă o operă fundamentală despre neamul nostru - „Ciuleandra” de Liviu Rebreanu. Muzica spectacolului prezintă o operă originală, sensibilă și profund națională a compozitorului Marian Stârcea, dramatizarea în versuri și textele cântecelor fiind semnate de Ion Diviza, coregrafia de Dumitru Tanmoșan, canto - Ludmila Prodan. În spectacol se evocă forța destinului. Mesajele sun transmise printr-un joc fin, simțire elevată, voci pătrunzătoare. Se face apel la formulele folclorice, care nu sunt utilizate doar ca element etnografic, ci „puse” să funcționeze organic în fabula spectacolului.',
            'ro' => 'Un musical live, care evocă o crimă și reprezintă o operă fundamentală despre neamul nostru - „Ciuleandra” de Liviu Rebreanu. Muzica spectacolului prezintă o operă originală, sensibilă și profund națională a compozitorului Marian Stârcea, dramatizarea în versuri și textele cântecelor fiind semnate de Ion Diviza, coregrafia de Dumitru Tanmoșan, canto - Ludmila Prodan. În spectacol se evocă forța destinului. Mesajele sun transmise printr-un joc fin, simțire elevată, voci pătrunzătoare. Se face apel la formulele folclorice, care nu sunt utilizate doar ca element etnografic, ci „puse” să funcționeze organic în fabula spectacolului.',
            'en' => 'Un musical live, care evocă o crimă și reprezintă o operă fundamentală despre neamul nostru - „Ciuleandra” de Liviu Rebreanu. Muzica spectacolului prezintă o operă originală, sensibilă și profund națională a compozitorului Marian Stârcea, dramatizarea în versuri și textele cântecelor fiind semnate de Ion Diviza, coregrafia de Dumitru Tanmoșan, canto - Ludmila Prodan. În spectacol se evocă forța destinului. Mesajele sun transmise printr-un joc fin, simțire elevată, voci pătrunzătoare. Se face apel la formulele folclorice, care nu sunt utilizate doar ca element etnografic, ci „puse” să funcționeze organic în fabula spectacolului.',
        ],
        'text_1' => [
            'ru' => 'The show, which plays into the contemporary fascination our world seems to have for reality shows combined with the brevity of online videos, is quite an impressive spectacle. The show starts closer to an actual narrative than most other Cirque shows featuring a show-within-a-show called The Mr. Wow Show. Mr. Wow (Andrey Kislitsin) is the host of a talent competition show- much in the vein of America’s Volta is Electrifying New Cirque Show',
            'ro' => 'The show, which plays into the contemporary fascination our world seems to have for reality shows combined with the brevity of online videos, is quite an impressive spectacle. The show starts closer to an actual narrative than most other Cirque shows featuring a show-within-a-show called The Mr. Wow Show. Mr. Wow (Andrey Kislitsin) is the host of a talent competition show- much in the vein of America’s Volta is Electrifying New Cirque Show',
            'en' => 'The show, which plays into the contemporary fascination our world seems to have for reality shows combined with the brevity of online videos, is quite an impressive spectacle. The show starts closer to an actual narrative than most other Cirque shows featuring a show-within-a-show called The Mr. Wow Show. Mr. Wow (Andrey Kislitsin) is the host of a talent competition show- much in the vein of America’s Volta is Electrifying New Cirque Show',
        ],
        'text_2' => [
            'ru' => 'The acts are, as always, impressive feats of physical prowess, some of which leave you wondering how any human can do that. It’s a mix of aerial artists, acrobatics and, in once instance, an impressive hair suspension act that absolutely has to be a literal pain in the neck. The trampowall routine was one of the highlights for sure. For those unfamiliar with Cirque, this is when trampolines are lined at the base of constructed walls and acrobats bounce and flip on and off in what appears to be feats of defying gravity. This time around there is also a crazy impressive finale with BMX bikes',
            'ro' => 'The acts are, as always, impressive feats of physical prowess, some of which leave you wondering how any human can do that. It’s a mix of aerial artists, acrobatics and, in once instance, an impressive hair suspension act that absolutely has to be a literal pain in the neck. The trampowall routine was one of the highlights for sure. For those unfamiliar with Cirque, this is when trampolines are lined at the base of constructed walls and acrobats bounce and flip on and off in what appears to be feats of defying gravity. This time around there is also a crazy impressive finale with BMX bikes',
            'en' => 'The acts are, as always, impressive feats of physical prowess, some of which leave you wondering how any human can do that. It’s a mix of aerial artists, acrobatics and, in once instance, an impressive hair suspension act that absolutely has to be a literal pain in the neck. The trampowall routine was one of the highlights for sure. For those unfamiliar with Cirque, this is when trampolines are lined at the base of constructed walls and acrobats bounce and flip on and off in what appears to be feats of defying gravity. This time around there is also a crazy impressive finale with BMX bikes',
        ],
        'text_3' => [
            'ru' => '<b>The show</b> <br> Which plays into the contemporary fascination our world seems to have for
                        reality
                        shows combined with the brevity of online videos, is quite an impressive spectacle. The show
                        starts closer
                        to an actual narrative than most other Cirque shows featuring a show-within-a-show called The
                        Mr. Wow
                        Show. Mr. Wow (Andrey Kislitsin) is the host of a talent competition show- much in the vein of
                        America’s
                        Volta is Electrifying New Cirque Show',
            'ro' => '<b>The show</b> <br> Which plays into the contemporary fascination our world seems to have for
                        reality
                        shows combined with the brevity of online videos, is quite an impressive spectacle. The show
                        starts closer
                        to an actual narrative than most other Cirque shows featuring a show-within-a-show called The
                        Mr. Wow
                        Show. Mr. Wow (Andrey Kislitsin) is the host of a talent competition show- much in the vein of
                        America’s
                        Volta is Electrifying New Cirque Show',
            'en' => '<b>The show</b> <br> Which plays into the contemporary fascination our world seems to have for
                        reality
                        shows combined with the brevity of online videos, is quite an impressive spectacle. The show
                        starts closer
                        to an actual narrative than most other Cirque shows featuring a show-within-a-show called The
                        Mr. Wow
                        Show. Mr. Wow (Andrey Kislitsin) is the host of a talent competition show- much in the vein of
                        America’s
                        Volta is Electrifying New Cirque Show',
        ],
        'text_4' => [
            'ru' => '<div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Muzika:</a>
                            <span class="spectacle-author">Anatol STEFANET (Formatia TRIGON)</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Costume:</a>
                            <span class="spectacle-author">Rodica BARGAN, Lilia CARUTA</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Muzika:</a>
                            <span class="spectacle-author">Anatol STEFANET (Formatia TRIGON)</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Costume:</a>
                            <span class="spectacle-author">Rodica BARGAN, Lilia CARUTA</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Durata</a>
                            <span class="spectacle-author">1h. 30 min</span>
                        </div>',
            'ro' => '<div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Muzika:</a>
                            <span class="spectacle-author">Anatol STEFANET (Formatia TRIGON)</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Costume:</a>
                            <span class="spectacle-author">Rodica BARGAN, Lilia CARUTA</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Muzika:</a>
                            <span class="spectacle-author">Anatol STEFANET (Formatia TRIGON)</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Costume:</a>
                            <span class="spectacle-author">Rodica BARGAN, Lilia CARUTA</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Durata</a>
                            <span class="spectacle-author">1h. 30 min</span>
                        </div>',
            'en' => '<div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Muzika:</a>
                            <span class="spectacle-author">Anatol STEFANET (Formatia TRIGON)</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Costume:</a>
                            <span class="spectacle-author">Rodica BARGAN, Lilia CARUTA</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Muzika:</a>
                            <span class="spectacle-author">Anatol STEFANET (Formatia TRIGON)</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Costume:</a>
                            <span class="spectacle-author">Rodica BARGAN, Lilia CARUTA</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Regia artistica, scenografia:</a>
                            <span class="spectacle-author">Alexandru GRECU</span>
                        </div>
                        <div class="spectacles-row">
                            <a href="#" class="spectacle-name">Durata</a>
                            <span class="spectacle-author">1h. 30 min</span>
                        </div>',
        ]
    ];

    public function run()
    {
        $this->seedCategories();
        $this->seedArticles();
    }

    private function seedCategories() : void
    {
        $repository = new ArticleCategoryRepository;
        $repository->saveArticleCategory([
            'name' => [
                'ru' => 'События',
                'ro' => 'События',
                'en' => 'Events',
            ],
            'active' => true
        ]);

        $repository->saveArticleCategory([
            'name' => [
                'ru' => 'Новости',
                'ro' => 'Новости',
                'en' => 'News',
            ],
            'active' => true
        ]);
    }

    private function seedArticles() : void
    {
        $service = app(ArticleService::class);
        $min = ArticleCategory::query()->min('id');
        $max = ArticleCategory::query()->max('id');

        $i = 0;
        while ($i < 5) {
            if ($i == 0) {
                $this->article['video_url'] = 'https://www.youtube.com/embed/G4cJ4wviwS8';
            }

            $this->article['article_category_id'] = rand($min, $max);
            $this->article['active'] = true;
            $this->article['on_home'] = true;
            $this->article['date'] = now()->addWeeks(rand(1, 5))->toDateString();
            $page = $service->createArticle(new StoreArticleRequest($this->article));
            $i++;

            $page
                ->addMediaFromUrl(asset("front/img/blog-detail-img-2.jpg"))
                ->toMediaCollection('image');

            $page
                ->addMediaFromUrl(asset("front/img/blog-detail-img-2-1.jpg"))
                ->toMediaCollection('image_1');
            $page
                ->addMediaFromUrl(asset("front/img/blog-detail-img-2-2.jpg"))
                ->toMediaCollection('image_2');
        }
    }
}
