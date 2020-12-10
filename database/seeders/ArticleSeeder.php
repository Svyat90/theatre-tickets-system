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
        }
    }
}
