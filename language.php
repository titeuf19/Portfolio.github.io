<?php
 session_start();
    $allowed_lang= array('en','fr');
    $_SESSION['language'] = 'en';
    if(isset($_GET['language']) && in_array($_GET['language'], $allowed_lang)){
        $_SESSION['language'] = $_GET['language'];
    }
  $lang = array(
    'fr' => array(
        'nav1' => 'Accueil',
        'nav2' => 'A propos',
        'nav3' => 'Expériences',
        'nav4' => 'Projets',
        'nav5' => 'Contact',
        'greeting' => 'Photographe et développeur',
        'service' => 'A propos de moi',
        'aboutme' => 'Je m\'appelle Ayoub, j\'ai 23 ans, je suis un jeune homme de youssoufia qui désire être un vrai développeur, j\'ai une grande passion pour créer de nouvelles choses dans le monde numérique, c\'est pourquoi j\'étudie à Youcode. Parfois, vous devez faire ce qu\'il faut pour atteindre vos rêves, et je cherche toujours ma propre voie, un rêve qui s\'est imprimé lorsque j\'ai vu beaucoup de films sur la programmation. J\'espère que je souhaite et maintenant je prie pour que je puisse réaliser mon rêve.J\'ai étudié l\'agriculture et j\'avais mon diplôme. J\'ai travaillé dans de nombreuses entreprises en tant que commercial, mais je sens toujours quelque chose de perdu. Après cela, j\'ai reconnu que même ce domaine avait besoin de technologie, c\'est pourquoi j\'ai amélioré mes connaissances en matière de programmes.En faite, je maîtrise html, css, python et javascript.J\'aime lire des livres en écoutant de la musique calme, j\'aime aussi voyager pour échanger des cultures et découvrir le monde.Je parle arabe, français et anglais.Et pour votre information, je suis une personne enthousiaste et sage, donc je suis résolu à atteindre mon rêve.Merci pour mes expériences de vie qui me rendent plus fort et qui m\'ont apporté: sens de l\'organisation, esprit d\'équipe et motivation.',
        'formt' => 'Formations',
        'date' => 'Octobre 2018 - Present',
        'formt1' => '1ére année en Developpement Web',
        'date2' => 'Septembre 2015 - Juin 2017',
        'formt2' => 'Technicien spécialisé',
        'date3' => '2014-2015',
        'formt3' => 'Baccalauréat Sciences Physique/Chimie',
        'projet' => 'Les Projets Réalisés',
        'nav6' => 'Tous',
        'nav7' => 'Projet CV',
        'nav8' => 'Projet SITE',
        'nav9' => 'Ateliers CSS',
        'nav10' => 'Ateliers JS',
        'nav11' => 'Projet CAPGEMINI',
        'contact' => 'Contactez-Moi',
        'phone' => 'Numéro de Téléphone',
        'media' => 'Réseaux Sociaux',
        'send' => 'Envoyer',
        
        




    ),
'en' => array(
        'nav1' => 'Home',
        'nav2' => 'About',
        'nav3' => 'Experiences',
        'nav4' => 'Projects',
        'nav5' => 'Contact',
        'greeting' => 'Photographer & Developer',
        'service' => 'Know about me',
        'aboutme' => 'My name is Ayoub, I am 23 years old, I am a young man from youssoufia who has a burning desire to be a real developer, I have a great passion to create new things in the digital world, thats why i study in Youcode. Sometimes you have to do what it takes to reach your dreams, and i am always looking for my own way, a dream that has printed itself when i saw a lot of movies about programming. I hope, I wish and now I pray that i can achieve my dream.
        I studied agriculture and I had my diploma. I have worked in many companies as a commercial, but I always feel something lost. After that, I recognized that even that field need technology, which is why I improved my program knowledge.
        In fact, I master html, css, python and JavaScript.
        I love reading books while listening to calm music, also i like traveling to exchange cultures and discover the world.
        I can speak Arabic, French and English.
        And for your information, I am an enthusiastic and wise person, so I am resolved to reach my dream.
        Thanks for my life experiences that makes me stronger and gave me : sense of organization, team spirit and motivation.',
        'formt' => 'My Formations',
        'date' => 'October 2018 - Now',
        'formt1' => '1st year in Web Development',
        'formt2' => 'Specialized Technician',
        'date2' => 'September 2015 - June 2017',
        'formt3' => 'Baccalaureate Physical Sciences',
        'projet' => 'My Projects',
        'nav6' => 'All',
        'nav7' => 'Project CV',
        'nav8' => 'Project SITE',
        'nav9' => 'Ateliers CSS',
        'nav10' => 'Ateliers JS',
        'nav11' => 'Project CAPGEMINI',
        'contact' => 'Contact Me',
        'phone' => 'Phone number',
        'media' => 'Social media',
        'send' => 'Send',


    ),
)

?>
