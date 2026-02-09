const form   = document.getElementById('form');
const campos = document.querySelectorAll('.input');
const spans  = document.querySelectorAll('.span-required');
const checkbox = document.querySelector('input[name="remember"]');
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

/* ===== SUBMIT ===== */
form.addEventListener("submit", function (e) {

  let erro = false;

  nameValidate();
  emailValidate();
  mainPasswordValidate();
  checkPassword();

  if (!checkbox || !checkbox.checked) {
    erro = true;
    showToast("Marque a opção para continuar.");
  }

  campos.forEach((campo, i) => {
    if (campo.classList.contains("error")) {
      erro = true;
      campo.focus();
      return;
    }
  });

  if (erro) {
    e.preventDefault();
  }
});

/* ===== FEEDBACK ===== */
function setError(index, msg) {
  campos[index].classList.add("error");
  campos[index].classList.remove("success");
  spans[index].innerText = msg;
  spans[index].style.display = "block";
}

function setSuccess(index) {
  campos[index].classList.remove("error");
  campos[index].classList.add("success");
  spans[index].style.display = "none";
}

function clearState(index) {
  campos[index].classList.remove("error", "success");
  spans[index].style.display = "none";
}

/* ===== VALIDAÇÕES ===== */
function nameValidate() {
  if (campos[0].value.length === 0) {
    clearState(0);
  } else if (campos[0].value.length < 5) {
    setError(0, "Use pelo menos 5 caracteres.");
  } else {
    setSuccess(0);
  }
}

function emailValidate() {
  if (campos[1].value.length === 0) {
    clearState(1);
  } else if (!emailRegex.test(campos[1].value)) {
    setError(1, "Digite um email válido.");
  } else {
    setSuccess(1);
  }
}

function mainPasswordValidate() {
  if (campos[2].value.length === 0) {
    clearState(2);
  } else if (campos[2].value.length < 8) {
    setError(2, "A senha deve ter no mínimo 8 caracteres.");
  } else {
    setSuccess(2);
    checkPassword();
  }
}

function checkPassword() {
  if (campos[3].value.length === 0) {
    clearState(3);
  } else if (campos[2].value !== campos[3].value) {
    setError(3, "As senhas não coincidem.");
  } else {
    setSuccess(3);
  }
}

/* ===== TOAST (Facebook-like) ===== */
function showToast(msg) {
  const toast = document.createElement("div");
  toast.innerText = msg;

  toast.style.position = "fixed";
  toast.style.bottom = "20px";
  toast.style.left = "50%";
  toast.style.transform = "translateX(-50%)";
  toast.style.background = "#1c1e21";
  toast.style.color = "#fff";
  toast.style.padding = "12px 16px";
  toast.style.borderRadius = "6px";
  toast.style.fontSize = "14px";
  toast.style.zIndex = "999";

  document.body.appendChild(toast);

  setTimeout(() => toast.remove(), 3000);
}
