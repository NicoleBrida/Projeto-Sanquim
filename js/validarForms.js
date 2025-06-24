
function validarFormulario() {
  const form = document.getElementById('formMatricula');
  const camposObrigatorios = form.querySelectorAll('[required]');
  let valido = true;

  camposObrigatorios.forEach(campo => {
    if (!campo.value.trim()) {
      alert(`Por favor, preencha o campo: ${campo.previousElementSibling.textContent}`);
      campo.focus();
      valido = false;
      return false; // Interrompe a validação
    }
  });

  return valido; // Se false, bloqueia o envio
}
