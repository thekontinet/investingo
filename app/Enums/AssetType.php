<?php

namespace App\Enums;

enum AssetType: string
{
    case Crypto = 'crypto';

    public function fromOptions()
    {
        return [];
    }
}
