const themeToggle = document.getElementById('theme-toggle');
const themeIcon = document.getElementById('theme-icon');
const rootEl = document.documentElement;

const savedTheme = localStorage.getItem('degefe-portfolio-theme') || 'dark';
rootEl.setAttribute('data-theme', savedTheme);
setThemeIcon(savedTheme);

themeToggle.addEventListener('click', () => {
    const nextTheme = rootEl.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
    rootEl.setAttribute('data-theme', nextTheme);
    localStorage.setItem('degefe-portfolio-theme', nextTheme);
    setThemeIcon(nextTheme);
});

function setThemeIcon(theme) {
    if (theme === 'dark') {
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
    } else {
        themeIcon.classList.remove('fa-sun');
        themeIcon.classList.add('fa-moon');
    }
}

const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const navLinks = document.getElementById('navLinks');

mobileMenuBtn.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => navLinks.classList.remove('active'));
});

const contactForm = document.getElementById('contactForm');
const formStatus = document.getElementById('formStatus');

contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const sender = document.getElementById('name').value.trim();
    formStatus.textContent = `Thanks, ${sender}! Your message has been noted.`;
    contactForm.reset();
    setTimeout(() => {
        formStatus.textContent = '';
    }, 5000);
});