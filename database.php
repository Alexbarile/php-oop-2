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



?>