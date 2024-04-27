<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        body {
            padding-top: 80px; /* Offset for fixed navbar */
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->

  <x-admin-nav-component :headText=$users />


    <div class="container" style="padding-top: 80px;">
        <div class="row">

           <h1>Welcome {{ $users }}</h1>

           <p>
            In this vast and fathomless theatre of the world, wherein each man plays his part but once, the absurdity of our mortal condition doth make itself most acutely known. How queer it seemeth, that we, the offspring of dust and dream, should spend our fleeting days as if they were stones in a brook, endless and resilient to the weathering of time. The capricious whims of Fortune do toss us about like ships adrift at sea, under skies whence no star giveth light. We plot and we plan; we toil and we strive, yet the fruits of our labors oft turn to ashes in our mouths as the jests of Fate play upon us.</p>
            <p>How hollow rings the laughter in the great hall of life, where shadows play more real than the substance they mimic! We are but actors upon this stage, strutting and fretting our hour upon the scene, full of sound and fury, signifying nothing. Each man's life is a tale told by an idiot, full of noise and emotional disturbance, devoid of meaning. And yet, amidst this cosmic farce, there lies a beauty most profound. For in the very embrace of life's absurdity, in the recognition that there is no script and the props are oft but illusions, there springs the purest freedom.</p>
            <p>What folly then, to seek permanence where none may be found, or to search for truths that twist like serpents when grasped! The wise man knows that he dances on the edge of a sword, and that each step, though perilous, is part of the dance. The absurd hero thus rejects despair, embracing instead the Sisyphean task of his existence, finding joy in the struggle itself, devoid of expectation. He laugheth in the face of the abyss, and taketh arms against a sea of troubles, by opposing, ends them—not in victory, but in the peace of exhaustion, the quietus of effort spent.</p>
            <p>Thus, in our quest to understand life's purpose, we find it hath none save that which we bestow upon it. As we weave our stories and sing our songs, let us embrace the lunacy of our plight with hearts unburdened by the yoke of cosmic necessity. For it is in the unscripted moments, the unplanned joys and sorrows, that we truly touch the essence of being. Let us then celebrate this grand farce! Lift your hearts and laugh beside me, for in laughter lies wisdom, in absurdity, truth.</p>
        </div>
    </div>


    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>
