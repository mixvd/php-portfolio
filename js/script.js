/**
 * Main JavaScript file for the portfolio website
 * Handles menu toggle, animations, and other interactive elements
 */

document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle) {
        menuToggle.addEventListener('click', function () {
            navLinks.classList.toggle('active');

            const spans = menuToggle.querySelectorAll('span');
            spans.forEach(span => span.classList.toggle('active'));

            if (navLinks.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
            } else {
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
        });
    }

    document.addEventListener('click', function (event) {
        if (navLinks && navLinks.classList.contains('active') &&
            !event.target.closest('.main-nav')) {
            navLinks.classList.remove('active');

            const spans = menuToggle.querySelectorAll('span');
            spans.forEach(span => span.classList.remove('active'));
            spans[0].style.transform = 'none';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'none';
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                if (navLinks && navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');

                    const spans = menuToggle.querySelectorAll('span');
                    spans.forEach(span => span.classList.remove('active'));
                    spans[0].style.transform = 'none';
                    spans[1].style.opacity = '1';
                    spans[2].style.transform = 'none';
                }
            }
        });
    });

    // Form submission handling (for contact form)
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Here we'll just show a success message when the form is submitted
            const formData = new FormData(contactForm);
            const formValues = {};

            for (let [key, value] of formData.entries()) {
                formValues[key] = value;
            }

            // Simple validation
            let isValid = true;
            for (let key in formValues) {
                if (!formValues[key]) {
                    isValid = false;
                    break;
                }
            }

            if (isValid) {
                const successMessage = document.createElement('div');
                successMessage.className = 'success-message';
                successMessage.innerHTML = '<i class="fas fa-check-circle"></i> Votre message a été envoyé avec succès!';

                contactForm.innerHTML = '';
                contactForm.appendChild(successMessage);

                successMessage.style.backgroundColor = 'rgba(40, 167, 69, 0.1)';
                successMessage.style.color = 'var(--success)';
                successMessage.style.padding = 'var(--spacing-md)';
                successMessage.style.borderRadius = 'var(--border-radius-md)';
                successMessage.style.textAlign = 'center';
                successMessage.style.fontSize = '1.1rem';
            }
        });
    }

    // Add animation to skill bars
    const skillBars = document.querySelectorAll('.skill-level');
    if (skillBars.length > 0) {
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        skillBars.forEach(bar => {
            const originalWidth = bar.style.width;
            bar.dataset.width = originalWidth;
            bar.style.width = '0';
            bar.style.transition = 'width 1s ease-in-out';
        });

        function animateSkillBars() {
            skillBars.forEach(bar => {
                if (isInViewport(bar) && bar.style.width === '0px') {
                    setTimeout(() => {
                        bar.style.width = bar.dataset.width;
                    }, 200);
                }
            });
        }

        window.addEventListener('scroll', animateSkillBars);
        window.addEventListener('load', animateSkillBars);
    }
}); 