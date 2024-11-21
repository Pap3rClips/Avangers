

// Gestion du formulaire de contact
function handleSubmit(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    
    // Simulation d'envoi (à remplacer par un vrai backend)
    alert(`Message envoyé !\n\nDe: ${name}\nEmail: ${email}\nMessage: ${message}`);
    event.target.reset();
}

