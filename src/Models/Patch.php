<?php namespace Maclof\Kubernetes\Models;

class Patch
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $updatedAttributes = [];

    /**
     * Patch constructor.
     *
     * @param Model $model The model that needs to be updated
     * @param array $updatedAttributes The attributes that we need to update
     */
    public function __construct(Model $model, array $updatedAttributes)
    {
        $this->name              = $model->getMetadata('name');
        $this->updatedAttributes = $updatedAttributes;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getJsonEncodedUpdatedAttributes()
    {
        return json_encode($this->updatedAttributes);
    }
}