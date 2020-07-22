<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vacuna Entity
 *
 * @property int $id
 * @property string $tipo
 * @property string $fdcolocacion
 * @property string $idMascota
 * @property string $idVeterinario
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Vacuna extends Entity
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
        'tipo' => true,
        'fdcolocacion' => true,
        'idMascota' => true,
        'idVeterinario' => true,
        'created' => true,
        'modified' => true,
    ];
}
