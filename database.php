<?php 

    // richiamo le Classi di MODELS

    include __DIR__. '/Models/Products.php';
    include __DIR__. '/Models/InfoFood.php';
    include __DIR__. '/Models/InfoObject.php';
    include __DIR__. '/Models/InfoPlay.php';

    // FOOD

    $InfoFood_1 = new InfoFood('https://images.unsplash.com/photo-1647616350787-6428e907a7fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y3JvY2NhbnRpbmklMjBjYW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'Royal Canin Mini Adult', '43,99€', 'Cane', '545g', 'prosciutto, riso');
    $InfoFood_2 = new InfoFood('https://images.unsplash.com/photo-1647616350787-6428e907a7fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y3JvY2NhbnRpbmklMjBjYW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'Almo Nature Holistic Maintenance Mediuom Large Tonno e Riso', '44,99€', 'Cane', '600g', 'manzo, cereali');
    $InfoFood_3 = new InfoFood('https://images.unsplash.com/photo-1647616350787-6428e907a7fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y3JvY2NhbnRpbmklMjBjYW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'Almo Nature Cat Daily Lattina', '34,99€', 'Gatto', '400', 'tonno, pollo, prosciutto');
    $InfoFood_4 = new InfoFood('https://images.unsplash.com/photo-1647616350787-6428e907a7fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y3JvY2NhbnRpbmklMjBjYW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'Mangime Per Pesci Guppy in Fiocchi', '2,95€', 'Pesce', '30g', 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

    $InfoFoodArray = [$InfoFood_1, $InfoFood_2, $InfoFood_3, $InfoFood_4];

    // OBJECT

    $InfoObject_1 = new InfoObject('https://images.unsplash.com/photo-1647616350787-6428e907a7fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y3JvY2NhbnRpbmklMjBjYW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'Voliera Wilma in Legno', '184,99€', 'Uccello', 'Legno', 'M: L 83 x P 67 x H 153 cm');
    $InfoObject_2 = new InfoObject('https://images.unsplash.com/photo-1647616350787-6428e907a7fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y3JvY2NhbnRpbmklMjBjYW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'Cartucce Filtranti per Filtro EasyCrystal', '2,29€', 'Pesce', 'Materiale espanso', 'ND');

    $InfoObjectArray = [$InfoObject_1, $InfoObject_2];

    // PLAY

    $InfoPlay_1 = new InfoPlay('https://images.unsplash.com/photo-1647616350787-6428e907a7fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y3JvY2NhbnRpbmklMjBjYW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'Kong Classic', '13,49€', 'Cane', 'Galleggia e Rimbalza', '8,5 x 10cm');
    $InfoPlay_2 = new InfoPlay('https://images.unsplash.com/photo-1647616350787-6428e907a7fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y3JvY2NhbnRpbmklMjBjYW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'Topini di peluche Trixie', '4,99€', 'Gatto', 'Morbido con codina in corda', '8,5 x 10cm');

    $InfoPlayArray = [$InfoPlay_1, $InfoPlay_2];

?>