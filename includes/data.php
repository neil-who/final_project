<?php
// Shared helpers and sample data. Replace $pets with a database query when ready.
function e($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

$icons = [
    'paw'       => 'https://www.figma.com/api/mcp/asset/d6016fc2-6845-4b94-8c34-9255574b8a24.svg',
    'paw_light' => 'https://www.figma.com/api/mcp/asset/a3fa995c-2da9-4c44-a8c5-9abb51e11ee5.svg',
    'heart'     => 'https://www.figma.com/api/mcp/asset/1e2cf687-8292-40a4-9c56-7447e2a6a71d.svg',
];

$pets = [
    'maple'   => ['name' => 'Maple',   'species' => 'Dogs',          'facts' => 'Beagle mix · 3 years · Female',  'trait' => 'Gentle little shadow',      'img' => 'https://www.figma.com/api/mcp/asset/0eda7f52-78f4-4e61-92b5-6398d993ab22.png'],
    'milo'    => ['name' => 'Milo',    'species' => 'Cats',          'facts' => 'Tabby · 2 years · Male',         'trait' => 'Your new window companion', 'img' => 'https://www.figma.com/api/mcp/asset/071e0afe-f504-4d71-b62d-0df4ece095f5.png'],
    'olive'   => ['name' => 'Olive',   'species' => 'Dogs',          'facts' => 'Terrier mix · 5 years · Female', 'trait' => 'Small paws, big personality', 'img' => 'https://www.figma.com/api/mcp/asset/5309ee2f-dd78-44a6-9c0c-ec424c414af3.png'],
    'finn'    => ['name' => 'Finn',    'species' => 'Dogs',          'facts' => 'Retriever · 1 year · Male',      'trait' => 'Always up for an adventure', 'img' => 'https://www.figma.com/api/mcp/asset/19e46297-c97d-4840-8f1c-46dc9440c44d.png'],
    'juniper' => ['name' => 'Juniper', 'species' => 'Cats',          'facts' => 'Shorthair · 4 years · Female',   'trait' => 'A quiet kind of company',   'img' => 'https://www.figma.com/api/mcp/asset/7a5e7b5a-48c4-4e6a-abe7-d3aedf549707.png'],
    'archie'  => ['name' => 'Archie',  'species' => 'Dogs',          'facts' => 'Spaniel · 6 years · Male',       'trait' => 'A heart full of love',      'img' => 'https://www.figma.com/api/mcp/asset/35da72c1-d200-4091-82f9-ccd2157738c0.png'],
    'cleo'    => ['name' => 'Cleo',    'species' => 'Cats',          'facts' => 'Shorthair · 1 year · Female',    'trait' => 'Curious about everything',  'img' => 'https://www.figma.com/api/mcp/asset/c2105364-4744-4051-b2c0-e380f031e470.png'],
    'pepper'  => ['name' => 'Pepper',  'species' => 'Small animals', 'facts' => 'Rabbit · 2 years · Female',      'trait' => 'A soft spot in your day',   'img' => 'https://www.figma.com/api/mcp/asset/3674beb7-e5c5-48df-81d1-cb42ec1937ff.png'],
];

// Extra profile details (only Maple has them in the design).
$profiles = [
    'maple' => [
        'gallery'   => 'https://www.figma.com/api/mcp/asset/c1b82a6a-c960-4126-a715-5c05ba27847c.png',
        'caption'   => 'Maple, finding her sunny spot in the shelter garden.',
        'intro'     => 'A sunny patch on the floor, a slow sniff around the block, and someone to lean against. Maple is happiest when the simple things are shared.',
        'tags'      => ['Gentle', 'People-loving', 'Easygoing'],
        'about'     => 'Maple takes a moment to get to know new places, but once she’s settled, her affectionate side shines. She likes gentle walks, a predictable routine, and curling up nearby while you read or work. Offer her a little patience, and she’ll offer a lot of company.',
        'afternoon' => 'A gentle walk followed by a long, sunny nap.',
        'home'      => 'A calm home with time to settle in at my own pace.',
        'quote'     => 'Maple’s favorite place is right beside you. She has a lovely way of making an ordinary day feel a little softer.',
    ],
];
