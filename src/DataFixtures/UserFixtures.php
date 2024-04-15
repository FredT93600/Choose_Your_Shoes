<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('frederic.tetard93@gmail.com');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword('$2y$13$0.yDvG6gwhsKVvI1WT.xyueYJuDJQ8tmdZG8uOIxHa6oI3rSlVwDu');
        $manager->persist($user);

        $admin = new User();
        $admin->setEmail('littledrack@hotmail.fr');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword('$2y$13$BBTNTnUBJLgZhac5P3G6Eu8gBPlXfrOqtNmizMZ4JkOq1618clbnS');
        $manager->persist($admin);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
