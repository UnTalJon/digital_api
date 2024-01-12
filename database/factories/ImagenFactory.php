<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imagen>
 */
class ImagenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $myFaker = Faker::create('es_ES');

        $url = $myFaker->randomElement([
            'https://images.pexels.com/photos/3225517/pexels-photo-3225517.jpeg',
            'https://images.pexels.com/photos/1547813/pexels-photo-1547813.jpeg',
            'https://images.pexels.com/photos/15286/pexels-photo.jpg',
            'https://images.pexels.com/photos/1366909/pexels-photo-1366909.jpeg',
            'https://images.pexels.com/photos/707344/pexels-photo-707344.jpeg',
            'https://images.pexels.com/photos/1820563/pexels-photo-1820563.jpeg',
            'https://images.pexels.com/photos/733860/pexels-photo-733860.jpeg',
            'https://images.pexels.com/photos/3408744/pexels-photo-3408744.jpeg',
            'https://images.pexels.com/photos/158229/lost-places-pforphoto-leave-factory-158229.jpeg',
            'https://images.pexels.com/photos/1224859/pexels-photo-1224859.jpeg',
            'https://images.pexels.com/photos/64768/pexels-photo-64768.jpeg',
            'https://images.pexels.com/photos/1369257/pexels-photo-1369257.jpeg',
            'https://images.pexels.com/photos/1875479/pexels-photo-1875479.jpeg',
            'https://images.pexels.com/photos/1472234/pexels-photo-1472234.jpeg',
            'https://images.pexels.com/photos/1853951/pexels-photo-1853951.jpeg',
            'https://images.pexels.com/photos/1687066/pexels-photo-1687066.jpeg',
            'https://images.pexels.com/photos/746684/pexels-photo-746684.jpeg',
            'https://images.pexels.com/photos/162389/lost-places-old-decay-ruin-162389.jpeg',
            'https://images.pexels.com/photos/1089425/pexels-photo-1089425.jpeg',
            'https://images.pexels.com/photos/895451/pexels-photo-895451.jpeg',
            'https://images.pexels.com/photos/1209962/pexels-photo-1209962.jpeg',
            'https://images.pexels.com/photos/235986/pexels-photo-235986.jpeg',
            'https://images.pexels.com/photos/1484776/pexels-photo-1484776.jpeg',
            'https://images.pexels.com/photos/2208967/pexels-photo-2208967.jpeg',
            'https://images.pexels.com/photos/2128040/pexels-photo-2128040.jpeg',
            'https://images.pexels.com/photos/1901028/pexels-photo-1901028.jpeg',
            'https://images.pexels.com/photos/20943/pexels-photo.jpg',
            'https://images.pexels.com/photos/5721804/pexels-photo-5721804.jpeg',
            'https://images.pexels.com/photos/5721872/pexels-photo-5721872.jpeg',
            'https://images.pexels.com/photos/5721899/pexels-photo-5721899.jpeg',
            'https://images.pexels.com/photos/4190564/pexels-photo-4190564.jpeg',
            'https://images.pexels.com/photos/696407/pexels-photo-696407.jpeg',
            'https://images.pexels.com/photos/552774/pexels-photo-552774.jpeg',
            'https://images.pexels.com/photos/2155319/pexels-photo-2155319.jpeg',
            'https://images.pexels.com/photos/47856/rolex-wrist-watch-clock-gmt-47856.jpeg',
            'https://images.pexels.com/photos/2095953/pexels-photo-2095953.jpeg',
            'https://images.pexels.com/photos/1068866/pexels-photo-1068866.jpeg',
            'https://images.pexels.com/photos/947885/pexels-photo-947885.jpeg',
            'https://images.pexels.com/photos/343720/pexels-photo-343720.jpeg'
        ]);
        $lat = $myFaker->latitude;
        $lng = $myFaker->longitude;
        
        return [
            'url' => $url,
            'descripcion' => $myFaker->paragraph(1),
            'coordenadas' => new Point($lat, $lng)
        ];
    }
}
