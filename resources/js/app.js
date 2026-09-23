import '../css/app.css';



import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const savedTheme = localStorage.getItem('sl-theme');
if (savedTheme === 'dark') document.documentElement.dataset.theme = 'dark';

document.querySelectorAll('[data-theme-toggle]').forEach((toggle) => {
	toggle.addEventListener('click', () => {
		const isDark = document.documentElement.dataset.theme === 'dark';
		document.documentElement.dataset.theme = isDark ? 'light' : 'dark';
		localStorage.setItem('sl-theme', isDark ? 'light' : 'dark');
		toggle.setAttribute('aria-label', isDark ? 'Switch to dark mode' : 'Switch to light mode');
	});
});

document.querySelectorAll('[data-grade-filter]').forEach((filter) => {
	filter.addEventListener('click', () => {
		const selectedLevel = filter.dataset.gradeFilter;
		document.querySelectorAll('[data-grade-filter]').forEach((button) => button.classList.toggle('is-active', button === filter));
		document.querySelectorAll('[data-grade-level]').forEach((card) => {
			card.hidden = selectedLevel !== 'all' && card.dataset.gradeLevel !== selectedLevel;
		});
	});
});
