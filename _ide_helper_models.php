<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Batch
 *
 * @property integer $id
 * @property integer $projeto_id
 * @property string $nome
 * @property string $ambiente
 * @property string $execucao
 * @property string $situacao
 * @property string $saida
 * @property string $observacao
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Projeto $projeto
 * @method static \Illuminate\Database\Query\Builder|\App\Batch whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Batch whereProjetoId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Batch whereNome($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Batch whereAmbiente($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Batch whereExecucao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Batch whereSituacao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Batch whereSaida($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Batch whereObservacao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Batch whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Batch whereUpdatedAt($value)
 */
	class Batch extends \Eloquent {}
}

namespace App{
/**
 * App\Projeto
 *
 * @property integer $id
 * @property string $nome
 * @property string $responsavel
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Batch[] $batches
 * @method static \Illuminate\Database\Query\Builder|\App\Projeto whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Projeto whereNome($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Projeto whereResponsavel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Projeto whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Projeto whereUpdatedAt($value)
 */
	class Projeto extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $readNotifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

