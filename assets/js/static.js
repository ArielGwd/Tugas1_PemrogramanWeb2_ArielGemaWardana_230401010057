document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("addBookForm");
  const btn = document.getElementById("submitBtn");
  const spinner = document.getElementById("spinner");
  const btnText = document.getElementById("btnText");

  form.addEventListener("submit", (event) => {
    event.preventDefault();
    btn.disabled = true;
    spinner.classList.remove("hidden");
    btnText.textContent = "Loading...";
    btnText.classList.add("text-gray-500");

    setTimeout(() => {
      form.submit();
      btn.disabled = false;
      spinner.classList.add("hidden");
      btnText.textContent = "Submit";
      btnText.classList.remove("text-gray-500");
    }, 2000);
  });

  // create querySelectorAll
  const forms = document.querySelectorAll(".bookForm");
  const btns = document.querySelectorAll(".submitBtn");
  const spinners = document.querySelectorAll(".spinnerForm");
  const btnTexts = document.querySelectorAll(".submitText");

  forms.forEach((form, index) => {
    form.addEventListener("submit", (event) => {
      event.preventDefault();
      btns[index].disabled = true;
      spinners[index].classList.remove("hidden");
      btnTexts[index].textContent = "Loading...";
      btnTexts[index].classList.add("text-gray-500");

      setTimeout(() => {
        form.submit();
        btns[index].disabled = false;
        spinners[index].classList.add("hidden");
        btnTexts[index].textContent = "Submit";
        btnTexts[index].classList.remove("text-gray-500");
      }, 2000);
    });
  });
});
