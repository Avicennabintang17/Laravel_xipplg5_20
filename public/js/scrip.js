function handleBooking(event) {
    event.preventDefault(); // cegah reload form

    const lapangan = document.querySelector("select").value;
    const waktu = document.querySelector("input[type='datetime-local']").value;
    const user = JSON.parse(localStorage.getItem("futsalkuy_user"));

    if (!lapangan || lapangan === "Pilih Lapangan" || !waktu) {
        alert("Silakan pilih lapangan dan waktu terlebih dahulu!");
        return;
    }

    let bookings = JSON.parse(localStorage.getItem("futsalkuy_bookings") || "[]");
    bookings.push({ lapangan, waktu });
    localStorage.setItem("futsalkuy_bookings", JSON.stringify(bookings));

    const nomorAdmin = "6285647746236";
    const pesan = `Halo Admin, saya ${user?.nama || "Pengguna"} ingin booking lapangan ${lapangan} pada ${waktu}`;
    const url = `https://wa.me/${nomorAdmin}?text=${encodeURIComponent(pesan)}`;

    window.open(url, "_blank");
}