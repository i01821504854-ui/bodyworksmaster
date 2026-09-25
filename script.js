const menuButton = document.querySelector(".menu-toggle");
const nav = document.querySelector(".site-nav");

menuButton?.addEventListener("click", () => {
  const open = nav.classList.toggle("open");
  menuButton.setAttribute("aria-expanded", String(open));
});

document.querySelectorAll(".site-nav a").forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("open");
    menuButton?.setAttribute("aria-expanded", "false");
  });
});

document.querySelectorAll("[data-service]").forEach((card) => {
  card.addEventListener("click", () => {
    const select = document.querySelector("#service-select");
    if (select) select.value = card.dataset.service;
  });
});

const form = document.querySelector("#estimate-form");
const status = document.querySelector(".form-status");
form?.addEventListener("submit", (event) => {
  event.preventDefault();
  const data = new FormData(form);
  const name = String(data.get("name") || "").trim();
  const service = String(data.get("service") || "vehicle repair");
  status.textContent = `Thanks${name ? `, ${name}` : ""}. Your estimate request is ready — we’ll be in touch shortly.`;
  form.reset();
  const message = `Hello BODYWORKS Master Ltd, I'd like a free estimate for ${service}.${name ? ` My name is ${name}.` : ""}`;
  window.open(`https://wa.me/447438879345?text=${encodeURIComponent(message)}`, "_blank", "noopener,noreferrer");
});

document.querySelector("#year").textContent = new Date().getFullYear();

const observer = new IntersectionObserver(
  (entries) => entries.forEach((entry) => entry.isIntersecting && entry.target.classList.add("visible")),
  { threshold: 0.12 }
);
document.querySelectorAll(".reveal").forEach((element) => observer.observe(element));
