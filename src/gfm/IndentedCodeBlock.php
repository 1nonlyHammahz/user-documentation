<?hh // strict
/*
 *  Copyright (c) 2004-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the BSD-style license found in the
 *  LICENSE file in the root directory of this source tree. An additional grant
 *  of patent rights can be found in the PATENTS file in the same directory.
 *
 */

namespace Facebook\GFM;

use namespace HH\Lib\Str;

final class IndentedCodeBlock extends LeafBlock {
  public static function isStartedByLine(string $line): bool {
    return Str\starts_with($line, '    ');
  }
  
  <<__Override>>
  public function getContinuationPrefix(): ?string {
    return '    ';
  }
}
