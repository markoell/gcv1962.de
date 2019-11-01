<?php

$originalImageTag = Kirby\Text\KirbyTag::$types['image'];

Kirby::plugin('gcv/custom-tags', [
 'tags' => [
     'banner' => [
        'attr' => $originalImageTag['attr'],
        'html' => function ($tag) use ($originalImageTag) {
            $result = "";
            $rowTag = '<div class="row justify-content-center mb-5">';
            $listTag = '<ul class="list-group list-group-horizontal list-group-flush">';
            foreach (explode(",", $tag->value()) as $pic) {
                $src = $tag->file($pic)->url();
                
                // build a new image tag with the srcset
                $image = Html::img($src, [
                    'width'  => $tag->width,
                    'height' => $tag->height,
                    'class'  => $tag->imgclass,
                    'title'  => $tag->title,
                    'alt'    => $tag->alt ?? ' ',
                ]);

                $result .= "\n" . '<li class="list-group-item p-0">' . "$image</li>";
            };

            return  "$rowTag\n$listTag$result\n</ul></div>";
        }
      ],
      'email2' => [
        'html' => function ($tag) {
            return '<a href="mailto:'. $tag->value() .'"><i class="far fa-envelope text-muted"></i></a>';
        }
      ]
 ]
]);
