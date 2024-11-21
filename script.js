// Animation smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

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

// Animation du header au scroll
let lastScroll = 0;
window.addEventListener('scroll', () => {
    const nav = document.querySelector('nav');
    const currentScroll = window.pageYOffset;
    
    if (currentScroll <= 0) {
        nav.style.boxShadow = '0 2px 4px rgba(0,0,0,0.1)';
    } else if (currentScroll > lastScroll) {
        nav.style.transform = 'translateY(-100%)';
    } else {
        nav.style.transform = 'translateY(0)';
        nav.style.boxShadow = '0 2px 4px rgba(0,0,0,0.1)';
    }
    lastScroll = currentScroll;
});