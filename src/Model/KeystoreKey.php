<?php

namespace CustomD\EloquentModelEncrypt\Model;

use Illuminate\Database\Eloquent\Model;
/**
 * CustomD\EloquentModelEncrypt\Model\KeystoreKey
 *
 * @property integer $id
 * @property integer $ref
 * @property string $table
 * @property string $key
 * @property-read \CustomD\EloquentModelEncrypt\Model\RsaKey $rsaKey
 * @property-read \CustomD\EloquentModelEncrypt\Model\Keystore $keystore
 */
class KeystoreKey extends Model
{
    protected $fillable = [
        'keystore_id',
        'rsa_key_id',
        'key',
    ];

    public $timestamps = false;

    public function rsaKey()
    {
        return $this->belongsTo(RsaKey::class, 'rsa_key_id');
    }

    public function keyStore()
    {
        return $this->belongsTo(Keystore::class, 'keystore_id');
    }
}
