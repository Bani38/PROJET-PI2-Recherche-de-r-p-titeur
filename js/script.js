// script.js

// Fonction pour rediriger vers une autre page
function redirectToPage(page) {
    window.location.href = page;
}

// Exemple d'utilisation : redirection après soumission de formulaire
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('repetiteurForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Empêcher la soumission par défaut
            // Ici, vous pouvez ajouter la logique AJAX si nécessaire

            // Redirection vers une autre page après soumission
            redirectToPage('submit_repetiteur.php'); // Ou une autre page si besoin
        });
    }
});
$(document).ready(function() {
    // AJAX pour afficher les détails du répétiteur
    $('.view-button').on('click', function(event) {
        event.preventDefault();
        const repetiteurId = $(this).data('id');

        $.ajax({
            url: 'voir.php',
            type: 'GET',
            data: { id: repetiteurId },
            success: function(data) {
                $('#modalContent').html(data);
                $('#modal').show();
            }
        });
    });

    // Fermer le modal
    $('#closeModal').on('click', function() {
        $('#modal').hide();
    });

    // Gestion du formulaire de recherche
    $('#rechercheForm').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: 'recherche.php',
            type: 'GET',
            data: $(this).serialize(),
            success: function(data) {
                $('#rechercheResults').html(data);
            }
        });
    });
});