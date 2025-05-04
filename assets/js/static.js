document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("addBookForm");
  const btn = document.getElementById("submitBtn");
  const spinner = document.getElementById("spinner");
  const btnText = document.getElementById("btnText");

  form.addEventListener("submit", (event) => {
    event.preventDefault();
    document.body.classList.add("cursor-not-allowed");
    btn.classList.add("cursor-not-allowed");
    spinner.classList.remove("hidden");
    btnText.textContent = "Loading...";
    btnText.classList.add("text-gray-500");

    setTimeout(() => {
      document.body.classList.remove("cursor-not-allowed");
      btn.classList.remove("cursor-not-allowed");
      spinner.classList.add("hidden");
      btnText.textContent = "Submit";
      btnText.classList.remove("text-gray-500");
      form.submit();
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
      document.body.classList.add("cursor-not-allowed");
      btns[index].classList.add("cursor-not-allowed");
      spinners[index].classList.remove("hidden");
      btnTexts[index].textContent = "Loading...";
      btnTexts[index].classList.add("text-gray-500");

      setTimeout(() => {
        document.body.classList.remove("cursor-not-allowed");
        btns[index].classList.remove("cursor-not-allowed");
        spinners[index].classList.add("hidden");
        btnTexts[index].textContent = "Submit";
        btnTexts[index].classList.remove("text-gray-500");
        form.submit();
      }, 2000);
    });
  });
});
