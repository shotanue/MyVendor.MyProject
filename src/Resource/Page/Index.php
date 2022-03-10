<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Resource\Annotation\JsonSchema;

class Index extends ResourceObject
{
    /** @var array{greeting: string} */
    public $body;

    /** 
     * @return static 
     * @JsonSchema(schema="Index.json", params="Index.Get.json")
     * */
    public function onGet(string $name = 'BEAR.Sunday')
    {
        $this->body = [
            'greeting' => 'Hello ' . $name,
        ];

        return $this;
    }
}
