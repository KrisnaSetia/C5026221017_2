(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        var nameField = form.querySelector('input[name="name"]');
        if (nameField) {
          if (!isValidName(nameField.value)) {
            event.preventDefault();
            event.stopPropagation();
            nameField.classList.remove('is-valid');
            nameField.classList.add('is-invalid');
          } else {
            nameField.classList.remove('is-invalid');
            nameField.classList.add('is-valid');
          }
        }
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);

  // Fungsi untuk memeriksa apakah nama hanya mengandung huruf
  function isValidName(name) {
    if (!name) {
      return false; // Nama tidak boleh kosong
    }
    var regex = /^[A-Za-z]+$/;
    return regex.test(name);
  }
})();
