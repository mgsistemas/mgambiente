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
 * App\Backlog
 *
 * @property integer $id
 * @property string $descricao
 * @property integer $projeto_id
 * @property integer $situation_id
 * @property integer $responsible_id
 * @property float $horas
 * @property float $conclusao
 * @property string $dependente
 * @property string $data_inicio
 * @property string $data_fim
 * @property string $observacao
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereDescricao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereProjetoId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereSituationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereResponsibleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereHoras($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereConclusao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereDependente($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereDataInicio($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereDataFim($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereObservacao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Backlog whereUpdatedAt($value)
 */
	class Backlog extends \Eloquent {}
}

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
 * App\Responsible
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Responsible whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Responsible whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Responsible whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Responsible whereUpdatedAt($value)
 */
	class Responsible extends \Eloquent {}
}

namespace App{
/**
 * App\Situacion
 *
 */
	class Situacion extends \Eloquent {}
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

