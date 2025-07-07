<?php
/** @var yii\web\View $this */
$this->title = 'Strona główna';
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Playfair+Display:wght@500&display=swap');

body {
    font-family: 'Open Sans', sans-serif;
    background-color: #fdfaf5;
    color: #2e2e2e;
    line-height: 1.7;
}

h1, h2 {
    font-family: 'Playfair Display', serif;
    color: #2f3e2e;
}

section {
    padding: 40px 20px;
    max-width: 1000px;
    margin: 0 auto;
}

.hero {
    text-align: center;
    background-color: #eef0e6;
    border-radius: 16px;
    padding: 50px 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 18px;
    max-width: 700px;
    margin: 0 auto;
}

.features {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    margin-top: 40px;
}

.feature-box {
    background-color: #f4f6ed;
    border: 1px solid #d8e0ce;
    border-radius: 12px;
    padding: 20px;
    width: 280px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.feature-box h2 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #3c5132;
}

.feature-box p {
    font-size: 14px;
}

.image-row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    margin-top: 30px;
}
.image-row img {
    border-radius: 10px;
    width: 300px;
    height: auto;
}
</style>

<section class="hero">
    <h1>Hotel Royal Elegance</h1>
    <p>Twój luksusowy azyl pośród lasów – odpocznij, zregeneruj siły i poczuj elegancję natury.</p>
</section>

<section>
    <h2>Nasza filozofia</h2>
    <p>
        Hotel Royal Elegance powstał z myślą o tych, którzy pragną ciszy, komfortu i elegancji.
        Otoczony lasem sosnowym, z dala od zgiełku miasta, oferuje atmosferę spokoju, przy jednoczesnym dostępie do najwyższych standardów hotelowych.
    </p>
</section>

<section class="features">
    <div class="feature-box">
        <h2>Stylowe pokoje</h2>
        <p>Nasze pokoje łączą nowoczesność z ciepłem naturalnych materiałów. Każdy z nich ma widok na las lub ogród.</p>
    </div>
    <div class="feature-box">
        <h2>SPA & Wellness</h2>
        <p>Zapraszamy do naszej strefy relaksu – masaże, sauna fińska i kąpiele aromaterapeutyczne w naturalnym otoczeniu.</p>
    </div>
    <div class="feature-box">
        <h2>Restauracja</h2>
        <p>Autorskie menu oparte na sezonowych, lokalnych składnikach. Zjedz śniadanie na tarasie z widokiem na drzewa.</p>
    </div>
</section>

