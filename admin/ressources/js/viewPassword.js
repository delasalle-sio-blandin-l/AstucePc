document.getElementById( 'monBouton' ).addEventListener( "click", function() {
	
    attribut = document.getElementById( 'newMDP' ).getAttribute( 'type');
    if(attribut == 'password'){
        document.getElementById( 'newMDP' ).setAttribute( 'type', 'text');
    } else {
        document.getElementById( 'newMDP' ).setAttribute( 'type', 'password');
    }
    
});