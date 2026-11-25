<?php

dataset('pages', ['/', '/services', '/a-propos', '/contact', '/cgu']);

it('renders every page with one h1, valid JSON-LD and no emoji', function (string $uri) {
    $html = $this->get($uri)->assertOk()->getContent();

    expect(substr_count($html, '<h1'))->toBe(1)
        ->and(preg_match('/[\x{1F000}-\x{1FAFF}\x{2600}-\x{27BF}\x{2B50}]/u', $html))->toBe(0)
        ->and($html)->not->toContain('Éclair')
        ->and($html)->not->toContain('PARTENAIRE SAP')
        ->and($html)->not->toContain('crédit d')
        ->and($html)->not->toContain("Crédit d'impôt");

    preg_match_all('#<script type="application/ld\+json">(.*?)</script>#s', $html, $blocks);
    expect($blocks[1])->not->toBeEmpty();
    foreach ($blocks[1] as $json) {
        expect(json_decode($json, true, flags: JSON_THROW_ON_ERROR))->toHaveKey('@context');
    }
})->with('pages');

it('exposes the FAQ as structured data on the home page', function () {
    $this->get('/')->assertSee('"@type":"FAQPage"', false);
});

it('shows the opening status according to Paris time', function (string $time, string $expected) {
    $this->travelTo(\Illuminate\Support\Carbon::parse($time, 'Europe/Paris'));
    $this->get('/')->assertSee($expected);
})->with([
    'weekday afternoon' => ['2026-11-25 15:00', "Ouvert maintenant, jusqu'à 20 h"],
    'sunday morning' => ['2026-11-29 10:00', "Ouvert maintenant, jusqu'à 18 h"],
    'weekday night' => ['2026-11-25 23:30', 'Disponible pour les urgences'],
]);
