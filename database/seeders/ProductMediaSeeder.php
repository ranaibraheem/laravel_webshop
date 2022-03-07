<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_media')->insert([
            'id'            => 1, 
            'product_id'    => 1,
            'media_type'    => 'image',
            'file_name'     => 'simplecoffem.jpg',
            'alt'           => 'Photo by mentatdgt from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);
        
        DB::table('product_media')->insert([
            'id'            => 2,
            'product_id'    => 2,
            'media_type'    => 'image',
            'file_name'     => 'profitionalcoffem.jpg',
            'alt'           => 'Photo by Eka Sutrisno from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 3,
            'product_id'    => 3,
            'media_type'    => 'image',
            'file_name'     => 'freshcoffeem.jpg',
            'alt'           => 'Photo by Matt Jerome Connor from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 4,
            'product_id'    => 4,
            'media_type'    => 'image',
            'file_name'     => 'filtercoffeem.jpg',
            'alt'           => 'Photo by Thirdman from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 5,
            'product_id'    => 5,
            'media_type'    => 'image',
            'file_name'     => 'easycoffeem.jpg',
            'alt'           => 'Photo by Ketut Subiyanto from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 6,
            'product_id'    => 6,
            'media_type'    => 'image',
            'file_name'     => 'silvercoffeem.jpg',
            'alt'           => 'Photo by Karolina Grabowska from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 7,
            'product_id'    => 7,
            'media_type'    => 'image',
            'file_name'     => 'smallcoffeem.jpg',
            'alt'           => 'Photo by Hiago Italo from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 8,
            'product_id'    => 8,
            'media_type'    => 'image',
            'file_name'     => 'takeawaycoffeem.jpg',
            'alt'           => 'Photo by Taryn Elliott from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 9,
            'product_id'    => 9,
            'media_type'    => 'image',
            'file_name'     => 'handycoffeem.jpg',
            'alt'           => 'Photo by Maria Orlova from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 10,
            'product_id'    => 10,
            'media_type'    => 'image',
            'file_name'     => 'soprofitionalcoffeem.jpg',
            'alt'           => 'Photo by Ivan Samkov from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 11,
            'product_id'    => 11,
            'media_type'    => 'image',
            'file_name'     => 'everydaycoffeem.jpg',
            'alt'           => 'Photo by Cleyder Duque from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 12,
            'product_id'    => 12,
            'media_type'    => 'image',
            'file_name'     => 'moderncoffeem.jpg',
            'alt'           => 'Photo by Jonathan Borba from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 13,
            'product_id'    => 13,
            'media_type'    => 'image',
            'file_name'     => 'supereasycoffeem.jpg',
            'alt'           => 'Photo by Svetlana Ponomareva from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 14,
            'product_id'    => 14,
            'media_type'    => 'image',
            'file_name'     => 'arabiccoffeem.jpg',
            'alt'           => 'Photo by Michaela S. from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 15,
            'product_id'    => 15,
            'media_type'    => 'image',
            'file_name'     => 'superprofitionalcoffeem.jpg',
            'alt'           => 'Photo by Pavel Danilyuk from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 16,
            'product_id'    => 16,
            'media_type'    => 'image',
            'file_name'     => 'worktimecoffeem.jpg',
            'alt'           => 'Photo by Ekrulila from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 17,
            'product_id'    => 17,
            'media_type'    => 'image',
            'file_name'     => 'timeoutcoffeem.jpg',
            'alt'           => 'Photo by Rachel Claire from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 18,
            'product_id'    => 18,
            'media_type'    => 'image',
            'file_name'     => 'nicecoffeem.jpg',
            'alt'           => 'Photo by Lynnelle Richardson from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 19,
            'product_id'    => 19,
            'media_type'    => 'image',
            'file_name'     => 'coffeeloverscoffeem.jpg',
            'alt'           => 'Photo by Clam Lo from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 20,
            'product_id'    => 20,
            'media_type'    => 'image',
            'file_name'     => 'cappuccinoloverscoffeem.jpg',
            'alt'           => 'Photo by Pavel Danilyuk from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 21,
            'product_id'    => 21,
            'media_type'    => 'image',
            'file_name'     => 'cappuccinoprofitionalcoffeem.jpg',
            'alt'           => 'Photo by Lisa from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 22,
            'product_id'    => 22,
            'media_type'    => 'image',
            'file_name'     => 'espressocoffeem.jpg',
            'alt'           => 'Photo by Sander Dalhuisen from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 23,
            'product_id'    => 23,
            'media_type'    => 'image',
            'file_name'     => 'tastycoffeem.jpg',
            'alt'           => 'Photo by Ida Bagus Anggarama from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 24,
            'product_id'    => 24,
            'media_type'    => 'image',
            'file_name'     => 'smallcappuccinocoffeem.jpg',
            'alt'           => 'Photo by Noah Frohn from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 25,
            'product_id'    => 25,
            'media_type'    => 'image',
            'file_name'     => 'tinycoffeem.jpg',
            'alt'           => 'Photo by Tim Douglas from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 26,
            'product_id'    => 26,
            'media_type'    => 'image',
            'file_name'     => 'uniccoffeem.jpg',
            'alt'           => 'Photo by Georgi Petrov from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 27,
            'product_id'    => 27,
            'media_type'    => 'image',
            'file_name'     => 'beans1.jpg',
            'alt'           => 'Photo by Cup of Couple from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 28,
            'product_id'    => 28,
            'media_type'    => 'image',
            'file_name'     => 'beans2.jpg',
            'alt'           => 'Photo by Cup of Couple from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 29,
            'product_id'    => 29,
            'media_type'    => 'image',
            'file_name'     => 'beans3.jpg',
            'alt'           => 'Photo by Denys Gromov from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 30,
            'product_id'    => 30,
            'media_type'    => 'image',
            'file_name'     => 'beans4.jpg',
            'alt'           => 'Photo by Thirdman from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 31,
            'product_id'    => 31,
            'media_type'    => 'image',
            'file_name'     => 'beans5.jpg',
            'alt'           => 'Photo by Los Muertos Crew from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 32,
            'product_id'    => 32,
            'media_type'    => 'image',
            'file_name'     => 'beans6.jpg',
            'alt'           => 'istock',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 33,
            'product_id'    => 33,
            'media_type'    => 'image',
            'file_name'     => 'beans7.jpg',
            'alt'           => 'Photo by Ave Calvar Martinez from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 34,
            'product_id'    => 34,
            'media_type'    => 'image',
            'file_name'     => 'beans8.jpg',
            'alt'           => 'Photo by bacho nadiradze from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 35,
            'product_id'    => 35,
            'media_type'    => 'image',
            'file_name'     => 'beans9.jpg',
            'alt'           => 'Photo by Cup of Couple from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 36,
            'product_id'    => 36,
            'media_type'    => 'image',
            'file_name'     => 'beans10.jpg',
            'alt'           => 'Photo by Alexas Fotos from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 37,
            'product_id'    => 37,
            'media_type'    => 'image',
            'file_name'     => 'beans11.jpg',
            'alt'           => 'Photo by Engin Akyurt from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 38,
            'product_id'    => 38,
            'media_type'    => 'image',
            'file_name'     => 'beans12.jpg',
            'alt'           => 'Photo by Ryutaro Tsukata from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 39,
            'product_id'    => 39,
            'media_type'    => 'image',
            'file_name'     => 'beans13.jpg',
            'alt'           => 'Photo by Cup of Couple from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 40,
            'product_id'    => 40,
            'media_type'    => 'image',
            'file_name'     => 'beans14.jpg',
            'alt'           => 'Photo by cottonbro from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 41,
            'product_id'    => 41,
            'media_type'    => 'image',
            'file_name'     => 'beans15.jpg',
            'alt'           => 'Photo by Nicola Barts from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 42,
            'product_id'    => 42,
            'media_type'    => 'image',
            'file_name'     => 'beans16.jpg',
            'alt'           => 'Photo by lyncoln Miller from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 43,
            'product_id'    => 43,
            'media_type'    => 'image',
            'file_name'     => 'beans17.jpg',
            'alt'           => 'Photo by Mariakray from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 44,
            'product_id'    => 44,
            'media_type'    => 'image',
            'file_name'     => 'beans18.jpg',
            'alt'           => 'Photo by Pavel Danilyuk from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 45,
            'product_id'    => 45,
            'media_type'    => 'image',
            'file_name'     => 'beans19.jpg',
            'alt'           => 'Photo by Cup of Couple from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 46,
            'product_id'    => 46,
            'media_type'    => 'image',
            'file_name'     => 'beans20.jpg',
            'alt'           => 'Photo by Lisa from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 47,
            'product_id'    => 47,
            'media_type'    => 'image',
            'file_name'     => 'blackcoffeec.jpg',
            'alt'           => 'Photo by Chevanon Photography from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 48,
            'product_id'    => 48,
            'media_type'    => 'image',
            'file_name'     => 'nicebrowncoffeec.jpg',
            'alt'           => 'Photo by Pelageia Zelenina from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 49,
            'product_id'    => 49,
            'media_type'    => 'image',
            'file_name'     => 'browncoffeec.jpg',
            'alt'           => 'Photo by Valeriia Miller from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 50,
            'product_id'    => 50,
            'media_type'    => 'image',
            'file_name'     => 'whitecoffeec.jpg',
            'alt'           => 'Photo by Alin Luna from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 51,
            'product_id'    => 51,
            'media_type'    => 'image',
            'file_name'     => 'greycoffeec.jpg',
            'alt'           => 'Photo by Vitaly Vlasov from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 52,
            'product_id'    => 52,
            'media_type'    => 'image',
            'file_name'     => 'nicecoffeec.jpg',
            'alt'           => 'Photo by Marta Dzedyshko from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 53,
            'product_id'    => 53,
            'media_type'    => 'image',
            'file_name'     => 'potterycoffeec.jpg',
            'alt'           => 'Photo by Cup of Couple from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 54,
            'product_id'    => 54,
            'media_type'    => 'image',
            'file_name'     => 'beautifullcoffeec.jpg',
            'alt'           => 'Photo by SpotwizardLee from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 55,
            'product_id'    => 55,
            'media_type'    => 'image',
            'file_name'     => 'bigcoffeec.jpg',
            'alt'           => 'Photo by Ioana Motoc from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 56,
            'product_id'    => 56,
            'media_type'    => 'image',
            'file_name'     => 'whitebigcoffeec.jpg',
            'alt'           => 'Photo by cottonbro from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 57,
            'product_id'    => 57,
            'media_type'    => 'image',
            'file_name'     => 'smallwhitecoffeec.jpg',
            'alt'           => 'Photo by Rachel Claire from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 58,
            'product_id'    => 58,
            'media_type'    => 'image',
            'file_name'     => 'bigpinkcoffeec.jpg',
            'alt'           => 'Photo by Harper Sunday from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 59,
            'product_id'    => 59,
            'media_type'    => 'image',
            'file_name'     => 'greencoffeec.jpg',
            'alt'           => 'Photo by Olga Mironova from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 60,
            'product_id'    => 60,
            'media_type'    => 'image',
            'file_name'     => 'greenbrowncoffeec.jpg',
            'alt'           => 'Photo by Nida from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 61,
            'product_id'    => 61,
            'media_type'    => 'image',
            'file_name'     => 'portablecoffeec.jpg',
            'alt'           => 'Photo by Quang Anh Ha Nguyen from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 62,
            'product_id'    => 62,
            'media_type'    => 'image',
            'file_name'     => 'nicegreycoffeec.jpg',
            'alt'           => 'Photo by Anna Rye from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 63,
            'product_id'    => 63,
            'media_type'    => 'image',
            'file_name'     => 'bigbeautifullcoffeec.jpg',
            'alt'           => 'Photo by Karolina Grabowska from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 64,
            'product_id'    => 64,
            'media_type'    => 'image',
            'file_name'     => 'orangecoffeec.jpg',
            'alt'           => 'Photo by Tim Douglas from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 65,
            'product_id'    => 65,
            'media_type'    => 'image',
            'file_name'     => 'whitegoldcoffeec.jpg',
            'alt'           => 'Photo by Ioana Motoc from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 66,
            'product_id'    => 66,
            'media_type'    => 'image',
            'file_name'     => 'verynicecoffeec.jpg',
            'alt'           => 'Photo by Eneida Nieves from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_media')->insert([
            'id'            => 67,
            'product_id'    => 67,
            'media_type'    => 'image',
            'file_name'     => 'uniccoffeec.jpg',
            'alt'           => 'Photo by Skyler Ewing from Pexels',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

    }
}
