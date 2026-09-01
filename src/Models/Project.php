<?php

declare(strict_types=1);

namespace Liberu\CRM\Projects\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 */
final class Project extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_projects';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['client_visible' => 'boolean', 'starts_at' => 'date', 'ends_at' => 'date'];
    }
}
