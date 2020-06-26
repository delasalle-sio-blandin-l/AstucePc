
// View Password pour la modification du mot de passe
document.getElementById( 'monBouton' ).addEventListener( "click", function() {
	
    attribut = document.getElementById( 'newMDP' ).getAttribute( 'type');
    if(attribut == 'password'){
        document.getElementById( 'newMDP' ).setAttribute( 'type', 'text');
    } else {
        document.getElementById( 'newMDP' ).setAttribute( 'type', 'password');
    }
    
});

// View Password pour la connexion a l'espace admin
document.getElementById( 'monBouton' ).addEventListener( "click", function() {
	
    attribut = document.getElementById( 'mdp' ).getAttribute( 'type');
    if(attribut == 'password'){
        document.getElementById( 'mdp' ).setAttribute( 'type', 'text');
    } else {
        document.getElementById( 'mdp' ).setAttribute( 'type', 'password');
    }
    
});