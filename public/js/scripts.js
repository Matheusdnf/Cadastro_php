function alert_menssage(mensagem) {
  document.getElementById("alert-message").textContent = mensagem;
  document.getElementById("modalAlert").style.display = "block";
}

document.querySelectorAll(".btn-edit").forEach((btn) => {
  btn.addEventListener("click", () => {
    document.getElementById("edit-id").value = btn.dataset.id;
    document.getElementById("edit-nome").value = btn.dataset.nome;
    document.getElementById("edit-email").value = btn.dataset.email;
    document.getElementById("edit-telefone").value = btn.dataset.telefone;
    document.getElementById("modalEdit").style.display = "block";
  });
});

document.querySelectorAll(".btn-delete").forEach((btn) => {
  btn.addEventListener("click", () => {
    document.getElementById("delete-id").value = btn.dataset.id;
    document.getElementById("delete-nome").textContent = btn.dataset.nome;
    document.getElementById("modalDelete").style.display = "block";
  });
});

function closeModal(id) {
  document.getElementById(id).style.display = "none";
}

window.onclick = function (event) {
  if (event.target.classList.contains("modal")) {
    event.target.style.display = "none";
  }
};

function validateModalForm() {
  const email = document.getElementById("edit-email").value;
  const cellphone = document.getElementById("edit-telefone").value;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const cellphone_number = cellphone.replace(/\D/g, "");

  if (!emailRegex.test(email)) {
    alert_menssage("O e-mail digitado é inválido.");
    return false;
  }
  if (cellphone_number.length < 8 || cellphone_number.length > 15) {
    alert_menssage("Telefone inválido (digite de 8 a 15 números).");
    return false;
  }
  return true;
}

const cadForm = document.querySelector(".form-container form");
if (cadForm) {
  cadForm.addEventListener("submit", function (e) {
    const cell_Input = this.querySelector('input[name="telefone"]');
    const emailInput = this.querySelector('input[name="email"]');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const cellphone = cell_Input.value.replace(/\D/g, "");

    if (!emailRegex.test(emailInput.value)) {
      // evitar recarregamento de página
      e.preventDefault();
      alert_menssage("E-mail de cadastro inválido!");
    } else if (cellphone.length < 8 || cellphone.length > 15) {
      e.preventDefault();
      alert_menssage("Telefone de cadastro inválido!");
    }
  });
}

const urlParams = new URLSearchParams(window.location.search);
if (urlParams.has("success")) {
  document.getElementById("modalSuccess").style.display = "block";
  window.history.replaceState({}, document.title, window.location.pathname);
}

function Validate_register() {
  const cell_Input = document.getElementById("telefone");
  const cell_Value = cell_Input.value;

  const cell_regex = /^\(\d{2}\)\s?\d{4,5}-\d{4}$/;

  if (!cell_regex.test(cell_Value)) {
    if (typeof alert_menssage === "function") {
      alert_menssage("Telefone inválido! Use o padrão (99) 99999-9999");
    } else {
      alert("Telefone inválido! Use o padrão (99) 99999-9999");
    }
    return false;
  }
  return true;
}
