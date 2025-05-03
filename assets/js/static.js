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
    }, 1500);

    console.log(btn, spinner, btnText);
  });
});
