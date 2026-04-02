// Sidebar Minimize/Expand Functionality
const sidebar = document.getElementById("mainSidebar");
const mainWrapper = document.querySelector(".main-wrapper");
const minimizeBtn = document.getElementById("sidebarMinimizeBtn");
const toggleBtn = document.getElementById("sidebarToggle");

// Load sidebar state from localStorage
const sidebarMinimized = localStorage.getItem("sidebarMinimized") === "true";
if (sidebarMinimized) {
    sidebar.classList.add("minimized");
    mainWrapper.classList.add("sidebar-minimized");
    minimizeBtn.innerHTML = '<i class="bi bi-chevron-right"></i>';
}

// Minimize button toggle
minimizeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("minimized");
    mainWrapper.classList.toggle("sidebar-minimized");

    const isMinimized = sidebar.classList.contains("minimized");
    minimizeBtn.innerHTML = isMinimized
        ? '<i class="bi bi-chevron-right"></i>'
        : '<i class="bi bi-chevron-left"></i>';

    // Save state to localStorage
    localStorage.setItem("sidebarMinimized", isMinimized);
});

// Mobile sidebar toggle
if (toggleBtn) {
    toggleBtn.addEventListener("click", () => {
        sidebar.classList.toggle("show");
    });
}

// Close sidebar on window resize if needed
window.addEventListener("resize", () => {
    if (window.innerWidth >= 992) {
        sidebar.classList.remove("show");
    }
});

// Add tooltip titles for minimized sidebar icons
document.querySelectorAll(".nav-link").forEach((link) => {
    const span = link.querySelector("span:last-child");
    if (span) {
        link.title = span.textContent.trim();
    }
});
