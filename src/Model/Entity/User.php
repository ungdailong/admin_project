<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id
 * @property string $user_name
 * @property string $password
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property \Cake\I18n\Time $birthday
 * @property string $address
 * @property int $country_id
 * @property \App\Model\Entity\Country $country
 * @property \Cake\I18n\Time $last_login
 * @property string $ip_login
 * @property int $status
 * @property int $group_id
 * @property \App\Model\Entity\Group $group
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Order[] $orders
 */
class User extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
