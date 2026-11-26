<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['name', 'description', 'repo_url', 'user_id'])]
class Project extends Model
{
    use HasUuids, HasFactory;

    public function jiris(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class, 'jiri_project');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
