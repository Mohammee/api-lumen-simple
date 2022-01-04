<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news1 = News::create(['image' => 'images/1']);
        $data = [
            [
                'locale' => 'en' , 'title' => 'A recovery in the value of the major digital currencies represented by the rise of Bitcoin and Ethereum' ,
                'description' => 'With the exception of Ripple which has been showing a weak
             performance over the past few weeks, the major cryptocurrencies in the market
              including Bitcoin, Ethereum and Cardano have increased in value. In the past 24 hours, the Bitcoin price has increased by 8%,
              the value of Ether has increased by 10%, and the value of Cardano has increased by 15%. And while the price of the three currencies
              decreased by a small margin in the past three hours, they still recorded relatively large daily gains'
            ],
            [
               'locale' => 'ar' , 'title' => 'انتعاش في قيمة العملات الرقمية الرئيسية تمثلت بارتفاع كل من البيتكوين والاثيريوم ',
               'description' => 'باستثناء عملة الريبل والتي أظهرت أداءاً ضعيفاً طوال الأسابيع القليلة الماضية،
                فإن العملات الرقمية الرئيسية في السوق بما في ذلك البيتكوين والاثيريوم وكاردانو قد ارتفعت قيمتها.
                وفي غضون الـ 24 ساعة الماضية، ازداد سعر البيتكوين بنسبة 8% وارتفعت قيمة الإيثر بنسبة 10%، كما وارتفعت قيمة كاردانو بنسبة 15%.
               وبينما انخفض سعر العملات الثلاث بهامش ضئيل
                في الثلاث ساعات الماضية، إلا أنهم لا زالوا يسجلون مكاسب يومية كبيرة نسبياً'
            ]
        ];
        $news1->translations()->createMany($data);
    }
}
