const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('passwordInput');
    
    togglePassword.addEventListener('click', function () {
        // Vérifier si le type du champ est "password" ou "text"
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Changer l'icône de l'œil (optionnel)
        togglePassword.textContent = type === 'password' ? '👁️' : '🙈'; // 👁️ pour masquer, 🙈 pour afficher
    });
});
