<?php

namespace tecnocen\formgenerator\roa\models;

use tecnocen\formgenerator\models as base;
use yii\web\Linkable;

/**
 * ROA contract handling Field records.
 *
 * @method void checkAccess(array $params)
 */
class Solicitude extends base\Solicitude implements Linkable
{
    use SlugTrait;

    /**
     * @inheritdoc
     */
    protected $formClass = Form::class;

    /**
     * @inheritdoc
     */
    protected $solicitudeValueClass = SolicitudeValue::class;

    /**
     * @inheritdoc
     */
    protected function slugConfig()
    {
        return [
            'resourceName' => 'solicitude',
            'parentSlugRelation' => 'form',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getLinks()
    {
        return $this->getSlugLinks() + [
            'values' => $this->getSelfLink() . '/value',
        ];
    }

    /**
     * @inheritdoc
     */
    public function extraFields()
    {
        return ['form', 'values'];
    }
}
