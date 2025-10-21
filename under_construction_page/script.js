// Advanced Canvas Background Animation
const canvas = document.getElementById("bgCanvas");
const ctx = canvas.getContext("2d");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Window resize handler
window.addEventListener("resize", () => {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
});

// Email notification handler with improved validation
document.getElementById("notifyBtn").addEventListener("click", () => {
  const emailInput = document.getElementById("emailInput");
  const email = emailInput.value.trim();
  const responseEl = document.getElementById("notificationResponse");

  if (!email) {
    responseEl.textContent = "Please enter an email address";
    responseEl.style.color = "#ff6b6b";
    emailInput.classList.add("error");
    return;
  }

  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    responseEl.textContent = "Please enter a valid email";
    responseEl.style.color = "#ff6b6b";
    emailInput.classList.add("error");
    return;
  }

  emailInput.classList.remove("error");
  responseEl.textContent = "✅ Thank you! We'll notify you when Intelica Soft launches 🚀";
  responseEl.style.color = "#00ff88";
  emailInput.value = "";

  setTimeout(() => {
    responseEl.textContent = "";
  }, 3000);
});

// Add enter key support
document.getElementById("emailInput").addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    document.getElementById("notifyBtn").click();
  }
});
