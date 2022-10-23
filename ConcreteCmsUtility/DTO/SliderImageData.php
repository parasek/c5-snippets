<?php

declare(strict_types=1);

namespace ConcreteCmsUtility\DTO;

/**
 * @license https://opensource.org/licenses/MIT The MIT License
 * @link https://github.com/parasek/concretecms-utility
 */
class SliderImageData
{
    public function __construct(
        public readonly bool      $isValid,
        public readonly bool      $isImage,
        public readonly bool      $isSvg,
        public readonly ?int      $id,
        public readonly ?string   $url,
        public readonly ?string   $srcset,
        public readonly ?string   $sizes,
        public readonly ?string   $placeholder,
        public readonly ?int      $width,
        public readonly ?int      $height,
        public readonly ?string   $alt,
        public readonly ?string   $title,
        public readonly ?string   $subtitle,
        public readonly ?string   $link,
        public readonly ?string   $buttonText,
        public readonly bool      $rightAlignment,
        public readonly bool      $newWindow,
        public readonly ?FileData $file,
        public readonly ?SvgData  $svg,
    )
    {
    }
}
