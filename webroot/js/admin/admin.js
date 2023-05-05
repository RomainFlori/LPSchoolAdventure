//Hide / show password
function hidepasseword(idPassword, idBtnEyeChange) {
    var x = document.getElementById(idPassword);
    if (x.type === "password") {
        document.getElementById(idBtnEyeChange).classList.remove('fa-eye');
        document.getElementById(idBtnEyeChange).classList.add('fa-eye-slash');
      x.type = "text";
    } else {
        document.getElementById(idBtnEyeChange).classList.remove('fa-eye-slash');
        document.getElementById(idBtnEyeChange).classList.add('fa-eye');
      x.type = "password";
    }
  }


$(document).ready(function() {
  $('#datatable').DataTable({
    language: {
            lengthMenu: 'Nombre _MENU_ par pages',
            zeroRecords: 'Aucun résultat trouvé',
            info: 'Affichage page _PAGE_ sur _PAGES_',
            infoEmpty: 'Aucune donnée disponible',
            infoFiltered: '(filtered from _MAX_ total records)',
            "search":         "Rechercher:",
            "zeroRecords":    "Aucun résultat trouvé",
            "paginate": {
                "first":      "Premier",
                "last":       "Dernier",
                "next":       "Suivant",
                "previous":   "Précédant"
            },
        },
  });
});