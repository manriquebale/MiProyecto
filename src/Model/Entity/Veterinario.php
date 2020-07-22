<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Veterinario Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $tel
 * @property string $email
 * @property string $matricula
 * @property string $sucursal
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Veterinario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'tel' => true,
        'email' => true,
        'matricula' => true,
        'sucursal' => true,
        'created' => true,
        'modified' => true,
    ];
}
