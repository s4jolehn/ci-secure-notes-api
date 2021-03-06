<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Exception;
use Faker\Factory;

class NoteSeeder extends Seeder
{
    /**
     * @throws Exception
     */
    public function run()
    {
        for ($i = 0; $i < 35; $i++) {
            $this->db->table('note')->insert($this->generateNote($i));
        }
    }

    /**
     * @throws Exception
     */
    private function generateNote($rank): array
    {
        $faker = Factory::create();
        $wCategory = 2;
        $wNoCategory = 5;
        $isCategory = random_int(0, $wCategory + $wNoCategory) < $wCategory;
        $category = random_int(1, 9);

        return [
            'title' => $faker->sentence(3),
            'content' => $rank.' '.$faker->sentence(random_int(25, 55)),
            'user_id' => 1,
            'category_id' => $isCategory ? $category : NULL
        ];
    }
}
