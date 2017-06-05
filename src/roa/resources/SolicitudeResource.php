<?php

namespace tecnocen\formgenerator\roa\resources;

use tecnocen\formgenerator\roa\models\Solicitude;

/**
 * CRUD resource for `Solicitude` records 
 * @author Angel (Faryshta) Guevara <aguevara@alquimiadigital.mx>
 */
class SolicitudeResource extends \tecnocen\roa\controllers\OAuth2Resource
{
    /**
     * @inheritdoc
     */
    public $modelClass = Solicitude::class;
}
