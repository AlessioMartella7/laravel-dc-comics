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
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Longsword.jpg/1920px-Longsword.jpg',
                'length' => 120,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Rapier',
                'weight' => 1.2,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Rapier.jpg/1920px-Rapier.jpg',
                'length' => 90,
                'material' => 'Steel',
                'type' => 'One-handed'
            ],
            [
                'name' => 'Katana',
                'weight' => 1.0,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Katana.jpg/1920px-Katana.jpg',
                'length' => 100,
                'material' => 'High Carbon Steel',
                'type' => 'One-handed'
            ],
            [
                'name' => 'Broadsword',
                'weight' => 1.3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Broadsword.jpg/1920px-Broadsword.jpg',
                'length' => 110,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Bastard Sword',
                'weight' => 1.4,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Bastard_Sword.jpg/1920px-Bastard_Sword.jpg',
                'length' => 115,
                'material' => 'Steel',
                'type' => 'One or Two-handed'
            ],
            [
                'name' => 'Viking Sword',
                'weight' => 1.6,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Viking_sword.jpg/1920px-Viking_sword.jpg',
                'length' => 95,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Toledo Sword',
                'weight' => 1.8,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Toledo_sword.jpg/1920px-Toledo_sword.jpg',
                'length' => 120,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Crusader Sword',
                'weight' => 1.7,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Crusader_Sword.jpg/1920px-Crusader_Sword.jpg',
                'length' => 115,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Medieval Sword',
                'weight' => 1.5,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Medieval_Sword.jpg/1920px-Medieval_Sword.jpg',
                'length' => 110,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Roman Gladius',
                'weight' => 1.5,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Gladius.jpg/1920px-Gladius.jpg',
                'length' => 100,
                'material' => 'Bronze',
                'type' => 'Two-handed'
            ],
            [
                'name' => 'Double-Edged Sword',
                'weight' => 1.8,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Double-Edged_Sword.jpg/1920px-Double-Edged_Sword.jpg',
                'length' => 120,
                'material' => 'Steel',
                'type' => 'Two-handed'
            ],
        ];

        foreach ($swords as $sword) {
            $newSword = Sword::create($sword);
        }

    }
}
