// Mobile Menu Toggle
document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
    // This would toggle a mobile menu - implementation depends on your full site structure
    console.log('Mobile menu clicked');
});

// Pricing Tabs
const tabButtons = document.querySelectorAll('.tab-btn');
const monthlyPrices = document.querySelectorAll('.price.monthly');
const yearlyPrices = document.querySelectorAll('.price.yearly');

tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons
        tabButtons.forEach(btn => btn.classList.remove('active'));
        
        // Add active class to clicked button
        button.classList.add('active'));
        
        // Show/hide prices based on selected tab
        if (button.dataset.tab === 'monthly') {
            monthlyPrices.forEach(price => price.classList.remove('hidden'));
            yearlyPrices.forEach(price => price.classList.add('hidden'));
        } else {
            monthlyPrices.forEach(price => price.classList.add('hidden'));
            yearlyPrices.forEach(price => price.classList.remove('hidden'));
        }
    });
});

// Modal Handling
const demoButtons = document.querySelectorAll('.demo-btn, .secondary-cta');
const modalOverlay = document.querySelector('.modal-overlay');
const closeModal = document.querySelector('.close-modal');

demoButtons.forEach(button => {
    button.addEventListener('click', () => {
        modalOverlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    });
});

closeModal.addEventListener('click', () => {
    modalOverlay.classList.add('hidden');
    document.body.style.overflow = 'auto';
});

modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
        modalOverlay.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
});

// Form Submission
const demoForm = document.getElementById('demo-form');

demoForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    // Get form values
    const formData = {
        company: document.getElementById('company').value,
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        needs: document.getElementById('needs').value
    };
    
    // Here you would typically send the data to your server
    console.log('Form submitted:', formData);
    
    // Show success message (in a real app, you'd want to handle errors too)
    alert('Merci pour votre demande ! Nous vous contacterons rapidement.');
    
    // Reset form and close modal
    demoForm.reset();
    modalOverlay.classList.add('hidden');
    document.body.style.overflow = 'auto';
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// Animation on scroll
function animateOnScroll() {
    const elements = document.querySelectorAll('.feature-card, .pricing-card');
    
    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2;
        
        if (elementPosition < screenPosition) {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }
    });
}

// Set initial state for animation
document.querySelectorAll('.feature-card, .pricing-card').forEach(element => {
    element.style.opacity = '0';
    element.style.transform = 'translateY(20px)';
    element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
});

window.addEventListener('scroll', animateOnScroll);
// Trigger once on load
animateOnScroll();