<?php

set_error_handler(static function (int $severity, string $message, string $file, int $line): never {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

require dirname(__DIR__) . '/bootstrap.php';

if (!class_exists(Controller::class) || !class_exists(View::class)) {
    throw new RuntimeException('Application classes are unavailable');
}

$html = \Pelago\Emogrifier\CssInliner::fromHtml('<p>test</p>')
    ->inlineCss('p { color: red; }')
    ->render();
if (!str_contains($html, 'color: red')) {
    throw new RuntimeException('CSS inlining failed');
}

$formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
if ($formatter->formatCurrency(1.25, 'USD') === false) {
    throw new RuntimeException('Currency formatting failed');
}

View::compileCss();

echo "Smoke test passed\n";
