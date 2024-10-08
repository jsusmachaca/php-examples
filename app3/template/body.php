<body>
    <main>
        <section>
            <div>
                <h1><?= $title ?></h1>
                <p><?= $overview ?></p>
                <p><strong>Premiere:</strong> <?= $messages; ?></p>
            </div>
                <img 
                src="<?= $poster_url; ?>" 
                alt="Poster from <?= $title; ?>" 
                width="300"
                style="border-radius: 10px;"
            />
            </div>
        </section>
    </main>
</body>
