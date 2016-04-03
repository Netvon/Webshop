<?php

use App\Category;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nintendo = \App\Category::whereName('Nintendo')->first()->id;
        $sony = \App\Category::whereName('Sony')->first()->id;
        $microsoft = \App\Category::whereName('Microsoft')->first()->id;
        $dvd = \App\Category::whereName('Dvd\'s')->first()->id;

//        dd($nintendo, $sony, $microsoft);

        DB::table('products')->insert([
            'name'              => 'Nintendo 64',
            'price'             => '53850.00',
            'is_in_stock'       => false,
            'description_long'  => 'Named for its 64-bit central processing unit, it was released in June 1996 in Japan, September 1996 in North America, March 1997 in Europe and Australia, September 1997 in France and December 1997 in Brazil. It is the industry\'s last major home console to use the cartridge as its primary storage format, although current handheld systems (such as the PlayStation Vita and Nintendo 3DS) also use cartridges. While the Nintendo 64 was succeeded by Nintendo\'s MiniDVD-based GameCube in November 2001, the consoles remained available until the system was retired in late 2003.',
            'description_short' => 'The Nintendo 64, stylized as NINTENDO64 and often referred to as N64, is Nintendo\'s third home video game console for the international market.',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Super NES',
            'price'             => '3000.00',
            'is_in_stock'       => false,
            'description_long'  => 'The SNES is Nintendo\'s second home console, following the Nintendo Entertainment System (NES). The console introduced advanced graphics and sound capabilities compared with other consoles at the time. Additionally, development of a variety of enhancement chips (which were integrated on game circuit boards) helped to keep it competitive in the marketplace.',
            'description_short' => 'The Super Nintendo Entertainment System (officially abbreviated the Super NES or SNES, and commonly shortened to Super Nintendo[) is a 16-bit home video game console developed by Nintendo',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'NES',
            'price'             => '2000.00',
            'is_in_stock'       => true,
            'description_long'  => 'The best-selling gaming console of its time, the NES helped revitalize the US video game industry following the video game crash of 1983. With the NES, Nintendo introduced a now-standard business model of licensing third-party developers, authorizing them to produce and distribute titles for Nintendo\'s platform.',
            'description_short' => 'The Nintendo Entertainment System (also abbreviated as NES) is an 8-bit home video game console that was developed and manufactured by Nintendo. It was initially released in Japan as the Family Computer',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Nintendo GameCube',
            'price'             => '150.00',
            'is_in_stock'       => true,
            'description_long'  => 'The GameCube is the first Nintendo console to use optical discs as its primary storage medium. The discs are similar to the miniDVD format; as a result of their smaller size and the console\'s small disc compartment, the system was not designed to play standard DVDs or audio CDs. The console supports online gaming for a small number of titles via the broadband or modem adapter and connects to the Game Boy Advance via the link cable, allowing players to access exclusive in-game features using the handheld as a second screen and controller.',
            'description_short' => 'The GameCube is a home video game console released by Nintendo in Japan on September 14, 2001',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
            'slug'              => str_slug('Nintendo GameCube'),
        ]);

        DB::table('products')->insert([
            'name'              => 'Nintendo Wii',
            'price'             => '200.00',
            'is_in_stock'       => true,
            'description_long'  => 'The Wii introduced the Wii Remote controller, which can be used as a handheld pointing device and which detects movement in three dimensions. Another notable feature of the console is the now defunct WiiConnect24, which enabled it to receive messages and updates over the Internet while in standby mode. Like other seventh-generation consoles, it features a game download service, called "Virtual Console", which features emulated games from past systems.',
            'description_short' => 'The Wii is a home video game console released by Nintendo on November 19, 2006. As a seventh-generation console, the Wii competes with Microsoft\'s Xbox 360 and Sony\'s PlayStation 3.',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Nintendo Wii U',
            'price'             => '400.00',
            'is_in_stock'       => true,
            'description_long'  => 'The Wii U is the first Nintendo console to support HD graphics. The system\'s primary controller is the Wii U GamePad, which features an embedded touchscreen, and combines directional buttons, analog sticks, and action buttons. The screen can be used either as a supplement to the main display (either providing an alternate, asymmetric gameplay experience, or a means of local multiplayer without resorting to a split screen), or in supported games, to play the game directly on the GamePad independently of the television.',
            'description_short' => 'The Wii U is the first Nintendo console to support HD graphics.',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'PlayStation 1',
            'price'             => '50.00',
            'is_in_stock'       => false,
            'description_long'  => 'The PlayStation is the first "computer entertainment platform" to ship 100 million units, which it had reached 9 years and 6 months after its initial launch. Reactions to the console upon launch were favourable; critics praised the console for the quality of its 3-dimensional graphics. Then Microsoft chairman, Bill Gates, preferred Sony\'s console to the competition from Sega\'s Saturn, saying "our game designer likes the Sony machine".',
            'description_short' => 'The PlayStation is the first "computer entertainment platform" to ship 100 million units.',
            'category_id'       => $sony,
            'created_at'        => Carbon::now()->toDateTimeString(),
            'slug'              => str_slug('PlayStation'),
        ]);

        DB::table('products')->insert([
            'name'              => 'PlayStation 2',
            'price'             => '100.00',
            'is_in_stock'       => false,
            'description_long'  => 'The PlayStation 2 is the best-selling video game console in history, selling over 155 million units, 150 million confirmed by Sony in 2011.[8] More than 3,874 game titles have been released for the PS2 since launch, and more than 1.5 billion copies have been sold.[9] Sony later manufactured several smaller, lighter revisions of the console known as "slimline" models, and in 2006 introduced the successor, the PlayStation 3.',
            'description_short' => 'The PlayStation 2 (PS2), is a home video game console that was manufactured by Sony Computer Entertainment.',
            'category_id'       => $sony,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'PlayStation 3',
            'price'             => '350.00',
            'is_in_stock'       => true,
            'description_long'  => 'The console was first officially announced at E3 2005, and was released at the end of 2006. It was the first console to use Blu-ray Disc as its primary storage medium. Major features of the console include its unified online gaming service, PlayStation Network, and its connectivity with PlayStation Portable and PlayStation Vita, In September 2009 the updated PlayStation 3 Slim, was released.',
            'description_short' => 'The PlayStation 3 (PS3) is a home video game console produced by Sony Computer Entertainment.',
            'category_id'       => $sony,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'PlayStation 4',
            'price'             => '400.00',
            'is_in_stock'       => false,
            'description_long'  => 'The PlayStation 4 (PS4) is a home video game console developed by Sony Computer Entertainment. Announced as the successor to the PlayStation 3 during a press conference on February 20, 2013, it was launched on November 15, 2013 in North America, and November 29, 2013 in Europe, South America and Australia, and February 22, 2014 in Japan. It competes with Nintendo\'s Wii U and Microsoft\'s Xbox One, as part of the eighth generation of video game consoles.',
            'description_short' => 'The PlayStation 4 (PS4) is a home video game console developed by Sony Computer Entertainment.',
            'category_id'       => $sony,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Xbox',
            'price'             => '300.00',
            'is_in_stock'       => false,
            'description_long'  => 'That original device was the first video game console offered by an American company after the Atari Jaguar stopped sales in 1996. It reached over 24 million units sold as of May 10, 2006. Microsoft\'s second console, the Xbox 360, was released in 2005 and has sold over 77.2 million consoles worldwide as of April 18, 2013.',
            'description_short' => 'Xbox is a video gaming brand created and owned by Microsoft.',
            'category_id'       => $microsoft,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Xbox 360',
            'price'             => '350.00',
            'is_in_stock'       => true,
            'description_long'  => 'The Xbox 360 is a home video game console developed by Microsoft. As the successor to the original Xbox, it is the second console in the Xbox series. The Xbox 360 competes with Sony\'s PlayStation 3 and Nintendo\'s Wii as part of the seventh generation of video game consoles. The Xbox 360 was officially unveiled on MTV on May 12, 2005, with detailed launch and game information divulged later that month at the Electronic Entertainment Expo (E3).',
            'description_short' => 'The Xbox 360 is a home video game console developed by Microsoft.',
            'category_id'       => $microsoft,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Xbox One',
            'price'             => '400.00',
            'is_in_stock'       => true,
            'description_long'  => 'The Xbox One is a home video game console developed by Microsoft. Announced on May 21, 2013, it is the successor to the Xbox 360 and the third console in the Xbox family, and was released on November 22, 2013 in North America, Europe (in some countries), Australia and Brazil, September 2, 2014 for other Europe countries, September 4, 2014 in Japan, and September 29, 2014 for Canada. It competes with Sony\'s PlayStation 4 and Nintendo\'s Wii U as part of the eighth generation of video game consoles.',
            'description_short' => 'The Xbox One is a home video game console developed by Microsoft.',
            'category_id'       => $microsoft,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'The Fast and the Furious',
            'price'             => '5.00',
            'is_in_stock'       => true,
            'description_long'  => 'Watched by undercover Customs Agent Monica Fuentes (Eva Mendes), Brian is caught by US Customs agents and given a deal by agents Bilkins and Markham (James Remar) to go undercover and try to bring down drug lord Carter Verone (Cole Hauser) in exchange for the erasure of his criminal record. Brian agrees but only if he is given permission to choose his partner, refusing to partner with the agent assigned to watch him. Brian heads home to Barstow, California, where he recruits Roman Pearce (Tyrese Gibson), a childhood friend of Brian who had served jail time and is under house arrest, to help him.',
            'description_short' => 'The Fast and the Furious (also known as Fast & Furious) is an American franchise including a series of action films.',
            'category_id'       => $dvd,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'The Fast and the Furious: Tokyo Drift',
            'price'             => '7.50',
            'is_in_stock'       => true,
            'description_long'  => 'This film\'s story occurs sometime after Fast & Furious 6 with a scene that was later made concurrent with events in Furious 7. After totaling his car in an illegal street race, Sean Boswell (Lucas Black) is sent to live in Tokyo, Japan, with his father, a U.S. Navy officer, in order to avoid juvie or even jail.',
            'description_short' => 'The Fast and the Furious (also known as Fast & Furious) is an American franchise including a series of action films.',
            'category_id'       => $dvd,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        \App\Product::each(function (\App\Product $product) {
            $product->sluggify(true);
            $product->save();
        });

//        factory(\App\Product::class, 20)
//            ->create()
//            ->each(function(\App\Product $category)
//            {
//                $category->sluggify();
//            });
    }
}
