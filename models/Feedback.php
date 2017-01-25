<?php namespace Mcmraak\Mcfaq\Models;

use Model;

/**
 * Model
 */
class Feedback extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mcmraak_mcfaq_feedback';
}