document.addEventListener("DOMContentLoaded", function () {
    // Helper untuk membuat Gradient
    const createGradient = (ctx, colorStart, colorEnd) => {
        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, colorStart);
        gradient.addColorStop(1, colorEnd);
        return gradient;
    };

    // --- MODERN DONUT CHART ---
    const ctxDonut = document
        .getElementById("modernDonutChart")
        .getContext("2d");
    new Chart(ctxDonut, {
        type: "doughnut",
        data: {
            labels: ["Dewasa", "Anak", "Lansia"],
            datasets: [
                {
                    data: [45, 30, 25],
                    backgroundColor: ["#4361ee", "#2ec4b6", "#f1c40f"],
                    hoverOffset: 15,
                    borderWidth: 4,
                    borderColor: "#ffffff",
                    borderRadius: 10,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: "80%",
            plugins: {
                legend: { display: false },
            },
        },
    });

    // --- MODERN AREA CHART (Line Chart) ---
    const ctxArea = document.getElementById("modernAreaChart").getContext("2d");

    // Gradient untuk area bawah garis
    const fillGradient = createGradient(
        ctxArea,
        "rgba(67, 97, 238, 0.3)",
        "rgba(67, 97, 238, 0)",
    );

    new Chart(ctxArea, {
        type: "line",
        data: {
            labels: ["Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
            datasets: [
                {
                    label: "Umat Baru",
                    data: [40, 65, 52, 88, 75, 105],
                    fill: true,
                    backgroundColor: fillGradient,
                    borderColor: "#4361ee",
                    borderWidth: 3,
                    pointBackgroundColor: "#fff",
                    pointBorderColor: "#4361ee",
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    tension: 0.4, // Membuat garis melengkung halus
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: "#1e293b",
                    padding: 12,
                    titleFont: { size: 14 },
                    callbacks: {
                        label: (context) => ` +${context.raw} Umat`,
                    },
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { color: "#f1f5f9", drawBorder: false },
                    ticks: { color: "#94a3b8", font: { size: 11 } },
                },
                x: {
                    grid: { display: false },
                    ticks: { color: "#94a3b8", font: { size: 11 } },
                },
            },
        },
    });
});
document.addEventListener("DOMContentLoaded", function () {
    // Toggle Sidebar Mobile
    const sidebar = document.getElementById("mainSidebar");
    const toggleBtn = document.getElementById("sidebarToggle");
    toggleBtn.addEventListener("click", () => {
        sidebar.classList.toggle("show");
    });

    // Chart 1: Monthly Growth (Line Chart)
    const ctxGrowth = document
        .getElementById("monthlyGrowthChart")
        .getContext("2d");
    new Chart(ctxGrowth, {
        type: "line",
        data: {
            labels: ["Jul", "Agu", "Sep", "Okt", "Nov", "Des", "Jan", "Feb"],
            datasets: [
                {
                    label: "Jemaat Baru",
                    data: [45, 60, 55, 80, 70, 110, 95, 124],
                    borderColor: "#4361ee",
                    borderWidth: 3,
                    tension: 0.4,
                    fill: true,
                    backgroundColor: "rgba(67, 97, 238, 0.05)",
                    pointRadius: 4,
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 2,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: {
                    grid: { color: "#f1f5f9", drawBorder: false },
                    ticks: { color: "#94a3b8" },
                },
                x: { grid: { display: false }, ticks: { color: "#94a3b8" } },
            },
        },
    });

    // Chart 2: Gender (Doughnut Chart)
    const ctxGender = document
        .getElementById("genderPieChart")
        .getContext("2d");
    new Chart(ctxGender, {
        type: "doughnut",
        data: {
            labels: ["Laki-laki", "Perempuan"],
            datasets: [
                {
                    data: [54, 46],
                    backgroundColor: ["#4361ee", "#f72585"],
                    borderWidth: 5,
                    borderColor: "#fff",
                    borderRadius: 5,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: "80%",
            plugins: { legend: { display: false } },
        },
    });
});
