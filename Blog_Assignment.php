<?php
$title = "The Office — A Short Review";
$author = "Ross Gundran";

$beginningText = "The Office is a comedy TV series set in the everyday environment of a paper company office.";

$middleText = "It follows the daily lives of employees working at Dunder Mifflin, featuring memorable characters such as Michael Scott, Jim Halpert, and Pam Beesly.";

$humorText = "One of the show's greatest strengths is its unique style of humor. The mockumentary format, awkward silences, and character interviews create moments that feel both uncomfortable and hilarious.";

$characterText = "Each character brings something special to the show. Michael Scott’s misguided leadership, Jim’s pranks, Pam’s quiet growth, and Dwight’s intensity all combine to create a dynamic and unforgettable cast.";

$impactText = "Beyond comedy, The Office highlights real workplace relationships, personal growth, and the importance of human connection in everyday life.";

$endText = "With its dry humor, relatable moments, and lovable characters, The Office remains an enjoyable and timeless show.";

var_dump($title);
var_dump($author);
var_dump($beginningText);
var_dump($middleText);
var_dump($humorText);
var_dump($characterText);
var_dump($impactText);
var_dump($endText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $title; ?></title>
</head>

<body class="bg-gradient-to-br from-slate-900 to-gray-900 min-h-screen text-slate-200">

    <header class="bg-slate-950 border-b border-slate-800 py-6">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold tracking-wide text-slate-100">
                <?php echo $title; ?>
            </h1>
            <p class="mt-2 text-sm text-slate-400">
                Written by <?php echo $author; ?>
            </p>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-6 mt-12">
        <article class="bg-slate-800 rounded-2xl shadow-2xl p-8 border border-slate-700 space-y-6">

            <section>
                <h2 class="text-2xl font-semibold text-slate-100 mb-2">Introduction</h2>
                <p class="text-lg text-slate-300">
                    <?php echo $beginningText; ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-slate-100 mb-2">Story & Setting</h2>
                <p class="text-lg text-slate-300">
                    <?php echo $middleText; ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-slate-100 mb-2">Comedy Style</h2>
                <p class="text-lg text-slate-300">
                    <?php echo $humorText; ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-slate-100 mb-2">Characters</h2>
                <p class="text-lg text-slate-300">
                    <?php echo $characterText; ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-slate-100 mb-2">Overall Impact</h2>
                <p class="text-lg text-slate-300">
                    <?php echo $impactText; ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-slate-100 mb-2">Conclusion</h2>
                <p class="text-lg text-slate-300">
                    <?php echo $endText; ?>
                </p>
            </section>

        </article>
    </main>

    <footer class="text-center text-slate-500 text-sm mt-12 pb-6">
        © <?php echo date("Y"); ?> · My Epic Review · All rights reserved
    </footer>

</body>
</html>