<?php

namespace Database\Seeders;

use App\Models\Cryptocurrency;
use Illuminate\Database\Seeder;

class CryptocurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cryptocurrency::create(['symbol' => 'BTC' , 'price_usd' => 48878.48 , 'trading' =>  33.34 , 'logo' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fe7.pngegg.com%2Fpngimages%2F764%2F919%2Fpng-clipart-logo-bitcoin-graphics-dark-web-bmp-file-format-bitcoin-text-orange.png&imgrefurl=https%3A%2F%2Fwww.pngegg.com%2Fen%2Fpng-dtyzi&tbnid=5FahRVhaR1tbEM&vet=12ahUKEwj39a3GmN70AhVIaBoKHdWUBJ4QMygEegUIARC-AQ..i&docid=gumQ5HF7iS_rWM&w=900&h=512&itg=1&q=logo%20btc&ved=2ahUKEwj39a3GmN70AhVIaBoKHdWUBJ4QMygEegUIARC-AQ']);
        Cryptocurrency::insert([
            ['rank' => 2 , 'symbol' => 'ETH' , 'price_usd' => 30878.50 , 'trading' =>  -10.34 , 'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNAvBGqR9DP3k0SuMRNsKjwYyEZ8jWNiQsqR4DDYmlm9Ps1o-mpOX6zNvKtxZEHdHn9_I&usqp=CAU'],
            ['rank' => 3 , 'symbol' => 'XRP' , 'price_usd' => 67.31 , 'trading' =>  -3.39 , 'logo' => 'https://cdn1.vectorstock.com/i/1000x1000/78/90/ripple-xrp-crypto-coin-ico-vector-20777890.jpg'],
            ['rank' => 4 , 'symbol' => 'NEO' , 'price_usd' => 4.44 , 'trading' =>  10.19 , 'logo' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAkFBMVEX///8A5ZkAr5IA5JNi67PD9+Jiwq4AqovD6OAA5JYA45EArI4A5Zrt/ffx/fne+++y9diU8cr5//2E78Op89S99t5Z67F57r5H6avY+uzK+OVo7Lec8s7g+/Df8+907bye2cwktZpRv6lxybbB59/Z8Oyq3dIw56SC78KFz7/R+eiM0sM5uaCj89HQ7eay4NYc8YvPAAADo0lEQVR4nO3djVqiQBSA4bHRDDQrNdPcbLefzWq37v/ulpEk9ADiD4twvvcGwu+BM5OlYwwAAAAAAAAAAAAAAMDx6w0vyr6EI3M9stZ/+Xte9nUcjbcbz3qNgPXHl/2yr+YI3F11/UWQBc/a5nXZl1Su/nBsv4Mss3g3b2VfWGlaTV8U+crSvbor++pKMJk3/MQgX1nUTdzzHy/Jd0ictXombv9ynHWHrDxDvoqJO7m3m2+ReJa6T9zzq+42QZZZ6jtxg4U35zMjs/gvP2o4cVvNrZ4ZwU3csl/DQU3m3l5BwpvF+ve3Zb+SAwkW3l2fGZmlO5iU/Xr2Fiy8+98ha1mqPVpa0/2GSEoWfzzslf3SdjMZNAoIElax/qh6m7kDDpG0LHbaqtDW3+3ebZFBwiiNeWXerrydHmDh3RjEn1ZmXb4rboh8q9j+bVT8M1O5fX6z2JvE8715tGmbvZ6W+VJzK7LJYqlZ/qDe7z/ttvYmbqcWrb1Pp+3OyUlHdRP3Hko0RJ5fO66I6ibB0n4fvdfW+/krDKK5yco2/vMhCqK2iVt4o1/3Ph7b8SIqmwS790G0e5+9n6wGUdjE7d6jhbcfLLzrQdQ18axYeBMoauL5sT9ePL/KZ0Zbk9SFV22TjIVXZ5OV/yX4eOxsKFL/Ju7PFJkLr7Ym7jfe6G2z/mfiwqusSfwfTc5O2+1cQerdxEZjdZax8CprEu5Xe8mbVcVNZpsWXoVNnnJPET1NzmhCE5rQZBVNJJpINJFoItFEoolEE4kmEk0kmkg0kWgi0USiiUQTiSYSTSSaSDSRaCLRRKKJRBOJJhJNJJpINJFoItFEoolEE4kmEk0kmkg0kWgi0USiicT/lks7N+m/Z34cUmUTk/2xWa1NTL5PRmprEjxDT/k/yKOliUn9dgLVTQKz7A+gq2xick1cdU3M5omrsUngM+vjxkqbZE5ctU1M+sTV3MSkTFzlTUzSxKWJWXyzUpsm61YmbkWajApuYuITtyJNht3tv5p7yyYmmrgVaRI7xa3AJib87pjKNAlcb3deyE5NjPterofDXnex8p/FtEeT4Mcc8pr/g1xndu3ZpIIuBrmOZVLVJPCW4/gubU1MeL5qZhaFTdw5vJkTV2UT4yZu+mjR2sS483hSsihuYtyRK0mjRXcT4yauOIxWfZOEiUsTZ/Vwa5p8iZ1fTJNvy5PyaBIXHoZGkzXu0DyaCJO6nk4MAAAAAAAAAAAAAADq5R8IfGOQQZUcnQAAAABJRU5ErkJggg=='],
        ]);
    }
}
