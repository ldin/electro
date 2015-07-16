<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Request extends Eloquent
{

    protected $table = 'requests';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $softDelete = true;
}
