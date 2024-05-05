<?php
namespace App\Filament\Resources\ArticleResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return $this->resource->toArray();
        return [
            'id' => $this->id,
            'article_title' => $this->article_title,
            'article_image' => $this->article_image,
            'article_content' => $this->article_content,
            'article_tag' => $this->article_tag,
            'author_name' => $this->author_name,
        ];
    }
}
