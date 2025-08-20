document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#formulaire');
    const submitButton = document.querySelector('.btn-primary');
    const whatsappButton = document.querySelector('.btn-whatsapp');
    const inputs = form.querySelectorAll('.form-control');

    // Validation en temps réel
    inputs.forEach(input => {
        input.addEventListener('input', function () {
            if (this.validity.valid) {
                this.classList.remove('is-invalid');
                this.nextElementSibling?.classList.add('d-none');
            } else {
                this.classList.add('is-invalid');
                const errorMessage = this.nextElementSibling;
                if (errorMessage) {
                    errorMessage.classList.remove('d-none');
                    errorMessage.textContent = getErrorMessage(this);
                }
            }
        });
    });

    // Soumission du formulaire
    form.addEventListener('submit', function (e) {
        let isValid = true;
        inputs.forEach(input => {
            if (!input.validity.valid) {
                isValid = false;
                input.classList.add('is-invalid');
                const errorMessage = input.nextElementSibling;
                if (errorMessage) {
                    errorMessage.classList.remove('d-none');
                    errorMessage.textContent = getErrorMessage(input);
                }
            }
        });

        if (!isValid) {
            e.preventDefault();
            showAlert('danger', 'Veuillez remplir tous les champs correctement.');
        }
    });

    // Bouton WhatsApp
    if (whatsappButton) {
        whatsappButton.addEventListener('click', function (e) {
            e.preventDefault();
            const name = form.querySelector('#name').value;
            const description = form.querySelector('#description').value;
            const startDate = form.querySelector('#start_date').value;
            const endDate = form.querySelector('#end_date').value;
            const location = form.querySelector('#location').value;
            const participantsCount = form.querySelector('#participants_count').value;
            const status = form.querySelector('#status').value;
            const comite = form.querySelector('#comite').value;

            if (name && description && startDate && endDate && location && participantsCount && status && comite) {
                const whatsappNumber = '+2290168272463';
                const text = `Nouveau formulaire d'événement:\nNom: ${name}\nDescription: ${description}\nDébut: ${startDate}\nFin: ${endDate}\nLieu: ${location}\nParticipants: ${participantsCount}\nStatut: ${status}\nComité: ${comite}`;
                const encodedText = encodeURIComponent(text);
                const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedText}`;
                window.open(whatsappUrl, '_blank');
            } else {
                showAlert('danger', 'Veuillez remplir tous les champs avant d\'envoyer via WhatsApp.');
            }
        });
    }

    // Fonction pour afficher les alertes
    function showAlert(type, message) {
        const alertContainer = document.createElement('div');
        alertContainer.className = `alert alert-${type}`;
        alertContainer.textContent = message;
        form.prepend(alertContainer);
        setTimeout(() => alertContainer.remove(), 5000);
    }

    // Fonction pour les messages d'erreur
    function getErrorMessage(input) {
        if (input.validity.valueMissing) {
            return 'Ce champ est requis.';
        }
        if (input.type === 'email' && input.validity.typeMismatch) {
            return 'Veuillez entrer une adresse e-mail valide.';
        }
        if (input.type === 'number' && input.validity.rangeUnderflow) {
            return 'Le nombre doit être supérieur ou égal à 0.';
        }
        return 'Veuillez vérifier ce champ.';
    }
});