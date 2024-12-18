<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit;

use BaseCodeOy\Formatter\FormatStars;

test('it formats the rating as stars', function (): void {
    expect(FormatStars::execute(3.5))->toBe('★★★½☆');
    expect(FormatStars::execute(4.25))->toBe('★★★★¼');
    expect(FormatStars::execute(2.8))->toBe('★★¾☆☆');
});

test('it formats the rating as stars with a custom max value', function (): void {
    expect(FormatStars::execute(3.5, 3))->toBe('★★★');
    expect(FormatStars::execute(4.25, 6))->toBe('★★★★¼☆');
});
