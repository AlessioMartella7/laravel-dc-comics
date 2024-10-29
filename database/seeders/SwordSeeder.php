<?php

namespace Database\Seeders;

use App\Models\Sword;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SwordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $swords = [
            [
                'name' => 'Longsword',
                'weight' => 1.5,
                'image' => 'https://medievalextreme.com/wp-content/uploads/2019/10/A3651DA2-3A2B-4049-80F8-19666531B297.webp',
                'length' => 120,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Rapier',
                'weight' => 1.2,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Rapier-P4221440-white.jpg',
                'length' => 90,
                'material' => 'Steel',
                'type' => 'One-handed'
            ],
            [
                'name' => 'Katana',
                'weight' => 1.0,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Shinken.jpg/1200px-Shinken.jpg',
                'length' => 100,
                'material' => 'High Carbon Steel',
                'type' => 'One-handed'
            ],
            [
                'name' => 'Broadsword',
                'weight' => 1.3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/11/Cawood_sword_-_diagonal_-_YORYM_2007_3086.JPG',
                'length' => 110,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Bastard Sword',
                'weight' => 1.4,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Hand-and-a-Half_Sword_MET_DP146428.jpg/640px-Hand-and-a-Half_Sword_MET_DP146428.jpg',
                'length' => 115,
                'material' => 'Steel',
                'type' => 'One or Two-handed'
            ],
            [
                'name' => 'Viking Sword',
                'weight' => 1.6,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Viking_swords_at_Bergen_Museum.jpg/1200px-Viking_swords_at_Bergen_Museum.jpg',
                'length' => 95,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Toledo Sword',
                'weight' => 1.8,
                'image' => 'https://lh3.googleusercontent.com/proxy/GMYI0uFw-mlfI2RUdMlgGZN3sH3C7DaJUXL1jO3cmHDWf-TIJZ-gJxSFIdvXvKJaweIzrooP7SDyYzA3DflI_-XujGjm2gzI6gQwMVQ',
                'length' => 120,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Crusader Sword',
                'weight' => 1.7,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Falchion_MET_244431.jpg/640px-Falchion_MET_244431.jpg',
                'length' => 115,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Medieval Sword',
                'weight' => 1.5,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8c/Sword-ca-1300_AD.JPG',
                'length' => 110,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Roman Gladius',
                'weight' => 1.5,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Mainz_sword.jpg/640px-Mainz_sword.jpg',
                'length' => 100,
                'material' => 'Bronze',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Double-Edged Sword',
                'weight' => 1.8,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Sword_with_Scabbard_MET_DP119025_brightened_2x3.jpg/1200px-Sword_with_Scabbard_MET_DP119025_brightened_2x3.jpg',
                'length' => 120,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Corsair Sword',
                'weight' => 1.6,
                'image' => 'https://benersonlittle.com/wp-content/uploads/2016/12/ak126a.jpg',
                'length' => 110,
                'material' => 'Steel',
                'type' => 'One-handed'
            ],
        ];

        foreach ($swords as $sword) {
            $newSword = Sword::create($sword);
        }

    }
}
