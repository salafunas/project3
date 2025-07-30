/**
 * LOGIN.JS
 * Kumpulan animasi dan interaksi untuk halaman auth
 */

document.addEventListener('DOMContentLoaded', function() {
    // ============== TOGGLE PASSWORD VISIBILITY ==============
    function setupPasswordToggle() {
        const toggleButtons = document.querySelectorAll('.toggle-password');
        
        toggleButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const icon = this.querySelector('i');
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.replace('fa-eye', 'fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.replace('fa-eye-slash', 'fa-eye');
                }
            });
        });
    }

    // ============== FLOATING LABEL EFFECT ==============
    function setupFloatingLabels() {
        const floatInputs = document.querySelectorAll('.floating-label input');
        
        floatInputs.forEach(input => {
            // Trigger focus/blur events
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) this.parentElement.classList.remove('focused');
            });
            
            // Initialize if already has value
            if (input.value) input.parentElement.classList.add('focused');
        });
    }

    // ============== 3D TILT EFFECT ON HOVER ==============
    function setupTiltEffect() {
        const tiltElements = document.querySelectorAll('[data-tilt]');
        
        tiltElements.forEach(el => {
            el.addEventListener('mouseenter', function() {
                this.style.transform = 'rotateY(10deg) scale(1.05)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            el.addEventListener('mouseleave', function() {
                this.style.transform = 'rotateY(0) scale(1)';
            });
        });
    }

    // ============== RIPPLE BUTTON EFFECT ==============
    function setupRippleButtons() {
        const buttons = document.querySelectorAll('.btn-ripple');
        
        buttons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                // Create ripple element
                const ripple = document.createElement('span');
                ripple.className = 'ripple-effect';
                
                // Position ripple
                const rect = this.getBoundingClientRect();
                ripple.style.left = `${e.clientX - rect.left}px`;
                ripple.style.top = `${e.clientY - rect.top}px`;
                
                // Add ripple to button
                this.appendChild(ripple);
                
                // Remove after animation
                setTimeout(() => ripple.remove(), 1000);
            });
        });
    }

    // ============== FORM SUBMISSION LOADING ==============
    function setupFormLoading() {
        const forms = document.querySelectorAll('.auth-form');
        
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('[type="submit"]');
                if (submitBtn) {
                    submitBtn.classList.add('loading');
                    submitBtn.disabled = true;
                    
                    // Simulate loading (remove in production)
                    setTimeout(() => {
                        submitBtn.classList.remove('loading');
                        submitBtn.disabled = false;
                    }, 2000);
                }
            });
        });
    }

    // ============== PARALLAX BACKGROUND EFFECT ==============
    function setupParallaxBackground() {
        const authContainer = document.querySelector('.auth-container');
        if (!authContainer) return;
        
        authContainer.addEventListener('mousemove', function(e) {
            const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
            const yAxis = (window.innerHeight / 2 - e.pageY) / 25;
            this.style.transform = `translate3d(0, 0, 0) rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
        });
        
        authContainer.addEventListener('mouseleave', function() {
            this.style.transform = 'translate3d(0, 0, 0) rotateY(0) rotateX(0)';
        });
    }

    // ============== INITIALIZE ALL EFFECTS ==============
    setupPasswordToggle();
    setupFloatingLabels();
    setupTiltEffect();
    setupRippleButtons();
    setupFormLoading();
    setupParallaxBackground();

    // ============== ADDITIONAL ANIMATIONS ==============
    // Animate form elements sequentially
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.animationDelay = `${index * 0.1}s`;
    });
});