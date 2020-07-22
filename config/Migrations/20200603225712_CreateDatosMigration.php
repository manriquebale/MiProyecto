<?php
/*declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateDatosMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     
    public function change()
    {
        $table = $this->table('datos_migration');
        $table->create();
    }
}*/

use Phinx\Migration\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;
/*
Para nuestro ejemplo vamos a generar 50 usuarios
*/
class CreateDatosMigration extends AbstractMigration
{
public function up()
{
$hasher = new DefaultPasswordHasher();
$password = $hasher->hash('secret');

$faker = Faker\Factory::create();
$data = [];
for ($i = 0; $i < 50; $i++)
{
$data[] = [
'nombre' => $faker->firstName(),
'apellido' => $faker->lastName(),
// 'username' => $faker->userName,
'email' => $faker->email,
'contrasena' => $password,
'rol' => $faker->randomElement($array = array ('user','editor')),
// 'active' => $faker->boolean,
'created' => date("Y-m-d H:i:s"),
'modified' => date("Y-m-d H:i:s")
];
}
$table = $this->table('Usuarios');
$table->insert($data)->save();
}
}